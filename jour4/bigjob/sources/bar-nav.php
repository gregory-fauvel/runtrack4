
  <?php
    if (isset($_SESSION['login'])==false)
    {
    ?>
  

 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand"><img height="100" width="150" src="../assets/plateforme.png"></a>
    <span class="navbar-toggler-icon"></span>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="index.php">Home</a>
      <a class="nav-item nav-link" href="connexion.php">Connexion</a>
      <a class="nav-item nav-link" href="inscription.php">Inscription</a>
    </div>
  </div>
</nav>

    
     <?php
    }
     elseif(isset($_SESSION['login'])==true)

    {
       if($_SESSION['login'] =="admin")
       {
       
    ?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand"><img height="100" width="150" src="../assets/plateforme.png"></a>
  <span class="navbar-toggler-icon"></span>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="index.php">Home</a>
      <a class="nav-item nav-link" href="calendrier.php">Planning</a>
      <a class="nav-item nav-link" href="index.php?deconnexion=true">Déconnexion</a>
      <a class="nav-item nav-link" href="admin.php">Admin</a>
    </div>
  </div>
</nav>
    
 
     <?php
                
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      header("location:index.php");
                   }
                }
     
    }
    else
    {   
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand"><img height="100" width="150" src="../assets/plateforme.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="index.php">Home</a>
      <a class="nav-item nav-link" href="profil.php">Profil</a>
      <a class="nav-item nav-link" href="calendrier.php">Planning</a>
      <a class="nav-item nav-link" href="index.php?deconnexion=true">Déconnexion</a>
      
    </div>
  </div>
</nav>
 
     <?php
                
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      header("location:index.php");
                   }
                }
    
              }
      
            }
             
    ?>