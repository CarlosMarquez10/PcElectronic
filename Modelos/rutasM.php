<?php

class Modelo{

    static public function RutasModelo($rutas){

        if(  $rutas == "ingreso"|| $rutas == "registrar" || $rutas == "productos" || $rutas == "salir" || $rutas == "convertidor"|| $rutas == "editar"|| $rutas == "crearbd"|| $rutas == "crearadmi"){

            $pagina = "Vistas/modulos/".$rutas.".php";

        }else if($rutas == "index"){

            $pagina = "Vistas/modulos/ingreso.php";

        }else{

            $pagina = "Vistas/modulos/ingreso.php";

        }
        
        return $pagina;

    }

}



?>