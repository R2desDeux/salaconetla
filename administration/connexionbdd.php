<?php
$host = 'localhost';
$dbname = 'bd_salac';
$username = 'myroot';
$password = 'root123*';
// Création d'une connexion PDO
$pdo = new PDO(
    "mysql:host=$host;dbname=$dbname;charset=utf8",
    $username,
    $password
);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

