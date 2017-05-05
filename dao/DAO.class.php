<?php

/**
 * Created by PhpStorm.
 * User: AndersonSouza
 * Date: 25/04/17
 * Time: 14:30
 */
class FichaDAO
{

    public $ficha;
    private $pdo = null;


    /*
    * Atributo estático para instância da própria classe
    */
    private static $FichaDao = null;

    /*
     * Construtor da classe como private
     * @param $conexao - Conexão com o banco de dados
     */
    private function __construct($conexao){
        $this->pdo = $conexao;
    }

    /*
     * Método estático para retornar um objeto crudBlog
     * Verifica se já existe uma instância desse objeto, caso não, instância um novo
     * @param $conexao - Conexão com o banco de dados
     * @return $crudBlog - Instancia do objeto crudBlog
     */
    public static function getInstance($conexao){
        if (!isset(self::$FichaDao)):
            self::$FichaDao = new FichaDAO($conexao);
        endif;
        return self::$FichaDao;
    }


    public function nome_sobrenome($nome_todo) {
        $nomes = explode(' ', $nome_todo);
        if(count($nomes) === 1) { // caso alguém tenha um só nome
            return $nomes[0];
        }
        return $nomes[0]. ' ' .$nomes[count($nomes) - 1];
    }


    public function cadastrar(Ficha $ficha1)
    {

        $this->ficha = $ficha1;


        //EXTRAINDO OBJETO PARA VARIAVEL
        $nome = $this->ficha->getUser();
        $campus = $this->ficha->getCampus();
        $disciplina = $this->ficha->getDisciplina();
        $nivel = $this->ficha->getNivel();
        $questa1 = $this->ficha->getQ1();
        $questa2 = $this->ficha->getQ2();
        $questa3 = $this->ficha->getQ3();
        $questa4 = $this->ficha->getQ4();
        $questa5 = $this->ficha->getQ5();
        $questa6 = $this->ficha->getQ6();
        $parecer = $this->ficha->getParecer();




        //--------------------------------------
        try{

            $stmt = $this->pdo->prepare("INSERT INTO ficha(user,campus,disciplina,nivel,q1,q2,q3,q4,q5,q6,parecer) VALUES(?,?,?,?,?,?,?,?,?,?,?)");
            $stmt->bindParam(1,$nome);
            $stmt->bindParam(2,$campus);
            $stmt->bindParam(3,$disciplina);
            $stmt->bindParam(4,$nivel);
            $stmt->bindParam(5,$questa1);
            $stmt->bindParam(6,$questa2);
            $stmt->bindParam(7,$questa3);
            $stmt->bindParam(8,$questa4);
            $stmt->bindParam(9,$questa5);
            $stmt->bindParam(10,$questa6);
            $stmt->bindParam(11,$parecer);

            $resultado = $stmt->execute();

            if ($resultado){
                echo "dados inseridos com sucesso";
            }


        }  catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    public function delete( $id ) {

       try {
           $operacao = $this->pdo->prepare("DELETE FROM ficha WHERE id =:id ");
           $operacao->bindValue(":id", $id);
          if($operacao->execute()){
              if($operacao->rowCount() > 0) {

                  return true;

              } else {
                  return false;
              }
          } else {
              return false;
          }
       } catch ( PDOException $excecao ) {
           echo $excecao->getMessage();
       }
    }


    public function listar($nome){

    try{

        $operacao = $this->pdo->prepare("SELECT * FROM ficha WHERE user =:usuario ");
        $operacao->bindValue(":usuario", $nome);
        $operacao->execute();

        $getRow = $operacao->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Ficha');

        return $getRow;

    }catch (PDOException $e){

        echo $e->getMessage();
    }

}

    public function buscarFicha($id){

        try{

            $operacao = $this->pdo->prepare("SELECT * FROM ficha WHERE id =:id ");
            $operacao->bindValue(":id", $id);
            $operacao->execute();

            $getRow = $operacao->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'Ficha');

            return $getRow;

        }catch (PDOException $e){

            echo $e->getMessage();
        }

    }



    public function editar(Ficha $ficha1){

        try{

            $this->ficha = $ficha1;



            $operacao = $this->pdo->prepare("UPDATE ficha SET campus =:campus, disciplina =:disciplina, nivel =:nivel WHERE id =:id");
            $operacao->bindValue(":id", $ficha->getId());
            $operacao->bindValue(":campus", $ficha->getCampus());
            $operacao->bindValue(":disciplina", $ficha->getDisciplina());
            $operacao->bindValue(":nivel", $ficha->getNivel());
            $operacao->execute();

        }catch (PDOException $e){

            echo $e->getMessage();

        }


    }





}