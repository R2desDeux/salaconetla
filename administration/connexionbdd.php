<?php
$host = 'localhost';
$dbname = 'salac';
$username = 'adminer';
$password = 'Cs19022005#@#';
// Création d'une connexion PDO
$pdo = new PDO(
    "mysql:host=$host;dbname=$dbname;charset=utf8",
    $username,
    $password
);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);