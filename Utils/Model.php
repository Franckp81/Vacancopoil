<?php

// Je défini toutes mes variables pour les connexions à ma base de données
DEFINE("SERVEUR", "localhost");
DEFINE("PORT", "3306");
DEFINE("DATABASE", "vacancopoil");
DEFINE("DB_USERNAME", "root");
DEFINE("DB_PASSWORD", "");
DEFINE("DB_CONNEXION", "mysql:host=".SERVEUR.":".PORT.";dbname=".DATABASE);

$lBdd = new PDO(DB_CONNEXION, DB_USERNAME, DB_PASSWORD);



