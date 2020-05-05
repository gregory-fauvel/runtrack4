<!DOCTYPE html>
<html>
<head>
	<title>Job03</title>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
<header>

	<nav class="nav-wrapper brown" >
    	<ul id="nav-mobile" class="right hide-on-med-and-down ">
	        <li><a href="index.php">Inscription</a></li>
	        <li><a href="index.php">Connexion</a></li>
	        <li><a href="index.php">Rechercher</a></li>
    	</ul>
	</nav>
</header>
<main>
	<form>
		<label>Mme</label>
		<input type="radio" name="civil"><br>
		<label>Mr</label>
		<input type="radio" name="civil"><br>
		<label>Nom</label>
		<input type="text" name="nom">
		<label>Prénom</label>
		<input type="text" name="prenom">
		<label>Adresse</label>
		<input type="text" name="adresse">
		<label>Email</label>
		<input type="email" name="mail">
		<label>Votre password</label>
		<input type="password" name="mdp">
		<label>Confirmation password</label>
		<input type="password" name="mdp2">
		<label>Vos Passions</label>
		<label>Informatique</label>
		<input type="checkbox" name="passion"><br>
		<label>Voyages</label>
		<input type="checkbox" name="passion"><br>
		<label>Lecture</label>
		<input type="checkbox" name="passion"><br>
		<label>Sport</label>
		<input type="checkbox" name="passion"><br>
		<input type="button" name="ok" value="valider"><br>
	</form>	
</main>
      <footer class="page-footer brown">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Qui sommes nous?</h5>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Liens</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="index.php">Inscription</a></li>
                  <li><a class="grey-text text-lighten-3" href="index.php">Connexion</a></li>
                  <li><a class="grey-text text-lighten-3" href="index.php">Rechercher</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2020 Copyright Text by Grégory 
            </div>
          </div>
        </footer>

</body>
</html>