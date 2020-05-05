<?php

/* connexion à la base de données 'immobilier' */
$bdd = new PDO('mysql:host=localhost;dbname=immobilier;charset=utf8;port=3306', "root", "root", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);


?>