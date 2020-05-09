<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Accueil </title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="../CSS/bigjob.css">
</head>

<body class="inscription">
    <header class="header">
    <?php include 'bar-nav.php' ?>
    </header>
    <main>
       

        <?php if (isset($_SESSION['login'])) { ?>
                <h3 class="titre"> Bonjour  <?php echo $_SESSION['login']?> et bienvenue sur le site de présence de l école la plateforme </h3>
                   <div class="container justify-content-center">
                    <img class="justify-content-center col 10"  src="../assets/plate.jpg">
                    </div>
                    <br>
    

        <?php } else { ?>

            <section>
                <p class="titre"> Bonjour </p>
            </section>
        <?php } ?>

    </main>
  <?php include 'footer.php' ?>
    

</body>

</html>