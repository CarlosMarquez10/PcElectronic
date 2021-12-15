<?php

session_start();

if (!$_SESSION["Ingreso"]) {

	header("location:index.php?ruta=ingreso");

	exit();
}

?>
<div class="ConttbProducto">
	<h1 id="tiotulotabla">INVENTARIO DE PRODUCTOS</h1>

	<table id="t1" border="1">

		<thead>

			<tr>
				<th style="padding-right: 30px; padding-left:right: 30px;">Nombre</th>
				<th>Codigo</th>
				<th>Marca</th>
				<th>Precio</th>
				<th>Cantidad</th>
				<th>Editar</th>
				<th>Eliminar</th>

			</tr>

		</thead>

		<tbody>



			<?php

			$mostrar = new ProductosC();
			$mostrar->MostrarProductosC();


			?>

		</tbody>

	</table>
</div>
<?php

$eliminar = new ProductosC();
$eliminar->BorrarProductosC();




?>