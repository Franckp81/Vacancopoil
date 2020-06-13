<?php

session_start();
require_once "./Utils/View.php";

displayHTMLHeadPages();
displayHTMLHeaderPages();
?>

<h2>Demande de prestation</h2>

<?php

displayHTMLFormContact();
displayHTMLfooter();