<?php

session_start();
require_once "./Utils/View.php";

displayHTMLHeadPages();
displayHTMLHeaderPages();
?>

<h2>Déclaration d'une prestation</h2>

<?php 

displayHTMLDeclarationForm();
displayHTMLfooter();
