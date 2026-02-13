
<?php 
    session_start();
    ini_set('post_max_size', '16M');
    include("function.php");
    if(isset( $_GET["tp"])){
        $_SESSION["tp"] =  $_GET["tp"];
    }
    $cn1 = new PDO("mysql:host=localhost;dbname=tp;port=3306;charset=utf8", 'root', '');
    $x=0;
    $moduul=array("web_dynamique"=>"Web Dynamique","ro"=>"Recherche Operationnel","reseaux"=>"Resaux Informatique","base_de_donnee"=>"Base De Donnee","	projet_tutore"=>"	projet Tutore","projet_tutore2"=>"projet Tutore 2");


    if(isset($_POST["submit"])){
       // echo"avant poste    apres poste  ".$_POST["nometud"];
       // echo"".$_POST["note"]." where note = ".$x." and module = '".$_SESSION["code_module"]."' and groupe = ".$_SESSION["vale"]." and tp =".$_SESSION["tp"]." and nomprof='".$_SESSION['login']."' and nometud='".$_POST["nometud"]."';";
    $req2="UPDATE fichier_etudiant  SET note = ".$_POST["note"]." where note = ".$x." and module = '".$_SESSION["code_module"]."' and groupe = ".$_SESSION["vale"]." and tp =".$_SESSION["tp"]." and nomprof='".$_SESSION['login']."' and nometud='".$_POST["nometud"]."';";
     $rep2=$cn1->exec($req2);
    }
    if(isset($_POST["submite"])){
      
       // echo"".$_POST["note"]." where note = ".$x." and module = '".$_SESSION["code_module"]."' and groupe = ".$_SESSION["vale"]." and tp =".$_SESSION["tp"]." and nomprof='".$_SESSION['login']."' and nometud='".$_POST["nometud"]."';";
    $req2="UPDATE fichier_etudiant  SET note = ".$_POST["note"]." where  module = '".$_SESSION["code_module"]."' and groupe = ".$_SESSION["vale"]." and tp =".$_SESSION["tp"]." and nomprof='".$_SESSION['login']."' and nometud='".$_POST["nometud"]."';";
     $rep2=$cn1->exec($req2);
    }
   
   ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
      <a class="nav-link "  href="espace_enseignant_principale.php" style="color:blue;font-size:20px; padding-left:10px;"><b>Acceuil</b> </a>
     </div>


      <div class="collapse navbar-collapse" id="navbarNav">
      <a class="nav-link "  href="#" style="color:blue;font-size:20px; padding-left:10px;"><b>Smi</b> </a>
     </div>
     <div class="collapse navbar-collapse" id="navbarNav">
      <a class="nav-link "  href="#" style="color:blue;font-size:20px; padding-left:10px;"><b>Semestre 6</b> </a>
     </div>
     <div class="collapse navbar-collapse" id="navbarNav">
      <a class="nav-link "  href="DECONNEXION_enseignant.php" style="color:blue;font-size:20px; padding-left:10px;"><b>Deconnexion</b> </a>
     </div>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="color:blue;font-size:20px; padding-left:10px;"><b>Mes Groupes</b></a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <?php
    $req="SELECT * FROM groupesen where module='". $_SESSION["code_module"]."' and  cneens='".$_SESSION['cne']."';";
      $rep=  $cn1->query($req);
      if($rep==true){
          while($ligne1=$rep->fetch() ){ 
              if($ligne1["gr1"]==1) {  ?>
             <a class="dropdown-item"href="groupe.php?code_module=<?=$_SESSION["code_module"]?>&vale=<?= $ligne1["gr1"]?> "> groupe 1 </a><br>
              <?php } if($ligne1["gr2"]==2){ ?>
                  <a class="dropdown-item"href="groupe.php?code_module=<?=$_SESSION["code_module"]?>&vale=<?= $ligne1["gr2"]?> "> groupe 2 </a><br>
              <?php } if($ligne1["gr3"]==3){  ?>
                  <a class="dropdown-item"href="groupe.php?code_module=<?=$_SESSION["code_module"]?>&vale=<?= $ligne1["gr3"]?> "> groupe 3 </a><br>
              <?php } if($ligne1["gr4"]==4){  ?>
                  <a class="dropdown-item"href="groupe.php?code_module=<?=$_SESSION["code_module"]?>&vale=<?= $ligne1["gr4"]?> "> groupe 4 </a><br>
              <?php } if($ligne1["gr5"]==5){ ?>
                  <a class="dropdown-item"href="groupe.php?code_module=<?=$_SESSION["code_module"]?>&vale=<?= $ligne1["gr5"]?> "> groupe 5 </a><br>
              <?php } if($ligne1["gr6"]==6){  ?>
                  <a class="dropdown-item"href="groupe.php?code_module=<?=$_SESSION["code_module"]?>&vale=<?= $ligne1["gr6"]?> "> groupe 6 </a><br>
       <?php   } } } 

      ?>
















       
        <div class="dropdown-divider"></div>
        <!-- <div  ><a class="btn btn-primary "  href="DECONNEXION_etudiant.php" style="font-size:22px; padding-left:10px;"><b>Deconnexion</b> </a></div> -->
        <div style="display: flex; justify-content: center; ">
  <a  href="DECONNEXION_enseignant.php" style="font-size:16px; padding-left:5px;" class="btn btn-primary text-center">Déconnexion</a>
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

 
 </div>
















<div class="container" style="margin-top: -32px;">
<div class="container">
<div class="container">
<div class="container" style="background-image: url('img105.jpg');">

<a style=" font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;cursor: pointer;" onclick="window.history.back()" >
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg>Retour 
	</a>
 
<div style="padding-left: 40px;">

  <h1 style="font-family:Brush Script MT, Brush Script Std, cursive;font-size:xxxx-large"><?= $moduul[$_SESSION["code_module"]]?></h1>
</div>


<div class="container" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
  
<h1  align="center">Note des étudiants semaine <?=$_SESSION["tp"]?></h1>


    <?php
 
 $req="SELECT * from fichier_etudiant where   module = '".$_SESSION["code_module"]."' and groupe = ".$_SESSION["vale"]." and tp =". $_SESSION["tp"]." and nomprof='".$_SESSION['login']."';";
 $rep2=$cn1->query($req);
    if($rep2){
        $row=$rep2->fetchAll(PDO::FETCH_ASSOC);
        if(count($row)>0){ ?>

  <div style=" padding-top:90px;"> 

      <?php  foreach($row as $ligne1){
      if($ligne1["note"] ==0)  {?>
          
          <div style="border-radius:70px;margin-top: 20px;margin-left:100px;margin-right:100px;width:950px;margin-bottom:30px;background-color:white;border: 10px solid orange;height:600px;"> 

           
            <div style="padding-top: 10px;padding-left:10px;border:3px;">
  <p align="left"  style="font-size: 30px;font-family:Comic Sans MS, Comic Sans, cursive;color:blueviolet"><?php echo"".$ligne1["nometud"]?></p>
</div>
<div  style="padding-left:120px;">  
<div>  <p align="left" style="font-size: xx-large;font-family:URW Chancery L, cursive;">Rapport</p>  </div>
      <div style="padding-left: 120px;margin-top:-20px;">  <a  class="btn btn-primary" href="telecharger_fichier_etudiant.php?id=<?php echo"".$ligne1["id"]?>"><?=$ligne1["nom_fichier"]; ?></a></div>
       
         <div style="padding-top: 30px;padding-left:50px; width:360px;">
            <p class="alert alert-danger  text text-center" style="font-size:25px;" >Aucune note jusqu'a présent  </p>
      </div>


      <div  style="padding-left: 380px;padding-top:30px;padding-bottom:30px;" >  <form  method="post">
     <div style="padding-bottom:30px;"> <label class="custom-control-label" for="customCheck1" style="padding-right: 6px;"> Note</label>
  <input type="number" class="custom-control-input" id="customCheck1"name ="note"   min="0" max="20" step="0.25" required >
     </div>
<div  style="padding-bottom:30px;padding-left:0px;">
<label class="custom-control-label" for="customCheck2" style="padding-right: 6px;">Etudiant</label>
 <select name="nometud" id="customCheck2">
   
   <option value="<?=$ligne1["nometud"]?>" name="etud"> <?=$ligne1["nometud"]?> </option> 
  
</select></div>



<div  style="padding-bottom:30px;padding-left:80px;width:30px;"><input class="btn btn-success" type="submit" value="valider" name="submit"></div>
</form> </div>








           
</div>
  </div>      
        <?php
         }else{?>

<div style="border-radius:70px;margin-top: 20px;margin-left:100px;margin-right:100px;width:950px;margin-bottom:30px;background-color:white;border: 10px solid orange;height:550px;"> 
      
       <div style="padding-top:20px;padding-left:10px;">
  <p align="left" style="font-size: 30px;font-family:Comic Sans MS, Comic Sans, cursive;color:blueviolet"><?php echo"".$ligne1["nometud"]?></p>
</div>
      <div  style="padding-left:120px;">
        <div  style="padding-left: 40px;padding-top: -20px;">

        <div style="padding-bottom: 20px;">  <p align="left" style="font-size: xx-large;font-family:URW Chancery L, cursive;">Rapport</p>  </div>
      <div style="padding-left: 120px;margin-top:-20px;">  <a  class="btn btn-primary" href="telecharger_fichier_etudiant.php?id=<?php echo"".$ligne1["id"]?>"><?=$ligne1["nom_fichier"]; ?></a></div>
         </div>

        <div style="padding-top: 30px;padding-left:50px; width:360px;">
            <p class="alert alert-success  text text-center" style="font-size:25px;" > Note actuelle : <?= $ligne1["note"] ?> </p>
      </div>
      <div  style="padding-left: 380px;padding-top:30px;padding-bottom:30px;" >  <form  method="post">
     <div style="padding-bottom:30px;"> <label class="custom-control-label" for="customCheck1" style="padding-right: 6px;"> Nouvelle note</label>
  <input type="number" class="custom-control-input" id="customCheck1"name ="note"   min="0" max="20" step="0.25" required >
     </div>
<div  style="padding-bottom:30px;padding-left:40px;">
<label class="custom-control-label" for="customCheck2" style="padding-right: 6px;"> Etudiant</label>
 <select name="nometud" id="customCheck2">
   
   <option value="<?=$ligne1["nometud"]?>" name="etud"> <?=$ligne1["nometud"]?> </option> 
  
</select></div>



<div  style="padding-bottom:30px;padding-left:110px;"><input class="btn btn-success" type="submit" value="Modifier" name="submite"></div>
</form> </div>
        </div>  </div> 
    <?php

      }
      
      
    }
?>
   </div> <?php }else{?>


   <div style="width:70%;padding-top:100px;padding-left:300px;padding-bottom:50px;"  >
    <h3 align="center" class="alert alert-danger" >Aucune rapport n'est deposée</h3>
   
   </div>
   
   <?php
    
   }
  }
?>






</div>
<div align="center" style="padding-top:30px;padding-bottom:20px;">
  <a href="DECONNEXION_enseignant.php" class="btn btn-primary" >Déconnexion</a>
<a  href="espace_enseignant_principale.php"  style="margin-left:20px" class="btn btn-secondary" >Acceuil</a>

</div>
</div></div></div></div>
























 </body>
    </html>