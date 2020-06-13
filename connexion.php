<?php

session_start();
require_once "./Utils/View.php";

displayHTMLHeadPages();
displayHTMLHeaderPages();

?>

<h2>Connexion</h2>

<?php

displayHTMLLogin();

displayHTMLfooter();

?>
