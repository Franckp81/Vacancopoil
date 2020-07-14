<?php

session_start();

require_once "./Utils/View.php";
require_once "./Utils/Model.php";

$email = $password = ""; // Initialise mes variables pour la première visite de la page.
// $emailError = $passwordError = "";

if (!empty($_POST)) {
    $email = checkInput($_POST['email']);
    $password = checkInput($_POST['password']);
    $isSuccess = true;



    if (empty($email)) { // Suite de if pour vérifier si les champs sont vide et afficher une erreur si c'est le cas.
        // $emailError = "Ce champ ne peut pas être vide ";
        $isSuccess = false;
    }
    if (empty($password)) {
        // $passwordError = "Ce champ ne peut pas être vide ";
        $isSuccess = false;
    }

    //  Récupération de l'utilisateur et de son pass hashé

    $db = Database::connect();
    $req = $db->prepare('SELECT petsitter_firstname, id, password FROM petsitters WHERE email = :email');
    $req->execute(array(
        'email' => $email
    ));
    $result = $req->fetch();

    // Comparaison du pass envoyé via le formulaire avec la base
    $isPasswordCorrect = password_verify($_POST['password'], $result['password']);


    if (!$result) {
        echo "<script>alert(\"Mauvais identifiant ou mot de passe\")</script>";
    } else {
        if ($isPasswordCorrect) {
            session_start();
            $_SESSION['id'] = $result['id'];
            $_SESSION['petsitter_firstname'] = $result['petsitter_firstname'];
            header("Location: index.php");
        } else {
            echo "<script>alert(\"Mauvais identifiant ou mot de passe\")</script>";
        }
    }
}

displayHTMLHeadPages();
displayHTMLHeaderPages();

?>

<h2>Connexion</h2>

<?php

displayHTMLLogin();

displayHTMLfooter();

?>