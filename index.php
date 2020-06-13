<?php

session_start();
require_once "./Utils/View.php";

?>

<?php displayHTMLHeadHome() ?>

<div class="container-fluid">

    <?php

    if (!empty($_SESSION["firstname"])) {
        // displayHTMLHeaderHomeLog();
    } else {
        displayHTMLHeaderHome();
    }

    ?>

    <?php displayHTMLnavbar() ?>

    <img class="logo" src="images/logo-trans-bl-gd-300x300.png" alt="logo de l'entreprise">

    <?php displayHTMLsection() ?>

    


</div>
<?php displayHTMLfooter() ?>