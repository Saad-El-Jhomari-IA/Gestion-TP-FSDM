<?php
session_start();
if(isset($_SESSION["login"])) {

    $tableau=array("reseaux"=>"Resaux Informatique","ro"=>"Recherche operationnelle","web_dynamique"=>"Web Dynamique","base_de_donnee"=>"Base De Donnee","projet_tutore"=>"Projet Tutoree","projet_tutore2"=>"Projet Tutoree2");
    try {
        $cn1 = new PDO("mysql:host=localhost;dbname=tp;port=3306;charset=utf8", 'root', '');
       
    } catch(PDOException $erreur) {
        die("Erreur de connexion : " . $erreur->getMessage());
    }
    //     $req="SELECT * FROM liste_etudiant_tp WHERE nometudtp= '". $_SESSION['login']."';";
    //     $rep=  $cn1->query($req);
    //     if($rep==true){
    //         while($ligne1=$rep->fetch() ){ 
    //             if($ligne1["web_dynamique"]==1) { 
    //                 $tab[]= "web_dynamique";                 
    //            } 
    //            if($ligne1["reseaux"]==1){
    //                  $tab[]= "reseaux"; 
    //                  } 
    //           if($ligne1["ro"]==1){ 
    //                  $tab[]= "ro";
    //                  }
    //           if($ligne1["projet_tutore"]==1){ 
    //                  $tab[]= "projet_tutore";
    //                  } 
    //                  if($ligne1["projet_tutore2"]==1){
    //                 $tab[]= "projet_tutore2";
    //              } 
    //              if($ligne1["base_de_donnee"]==1){ 
    //                 $tab[]= "base_de_donnee";   } } 
    //             }





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
    

<div class="div1" style="margin-bottom: 60px;">
    <div class="row">
        <div class="col-md-5 ">
          <img  class="img4" src="assets/img/2.jpg" alt="IMG4" >
        </div> 
        <div class="col-md-6"> 
        <nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <div class="container-fluid">
        <ul class="navbar-nav">
        <li class="nav-item">
        </li>
        
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link "  style="color:blue;font-size:22px";  href="acceuil.php" style="color:blue;"> <B> FSDM </B></a>
        </li>
        <li class="nav-item">
        <a style="color:blue;font-size:22px; padding-left:50px;" class="nav-link" href="espace_etudiant_principale.php" style="color:BLUE;"><b>ACCEUIL</b></a>
        </li>
      

        <li class="nav-item">
            <a style="color:blue;font-size:22px; padding-left:50px;" class="nav-link" href="Etudiant.php" style="color:BLUE;"> <b>Espace d'étudiant</b> </a>
        </li>

        <li class="nav-item">
        <a style="color:blue;font-size:22px; padding-left:50px;" class="nav-link" href="DECONNEXION_etudiant.php" style="color:BLUE;"><b>Déconnexion</b> </a>
        </li>
         
             </ul>
            </div>
         </div>
         </nav>

        </div>
        <div class="col-md-1" style="width: 100px;height 30px;  ">
          <img  class="img rounded-circle"  style="width:100%;height:100%;"  src="assets/img/IMG.jpg" alt="IMG5">
        </div>       
    </div><a style=" font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;" href="espace_etudiant_principale.php">
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg>Retour Acceuil
	</a>
</div>






<div  class="container" >
    
    <h1 align="center" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;padding-bottom:30px;color:green"> Bienvenu dans votre profil d'étudiant</h1>

<!-- <div style="padding-left: 10px;">
<ul  >
    <li>
        <i class='fas fa-user-alt'></i> <h1 >  </h1>
    </li>
    </ul></div>
onclick
    
    <div style="padding-left: 10px;">
    <ul >
        <li>
       <a href="DECONNEXION_etudiant.php">Déconnexion</a>  
    </li>
    <li>
<a href="espace_etudiant_principale.php">Home</a></span>
    </li>
    </ul>
    


</div>
 -->


</div>




<!-- <div class="container" style="background-color: lightgray;padding-bottom:100px;padding-top:100px;border-radius:100px;"> -->

    <div  class="container" align="center">
        <div align="left"  class="card" style=" background-color:bisque;border: 1px solid blue; height:100%;width:60%;padding-left:100px">


            <h1 align="center" style="padding-right: 70px; font-family:DejaVu Sans Mono, monospace;font-style: italic" ><?=$_SESSION['login']?></h1>
            <div>

            </div>
            <div>
                
            </div>
            <h4>Votre cne est :               <?=$_SESSION['cne'] ?></h4>
            <h4>Votre filiére est :            Science Mathématique Informatique</h4>
            <h4>Votre pays est    :            MAROC</h4>
            



            <h3>Votre modules</h3>
            <?php
            $req="SELECT * FROM liste_etudiant_tp WHERE nometudtp= '". $_SESSION['login']."';";
                $rep=  $cn1->query($req);

                if($rep==true){?>
                    <ul>
                    <?php
                   
                    while($ligne1=$rep->fetch() ){ 
                        if($ligne1["web_dynamique"]==1) {  ?>
                     <li> <a href="mes_modules-1.php?codemodule=web_dynamique">Module web_dynamique PHP</a><br></li>   
                        <?php } if($ligne1["reseaux"]==1){ ?>
                     <li>  <a href="mes_modules-1.php?codemodule=reseaux">Module reseau informatique</a><br></li> 
                        <?php } if($ligne1["ro"]==1){  ?>
                       <li><a href="mes_modules-1.php?codemodule=ro">Module Recherche operationnelle</a><br></li> 
                        <?php } if($ligne1["projet_tutore"]==1){  ?>
                    <li> <a href="mes_modules-1.php?codemodule=projet_tutore">Module projet_tutore</a><br></li>   
                        <?php } if($ligne1["projet_tutore2"]==1){ ?>
                     <li>  <a href="mes_modules-1.php?codemodule=projet_tutore2">Module projet_tutore2</a><br></li> 
                        <?php } if($ligne1["base_de_donnee"]==1){  ?>
                      <li> <a href="mes_modules-1.php?codemodule=base_de_donnee">Module base_de_donnee</a><br></li> 
        
                 <?php   } } ?></ul> <?php } 
        
                ?>
       
        
        </div>

    </div>

<!--  
</div> -->





</body>
</html>




<?php
 } else{
    header("Location: acceuil.php");exit;
 } 
 ?>







