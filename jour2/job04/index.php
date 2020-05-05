<!DOCTYPE html>
<html>
<head>
	<title>Job04</title>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
<br>
<br>
<main>
	<form>
		<i class="material-icons">check_box</i>
		<label>Civilité</label><br>
      	<label>
        <input name="group1" type="radio" />
        <span>Mr</span>
      	</label>
    	<label>
        <input name="group1" type="radio"/>
        <span>Mme</span>
      	</label><br>
      	<i class="material-icons">edit</i>
		<label>Nom</label><br>
		<input class="flow-text" type="text">
		<i class="material-icons">edit</i>
		<label>Prénom</label>
		<input class="flow-text" type="text">
		<i class="material-icons">edit</i>
		<label>Adresse</label>
		<input class="flow-text" type="text">
		<i class="material-icons">edit</i>
		<label>Email</label>
		<input type="email">
		<i class="material-icons">edit</i>
		<label>Votre password</label>
		<input type="password">
		<i class="material-icons">edit</i>
		<label>Confirmation password</label>
		<input type="password">
			<i class="material-icons">check</i>
		<label>Vos Passions</label>
		<br>
		<br>
		 <label>
        <input type="checkbox" checked="checked" />
        <span>Informatique</span><br>
      	</label>
		<label>
        <input type="checkbox" checked="checked" />
        <span>Voyage</span><br>
      	</label>
		 <label>
        <input type="checkbox" checked="checked" />
        <span>Lecture</span><br>
      	</label>
		 <label>
        <input type="checkbox" checked="checked" />
        <span>Sport</span><br>
      	</label>
      	<br>
		<br>
		<a class="waves-effect waves-light btn brown">Valider</a><br>
	</form>	
</main>
<br>
<br>
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