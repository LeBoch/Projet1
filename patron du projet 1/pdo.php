<?php

$host = 'localhost'; // L'adresse du serveur de la base de données
$dbname = 'gite'; // Le nom de la base de données
$user = 'root'; // Le nom d'utilisateur pour se connecter à la base de données
$passwords = ''; // Le mot de passe pour se connecter à la base de données

// Connexion à la base de données avec PDO
try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $passwords);
  // Configuration des options de PDO
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo 'Erreur de connexion à la base de données : ' . $e->getMessage();
  exit();

}