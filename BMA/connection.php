<?php
//ligar à base de dados
$user = 'root';
$pass = '';
try {
    $dbh = new PDO('mysql:host=localhost;dbname=bma; charset=utf8', $user, $pass);
    $dbh->exec("SET lc_time_names = 'pt_PT'");
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}