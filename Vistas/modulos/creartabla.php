<?php
   
   $servidor = "localhost";
   $nombreusuario = "root";
   $password =""; 
   $Database = "bdunad301127_14";

  $conexion = new mysqli($servidor,$nombreusuario, $password, $Database);

  if($conexion -> connect_error){

    die("Conexion Fallida : ". $conexion-> connect_error);


  }

 


  
   $sql = "
   CREATE TABLE productos (
  id int(11) AUTO_INCREMENT,
  nombre text COLLATE utf8_spanish_ci NOT NULL,
  codigo text COLLATE utf8_spanish_ci NOT NULL,
  marca text COLLATE utf8_spanish_ci NOT NULL,
  precio text COLLATE utf8_spanish_ci NOT NULL,
  cantidad text COLLATE utf8_spanish_ci NOT NULL
   )
   ";

   if ($conexion->query($sql)===true){
       echo "La tabla se creo";
   }else{
       die("Error al Crear la tabla: ". $conexion->error);
   }


?>