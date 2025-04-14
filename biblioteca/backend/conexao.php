<?php
$dsn = "mysql:dbname=biblioteca";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
    echo "Falha ao conectar a base de dados: " . $e->getMessage();
    exit();
}
?>