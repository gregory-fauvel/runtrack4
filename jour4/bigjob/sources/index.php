<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Accueil - Forum </title>
    <link rel="stylesheet" href="forum.css">
</head>

<body class="inscription">
    <header class="header">
    <?php include 'bar-nav.php' ?>
    </header>
    <main>

        <?php if (isset($_SESSION['login'])) { ?>

            <section id="conttexte">
                <p id="texte"> Bonjour  <?php echo $_SESSION['login']?> et bienvenue sur le site de présence de l école la plateforme </p>
            </section>

        <?php } else { ?>

            <section>
                <p> Bonjour </p>
            </section>
        <?php } ?>

    </main>

    
                <footer class="footer">
                     <aside> Copyright 2020 Coding School | All Rights Reserved | Project by Grégory. </aside>
                 </footer>

</body>

</html>