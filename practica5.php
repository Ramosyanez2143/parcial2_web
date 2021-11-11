<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Práctica 5. Intercambio de variable PHP</title>
</head>
<body>
	<?php 
		$registros = array(
			array("id" => 1, "nombre" => "pedro", "edad" => 32, "sexo" => "M"),
			array("id" => 2, "nombre" => "francisca", "edad" => 53, "sexo" => "F"),
			array("id" => 3, "nombre" => "rodolfo", "edad" => 23, "sexo" => "M"),
			array("id" => 4, "nombre" => "benjamin", "edad" => 64, "sexo" => "M"),
			array("id" => 5, "nombre" => "julio", "edad" => 44, "sexo" => "M"),
			array("id" => 6, "nombre" => "cesar", "edad" =>23, "sexo" => "M"),
		);
	?>
	<h1>Tabla de registros</h1><hr>
	<table border=1>
		<thead>
			<tr>
				<td>ID</td>
				<td>Nombre</td>
				<td>Edad</td>
				<td>Sexo</td>
				<td>Detalle</td>
			</tr>
		</thead>
		<tbody>
			<?php 
				for ($i=0; $i < count($registros); $i++) { 
					echo "<tr>";
						echo "<td>".$registros[$i]["id"]."</td>";
						echo "<td>".$registros[$i]["nombre"]."</td>";
						echo "<td>".$registros[$i]["edad"]."</td>";
						echo "<td>".$registros[$i]["sexo"]."</td>";
						echo "<td><a href='practica5parte2.php?id=".$registros[$i]["id"]."'>Ver detalle</a></td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
</body>
</html>