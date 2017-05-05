<?php

$username  = 'root';
$password  = 'te@#001';
$result = 0;
try {
    $dbconn = new PDO('mysql:host=localhost;dbname=onlinestore', $username, $password);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
