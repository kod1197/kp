<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="css/css.css">
	</head>
	<body>
	
	</body>
</html>
<?php
	$id = $_GET["id"];
	$connect = mysqli_connect('localhost', 'root', '', 'kibirev');
	$query = "select * from img where id=".$id."";
	$results = mysqli_query($connect, $query);
	
	while($row = $results->fetch_assoc()){
	echo '<div id=image>';
	echo '<img class="imgBlock" height="600" width="600" src="img/'.$row["img"].'">';
	echo '<br>';
	echo '<a href="http://localhost/kursa4/search.php">Назад</a>';
	echo '</div>';
	echo $row["img"];
	echo '<br>';
	echo '<a href="save.php?filename=img/'.$row["img"].'">Скачать</a>';
	}
?>