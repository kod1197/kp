<?php 
require 'db.php';
//Загрузка файла
$uploaddir = 'img/';
$uploadfile = $uploaddir . basename($_FILES['img']['name']);

if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}
     $img = R::dispense('img');
     $img -> img = basename($_FILES['img']['name']);
     $img -> name = Trim(stripslashes($_POST['name']));
     $img -> text = Trim(stripslashes($_POST['opisanie']));
     R::store($img);
?>


