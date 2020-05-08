<?php session_start() ?>
<html>
<head>
<title>Formulaire - Web Agenda</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php include("bar-nav.php"); ?>
<main>

	 <?php
            date_default_timezone_set('Europe/Paris');
            $cnx = mysqli_connect("localhost", "root","","bigjob");
            if (isset($_SESSION["login"])) 
            {
                    $requete2 = "SELECT * FROM utilisateurs INNER JOIN reservations WHERE login='".$_SESSION['login']."'";
                    $query2 = mysqli_query($cnx, $requete2);
                    $resultat2 = mysqli_fetch_all($query2, MYSQLI_ASSOC);
                    var_dump($resultat2);
                    echo "Bonjour, " . $_SESSION["login"] . " vous êtes connecté vous pouvez passer une reservation.<br />";
            ?>
                  <article><h1>Veuillez entrer l' heure de réservation :</h1></article>
                  <form method="POST">
                  <input type="datetime-local" name="dateheuredebut">
                  <input type="datetime-local" name="dateheurefin">
                  <input id="envoyer"  type="submit" value="Valider" name="valider" />
                  </form>
            <?php
                    if ( isset($_POST["valider"]) )
                    {
                          
                          $dateheuredebut =$_POST['dateheuredebut'];

                          $dateheurefin =$_POST['dateheurefin'];
                          var_dump($dateheuredebut);
                           var_dump($dateheurefin);
                          
                          
                          if ( $dateheuredebut > $dateheurefin ) {
                              echo "Vous ne pouvez pas choisir une heure de fin antérieur à une heure de debut";
                          }
                          else{
                              $resaverif ="SELECT debut,fin FROM reservations WHERE debut= '$dateheuredebut'";
                              var_dump($resaverif);
                              $queryverif = mysqli_query($cnx, $resaverif);
                              $resultatverif = mysqli_fetch_all($queryverif, MYSQLI_ASSOC);
                              var_dump($resultatverif);                          
                              if(!empty($resultatverif)){
                                echo "Une réservation existe deja a cette heure";
                              }
                              else{
                              $requete = "INSERT INTO reservations (debut,fin,id_utilisateur) VALUES ('$dateheuredebut','$dateheurefin',".$_SESSION['id'].")";
                              var_dump($requete);
                              $query = mysqli_query($cnx, $requete);

                              
                              }   
                          } 
                    }
            } 
            else 
            {
                 echo "Bonjour Etudiant de la plateforme, Veuillez vous connecté afin de pouvoir reserver une heure.<br />";
               
            }

            mysqli_close($cnx);
            ?>
</section>
</main>
 <?php include("footer.php"); ?>
</body>
</html>
