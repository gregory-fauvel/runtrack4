<?php


    session_start();
    $ismdpwrong = false;
    $isIDinconnu = false;
    $ischampremplis = false;

    if ( isset($_POST['connexion']) == true && isset($_POST['login']) && strlen($_POST['login']) != 0 && isset($_POST['password']) && strlen($_POST['password']) != 0 ) {
        $connexion = mysqli_connect("localhost", "root", "", "bigjob");
        $requete = "SELECT * FROM utilisateurs WHERE login ='".$_POST['login']."'";
        $query = mysqli_query($connexion, $requete);
        $resultat = mysqli_fetch_all($query);

        if ( !empty($resultat) ) {
            if ( password_verify($_POST['password'], $resultat[0][2]) )
                    {
                        $_SESSION['login'] = $_POST['login'];
                        $_SESSION['rank'] = $resultat[0][5];
                        $_SESSION['id'] = $resultat[0][0];
                        $_SESSION['password'] = $_POST['password'];
                        $_SESSION['email'] = $_POST['email'];
                        header('Location:index.php');
                    }
            else {
                $ismdpwrong = true;
            }
        }
        else {
            $isIDinconnu = true;
        }
        mysqli_close($connexion);
    }
    elseif ( isset($_POST['connexion']) == true && isset($_POST['login']) && strlen($_POST['login']) == 0 || isset($_POST['password']) && strlen($_POST['password']) == 0 ) {
        $ischampremplis = true;
    }

?>

<!DOCTYPE html>

<html>
<head>
    <title> Connexion</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="../CSS/bigjob.css">

    <meta charset="utf-8">
</head>
<body>

    <header class="header">
    <?php include("bar-nav.php"); ?>
    </header>
    <br>
    <br>
    <br>
    <br>
    <br>
    
            
                <?php
                if ( !isset($_SESSION['login']) ) {
                    ?>
        
                     <section class="container">
                        <h1 class="titre">Connexion</h1>
                        <div class="form-row justify-content-center">
                            <form method="post" action="connexion.php">
                            <label>Identifiant</label>
                            <input class="form-control" type="text" name="login" ><br />
                            <label>Mot de passe</label>
                            <input class="form-control" type="password" name="password" ><br />
                            <input class="btn btn-primary" type="submit" value="Se connecter" name="connexion" >
                        
                    </form>


                    <?php
                    if ( $ismdpwrong == true ) {
                    ?>
                        <p class="pincorrect">Identifiant ou mot de passe incorrect.</p>
                    <?php
                    }
                    elseif ( $isIDinconnu == true ) {
                    ?>
                        <p class="pincorrect">Cet identifiant n'exsite pas.</p>
                    <?php
                    }
                    elseif ( $ischampremplis == true ) {
                    ?>
                        <p class="pincorrect">Merci de remplir tous les champs!</p>
                    <?php
                    }
                    ?>
                    
                <?php
                }

                elseif ( isset($_SESSION['login']) ) {
                ?>
                    <center><p>ERREUR<br />
                    Vous êtes déjà connecté !</p></center>
            
                <?php
                }
                ?>
                </div>
        </section>
         <br>
    <br>
    <br>
    <br>
    <br> 
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
         <?php include("footer.php"); ?>
    
    </body>
</html>