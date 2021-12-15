<?php

class ProductosC{

    //registrar los productos

    public function RegistrarProductosC(){

        if(isset($_POST["nombreR"])){

            $datosC = array("nombre"=>$_POST["nombreR"], "codigo"=>$_POST["codigoR"],"marca"=>$_POST["marcaR"], "precio"=>$_POST["precioR"],"cantidad"=>$_POST["cantidadR"]);

            $tablaBD = "productos";

            $respuesta = ProductosM::RegistrarProductosM($datosC, $tablaBD);

            if($respuesta == "Ok"){

                header("location:index.php?ruta=productos");


            }else{

                echo "Error";
            }
        }
    }


//mostrar los productos

    public function MostrarProductosC(){

        $tablaBD = "productos";

        $respuesta = ProductosM::MostrarProductosM($tablaBD);

        foreach ($respuesta as $key => $value) {
            
         echo '<tr>
                    <td>'.$value["nombre"].'</td>
                    <td>'.$value["codigo"].'</td>
                    <td>'.$value["marca"].'</td>
                    <td>'.$value["precio"].'</td>
                    <td>'.$value["cantidad"].'</td>

                    <td><a href="index.php?ruta=editar&id='.$value["id"].'"><button id="btntabla">Editar</button></a></td>

                    <td><a href="index.php?ruta=productos&idB='.$value["id"].'"><button id="btntabla1">Borrar</button></a></td>
                  </tr>';
        }
    }

//editar productos

    public function EditarProductosC(){
    
        $datosC = $_GET["id"];
    
        $tablaBD = "productos";
    
        $respuesta = ProductosM::EditarProductosM($datosC, $tablaBD);

        echo '
            <input id="camposresgtro" type="hidden" value="'.$respuesta["id"].'" name="idE">
            <input id="camposresgtro" type="text" placeholder="Nombre" value="'.$respuesta["nombre"].'" name="nombreE" required>

            <input id="camposresgtro" type="text" placeholder="Codigo" value="'.$respuesta["codigo"].'" name="codigoE" required>

            <input id="camposresgtro"  type="text" placeholder="Marca" value="'.$respuesta["marca"].'" name="marcaE" required>

            <input id="camposresgtro"  type="text" placeholder="Precio" value="'.$respuesta["precio"].'" name="precioE" required>

            <input id="camposresgtro" type="text" placeholder="Cantidad" value="'.$respuesta["cantidad"].'" name="cantidadE" required>

            <input class="Btnregistro" type="submit" value="Actualizar">'   ;

    }

    // Actualizar producto

    public function ActualizarProductosC(){

        if (isset($_POST["nombreE"])) {

            $datosC = array("id"=> $_POST["idE"],"nombre" => $_POST["nombreE"],"codigo" => $_POST["codigoE"],"marca" => $_POST["marcaE"],"precio" => $_POST["precioE"], "cantidad" => $_POST["cantidadE"]);

            $tablaBD = "productos";

            $respuesta = ProductosM::ActualizarProductosM($datosC, $tablaBD);

            if($respuesta == "Ok"){

                header("location:index.php?ruta=productos");


            }else{

                echo "Error";
            }
            
        }

    }

    //Eliminar Productos

    public function BorrarProductosC(){

        if (isset($_GET["idB"])) {

            $datosC = $_GET["idB"];

            $tablaBD = "productos";

            $respuesta = ProductosM::BorrarProductosM($datosC, $tablaBD);

            if($respuesta == "Ok"){

                header("location:index.php?ruta=productos");


            }else{

                echo "Error";
            }
        }
    }



}
?>