<?php
session_start();
?>
<html>
<head>
<title>Info reservation</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php include("bar-nav.php"); ?>
<main>
  <H1>Info réservations</H1>
      <?php  
  $id_utilisateur=$_SESSION['id'];
  $cnx = mysqli_connect("localhost","root","","bigjob");
  $requete1 = "SELECT debut,fin,name FROM reservations LEFT JOIN utilisateurs ON utilisateurs.id = reservations.id_utilisateur WHERE id_utilisateur=$id_utilisateur";
  $query1 = mysqli_query($cnx, $requete1);
  $reservations=mysqli_fetch_all($query1);
  var_dump($reservations);
                  foreach ($reservations as $value) {
                      echo "<table id='contenue' width=400px>";
                      echo "<tr>";
                      echo "<th class='nom'>Nom</th>";
                      echo "<th class='nom'>Date début</th>";
                      echo "<th class='nom' >Date fin</th>";
                      echo "</tr>";
                      echo "<tr>";
                      echo "<td class='nom'>".$value[2]."</td>";
                      echo "<td class='nom'>".$value[0]."</td>";
                      echo "<td class='nom'>".$value[1]."</td>";
                      echo "</tr>";
                      echo "</table>";
  }
  ?>
 
    </section>
</section>
</main>
 <?php include("footer.php"); ?>
</body>
</html>