<?php

class Database{

    private static $dbHost = "localhost"; // Rend les variables privée pour être accessible seulement par la classe Database
    private static $dbName = "vacancopoil";
    private static $dbUser = "root";
    private static $dbUserPassword = "";

    private static $connection = null; // Me permet d'initialiser la variable pour la rendre accessible dans tout le fichier.

    
    public static function connect(){ // Me permet de stocker et retourner ma variable connection pour m'en servir plus tard avec par exemple prepare et execute.

        try {
        self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName, self::$dbUser, self::$dbUserPassword);
        // self:: me permet d'accedder à mes variables privées plus haut.    
        }
        catch (PDOException $e) {
        die($e->getMessage());
        }
        return self::$connection;
    }

    public static function disconnect(){
        self::$connection = null;
    }
}

Database::connect();

function checkInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
};
function isEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
function isPhone($phone)
{
    return preg_match("/^[0-9 ]*$/", $phone);
}


function getAllpetsitters($pFilter)
{
    // Tbleau vide pour stocker les résultats après ma requête
    $listPetsitters = [];
    try 
    {
        $db = Database::connect();
        // requête à la BDD avec les différents filtres
        foreach($db->query("SELECT * from petsitters WHERE zipcode LIKE '%$pFilter%' OR  city LIKE '%$pFilter%' OR housing_type LIKE '%$pFilter%' OR animals LIKE '%$pFilter%' ") as $row) 
        {
            // Je rempli le tableau avec les résultats trouvés
            array_push($listPetsitters, $row);
        }
        // déconnexion
        Database::disconnect();
    } 
    catch (PDOException $e) 
    {
        print "Erreur !: " . $e->getMessage() . "<br/>";
    }

    // le tableau (complet, semi-rempli ou vide)
    return  $listPetsitters;
}

