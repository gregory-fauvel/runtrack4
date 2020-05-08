<?php
 session_start();
 ?>
<html>
<head>
    <meta charset="utf-8">
   
    <title>Réservation Camping</title>
</head>
<body id="planning">
    <header id="head">
       <?php
       include("bar-nav.php");
    if (isset($_SESSION['login']))
  {
       ?> 
    </header>

    <main id="corpplanning">
      <h1 id="titre">Calendrier</h1>

    <div id="jour">
      
              <form  method="post" action="planning.php">
              <input id="arriere" type="submit" name="precedent" value="">
              </form>
<?php
                   

                    $datejour = new DateTime("today");

                  

                    if (!isset($_SESSION["num"])) {
                        $_SESSION["num"] = 0;
                    }

                    if (isset($_POST["suivant"])) {
                        $_SESSION["num"] += 1;
                    }

                    if (isset($_POST["precedent"])) {
                        $_SESSION["num"] -= 1;
                    }

                    //echo $_SESSION["num"];

                    date_add($datejour, date_interval_create_from_date_string($_SESSION['num']." days"));

                    echo date_format($datejour, 'Y-m-d');

                    $dateselec = date_format($datejour, 'Y-m-d H-i-s');


?>

              <form  method="post" action="planning.php">
              <input id="avant" type="submit" name="suivant" value="">
              </form>
  

    <?php 
//requete qui recupere tout de l utilisateur
      $id_utilisateur=$_SESSION['id'];
      $connexion = mysqli_connect("localhost", "root", "","bigjob");
      $requete = "SELECT debut,fin FROM reservations WHERE \"$dateselec\" BETWEEN DATE_FORMAT(debut, \"%Y-%m-%d\") AND DATE_FORMAT(fin, \"%Y-%m-%d\"";
      $query = mysqli_query($connexion, $requete);
      $resultat = mysqli_fetch_all($query);
      var_dump($requete);
    
?>
<div id="tableau">
        <h3>Heures disponibles</h3>
            <table id="table">
                  <thead>
                        <tr>
                        <th></th>
                        <th>Lundi</th>
                        <th>Mardi</th>
                        <th>Mercredi</th>
                        <th>jeudi</th>
                        <th>Vendredi</th>
                  </thead>
              <tbody>

<?php
              for ($heure=9; $heure <18 ; $heure++) { 
                echo "<tr>";
                echo "<td>".$heure."H";

                        for ($jour=0; $jour <5 ; $jour++) { 
                              echo "<td>";
              
                            if ($heure[$jour]>= $jour){
                          echo "<div id=\"liens\"><a href=\"reservation.php\">Réservé</a></div>"; 
                                                }
                          else{
                           echo "<div id=\"lien\"><a href=\"reservation-form.php\">Disponible</a></div>";
                           }
          
                        echo "</td>";
           }
            echo "</tr>";
          }
    
?>
     </tbody>
   </table>
   </div>
 </main>
      
    
    
       <?php
        include("footer.php");
    }
    else 
   {
   ?>
    <section id="notcon">
      <p>Veuillez vous connecter pour accéder à votre page !</p>
    </section>
  <?php
  }

      
       ?> 
    
</body>
</html>



