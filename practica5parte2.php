<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>registros</title>
</head>
<body>
<?php 

	$registros = array(
		array("id" => 1, "nombre" => "pedro", "edad" => 32, "sexo" => "M"),
		array("id" => 2, "nombre" => "francisca", "edad" => 53, "sexo" => "F"),
		array("id" => 3, "nombre" => "rodolfo", "edad" => 23, "sexo" => "M"),
		array("id" => 4, "nombre" => "benjamin", "edad" => 64, "sexo" => "M"),
		array("id" => 5, "nombre" => "julio", "edad" => 44, "sexo" => "M"),
		array("id" => 6, "nombre" => "cesar", "edad" => 23, "sexo" => "M"),
	);

	

	if (isset($_GET["id"])) {
		$id = $_GET["id"] - 1;
		echo "<h1>Datos</h1><hr>";
		echo "ID: ". $_GET["id"] . "<br>";
		echo "Nombre: ". $registros[$id]["nombre"] . "<br>";
		echo "edad: ". $registros[$id]["edad"] . "<br>";
		echo "sexo: ". $registros[$id]["sexo"] . "<br>";
	}
	else
	{
		echo "<h1>El dato de ID es requerido</h1>";
	}
 ?>
</body>
</html>