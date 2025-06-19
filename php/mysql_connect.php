<?php

const DBHOST = 'mysql80';
const DBUSER = 'user';
const DBPASSWORD = 'pass';
const DBNAME = 'docker_cours';

$dsn = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME;

try {
    $pdo = new PDO($dsn, DBUSER, DBPASSWORD);
    echo 'Connexion réussie !';
} catch (PDOException $e) {
    die('Erreur = ' . $e->getMessage());
}
