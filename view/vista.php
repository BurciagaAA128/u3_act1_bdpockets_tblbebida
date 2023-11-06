<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Modelo-vista-controlador</title>
</head>
<body>
<h1>Base de datos: bd_pockets</h1>
<h1>Tabla: tbl_bebida </h1>
<h1>Aarón Burciaga Cortés</h1>
	<h1>Bebidas disponibles</h1>
	<table border="1">
		<tr>
			<td><strong>Nombre</strong></td>
			<td><strong>Precio</strong></td>
			<td><strong>Tamaño</strong></td>
			<td><strong>Descripcion</strong></td>
			<td><strong>Tipo</strong></td>
			<td><strong>Calorías</strong></td>
			<td><strong>Foto</strong></td>
		</tr>
		<?php
			for($i=0;$i<count($pd);$i++)
			{
				?>
					<tr>
						<td><?php echo $pd[$i]["nombre"]; ?></td>
						<td><?php echo $pd[$i]["precio"]; ?></td>
						<td><?php echo $pd[$i]["tamaño"]; ?></td>
						<td><?php echo $pd[$i]["descripcion"]; ?></td>
						<td><?php echo $pd[$i]["tipo"]; ?></td>
						<td><?php echo $pd[$i]["calorias"]; ?></td>
						<td><?php echo '<img width="100" src="data:image/jpg;base64,'. base64_encode($pd[$i]["foto"]) . '"/>' ?></td>
					</tr>
				<?php
			}
		?>
	</table>
</body>
</html>