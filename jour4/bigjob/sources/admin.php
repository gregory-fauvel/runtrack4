 
<?php
session_start();
date_default_timezone_set('europe/paris');

    	if (isset($_SESSION['login'])==false)
    	{
       echo "<h3>Connectez vous et achetez maintenant";
    	}
    	elseif(isset($_SESSION['login'])==true)

    	{
       if($_SESSION['login'] =="admin")
       {
        $user = $_SESSION['login'];
            echo "<h3><b>Bonjour <u>$user,</u> vous êtes connecté.</b></h3>";
       }
       else
       {
        $user = $_SESSION['login'];
            echo "<h3><b>Bonjour <u>$user,</u> vous êtes connecté vous pouvez achetez.</b></h3>"; 
       }
    	}
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Espace Administrateur </title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="../CSS/bigjob.css">
		</head>
			<body id="pageadmin">
				<header>
				<?php
				include("bar-nav.php");?>
				</header>
				<h1 class="titre">Les réservations</h1>

						<section class="container">
							<div class="form-row justify-content-center">
								<img height="250" src="../assets/eleve.jpg">
							   	<?php

								if (isset($_POST['modifier'])) {
									$titre = $_POST['titre'];
									$rank =  $_POST['rank'];
									$id = $_SESSION['id'];
									$connexion = new PDO('mysql:host=localhost;dbname=bigjob', 'root', '');
									$requete2 = $connexion->prepare("UPDATE utilisateurs SET rank = '$rank' WHERE name= '$titre'");
									$requete2->execute();
								}
							  ?>
							</div>
							   <h1 class="titre">Modifier et Supprimer des RDV et Elèves </h1>
							<div class="form-row justify-content-center">
							  	  <form method="post">
								  	<label class="titre">Recherche Elèves</label></br>
							        <input class="form-control" type="text" name="titre" required></br>
							        <label> Modifier Grade</label></br>
							        <input class="form-control" type="text" name="rank"></br>
							        <input class="btn btn-primary" type="submit" value="modifier" name="modifier"></br>
							      </form>
							  
							
							   <?php

							   if (isset($_POST['effacer'])) {
							   		if (!empty($_POST['titre4']))
										{
										$titre4 = $_POST['titre4']; 
										$id = $_SESSION['id'];
										$connexion = new PDO('mysql:host=localhost;dbname=bigjob', 'root', '');
									    $requete3 = $connexion->prepare("DELETE FROM utilisateurs WHERE login = '$titre4'");
									    $requete3->execute();
									        			
				   						}						   	
							  		}	
		
							   		?>
							    
							    	<form method="post">
							           <label class="titre">Titre</label></br>
							           <input class="form-control" type="text" name="titre4" required></br>
							           <input class="btn btn-primary"type="submit" value="effacer" name="effacer"></br>
							    	</form>
							    </div>
							</section>
							   <?php include 'footer.php' ?>
							</body>
							</html>