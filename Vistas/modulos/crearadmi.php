<?php
$servidor = "localhost";
$nombreusuario = "root";
$password = "";
$Database = "bdunad301127_14";

$conexion = new mysqli($servidor, $nombreusuario, $password, $Database);

if ($conexion->connect_error) {

  die("Conexion Fallida : " . $conexion->connect_error);
}

$sql = "CREATE TABLE administradores (
  id int(11) NOT NULL,
  usuario text COLLATE utf8_spanish_ci NOT NULL,
  clave text COLLATE utf8_spanish_ci NOT NULL)
  ";

if ($conexion->query($sql) === true) {
  echo "Se Creo Tabla Administrador";
} else {
  echo ("Error al Crear la tabla: " . $conexion->error);
}

$sql = "INSERT INTO administradores (id, usuario, clave) VALUES ('1', 'admin', '123')";


if ($conexion->query($sql) === true) {
  echo " <br> Se Creo Administrador";
} else {
  die("Error al Crear la tabla: " . $conexion->error);
}

$sql = "
  CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `codigo` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `marca` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `precio` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

if ($conexion->query($sql) === true) {
  echo " <br> Se crea la tabla Producto";
} else {
  die("Error al Crear la tabla: " . $conexion->error);
}

$sql = "ALTER TABLE `productos` ADD PRIMARY KEY (`id`);";


if ($conexion->query($sql) === true) {
  echo " <br> Se Creo Administrador";
} else {
  die("Error al Crear la tabla: " . $conexion->error);
}

$sql = "ALTER TABLE `productos` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;";


if ($conexion->query($sql) === true) {
  echo " <br> Se Creo Administrador";
} else {
  die("Error al Crear la tabla: " . $conexion->error);
}