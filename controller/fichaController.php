<?php

include('../entity/Ficha.class.php');
include_once "../dao/DAO.class.php";
include_once "../connection/conexao.php";

$fichaConection = FichaDAO::getInstance(Conexao::getInstance());

$action = isset($_GET['action']);

echo $action;



    $controle = $_POST['envio'];

    echo $controle;


    if($controle === "cadastrar"){

        try{

            $ficha = new Ficha();

            //PEGA A INSTANCIA DO USUARIO ARMAZENADO NA SECAO
            $ficha->setUser($_POST['nome']);
            $ficha->setCampus($_POST['campus']);
            $ficha->setDisciplina($_POST['disciplina']);
            $ficha->setNivel($_POST['nivel']);
            $ficha->setQ1($_POST['questao01']);
            $ficha->setQ2($_POST['questao02']);
            $ficha->setQ3($_POST['questao03']);
            $ficha->setQ4($_POST['questao04']);
            $ficha->setQ5($_POST['questao05']);
            $ficha->setQ6($_POST['questao06']);
            $ficha->setParecer($_POST['parecer']);

            //CADASTRA A FICHA
            $fichaConection->cadastrar($ficha);

            echo "PASSOU POR AQUI E CADASTROU";


        }catch (Exception $e){
            echo "Erro ao capturar dados do Formulário"; // Retorna um erro caso exista problema com os dados do HTML
        }

    }
    elseif($controle === "editar"){

    try{

        $ficha = new Ficha();

        //PEGA A INSTANCIA DO USUARIO ARMAZENADO NA SECAO
        $ficha->setUser($_POST['nome']);
        $ficha->setCampus($_POST['campus']);
        $ficha->setDisciplina($_POST['disciplina']);
        $ficha->setNivel($_POST['nivel']);


        echo $ficha->getDisciplina();


        //CADASTRA A FICHA
        $fichaConection->editar($ficha);

        echo "PASSOU POR AQUI E EDITOU";


    }catch (Exception $e){
        echo "Erro ao capturar dados do Formulário"; // Retorna um erro caso exista problema com os dados do HTML
    }



} else {

    echo "ERRO";

}


?>
