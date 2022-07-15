<?php
include_once 'app/CargarImagen.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" enctype="multipart/form-data" action="<?php echo RUTA_FOTO_PERFIL;?>">
		<input type="file" name="foto">
		<br><br>
		<input type="submit" value="guardar">
	</form>
</body>
</html>