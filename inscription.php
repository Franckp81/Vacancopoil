<?php

session_start();
require_once "./Utils/View.php";

displayHTMLHeadPages();

if (!empty($_SESSION['petsitter_firstname'])) {
    displayHTMLHeaderPagesLog();
} else {
    displayHTMLHeaderPages();
}

// Initialise mes variables pour la première visite de la page.
$lastname = $firstname =  $phoneNumber =  $email =  $password = $verifPassword = $street = $zipcode = $city = $description = $image = "";
//  $lastnameError = $firstnameError = $phoneNumberError = $emailError = $passwordError = $verifPasswordError = $streetError = $zipcodeError = $cityError = $descriptionError = $imageError = "";
$isSuccess = true;

if (!empty($_POST)) {

    $lastname = checkInput($_POST['lastname']);
    $firstname = checkInput($_POST['firstname']); // Toutes ses lignes me permettent de sécuriser les données entrantes de l'utilisateur.
    $phoneNumber = checkInput($_POST['phoneNumber']);
    $email = checkInput($_POST['email']);
    $password = checkInput($_POST['password']);
    $verifPassword = checkInput($_POST['verifPassword']);
    $street = checkInput($_POST['street']);
    $zipcode = checkInput($_POST['zipcode']);
    $city = checkInput($_POST['city']);
    $description = checkInput($_POST['description']);
    $housingType = checkInput($_POST['housingType']);
    $animals = checkInput($_POST['animals']);

    $image = checkInput($_FILES['image']['name']); // Récupère le nom de l'image 
    $imagePath = 'images/' . basename($image); // Récupère le chemin de l'image
    $imageExtension = pathinfo($imagePath, PATHINFO_EXTENSION); // Me récupère l'extention de l'image (jpg, png, etc).
    $isSuccess = true; // Me permettra de définir si mon formulaire a bien était renseigné.

    if (empty($lastname) || empty($firstname) || empty($password) || empty($verifPassword) ||  empty($street) || empty($zipcode) || empty($city) || empty($description)) {

        $isSuccess = false;
    };
    if(!empty($phoneNumber)){
       if (!isPhone($phoneNumber)) {
            echo "<script>alert(\"Veuillez entrer un numéro de téléphone valide\")</script>";
            //     $phoneError = "Que des chiffres et des espaces";
            $isSuccess = false;
        } 
    }
    
    if(!empty($password)){
       if (!isEmail($email)) {
            echo "<script>alert(\"Veuillez indiquer une adresse mail valide\")</script>";
            // $emailError = "Merci de renseigner une adresse email valide";
            $isSuccess = false;
        } 
    }
    if(!empty($password) && !empty($verifPassword)){
        if ($password !== $verifPassword) {
            echo "<script>alert(\"Mots de passe non identiques\")</script>";
            $isSuccess = false;
        }
    }
    
    if (empty($image)) {
        $isUploadSuccess = true;
    }
    
    if (!empty($image)) {
        
        $isUploadSuccess = true; // La suite dans le else me permet de vérifier toutes mes conditions sur l'images télécharger.
        if ($imageExtension != "jpg" && $imageExtension != "png" && $imageExtension != "jpeg" && $imageExtension != "gif") { // Vérifie que l'image est dans un format pris en charge.
            echo "<script>alert(\"Les formats d'image acceptés sont : .jpg, .jpeg, .png, .gif\")</script>";
            
            $isUploadSuccess = false;
        }
        if (file_exists($imagePath)) { //  file_exists me permet de vérifier si le nom d'une image existe déjà
            echo "<script>alert(\"Le nom de l'image existe déjà\")</script>";
            
            $isUploadSuccess = false;
        }
        if ($_FILES["image"]["size"] > 5000000) { // Vérifie la taille du fichier 
            echo "<script>alert(\"L'image ne doit pas dépasser les 5Mo\")</script>";
            
            $isUploadSuccess = false;
        }
        if ($isUploadSuccess) {
            if (!move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath)) { // Cette fonction déplace mon image téléchargée au bon endroit grâce à une variable temporaire "tmp_name" et elle me renvoit true ou false.
                echo "<script>alert(\"Il y a une erreur lors du téléchargement de l'image\")</script>";
               
                $isUploadSuccess = false;
            }
            
        }
    }

    $pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if ($isSuccess && $isUploadSuccess) {
        $db = Database::connect();
        $statement = $db->prepare("INSERT INTO petsitters (petsitter_lastname, petsitter_firstname, phone_number, email, password, street, zipcode, city, housing_type, animals, description, picture) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $statement->execute(array($lastname, $firstname, $phoneNumber, $email, $pass_hache, $street, $zipcode, $city, $housingType, $animals, $description, $image));
        Database::disconnect();
        header("Location: index.php");
    }
}

?>

<h2>Inscription</h2>

<?php
displayHTMLRegister();
displayHTMLfooter();
?>