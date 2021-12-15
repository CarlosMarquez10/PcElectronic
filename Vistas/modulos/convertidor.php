<?php

session_start();

if (!$_SESSION["Ingreso"]) {

	header("location:index.php?ruta=ingreso");

	exit();
}

?>
<div class="contconvertidor">

	<form action="" method="POST">
		<h3 id="labeltitulo">Convertidor</h3>
		<hr style="border: 2px solid black;">
		<input id="campo1" type="number" name="n1" required>

		<select id="selectconv" name="op" id="opr">
			<option value="1">Byte a KiloByte</option>
			<option value="2">Byte a Megabyte</option>
			<option value="3">Byte a GigaByte</option>

		</select>

		<input id="btnconvt" type="submit" name="enviar" value="Calcular">
	</form>

</div>
<?php



if (isset($_POST["enviar"])) {

	$n1 = $_POST["n1"];
	$opc = $_POST["op"];
	$dato = 1024;

	switch ($opc) {
		case 1:
			$res = $n1 / $dato;
			break;

		case 2:
			$res = ($n1 / pow($dato, 2));
			break;

		case 3:
			$res = ($n1 / pow($dato, 3));
			break;
	}
}

?>
<div class="contconvertidor2">
    
	<form action="" method="POST">
		<h3 id="labeltitulo2">Resultado</h3>
		<hr style="border: 2px solid black;">
		<input id="campo2" type="text" name="n2" value="<?php echo $res?>">

	</form>

</div>