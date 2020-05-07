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
            $cnx = mysqli_connect("localhost", "root", "","bigjob");
            if (isset($_SESSION["login"])) 
            {
                    $requete2 = "SELECT * FROM utilisateurs INNER JOIN reservations WHERE login='".$_SESSION['login']."'";
                    $query2 = mysqli_query($cnx, $requete2);
                    $resultat2 = mysqli_fetch_all($query2, MYSQLI_ASSOC);
                    var_dump($resultat2);
                    echo "Bonjour, " . $_SESSION["login"] . " vous êtes connecté vous pouvez passer une reservation.<br />";
            ?>
                   <article><h1>Veuillez entrer l' heure de réservation :</h1></article>
                   <form class="form_site" method="post" action="reservation-form.php">
                   <label for="datedebut"><b>Date debut</b></label>
                   <input type="date" name="datedebut" required> 
                   <label for="datefin"><b>Date fin</b></label>
                   <input type="date" name="datefin" required> 
                   <label for="heuredebut"><b>Heure debut</b></label>
                   <input type="time" name="heuredebut" min="08:00" max="18:00" required> 
                   <label for="heurefin"><b>Heure fin</b></label>
                   <input type="time" name="heurefin" min="09:00" max="19:00" required> 
                   <input id="envoyer"  type="submit" value="Valider" name="valider" />
                   </form>
            <?php
                    if ( isset($_POST["valider"]) )
                    {
                          
                          $heuredebut = " ".$_POST['heuredebut'];
                          $heurefin = " ".$_POST['heurefin'];
                          $date = date('Y-m-d H:i:s', strtotime($date));
                          
                          if ($enddate < $startdate) {
                              echo "Vous ne pouvez pas choisir une heure de fin antérieur à une heure de debut";
                          }
                          else{
                              $resaverif = "SELECT * FROM reservations WHERE (debut BETWEEN '$heuredebut' AND '$Heurefin') ";
                              $queryverif = mysqli_query($cnx, $resaverif);

                              $resultatverif = mysqli_fetch_all($queryverif, MYSQLI_ASSOC);


                              if(!empty($resultatverif)){
                                echo "Une réservation existe deja a cette heure";
                              }
                              else{
                              $requete = "INSERT INTO reservations (debut, fin, id_utilisateur) VALUES ( '$heuredebut', '$heurefin',".$resultat2[0].")";
                              $query = mysqli_query($cnx, $requete);

                              header('Location:reservation-form.php');
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
