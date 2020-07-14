<?php

session_start();
require_once "./Utils/View.php";

?>



<?php


if (!empty($_SESSION)) {
    displayHTMLHeadPages();

    if (!empty($_SESSION['petsitter_firstname'])) {
        displayHTMLHeaderPagesLog();
    } else {
        displayHTMLHeaderPages();
    }
?>

    <h2>Déclaration d'une prestation</h2>

<?php


    displayHTMLDeclarationForm();
    displayHTMLfooter();
} else {
    header("Location: connexion.php");
}
