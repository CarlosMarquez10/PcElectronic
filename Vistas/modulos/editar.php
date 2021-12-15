<?php

session_start();

if (!$_SESSION["Ingreso"]) {

	header("location:index.php?ruta=ingreso");

	exit();
}

?>
<div id="contregistro">
	<br>
	<h1 id="labeltitulo3">ACTUALIZAR PRODUCTO</h1>
	<hr style="border: 2px solid white; margin-bottom: 10px;">
	<form method="post" action="">


		<?php

		$editar = new ProductosC();
		$editar->EditarProductosC();

		$actualizar = new ProductosC();
		$actualizar->ActualizarProductosC();


		?>

	</form>
</div>