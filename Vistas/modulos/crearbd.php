<?php

    $servidor = "localhost";
    $nombreusuario = "root";
    $password = "";

    $conexion = new mysqli($servidor, $nombreusuario, $password);

    if ($conexion->connect_error) {

      die("Conexion Fallida : " . $conexion->connect_error);
    }

    $sql = "CREATE DATABASE bdunad301127_14";
    if ($conexion->query($sql) === true) {
      
      $alertas = "Base de datos Creada...";
      echo ($alertas);
    } else {
      die("Error al crear la base de datos : " . $conexion->error);
    }
?>
