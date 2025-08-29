<?php
// Définition des constantes de connexion
define('DB_HOST', 'localhost');
define('DB_NAME', 'portfolio');
define('DB_USER', 'root');
define('DB_PASS', '');

// Connexion via PDO 
try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Connexion réussie
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>