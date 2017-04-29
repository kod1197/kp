<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="css/css.css">
	</head>
	<body>
	
	</body>
</html>
<?php
	$connect = mysqli_connect('localhost', 'root', '', 'kibirev');
	$zprs = $_POST["searchStr"];
	$query = "select * from img where id in ((select idImg from eTot where idTag in((select id from tag where name like '%".$zprs."%'))))";
	$results = mysqli_query($connect, $query);
	

	while($row = $results->fetch_assoc()){
	echo '<div id=image>';
	echo '<a href="upload/image.php?id='.$row["id"].'"><img class="imgBlock" height="200" width="200" src="upload/img/'.$row["img"].'"></a>';
	echo '</div>';
	}
	echo '<br>';
	echo '<a href="http://localhost/kursa4/index.html">Назад</a>';
?>