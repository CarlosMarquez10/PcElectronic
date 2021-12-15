<?php

require_once "conexionBD.php";

class ProductosM extends ConexionBD{

    //registrar productos

    static public function RegistrarProductosM($datosC, $tablaBD){

        $pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD(nombre, codigo, marca, precio, cantidad)VALUES(:nombre, :codigo, :marca, :precio, :cantidad)");
    
        $pdo -> bindParam(":nombre",$datosC["nombre"], PDO::PARAM_STR);
        $pdo -> bindParam(":codigo",$datosC["codigo"], PDO::PARAM_STR);
        $pdo -> bindParam(":marca",$datosC["marca"], PDO::PARAM_STR);
        $pdo -> bindParam(":precio",$datosC["precio"], PDO::PARAM_STR);
        $pdo -> bindParam(":cantidad",$datosC["cantidad"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return "Ok";

        }else{

            return "Error";

        }

        $pdo -> close();

    }



//mostrar productos

static public function MostrarProductosM($tablaBD){

    $pdo = ConexionBD::cBD()->prepare("SELECT id, nombre, codigo, marca, precio, cantidad FROM $tablaBD");

    $pdo -> execute();

    return $pdo -> fetchAll();

    $pdo -> close();

}
// editar productos

    static public function EditarProductosM($datosC, $tablaBD){
    
        $pdo = ConexionBD::cBD()->prepare("SELECT id, nombre, codigo, marca, precio, cantidad FROM $tablaBD WHERE id= :id");
    
        $pdo ->bindParam(":id", $datosC, PDO::PARAM_INT);
    
        $pdo ->execute();
    
        return $pdo->fetch();
    
        $pdo -> close();
    
    
    
    }

    //actualizar productos

    static public function ActualizarProductosM($datosC, $tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD SET nombre = :nombre, codigo = :codigo, marca = :marca, precio = :precio, cantidad = :cantidad WHERE id= :id" );

        $pdo ->bindParam(":id", $datosC["id"],PDO::PARAM_INT);
        $pdo ->bindParam(":nombre", $datosC["nombre"],PDO::PARAM_STR);
        $pdo ->bindParam(":codigo", $datosC["codigo"],PDO::PARAM_STR);
        $pdo ->bindParam(":marca", $datosC["marca"],PDO::PARAM_STR);
        $pdo ->bindParam(":precio", $datosC["precio"],PDO::PARAM_STR);
        $pdo ->bindParam(":cantidad", $datosC["cantidad"],PDO::PARAM_STR);

        if($pdo -> execute()){

            return "Ok";

        }else{

            return "Error";

        }

        $pdo -> close();



    }
    // Borrar productos

    static public function BorrarProductosM($datosC, $tablaBD){

        $pdo = ConexionBD::cBD()-> prepare("DELETE FROM  $tablaBD WHERE id = :id");

        $pdo -> bindParam(":id", $datosC, PDO::PARAM_INT);

        if($pdo -> execute()){

            return "Ok";

        }else{

            return "Error";

        }

        $pdo -> close();
    }

}

?>