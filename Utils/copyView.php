<?php

require_once "Model.php";

function displayHTMLHeadHome()
{
?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="../vacancopoil/css/styles.css">
        <script src="../vacancopoil/js/script.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

        <title>Vacanc'Ô poil - Partez l'esprit tranquille</title>
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="95">
    <?php
}

function displayHTMLHeadPages()
{
    ?>
        <!DOCTYPE html>
        <html lang="fr">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
            <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
            <link rel="stylesheet" href="../vacancopoil/css/styles.css">
            <script src="../vacancopoil/js/script.js"></script>
            <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

            <title>Vacanc'Ô poil - Partez l'esprit tranquille</title>
        </head>

        <body>
        <?php
    }

    function displayHTMLHeaderHome()
    {
        ?>
            <header class="homepage">
                <div class="link">
                    <a class="btn btn-info" role="button" href="connexion.php"> Connexion petsitter</a>
                    <a class="btn btn-info" role="button" href="inscription.php"> Devenir un petsitter</a>
                </div>
                <h1 class="slogan">Partez l'esprit tranquille</h1>
                <p>Confiez la garde de votre animal à nos familles partenaires pour que lui aussi passe de super vacances</p>
                <a class="btn-lg btn-info btn-header" role="button" href="recherche.php"> Rechercher un petsitter</a>
            </header>
        <?php
    }




    function displayHTMLHeaderHomeLog()
    {
        ?>
            <header class="homepage">
                <div class="link">
                    <p>Bienvenue <?php echo $_SESSION['firstname'] ?>,</p>
                    <a class="btn btn-info" role="button" href="declaration.php"> Déclarer une prestation</a>
                    <a class="btn btn-info" role="button" href="deconnexion.php"> Deconnexion</a>
                </div>
                <h1 class="slogan">Partez l'esprit tranquille</h1>
                <p>Confiez la garde de votre animal à nos familles partenaires pour que lui aussi passe de super vacances</p>
                <a class="btn-lg btn-info btn-header" role="button" href="recherche.php"> Rechercher un petsitter</a>
            </header>
        <?php

    }


    function displayHTMLHeaderPages()
    {
        ?>
            <header class="headerPages">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#"> <a href="index.php"><img class="img-fluid" src="./images/cropped-logo-grand-owp.png" alt="Logo de Vacancopoil" align="center"></a></a>
                    <button class="navbar-toggler togglerPages" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="recherche.php">Recherche</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="connexion.php">Connexion / Inscription</a>
                            </li>
                        </ul>
                    </div>
                </nav>

            </header>
        <?php
    }

    function displayHTMLHeaderPagesLog()
    {

        ?>
            <header class="headerPages">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#"> <a href="index.php"><img class="img-fluid" src="./images/cropped-logo-grand-owp.png" alt="Logo de Vacancopoil" align="center"></a></a>
                    <button class="navbar-toggler togglerPages" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <p class="nav-link">Bonjour toto,</p>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="declaration.php">Déclarer une prestation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="deconnexion.php">Déconnexion</a>
                            </li>
                        </ul>
                    </div>
                </nav>

            </header>
        <?php

    }

    function displayHTMLfooter()
    {
        ?>
            <footer>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <p>Nous contacter :</p>
                            <p>Mail : contact@vacancopoil.fr</p>
                            <p>Téléphone : 06 21 55 22 30</p>
                        </div>
                        <div class="col-sm-12 col-md-4 mentions">
                            <a href="mentions_legales.php">Mentions légales</a>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <a href="./index.php"><img class="img-fluid" src="images/cropped-logo-petit-owp.png" alt="Logo de Vacancopoil"></a>
                        </div>
                    </div>
                </div>
            </footer>
        </body>

        </html>
    <?php
    }

    function displayHTMLnavbar()
    {
    ?>
        <nav class="navbar navbar-expand-md navbar-dark sticky-top">
            <a class="navbar-brand" href="#"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="myNavbar">
                <ul class="nav nav-pills navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#Pourquoi_nous">Pourquoi nous choisir</a></li>
                    <li class="nav-item"><a class="nav-link" href="#Deroulement">Déroulement</a></li>
                    <li class="nav-item"><a class="nav-link" href="#Qui-suis-je">Qui suis-je</a></li>
                    <li class="nav-item"><a class="nav-link" href="#Tarifs">Nos tarifs</a></li>
                </ul>
            </div>
        </nav>
    <?php
    }

    function displayHTMLsection()
    {
    ?>
        <div class="container-fluid s1">

            <section id="Pourquoi_nous" class="container">

                <h2>Le problème des refuges</h2>
                <p class="shelterItalic">
                    “Posséder un animal engendre des responsabilités, notamment lorsque vous voulez partir en vacances. Souvent la première solution envisagée est le refuge.
                    C’est une solution pratique, certes, mais ça s’arrête la. Le contact humain est quasi absent et votre animal ne dormira pas sur un bon coussin moelleux.
                    Sans aucun doute, vous récupérerez votre animal en bonne santé, mais ce sera tout.”
                </p>
                <h3 class="shelterH3">Ce que l'on vous propose!</h3>
                <p>
                    Chez <strong>Vacanc’Ô poil </strong>votre animal restera dans un cadre familial avec une présence humaine permanente. Il se nourrira avec vos croquettes et dormira sur son propre coussin. Nos familles partenaires sont toutes des passionnées, de ce fait, votre animal sera épanoui car il restera au centre de l’attention.
                </p>

            </section>

        </div>

        <div class="container">
            <section id="Deroulement">
                <h2>Comment ça se passe</h2>
                <div class="row">
                    <div class="col-sm">
                        <img src="images/image-comment-1-150x150.png" alt="Client amenant son animal">
                        <p>Déposez votre boule de poil chez le petsitter</p>
                    </div>
                    <div class="col-sm">
                        <img src="images/image-comment-2-150x150.png" alt="Client en vacances">
                        <p>Profitez de vos vacances l’esprit tranquille</p>
                    </div>
                    <div class="col-sm">
                        <img src="images/image-comment-3.png" alt="Client retrouvant son animal en pleine forme">
                        <p>Récupérez votre animal et à la prochaine</p>
                    </div>
                </div>
            </section>
        </div>

        <div class="container">
            <section id="Qui-suis-je">
                <h2>Qui suis-je</h2>
                <div class="row cat">
                    <div class="col-sm">
                        <p>
                            Je m’appelle Estelle Gardes et je garde des animaux depuis 3 ans. Durant ces années, j’ai rencontré de nombreuses familles et animaux incroyables qui m’ont poussé à créer ce projet. J’ai noué des liens très forts avec certains, comme avec ce chien Looky qui me saute dessus lorsque je le croise dans la rue, ou ce chat Guizmo qui a sa réserve personnelle de jouets chez moi. <br>
                            Tous les animaux que je garde, je les traitent comme si c’étaient les miens. Pour certains, leurs photos sont affichées chez moi aux cotés de ma famille.
                        </p>
                        <p>
                            Les gardes d’animaux à domicile apportent une vraie relation entre les petsitters et l’animal. Ils ne cherchent pas seulement à garder des animaux, ils souhaitent agrandir leur famille afin que votre animal se sente comme chez lui durant votre absence.
                        </p>
                    </div>
                    <div class="col-sm">
                        <img src="images/chat.jpg" alt="Photo d'un chat">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <img src="images/photo-benefice-2-1-1024x682.jpg" alt="Photo d'un chien">
                    </div>
                    <div class="col-sm">
                        <p>
                            C’est grâce à mon expérience en tant que petsitter que j’ai décidé d’ouvrir mon propre réseau de garde. Le bien-être de l’animal passe en priorité car c’est avant tout un membre à part entière de votre famille. Le but est que votre animal se trouve une “deuxième famille” lorsque vous êtes en vacances, qu’il ne souffre pas trop de votre absence et qu’il puisse s’épanouir, jouer et recevoir de l’attention en attendant votre retour.
                        </p>
                        <p>
                            Nous ne travaillons qu’avec des petsitters qui adhèrent et respectent cette philosophie. Ce sont tous des passionnés rempli d’amour et ils n’attendent qu’une chose, accueillir votre loulou.
                        </p>
                    </div>
                </div>
            </section>
        </div>

        <div class="container">
            <section id="Tarifs">
                <h2>Nos tarifs</h2>
                <div class="row">
                    <div class="col-sm borderblack1">
                        <p>Chat</p>
                        <p>12,00€/jour</p>
                    </div>
                    <div class="col-sm borderblack2">
                        <p>Chien</p>
                        <p>13,00€/jour</p>
                    </div>
                </div>
                <div class="col-sm borderblack">
                    <p>Visite chat à domicile</p>
                    <p>15,00€/visite</p>
                    <p>Une visite comprend le remplissage des gamelles, le nettoyage de la litière et un temps de jeu avec l’animal.</p>
                </div>
                <a class="btn btn-info btn-end" role="button" href="recherche.php">Rechercher un petsitter</a>
            </section>
        </div>
    <?php
    }

    function displayHTMLLogin()
    {
        $email = $emailError = $password = $passwordError = $login = "";
    ?>

        <div class="container">
            <div class="row divFormLogin">
                <div class="col-sm-12 ">
                    <form action="connexion.php" class="form formLogin" method="POST" role="form" enctype="multipart/form-data">
                        <div class="form-group col-md-8">
                            <label for="email">Adresse Email :</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Votre Email" value="<?php echo $email; ?>">
                            <span class="help-inline"><?php echo $emailError; ?></span>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="firstname">Mot de passe :</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Votre mot de passe" value="<?php echo $password; ?>">
                            <span class="help-inline"><?php echo $passwordError; ?></span>
                        </div>
                        <br>
                        <div class="form-actions col-md-8">
                            <button type="submit" class="btn btn-success">Connexion</button>
                            <a class="btn btn-info" role="button" href="index.php">Retour</a>
                        </div>
                        <br>
                        <div class="help-inline"><?php echo $login ?></div>
                        <p>Pas encore de compte? <a href="inscription.php">Inscrivez-vous !</a> </p>
                    </form>
                </div>
            </div>
        </div>
    <?php
    }

    function displayHTMLRegister()
    {
    ?>
        <div class="container">
            <form id="register-form" action="inscription.php" class="form formRegister" method="POST" role="form" enctype="multipart/form-data">
                <div class="row divFormRegister">

                    <div class="col-md-6 col-sm-12 formRegisterLeft">
                        <div class="form-group">
                            <label for="lastname">Nom : *</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="" required>
                            <!-- <p class="comments blue"></p> -->
                        </div>
                        <div class="form-group">
                            <label for="firstname">Prénom: *</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="" required>
                            <!-- <p class="comments blue"></p> -->
                        </div>
                        <div class="form-group">
                            <label for="phoneNumber">Numéro de téléphone : *</label>
                            <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="" required>
                            <!-- <p class="comments blue"></p> -->
                        </div>
                        <div class="form-group">
                            <label for="email">Email : * </label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="" required>
                            <!-- <p class="comments blue"></p> -->
                        </div>
                        <div class="form-group">
                            <label for="password"> Mot de passe : *</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="" required>
                            <!-- <p class="comments blue"></p> -->
                        </div>
                        <div class="form-group">
                            <label for="verifPassword">Confirmation mot de passe : *</label>
                            <input type="password" class="form-control" id="verifPassword" name="verifPassword" placeholder="" required>
                            <p class="comments blue"></p>
                        </div>
                        <div class="form-group">
                            <label for="street">Adresse (Numéro inclus) : *</label>
                            <input type="text" class="form-control" id="street" name="street" placeholder="" required>
                            <!-- <p class="comments blue"></p> -->
                        </div>
                        <div class="form-group">
                            <label for="zipcode">Code postal : *</label>
                            <input type="int" class="form-control" id="zipcode" name="zipcode" placeholder="" required>
                            <!-- <p class="comments blue"></p> -->
                        </div>
                        <div class="form-group">
                            <label for="city">Ville : *</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="" required>
                            <!-- <p class="comments blue"></p> -->
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="housingType">Type d'habitation : *</label> <br>
                            <select name="housingType" id="housingType" required>
                                <option value="Maison">Maison</option>
                                <option value="Appartement">Appartement</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="animals">Je possède des animaux : *</label> <br>
                            <select name="animals" id="animals" required>
                                <option value="Oui">Oui</option>
                                <option value="Non">Non</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Courte description : *</label> <br>
                            <textarea name="description" id="description" cols="30" rows="10" maxlength="255" required></textarea>
                            <!-- <p class="comments blue"></p> -->
                        </div>
                        <div class="form-group">
                            <label for="image">Votre photo : </label>
                            <input type="file" id="image" name="image">
                            <!-- <p class="comments blue"></p> -->
                        </div>
                    </div>
                </div>


                <div class="form-actions col-md-8 btnRegister">
                    <div class="col-md-12">
                        <strong class="blue">* Ces informations sont requises.</strong></p>
                    </div>
                    <button type="submit" class="btn btn-success">S'inscrire</button>
                    <a class="btn btn-info" role="button" href="index.php">Retour</a>
                </div>
                <p>Déjà un compte chez nous? <a href="connexion.php">Connectez-vous !</a></p>
            </form>
        </div>

    <?php
    }

    function displayHTMLdisconnect()
    {
    ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                    <br>
                    <form action="deconnexion.php " class="form formDisconnect" method="POST" role="form">
                        <input type="hidden" name="id" value="id"></input>
                        <!--Récupére la valeur de mon ID du POST dans un input invisible à l'utilisateur. -->
                        <p class="alert" align="center">Etes vous sur de vouloir vous déconnecter?</p>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"> Oui</button>
                            <a class="btn btn-info" role="button" href="index.php"> Non</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <?php
    }

    function displayHTMLFormContact()
    {
    ?>

        <div class="container">
            <div class="row " align="center">
                <div class="col-sm-12">

                    <form id="contact-form" method="post" action="" role="form">
                        <div class="col-md-6">
                            <label for="name">Nom prénom : <span class="white">*</span></label>
                            <input id="name" type="text" name="name" class="form-control" placeholder="Votre nom et votre prénom">
                            <p class="comments blue"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email : <span class="white">*</span></label>
                            <input id="email" type="text" name="email" class="form-control" placeholder="Votre Email">
                            <p class="comments blue"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="phone">Numéro de téléphone : </label>
                            <!-- Renseigner le type "tel" permet notamment sur mobile d'afficher que le clavier numérique sans l'alphabet. -->
                            <input id="phone" type="tel" name="phone" class="form-control" placeholder="Votre Téléphone">
                            <p class="comments blue"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="address">Adresse complète : <span class="white">*</span></label>
                            <input id="address" type="text" name="address" class="form-control" placeholder="Votre adresse">
                            <p class="comments blue"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="service">Prestation : <span class="white">*</span></label><br>
                            <select name="service" id="service" required>
                                <option value="Garde de chat">Garde chat</option>
                                <option value="Garde de chien">Garde chien</option>
                                <option value="Visite chat">Visite chat</option>
                                <p class="comments blue"></p>
                            </select>
                        </div><br>
                        <div class="col-md-6">
                            <label for="startDate">Date de début : <span class="white">*</span></label><br>
                            <input type="date" id="startDate" name="startDate" min="2018-01-01" max="2018-12-41">
                            <p class="comments blue"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="endDate">Date de fin : </label><br>
                            <input type="date" id="endDate" name="endDate" min="2018-01-01" max="2018-12-41">
                            <p class="comments blue"></p>
                        </div><br>
                        <div class="col-md-10">
                            <label for="message">Message : <span class="white">*</span></label>
                            <textarea id="message" name="message" class="form-control" placeholder="Votre Message" rows="4"></textarea>
                            <p class="comments blue"></p>
                        </div>
                        <div class="col-md-12">
                            <strong class="blue">* Ces informations sont requises.</strong></p>
                        </div>
                        <div class="form-actions col-md-8">
                            <button type="submit" class="btn btn-success">Envoyer</button>
                            <a class="btn btn-info" role="button" href="recherche.php">Retour</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    <?php
    }

    function displayHTMLDeclarationForm()
    {
    ?>
        <div class="container">
            <div class="row" align="center">
                <div class="col-sm-12">
                    <form id="declaration-form" method="post" action="" role="form">
                        <h3>Petsitter</h3>
                        <div class="col-md-6">
                            <label for="lastnamePetsitter">Nom : <span class="white">*</span></label>
                            <input id="lastnamePetsitter" type="text" name="lastnamePetsitter" class="form-control" placeholder="Nom du petsitter">
                            <p class="comments blue"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="firstnamePetsitter">Prénom</label> : <span class="white">*</span></label>
                            <input id="firstnamePetsitter" type="text" name="firstnamePetsitter" class="form-control" placeholder="Prénom du petsitter">
                            <p class="comments blue"></p>
                        </div>
                        <div class="divider"></div>
                        <h3>Client</h3>
                        <div class="col-md-6">
                            <label for="lastnameClient">Nom : <span class="white">*</span></label>
                            <input id="lastnameClient" type="text" name="lastnameClient" class="form-control" placeholder="Nom du client">
                            <p class="comments blue"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="firstnameClient">Prénom</label> : <span class="white">*</span></label>
                            <input id="firstnameClient" type="text" name="firstnameClient" class="form-control" placeholder="Prénom du client">
                            <p class="comments blue"></p>
                        </div>
                        <div class="divider"></div>
                        <h3>Prestation</h3>
                        <div class="col-md-6">
                            <label for="service">Prestation : <span class="white">*</span></label><br>
                            <select name="service" id="service" required>
                                <option value="">--Choisir une prestation--</option>
                                <option value="Garde de chat">Garde chat</option>
                                <option value="Garde de chien">Garde chien</option>
                                <option value="Visite chat">Visite chat</option>
                                <p class="comments blue"></p>
                            </select>
                        </div><br>
                        <div class="col-md-6">
                            <label for="startDate">Date de début : <span class="white">*</span></label><br>
                            <input type="date" id="startDate" name="startDate" min="2018-01-01" max="2018-12-41">
                            <p class="comments blue"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="endDate">Date de fin : <span class="white">*</span></label><br>
                            <input type="date" id="endDate" name="endDate" min="2018-01-01" max="2018-12-41">
                            <p class="comments blue"></p>
                        </div><br>
                        <div class="col-md-10">
                            <label for="message">Message : <span class="white">*</span></label>
                            <textarea id="message" name="message" class="form-control" placeholder="Votre Message" rows="4"></textarea>
                            <p class="comments blue"></p>
                        </div>
                        <div class="col-md-12">
                            <strong class="blue">* Ces informations sont requises.</strong></p>
                        </div>
                        <div class="form-actions col-md-8">
                            <button type="submit" class="btn btn-success">Envoyer</button>
                            <a class="btn btn-info" role="button" href="index.php">Retour</a>
                        </div>

                    </form>
                    <?php echo $_POST['service']; ?>
                </div>
            </div>
        </div>


    <?php
    }
