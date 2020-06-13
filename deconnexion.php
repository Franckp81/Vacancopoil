<?php

session_start();
require_once "./Utils/View.php";

displayHTMLHeadPages();
displayHTMLHeaderPages();
?>

<h2>Déconnexion</h2>

<?php

displayHTMLdisconnect();
displayHTMLfooter();