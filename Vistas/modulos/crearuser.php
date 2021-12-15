<?php 
   $servidor = "localhost";
   $nombreusuario = "root";
   $password =""; 
   $Database = "bdunad301127_14";

  $conexion = new mysqli($servidor,$nombreusuario, $password, $Database);

  if($conexion -> connect_error){

    die("Conexion Fallida : ". $conexion-> connect_error);

  }

$sql= "INSERT INTO administradores (id, usuario, clave) VALUES ('', 'admin', '123')";


   if ($conexion->query($sql)===true){
       echo "Se Creo Administrador";
   }else{
       die("Error al Crear la tabla: ". $conexion->error);
   }
?>