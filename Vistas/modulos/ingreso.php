<br>
<br>
<br>
<br>


<div id="divderegistro">
     <h1 id="tituloRegistrar">LOGIN</h1>
	<form method="post" action="">

		<input type="text" placeholder="Usuario" name="usuarioI" required>

		<input type="password" placeholder="Contraseña" name="claveI" required>

		<input  id="btnrestrar" type="submit" value="INGRESAR">

	</form>
</div>
<?php

$ingreso = new AdminC();
$ingreso->IngresoC();



?>