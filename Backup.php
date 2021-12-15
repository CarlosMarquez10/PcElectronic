<?php

$db_host = 'localhost';
$db_name = 'bdunad301127_14';
$db_user = 'root';
$db_pass = '';

$fecha = date('Y-m-d H:i:s');

$salida_sql = $db_name.'.sql';

$dump = "mysqldump -h$db_host -u$db_user -p$db_pass --opt $db_name > $salida_sql";

system($dump, $output);

echo("Se creo El respaldo de la base de datos...!!");

?>