<?php

session_start();

if (!$_SESSION["Ingreso"]) {

	header("location:index.php?ruta=ingreso");

	exit();
}

?>
<div id="contregistro">
	<br>
	<h1 id="labeltitulo3" >REGISTRAR UN PRODUCTOS</h1>
    <hr style="border: 2px solid white; margin-bottom: 10px;">
	<form method="post" action="">

		<input  id="camposresgtro" type="text" placeholder="Nombre" name="nombreR" required>

		<input id="camposresgtro" type="text" placeholder="Codigo" name="codigoR" required>

		<input id="camposresgtro" type="text" placeholder="Marca" name="marcaR" required>

		<input id="camposresgtro" type="text" placeholder="Precio" name="precioR" required>

		<input id="camposresgtro" type="text" placeholder="Cantidad" name="cantidadR" required>
		<br>

	
		<input class="Btnregistro" type="submit" value="Registrar">

	</form>
</div>
<?php

$registrar = new ProductosC();
$registrar->RegistrarProductosC();


?>