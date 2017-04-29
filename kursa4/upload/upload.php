<?php 
require 'db.php'; //Подключение rb.php

/* == Определение расширения файла == */
$test = $_FILES['img']['name'];
$ext = substr(strrchr($test, '.'), 1);

if($ext == "jpg" or $ext == "jpeg" or $ext == "png"){ //Проверка, картинку ли мы загружаем?

//$imgHash = md5(basename($_FILES['img']['name'])).'.png'; //Замена имени файла на хэш
$imgHash = substr(md5(microtime() . rand(0, 9999)), 0, 32).'.png'; //Замена имени файла на хэш
$uploaddir = 'img/'; //Папка для загрузки файла
$uploadfile = $uploaddir . $imgHash; 

/* == Загрузили ли мы файл? == */
if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {

} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}

	 $idTag = $_POST['tagger']; //Id тэга из выпадающего списка
	 
	 /* == Обязательно тег должен быть выбран == */
	 if(empty($idTag)){
		echo "Выбирать тег из списка обязательно!";
	 }
	 
	 else{
	 
	 /* == Создание и загрузка объекта == */
     $img = R::dispense('img');
     $img -> img = $imgHash;
     $img -> name = Trim(stripslashes($_POST['name']));
     $img -> text = Trim(stripslashes($_POST['opisanie']));
     R::store($img);//Добавляет запись о файле
	 
	 /* == Id записи == */
	 $idImg = R::getInsertID();
	
	/* == Дебаг информация == */
	 echo '<br><strong>Выбранный тег</strong> '. $idTag . '<br>';
	 echo '<strong>Id картинки</strong> ' . $idImg;
	 echo $_FILES['name'];
	 
	/* == Связывание тега с картинкой == */
	$qr = "INSERT INTO `kibirev`.`eTot` (`id`, `idImg`, `idTag`) VALUES (NULL, $idImg, $idTag)";
	R::exec($qr);
	}
	}
else{
	echo "Ошибка! Неправильный тип файла";
	echo "<br>";
	echo "Можно загружать jpeg, jpg, png";
}	
?>
