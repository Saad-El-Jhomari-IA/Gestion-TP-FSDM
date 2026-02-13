<?php
session_start();
if(isset($_SESSION["login"])) {

    $tableau=array("reseaux"=>"Resaux Informatique","ro"=>"Recherche operationnelle","web_dynamique"=>"Web Dynamique","base_de_donnee"=>"Base De Donnee","projet_tutore"=>"Projet Tutoree","projet_tutore2"=>"Projet Tutoree2");
    try {
        $cn1 = new PDO("mysql:host=localhost;dbname=tp;port=3306;charset=utf8", 'root', '');
       
    } catch(PDOException $erreur) {
        die("Erreur de connexion : " . $erreur->getMessage());
    }
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/styleacceuil.css" rel="stylesheet">
<link href="assets/css/style12.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Document</title>
</head>
<body>

<div class="row" style="padding-bottom: 0px;">

  <div class="col-md-2" style="">
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="  padding-left:10px;height: 70px;">
  <a class="nav-link " href="Profil1.php" style="color:black;font-size:20px; padding-left:25px;"><i style="font-size: 30px;" class="fa-solid fa-user fa-beat"></i></a>
  <a class="nav-link " href="Profil1.php" style="color:black;font-size:20px; padding-left:25px;"> <?=$_SESSION['login'] ?></a>
  </nav>
  </div>


<div class="col-md-4" style="">
<img  class="img4" src="assets/img/2.jpg" alt="img4"  style=" width:100%; height:70px;" >
 </div>
<div class="col-md-5">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <div class="collapse navbar-collapse" id="navbarNav" style="height:53px;">
        <a class="nav-link "  href="espace_enseignant_principale.php" style="color:blue;font-size:22px; padding-left:10px;"><b>Acceuil</b> </a>
       </div>

  
        <div class="collapse navbar-collapse" id="navbarNav">
        <a class="nav-link "  href="DECONNEXION_enseignant.php" style="color:blue;font-size:22px; padding-left:10px;"><b>Déconnexion</b> </a>
       </div>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="color:blue;font-size:22px; padding-left:10px;"><b>Mes Groupes</b></a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php
      $req="SELECT * FROM groupesen where module='". $_SESSION["code_module"]."' and  cneens='".$_SESSION['cne']."';";
        $rep=  $cn1->query($req);
        if($rep==true){
            while($ligne1=$rep->fetch() ){ 
                if($ligne1["gr1"]==1) {  ?>
               <a class="dropdown-item"href="groupe.php?code_module=<?=$_SESSION["code_module"]?>&vale=<?= $ligne1["gr1"]?> "> Groupe 1 </a><br>
                <?php } if($ligne1["gr2"]==2){ ?>
                    <a class="dropdown-item"href="groupe.php?code_module=<?=$_SESSION["code_module"]?>&vale=<?= $ligne1["gr2"]?> "> Groupe 2 </a><br>
                <?php } if($ligne1["gr3"]==3){  ?>
                    <a class="dropdown-item"href="groupe.php?code_module=<?=$_SESSION["code_module"]?>&vale=<?= $ligne1["gr3"]?> "> Groupe 3 </a><br>
                <?php } if($ligne1["gr4"]==4){  ?>
                    <a class="dropdown-item"href="groupe.php?code_module=<?=$_SESSION["code_module"]?>&vale=<?= $ligne1["gr4"]?> "> Groupe 4 </a><br>
                <?php } if($ligne1["gr5"]==5){ ?>
                    <a class="dropdown-item"href="groupe.php?code_module=<?=$_SESSION["code_module"]?>&vale=<?= $ligne1["gr5"]?> "> Groupe 5 </a><br>
                <?php } if($ligne1["gr6"]==6){  ?>
                    <a class="dropdown-item"href="groupe.php?code_module=<?=$_SESSION["code_module"]?>&vale=<?= $ligne1["gr6"]?> "> Groupe 6 </a><br>
         <?php   } } } 

        ?>
















         
          <div class="dropdown-divider"></div>
          <!-- <div  ><a class="btn btn-primary "  href="DECONNEXION_etudiant.php" style="font-size:22px; padding-left:10px;"><b>Deconnexion</b> </a></div> -->
          <div style="display: flex; justify-content: center; ">
    <a  href="DECONNEXION_enseignant.php" style="font-size:16px; padding-left:5px;" class="btn btn-primary text-center">Deconnexion</a>
</div>
          <script>
  // Sélectionnez le bouton de menu déroulant
  var dropdownButton = document.querySelector('.dropdown-toggle');

  // Ajouter un gestionnaire d'événements de clic au bouton de menu déroulant
  dropdownButton.addEventListener('click', function() {
    // Sélectionnez le menu déroulant
    var dropdownMenu = document.querySelector('.dropdown-menu');

    // Basculer la classe "show" sur le menu déroulant pour l'afficher
    dropdownMenu.classList.toggle('show');
  });
</script>

        </div>
      </li>
  </div>
</nav>

        </div>
 <div class="col-md-1" style="padding-right:30px;">
 <img  class="img rounded-circle"  style="width:100%;height:100%;"  src="assets/img/IMG.jpg" alt="IMG5">
 </div>
 <a style=" font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;cursor: pointer;" onclick="window.history.back()" >
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg>Retour 
	</a>
 
 </div>








<div  class="container" >
    
    <h1 align="center" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;padding-bottom:30px;color:green"> Bienvenue dans votre profil d'enseignant</h1>



</div>


    <div  class="container" align="center">
        <div align="left"  class="card" style=" background-color:bisque;border: 1px solid blue; height:100%;width:60%;padding-left:100px;padding-top:40px;">


            <h1 align="center" style="padding-right: 70px; font-family:DejaVu Sans Mono, monospace;font-style: italic" ><?=$_SESSION['login']?></h1><hr>
         
            <h4 style="margin-top: 20px;">Votre code est :             <?=$_SESSION['cne'] ?></h4><hr>
            <h4 style="margin-top: 20px;">Votre filiére est :          Science Mathématique Informatique</h4><hr>
            <h4 style="margin-top: 20px;">Votre pays est :             MAROC</h4><hr>
            



            <h3 style="margin-top: 20px;">Votre modules</h3><hr>
            <?php
            $req="SELECT * FROM enseignant WHERE nomen= '". $_SESSION['login']."';";
                $rep=  $cn1->query($req);

                if($rep==true){?>
                    <ul>
                    <?php
                   
                    while($ligne1=$rep->fetch() ){ 
                        if($ligne1["web_dynamique"]==1) {  ?>
                     <li>  Web dynamique PHP<br></li>   
                        <?php } if($ligne1["reseaux"]==1){ ?>
                     <li>   Reseau informatique<br></li> 
                        <?php } if($ligne1["ro"]==1){  ?>
                       <li> Recherche operationnelle<br></li> 
                        <?php } if($ligne1["projet_tutore"]==1){  ?>
                    <li>  Projet_tutore<br></li>   
                        <?php } if($ligne1["projet_tutore2"]==1){ ?>
                     <li>  Projet_tutore2<br></li> 
                        <?php } if($ligne1["base_de_donnee"]==1){  ?>
                      <li>  Base de donnée<br></li> 
        
                 <?php   } } ?></ul> <?php } 
        
                ?>
       
        
        </div>

    </div>









<?php
 } else{
    header("Location: acceuil.php");exit;
 } 
 ?>