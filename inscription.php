<?php

session_start();
require_once "./Utils/View.php";

displayHTMLHeadPages();
displayHTMLHeaderPages();
?>

<h2>Inscription</h2>

<?php 
displayHTMLRegister();
displayHTMLfooter();
 ?>