<?php 
// Connexion à la base de données
$host = "localhost"; 
$user = "root";       // ton utilisateur MySQL
$pass = "";           // ton mot de passe (laisser vide si WAMP/XAMPP par défaut)
$db   = "aluwisa";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die("Erreur de connexion : " . $e->getMessage());
}