<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>file upload form</title>		
	</head>
	<body>
		<h1>Загрузка изображения</h1>
		    <hr>
			<form enctype="multipart/form-data" action="upload.php" id="dobavit" method="post" >            
						<input type="hidden" name="MAX_FILE_SIZE" value="1048576">
						<input type="file" name="img"><br>
						<div class="tagger">
							<select name="tagger">
								<option value="">Выберите из списка</option>
								<option value="1">Forest</option>
								<option value="3">Sun</option>
								<option value="5">Lake</option>
								<option value="7">Meadow</option>
							</select>
						</div>
						<input type="text" name="name" size="35" placeholder="Название картинки"><br>
						<input type="text" name="opisanie" size="35" placeholder="Описание картинки"><br>
						<input type="submit">
			</form>
			<hr>
			<a href="http://localhost/kursa4/index.html"> Поиск изображений </a>
	</body>
</html>