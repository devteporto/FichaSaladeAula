<?php
include('ldap.class.php');
include('entity/Usuario.class.php');



$usuario = $_REQUEST['usu'];
$senha = $_REQUEST['senha'];




$ldap = new ldap('172.19.0.48');

// VERIFICA SE AUTENTICA UM USUARIO QUALQUER
if ($ldap->autentica($usuario,$senha)){

    session_start();

    $usuarioLogado = new Usuario();

    $usuarioLogado->setNome($ldap->busca_nome($ldap->usuario_ad));

    $_SESSION['usuario'] = $usuarioLogado;

    //REDIRECIONA PARA A PAGINA LOGADO
    header("Location: logado.php");



}
else {

    echo 'Autenticação Falhou!';
    echo "<br><input type='button' value='voltar' onclick='location.href=\"index.php\";'>";
}

?>

</body>
</html>
