<?php
/**
 * Created by PhpStorm.
 * User: AndersonSouza
 * Date: 03/05/17
 * Time: 18:56
 */

session_start();
if( $_GET['token'] === md5(session_id()) ){
    // limpe tudo que for necessário na saída.
    // Eu geralmente não destruo a seção, mas invalido os dados da mesma
    // para evitar algum "necromancer" recuperar dados. Mas simplifiquemos:
    session_destroy();
    header("Refresh:0; url=../index.php");
    exit();
} else {
    echo "<a href='doLogout.php?token='.md5(session_id())>Confirmar logout</a>";
}