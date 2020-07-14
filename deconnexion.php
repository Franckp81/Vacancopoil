<?php

session_start();

if (!empty($_POST)) { // Deuxième passage
    // Suppression des variables de session et de la session
    $_SESSION = array();
    session_destroy();

    // Suppression des cookies de connexion automatique
    setcookie('login', '');
    setcookie('pass_hache', '');
    header("Location: index.php");
}
require_once "./Utils/View.php";

if (!empty($_SESSION)) {

    displayHTMLHeadPages();

    if (!empty($_SESSION['petsitter_firstname'])) {
        displayHTMLHeaderPagesLog();
    } else {
        displayHTMLHeaderPages();
    }
?>

    <h2>Déconnexion</h2>

<?php

    displayHTMLdisconnect();
    displayHTMLfooter();
} else {
    header("Location: connexion.php");
}
