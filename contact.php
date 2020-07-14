<?php

session_start();
require_once "./Utils/View.php";
require_once "./Utils/Model.php";

displayHTMLHeadPages();

if (!empty($_SESSION['petsitter_firstname'])) {
    displayHTMLHeaderPagesLog();
} else {
    displayHTMLHeaderPages();
}

if (!empty($_GET['id'])) {
    $id = checkInput($_GET['id']);
  }
  else header("Location: recherche.php");


$db = Database::connect();
$statement = $db->prepare("SELECT email FROM petsitters WHERE petsitters.id = ?");
$statement->execute(array($id));
$item = $statement->fetch();

$emailTo = $item['email'];
$_SESSION['emailTo'] = $emailTo;

?>

<h2>Demande de prestation</h2>


<?php

displayHTMLFormContact();
displayHTMLfooter();
