<?php
include('ldap.class.php');



$usuario = $_REQUEST['usu'];
$senha = $_REQUEST['senha'];






$ldap = new ldap('172.19.0.48');

// VERIFICA SE AUTENTICA UM USUARIO QUALQUER
if ($ldap->autentica($usuario,$senha)){

    echo $ldap->busca_nome($ldap->usuario_ad);

    session_start();

    $_SESSION['usuario'] = $ldap->busca_nome($ldap->usuario_ad);

    //setcookie("usuario", $ldap->busca_nome($ldap->usuario_ad), time()+3600);
    header("Location: logado.php");




}
else {

    echo 'Autenticação Falhou!';
    echo "<br><input type='button' value='voltar' onclick='location.href=\"index.php\";'>";
}

?>

</body>
</html>
