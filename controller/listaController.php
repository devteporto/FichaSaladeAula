<?php
/**
 * Created by PhpStorm.
 * User: AndersonSouza
 * Date: 03/05/17
 * Time: 17:56
 */

include('../entity/Ficha.class.php');
include_once "../dao/DAO.class.php";
include_once "../connection/conexao.php";

$fichaConection = FichaDAO::getInstance(Conexao::getInstance());

$result = 0;
$id = $_POST['id'];


$excluir = $fichaConection->delete($id);

if($excluir){
    $result = 1;
}

echo $result;

