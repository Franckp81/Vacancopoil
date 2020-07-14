<?php

session_start();
require_once "./Utils/View.php";
require_once "./Utils/Model.php";

displayHTMLHeadPages();

if (!empty($_SESSION['petsitter_firstname'])) {
    displayHTMLHeaderPagesLog();
} else {
    displayHTMLHeaderPages();
}

displayHTMLSearch();


// $db = Database::connect();
// $statement = $db->prepare("SELECT petsitter_lastname FROM petsitters");
// $statement->execute(array());
// $petsitters = $statement->fetch();

// Database::disconnect();
var_dump($_GET);


if (!empty($_GET)) {
    $zipcodeQuery =  $_GET['zipcode'];
    $housingTypeQuery = $_GET['housingType'];
    $animalsQuery = $_GET['animals'];

    if (empty($zipcodeQuery)) {
        $zipcodeQuery = "";
    }
    if (empty($housingTypeQuery)) {
        $housingTypeQuery = "";
    }
    if (empty($animalsQuery)) {
        $animalsQuery = "";
    }


    // affichage du tableau ou de l'erreur si absence de résultat
    $foundByZipcode = getAllpetsitters($zipcodeQuery);
    $foundByhousingType = getAllpetsitters($housingTypeQuery);
    $foundByAnimals = getAllpetsitters($animalsQuery);
    

    if (empty($foundByZipcode)) {

        echo "<script>alert(\"Votre recherche n'a pas donné de résultats.\")</script>";

    }  
    displayTable($foundByZipcode);
    if (empty($foundByhousingType)) {

        echo "<script>alert(\"Votre recherche n'a pas donné de résultats.\")</script>";

    }  displayTable($foundByhousingType);
    
    if (empty($foundByAnimals)) {

        echo "<script>alert(\"Votre recherche n'a pas donné de résultats.\")</script>";

    }  displayTable($foundByAnimals);

    
}


displayHTMLfooter();
