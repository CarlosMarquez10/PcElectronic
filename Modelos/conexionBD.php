<?php

class ConexionBD{

    public function cBD(){

        $bd = new PDO("mysql:host=localhost;dbname=bdunad301127_14","root","");

        return $bd;
    }
}


?>