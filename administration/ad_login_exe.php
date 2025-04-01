<?php
$login = $_POST["login"];
$mdp = $_POST["password"];
// Connexion à la base de données
include "connexionbdd.php";
// Requête pour vérifier si le couple login/mdp est bon
$requeteSQL = "SELECT login, mdp, nom, prenom, role FROM users WHERE login = '$login' AND mdp = '$mdp';";
echo $requeteSQL; // test de la requête
$reponse = $pdo->query($requeteSQL);
$user = $reponse->fetch(PDO::FETCH_ASSOC);
if ($user == false) {
    echo "erreur connexion";
    header("location:../index.php?erreur=Problème de connexion");
} else {
    echo "connecté";
    header("location:ad_accueil.php");
}
