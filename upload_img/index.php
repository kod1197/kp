<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>file upload form</title>		
	</head>
	<body>
		<h1>It works</h1>
		    <hr>
			<form enctype="multipart/form-data" action="upload.php" id="dobavit" method="post" >            
						<input type="hidden" name="MAX_FILE_SIZE" value="1048576">
						<input type="file" name="img"><br>
						<input type="text" name="name" size="35" placeholder="Название картинки"><br>
						<input type="text" name="opisanie" size="35" placeholder="Описание картинки"><br>
						<input type="submit">
			</form>
			<hr>
	</body>
</html>