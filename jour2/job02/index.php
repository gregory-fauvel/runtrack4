<!DOCTYPE html>
<html>
<head>
	<title>Job02</title>
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
<footer>
	
</footer>

</body>
</html>