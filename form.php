<!DOCTYPE html>

<html lang="ru">

  <head>
    <meta charset="UTF-8">
    <title>Задание 4</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  <?php 
		if (!empty($messages)) {
			if(isset($messages['save'])) print('<div id="messages" class="ok">'); else print('<div id="messages">');
			foreach ($messages as $message) {
				print($message);
			}
		  print('</div>');
		}
	?>
   <div id="form">
    	<h1><b>Форма</b></h1>
	<form action="" method="POST">
	
      <label for="name"></label>
        <b>Введите имя:</b><br />
        <input type="text" name="name" <?php if (!empty($errors['name'])) {print 'class="error"';} ?> <?php if(empty($errors['name'])&&!empty($values['name'])) print 'class="ok"';?> value="<?php isset($_COOKIE['name_error'])? print trim($_COOKIE['name_error']) : print $values['name']; ?>">
      <br />
	  
      <label for="email"></label>
        <b>Введите свой email:</b><br />
        <input type="text" id="email" name="email" <?php if(!empty($errors['email']))  print 'class="error"';?> <?php if(empty($errors['email'])&&!empty($values['email'])) print 'class="ok"';?> value="<?php isset($_COOKIE['email_error'])? print trim($_COOKIE['email_error']) : print $values['email']; ?>">
      <br />
	  
      <label for="date"><b>Дата рождения:</b></label><br />
        <input type="date" id="date" name="date" <?php if(!empty($errors['date']))  print 'class="error"';?> <?php if(empty($errors['date'])&&!empty($values['date'])) print 'class="ok"';?> value="<?php isset($_COOKIE['date_error'])? print trim($_COOKIE['date_error']) : print $values['date']; ?>">
      <br />
	  
	  <label <?php if(!empty($errors['pol'])) print 'class="error_check"'?>>
      <b>Пол:</b></label><br />
      <input type="radio" checked="checked" id="male"name="pol" value="male" <?php if (isset($values['pol'])&&$values['pol'] == 'male') print("checked"); ?>>мужской
      <input type="radio" id="female" name="pol" value="female" <?php if (isset($values['pol'])&&$values['pol'] == 'female') print("checked"); ?>>женский<br />
	  
	  <label <?php if(isset($_COOKIE['konechn_error'])) print 'class="error_check"'?>><b>Количество конечностей:</b></label><br />
      <input type="radio" id="1" name="konechn" value="1" <?php if (isset($values['konechn'])&&$values['konechn'] == '1') print("checked"); ?>>1
	  <input type="radio" id="2" name="konechn" value="2" <?php if (isset($values['konechn'])&&$values['konechn'] == '2') print("checked"); ?>>2
	  <input type="radio" id="3" name="konechn" value="3" <?php if (isset($values['konechn'])&&$values['konechn'] == '3') print("checked"); ?>>3
      <input type="radio" id="4" checked="checked" name="konechn" value="4" <?php if (isset($values['konechn'])&&$values['konechn'] == '4') print("checked"); ?>>4<br />	
	  
	  <label <?php if(!empty($errors['super'])) print 'class="error_check"'?>><b>Сверхспособности:</b></label><br />
        <select multiple="multiple">
          <option id="bessmertie" name="super[] value="bessmertie" <?php if(isset($values['super']['bessmertie'])&&$values['super']['bessmertie']=='bessmertie')print("checked");?>>Бессмертие</option>
          <option id ="steny" name="super[] value="steny" selected="selected" <?php if(isset($values['super']['steny'])&&$values['super']['steny']=='steny')print("checked");?>>Прохождение скозь стены</option>
		  <option id ="levitation" name="super[] value="levitation" <?php if(isset($values['super']['levitation'])&&$values['super']['levitation']=='levitation')print("checked");?>>Левитация</option>
          <option id ="mysli" name="super[] value="mysli" <?php if(isset($values['super']['mysli'])&&$values['super']['mysli']=='mysli')print("checked");?>>Чтение мыслей</option>
        </select>
      <br />
	  
	  <label for="info"><b>Биография:</b></label><br />
        <textarea id="info" name="info" <?php if(!empty($errors['info']))  print 'class="error"';?> <?php if(empty($errors['info'])&&!empty($values['info'])) print 'class="ok"';?>><?php isset($_COOKIE['info_error']) ? print trim($_COOKIE['info_error']) : print $values['info'] ?>>Напишите о себе</textarea>
      <br />
	  
	  <label <?php if(!empty($errors['check1'])) print 'class="error_check"'?>><b>С контрактом ознакомлен (а)</b></label>
      <input type="checkbox" id="check1" name="check1" value="check1" <?php if (isset($values['check1'])&&$values['check1'] == 'check1') print("checked"); ?>><br />
	  
      <p><button type="submit" value="send">Отправить<button></p>
    </form>
    </div>
  </body>
</html>