<html>
<head>
	<meta charset="UTF-8">
	<title>moderateur</title>
	<?php
	include("../include/link.php");
	    session_start();

		$connexion =  mysqli_connect("localhost","root","","bigjob");
	?>
</head>
<body>
	<header>
		<?php
		include("../include/header.php");
		?>
	</header>

	<div id="containmodo"class="row">
		
		<?php
		include("../include/moderateur/reserv.php");
		include("../include/moderateur/accepter.php");

		?>

	</div>

			<?php
		include("../include/footer.php");
		?>
</body>
	
</html>