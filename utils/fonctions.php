<?php

function dg($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function abort($statusCode = 404) {
    http_response_code($statusCode);
    require "views/$statusCode.php";
}

function urlIs($value) {
    return  $_SERVER['REQUEST_URI'] === $value;
}

function connect() {
    try {
        $connexion = new PDO("mysql:host=localhost;dbname=blog","root", "");
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connexion;
    } catch (PDOException $error)
    {
        echo "Erreur de connexion à la base de donnée blog : " . $error->getMessage();
    }
}

function redirect($path) {
    header("Location: $path");
    exit();
}

function insertContact($nomParam, $titreParam, $messageParam) {
   global $db;
   $stm = $db->prepare("INSERT INTO contact (nom,titre,message) VALUES (?, ? ,?)");
   $stm->execute([$nomParam,$titreParam,$messageParam]);

   $db =null;
   $stm= null;

}

