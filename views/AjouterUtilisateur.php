<?php
include_once '../Model/Utilisateur.php';
include_once '../Controller/UtilisateurC.php';

$error = "";

// create user
$user = null;

// create an instance of the controller
$userC = new UtilisateurC();
if (
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["email"]) &&
    isset($_POST["login"]) &&
    isset($_POST["pass"])&&
    isset($_POST["confirm"]) &&
    isset($_POST["date_de_naissance"]) &&
    isset($_POST["nationalite"]) &&
    isset($_POST["num"]) 
) {
    if (
        !empty($_POST["nom"]) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["login"]) &&
        !empty($_POST["pass"]) &&
        isset($_POST["confirm"]) &&
        isset($_POST["date_de_naissance"]) &&
        isset($_POST["nationalite"]) &&
        isset($_POST["num"]) 
    ) {
        $user = new Utilisateur(
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['login'],
            $_POST['pass'],
            $_POST['confirm'],
            $_POST['date_de_naissance'],
            $_POST['nationalite'],
            $_POST['num']
        );
        $userC->ajouterUtilisateur($user);
        header('Location:connexion.php');
    }
    else
        $error = "Missing information";
}


?>
<!DOCTYPE html>
<html lang="en">
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>
<body>


<body>
<button><a href="Connexion.php">Vous avez deja un compte, Sign in</a></button>


<div id="error">
    <?php echo $error; ?>
</div>

<form class="splash-container" action="" method="POST">
<div class="card">
<div class="card-header">
                <h3 class="mb-1">Formulaire d'inscription</h3>
                <p>Veuillez entrer vos informations d'utilisateur.</p>
            </div>
<div class="card-body">
            <div class="form-group">
            <input class="form-control form-control-lg" type="text" name="nom" id="nom" placeholder="nom"maxlength="20">
            </div>

            <div class="form-group">
           <input class="form-control form-control-lg"type="text" name="prenom" id="prenom" placeholder="prenom"maxlength="20"></td>
                </div>
                <div class="form-group">
                <input class="form-control form-control-lg"type="email" name="email" id="email" placeholder="email"pattern=".+@gmail.com|.+@esprit.tn">
                </div>
            <div class="form-group">
            <input class="form-control form-control-lg"type="date" name="date_de_naissance" placeholder="date_de_naissance"id="date_de_naissance" >
                </div>
            <div class="form-group">
          <input class="form-control form-control-lg"type="text" name="nationalite" id="nationalite"placeholder="nationalite" maxlength="20">
                </div>
                <div class="form-group">
       <input class="form-control form-control-lg"type="text" name="num" placeholder="num"id="num" >
                </div>
                <div class="form-group">
                <input class="form-control form-control-lg"type="text" name="login" placeholder="login"id="login" >
                </div>           
                 <div class="form-group">
                <input class="form-control form-control-lg"type="password" name="pass" placeholder="pass"id="pass">
                </div>
            <div class="form-group">
            <td><input class="form-control form-control-lg"type="password" name="confirm" placeholder="confirm"id="confirm" ></td>
                </div>
                <div class="form-group pt-2">
                <input type="submit" value="Envoyer"class="btn btn-block btn-primary">
                <input type="reset" value="Annuler"class="btn btn-block btn-primary" >
                </div>
                </div>
                </div>

</form>
</body>
</html>