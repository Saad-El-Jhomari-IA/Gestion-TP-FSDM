<!-- <!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="C:\xampp\phpMyAdmin\themes\bootstrap\css\theme.css.map">
   <script src="C:\xampp\phpMyAdmin\js\vendor\jquery\jquery.min"></script>
   <script src="C:\xampp\phpMyAdmin\js\vendor\bootstrap\bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSStp.css">
    <title>inscription</title>
</head>
<body style="  background-image: url(c4780e80062675b79837d46ff29612a8.jpg);">-->

<!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav> -->
<!-- <nav class="navbar" style="background-color: #e3f2fd;">
  
</nav> -->

  <!--  <div  class="container">
        <div  class="header" >
                 <h1 >Gestion des travaux pratiques  </h1>
    
        </div>
        <div class="containt"  >
        <div class="USER" >
        <span class="tp1">
     <a class="lien" href="Enseignant.php"><b>Espace Enseignant</b> </a>
</span>
        
   <span class="tp2">
    <a class="lien" href="Etudiant.php"> <b>Espace Etudiant</b> </a>
</span>    
</div>
       <span class="tp" >
     <a class="lien" href="Administration.php"><b>Espace Administration</b></a>
</span>
        </div>
    
        
    
   
   
    </div>

   
</body>
</html> -->
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="container">
        <div class="top">
            <div class="logo_area">
                <a href="#">
                    <img src="headermoodle.jpg" alt="headermoodle">
                    
                </a>
            </div>
            <div class="menu_area">
                <ul> <div>                    <li><a href="#">ACCEUIL  </a></li>
</div>
<div>                    <li><a href="#">CONCERNANT L'UNIVERSITE  </a></li>
</div>
<div>                    <li><a  href="Enseignant.php"> ENSEIGNANT  </a></li>
</div>
<div>                    <li><a  href="Etudiant.php">ETUDIANT  </a></li>
</div>
<div>                    <li><a  href="Administration.php">ADMINISTRATION</a></li>
</div>
                </ul>
            </div>
        </div>
        <div class="info">
            <h1>UNIVERSITY</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo voluptates voluptate quae aspernatur <br> consequatur consectetur maiores ipsam omnis distinctio ex.</p>

            <div class="btn">
                <button>GET AN ADMISSION</button>
            </div>
        </div>
    </div> 
</body>
</html> -->
<?php
 session_start();
 $_SESSION["nouvelle"]="ok"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/styleacceuil.css" rel="stylesheet">
    <title>Gestion DES TPS </title>
</head> 

<div class="div1">
    <div class="row">
        <div class="col-md-5 ">
          <img  class="img4" src="assets/img/2.jpg" alt="IMG4">
        </div> 
        <div class="col-md-6"> 
        <nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <div class="container-fluid">
        <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " style="color:blue;" href="fsdm.php"> <B> FSDM </B></a>
        </li>
        
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link "  href="acceuil.php" style="color:blue;"> <B> Acceuil </B></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Administration.php" style="color:BLUE;"><b>Espace Administration</b></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Enseignant.php" style="color:BLUE;"><b>Espace Enseignant</b> </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="Etudiant.php" style="color:BLUE;"> <b>Espace Etudiant</b> </a>
        </li>
         <li class="nav-item">
         <button  class="nav-link " onclick="scrollToBottom()"  style="color:BLUE;"> <b>Savoir plus </b></button>
          
                </li>
             </ul>
            </div>
         </div>
         </nav>

        </div>
        <div class="col-md-1" style="width: 100px;height 30px;  ">
          <img  class="img rounded-circle"  style="width:100%;height:100%;"  src="assets/img/IMG.jpg" alt="IMG5">
        </div>       
    </div>
</div>

<script>function scrollToBottom() {
  window.scrollTo({
    top: document.body.scrollHeight,
    behavior: "smooth"
  });
}</script>
<div class="container" style="background: linear-gradient(#0000006d, rgba(0, 0, 0, .5)), url(IMG3.jpg);height:auto;">
<div style="display: flex; justify-content: center; align-items: center;padding-top:20PX;">
   
<div style="background-color:#6456566d;width:700PX;height:170PX;display: flex;  justify-content: center; align-items: center;">
 <h2 class="text-center  text-capitalize " style="color:white;padding-top:20PX;font-size:60px;marging-top:-20PX;"> Bienvenu dans la page d'acceuil </h2>
</div>
</div>
<div  style="padding-top:100PX;color:white;">
    <h3 style="color:white;" > Voici les plateformes qui peut gérer le site: </h3>
</div>
<div class="container">
<div class="row" style="padding-top:30PX;">
<div class="col-md-4 " style="padding-left:30px;">
<div class="card" style="width: 19rem;">
  <img src="assets/img/img10.jpg" class="card-img-top" alt="img10" style="height:160PX;">
  <div class="card-body">
    <a  class="btn btn-primary text-center" href="Etudiant.php"style="font-size:20px; align:center;display: flex; justify-content: center;marging-left:20PX;"><b>ESPACE ETUDIANT</b></a>
    <p class="card-text alert alert-danger">Cette session concacre pour les étudiants !!</p>
    <div style="display: flex; justify-content: center;">
    <a href="Etudiant.php" class="btn btn-primary text-center">Accéder</a>
</div>
  </div>
</div>

</div> 
<div class="col-md-4 " style="marging-left:30px;">
<div class="card" style="width: 19rem;">
  <img src="assets/img/img11.jpg" class="card-img-top" alt="img11"style="height:160PX;">
  <div class="card-body">
  <a  class="btn btn-primary text-center" href="Enseignant.php"style="font-size:20px; align:center;display: flex; justify-content: center;marging-left:30PX;"><b>ESPACE ENSEIGNANT</b></a>
    <p class="card-text alert alert-danger ">Cette session concacre juste pour les enseignants !!</p>
    <div style="display: flex; justify-content: center;">
    <a href="Enseignant.php" class="btn btn-primary text-center">Accéder</a>
</div>
  </div>
</div>

</div> 
<div class="col-md-4 " style="marging-left:30px;">
<div class="card" style="width: 19rem;">
  <img src="assets/img/img6.jpg" class="card-img-top" alt="img6"style="height:160PX;">
  <div class="card-body">
  <a  class="btn btn-primary text-center" href="Administration.php"style="font-size:20px; align:center;display: flex; justify-content: center;"><b> ADMINISTRATION</b></a>
    <p class="card-text alert alert-danger" >Cette session concacre juste pour les Administrateurs !!</p>
    <div style="display: flex; justify-content: center;">
    <a href="Administration.php" class="btn btn-primary text-center">Accéder</a>
</div>
  </div>
</div>

</div> 
   

</div>
</div>

<div style="padding-top:90PX;">
  <h3   style="text-decoration: underline; text-decoration-color:  #534a4a; color: white; font-family: lato;font-size: 40px;" class="text-uppercase"> concernant le site web </h3>
   <div class="container" style="padding-top:30PX; border: 2px solid aqua;border-radius:30px;background-color: #d2cbcb;">
   <div style="marging-top:-20px;">
   <h5 class="text-capitalize" style="font-size: 30px;" > But de création: </h5></div>
   <div>
   <p> Pour tenter de résoudre les problèmes récurrents posés par la gestion des 
TP et vu que le besoin apparaît au service informatique et le manque d’informatisation
au service de la gestion manuelle des TPs informatique, on s’est mis d’accord de creer un site web dynamique qui permet geres ces problemes automatiquement</p> </div> 

  <div style="padding-top:20PX;font-size: 30px;"><h5  style="font-size: 30px;">  Fonctionnalités: </h5></div>

  <div style=" padding-left:100px;">
    <h5 style="font-size: 20px;text-decoration: underline; text-decoration-color:  #534a4a;"> Pour l'enseignant </h5>

    <ul   style=" padding-left:180px;">
    <li>Cet espace permettra la communication entre les enseignants et leur etudiants </li>
<li> Effectuer une réservation d’une salle de TP informatique </li>
<li> Annuler une réservation</li>
<li> Gestion de ses informations personnelles (y compris la modification)</li>
<li> Atribuer les notes</li>
<li>Gerer la presence </li>
<li>  Diposer les tps </li>

    </ul>
  </div>
  <div style=" padding-left:100px;">
    <h5 style="font-size: 20px;text-decoration: underline; text-decoration-color:  #534a4a;"> Pour l'etudiant </h5>
    <ul  style=" padding-left:180px;">
<li> Communication avec leur enseignants</li>
<li> Voir la repartition des groupes </li>
<li> Recevoir les notes des colles </li>
<li> Envoyer les rapports</li>
    </ul>
  </div>
  <div style=" padding-left:100px;">
    <h5 style="font-size: 20px;text-decoration: underline; text-decoration-color:  #534a4a;"> Pour l'administrateur </h5>
    <ul  style=" padding-left:200PX;">
<li>Gerer les utilisateurs</li>
<li> Consulter le planning des réservations  </li>
<li> Manipuler les salles  </li>
<li> Traiter les demandes</li>
    </ul>
  </div>


   </div>
</div> 



    </div>  







</body>    