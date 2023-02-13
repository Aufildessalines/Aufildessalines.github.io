<?php
$host= "localhost";
$dbname= "newsletter";
$admin= "root";
$pass= "root";

try(
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $admin,$pass);
)catch(PDOException $e){
    dit(print_r("Erreur bdd:".$e->getMessage()));
}