<?php

/**
 * Created by PhpStorm.
 * User: AndersonSouza
 * Date: 28/09/15
 * Time: 17:56
 */
class Banco
{

    public static $con;

    public function instancia(){

        if(! self::$con){
            self::$con=$this->conectar();

        }

        return self::$con;
    }

    private function conectar(){

        $con = new PDO("mysql:host=localhost;dbname=TECHPORTO_CLASSROOM", "root", "te@#001");

        return $con;
    }


}




