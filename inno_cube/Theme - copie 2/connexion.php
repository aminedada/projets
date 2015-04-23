<?php
/* Connexion à une base ODBC avec l'invocation de pilote */

$user = 'root';
$password = 'root';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=inno_cube;charset=utf8', $user, $password);
    
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

?>