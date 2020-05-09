<?php

    session_start();

$connexion =  mysqli_connect("localhost","root","","bigjob");
if (!isset($_SESSION["login"])) {
    

?>

<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="../CSS/bigjob.css">

</head>

<body id="inscription">
    
    <header>
    <?php include 'bar-nav.php' ?>
    </header>

                
                <br>
                <br>
     
        <div class="container">
               <h1 class="titre">Inscription</h1>
                <section class="form-row justify-content-center">
                <form method='POST' action='inscription.php'>
                <label> Login </label>
                <input class="form-control" type="text" name='login' required />
                <label> Nom </label>
                <input class="form-control" type="text" name='name' required />
                <label> Prenom </label>
                <input class="form-control" type="text" name='surname' required />
                <label> Mot de passe </label>
                <input class="form-control" type="password" name='mdp1' required />
                <label> Confirmation de mot de passe </label>
                <input class="form-control" type="password" name='mdp2' required />
                <label> Votre email </label>
                <input class="form-control"  type="email" pattern=".+@laplateforme.io" name='email' required />
                <br>
                <input class="btn btn-primary" type='submit' name='inscription' value='Inscription' />
            </div>
                <br>
                <br>
                <br>
                


            <?php

        if (isset($_POST['inscription']))
       {
            $login = $_POST['login'];
            $mdp= password_hash($_POST["mdp1"], PASSWORD_DEFAULT, array('cost' => 12));
            $name = $_POST['name'];
            $surn =$_POST['surname'];
            $email= $_POST['email'];

            if ($_POST['mdp1']==$_POST['mdp2'])
            {
                    $requet="SELECT* FROM utilisateurs WHERE login='".$login."'";
                    $query2=mysqli_query($connexion,$requet);
                    $resultat=mysqli_fetch_all($query2);
                    $trouve=false;
                foreach ($resultat as $key => $value) 
            {
            if ($resultat[$key][1]==$_POST['login'])
            {
               $trouve=true;
               echo "<p class='erreur'><b>Login déja existant!!</b></p>";
            }
           }
           if ($trouve==false)
           {
            $sql = "INSERT INTO utilisateurs (login,password,name,surname,rank,date,email)
                VALUES ('$login','$mdp','$name','$surn','Membre',NOW(),'$email')";
            $query=mysqli_query($connexion,$sql);
            header('location:connexion.php');
            }
           }
           else
           {
              echo "<p class='erreur'><b>Les mots de passe doivent être identique!</b></p>";
           }
        }

    ?>
        
        </form>
    </div>
        
    </section>
    <?php
    }
    else 
    {
    header("location:index.php");
    }
    ?>
        </form>
    </section>
     <?php include 'footer.php' ?>
    


   
               

</body>

</html>