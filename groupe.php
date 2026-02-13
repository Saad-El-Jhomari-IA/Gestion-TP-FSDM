<?php 
    session_start();
    include("function.php");
    // echo"session".$_SESSION["code_module"];
    // echo"get".$_SESSION["code_module"];

    if(isset($_GET["code_module"] )){
      $_SESSION["code_module"]=$_GET["code_module"];
      unset($_GET["code_module"]);
    } 
    if(isset( $_GET["vale"])){
      $_SESSION["vale"]=$_GET["vale"];
} 


$table=array("lcr1"=>"Lundi 8h:30 à 10h","lcr2"=>"Lundi 10h à 11h:30h","lcr3"=>"Lundi 11h:30 à 13h","lcr4"=>"Lundi 14h à 15h:30","lcr5"=>" Lundi 15h:30h à 17h","lcr6"=>"mardi 17h à 18h:30","mcr1"=>"mardi 8h:30 à 10h","mcr2"=>"mardi 10h à 11h:30h","mcr3"=>"mardi 11h:30 à 13h","mcr4"=>"mardi 14h à 15h:30","mcr5"=>"mardi 15h:30h à 17h","mcr6"=>"mardi 17h à 18h:30","mecr1"=>"mercredi 8h:30 à 10h","mecr2"=>"mercredi 10h à 11h:30h","mecr3"=>"mercredi 11h:30 à 13h","mecr4"=>"mercredi 14h à 15h:30","mecr5"=>" mercredi 15h:30h à 17h","mecr6"=>"mercredi 17h à 18h:30","jcr1"=>"jeudi 8h:30 à 10h","jcr2"=>"jeudi 10h à 11h:30h","jcr3"=>"jeudi 11h:30 à 13h","jcr4"=>"jeudi 14h à 15h:30","jcr5"=>"jeudi 15h:30h à 17h","jcr6"=>"jeudi 17h à 18h:30","vcr1"=>"vendredi 8h:30 à 10h","vcr2"=>"vendredi 10h à 11h:30h","vcr3"=>"vendredi 11h:30 à 13h","vcr4"=>"vendredi 14h à 15h:30","vcr5"=>"vendredi 15h:30h à 17h","vcr6"=>"vendredi 17h à 18h:30","scr1"=>"samedi 8h:30 à 10h","scr2"=>"samedi 10h à 11h:30h","scr3"=>"samedi 11h:30 à 13h");
$moduul=array("web_dynamique"=>"Web Dynamique","ro"=>"Recherche Operationnel","reseaux"=>"Resaux Informatique","base_de_donnee"=>"Base De Donnee","	projet_tutore"=>"	projet Tutore","projet_tutore2"=>"projet Tutore 2");


$cn1 = new PDO("mysql:host=localhost;dbname=tp;port=3306;charset=utf8", 'root', '');





if(isset($_POST["submit"])){
  if(isset($message)){
    unset($message);
  }
  if(isset($erreur)){
    unset($erreur);
  }
 
  if(isset($_POST["paragraphe"])){
       $var=$_POST["paragraphe"];
     
  } else $var="";
 


 $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//echo"".$target_file;?><br><?php
//echo"".$imageFileType;?><br><?php


// Check if file already exists
if (file_exists($target_file)) {
$erreur= "Erreur lors de telechargement de fichier";?><br><?php
$uploadOk = 0;
}
else  $uploadOk = 1;

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000000000000000000000000000000000000000) {
$erreur= "Sorry, your file is too large.";?><br><?php
$uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "pdf" && $imageFileType != "jpeg"
&& $imageFileType != "c" ) {
$erreur= "Erreur lors de telechargement de fichier";?><br><?php
$uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
$erreur= "Erreur lors de telechargement de fichier";?><br><?php
// if everything is ok, try to upload file
} else {
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"teste_img/".$_FILES["fileToUpload"]["name"])) {
$message= "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";?><br><?php 

$req2="INSERT INTO `fichier`(`nom_fichier`,`module`,`groupe`,`tp`,`paragraphe`,`enseignant`) VALUES ('".$_FILES["fileToUpload"]["name"]."','" .$_SESSION["code_module"]."','". $_SESSION["vale"]."',".$_POST["tp"].",'".$var."','". $_SESSION['login']."');";
$rep1=$cn1->query($req2);
} else {
$erreur= "Erreur lors de telechargement de fichier";?><br><?php
}
}
unset($_POST["submit"]);
}







?>


<!DOCTYPE html>
<html lang="en">
<head>
<link href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$_SESSION["code_module"]?></title>
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
 
 </div>
























<div class="container" style="margin-top: -20px;">   <div class="container"> <div class="container" style="background-image: url('img105.jpg');padding-top:0px;"> 
<div style="padding-top: 10px;padding-left:10px;border:3px;">
  <p align="left" style="font-size: xxx-large;font-family:Brush Script MT, Brush Script Std, cursive;"><?=$_SESSION["code_module"] ?></p>
</div>
<div style="display: flex; justify-content: center;padding-top:0px; ">
<h1 align="center" style="font-size:80px;" > Groupe <?= $_SESSION["vale"]?></h1>
</div>
  



<div style="margin-left:750px;margin-right:10px;margin-top:40px; background-color:bisque;border: 20px solid orange; border-radius:50px;">   
<div style="padding-top: 10px;"> <p align="center" style="font-size: x-large;font-family:Apple Chancery, cursive;font-variant: small-caps;">A propos de réservation de salle</p>
</div>

<?php



  $req2="SELECT creno,cr,numsalle ,count(*) as 'a' FROM reservation where   module='".$_SESSION["code_module"]."' and cneens='".$_SESSION["cne"]."' and groupe=".$_SESSION["vale"].";";
$rep1=$cn1->query($req2);
$x=0;

 
while($ligne1=$rep1->fetch() ) { 


       if($ligne1["a"]>0  ){?>


   <div  style="width:240px;padding-left:20px;margin-left:130px;font-style: oblique"><p class="alert alert-success" >  Réservation déja éffectuer </p></div> 
    <ul style="padding-left: 70px;list-style:none;"> 
      <li style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Le <?=$ligne1["creno"]?> </li>
     <li style="font-family: Verdana, Geneva, Tahoma, sans-serif;"> Salle : <?=$ligne1["numsalle"]?>
     </li> 
     
     <li style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Vous pouvez l'annulez : </li> 
    </ul>
   
    <!-- <a href="acceuil.php" class="btn btn-primary text-center">sortir</a> -->
      <a style="margin-left: 300px;margin-top:-60px;" class="btn btn-danger" href=" annuler_reservation.php?creno= <?=$ligne1["cr"]?>"> Annuler  </a> </h3> 

     
     

<?php }  else { ?>
<div style="padding-bottom:10px;">
  <p class=" alert alert-danger text text-center"> Aucune réservation éffectuer pour ce groupe </p>
</div>
<div style="padding-bottom:10px;">
  <a class="btn btn-success" style="margin-left:179px;margin-top:-10px" href="reserveration_salle1.php?codemodule= <?=$_SESSION["code_module"]?>&val=<?=  $_SESSION["vale"]?>"> Réserver</a><br>

</div>

<?php

}
} 



?>



</div>















<div style="margin-top:0px;">
      <div  class="container" >
      <a class="btn btn-primary" href="groupe.php?submit2=submit2 ">Liste d'étudiant </a><br>
      
     <?php if(isset($_GET["submit2"])){
      
     ?>

      <div align="center" style="padding-right:500px;">
  
  <?php   $ligne1= repartition_des_groupes( $_SESSION["code_module"],$_SESSION["vale"]);  ?>
  <table class="table table-hover table-info table-striped" style=" border: 1px solid ; border-radius:25px;width:50%;">
  <tr >
      <th >CNE</th>
      <th >NOM</th>

  </tr>
  <?php

  for($i=0;$i<count($ligne1);$i++){
     ?><tr>
      <td ><?=$ligne1[$i][7]?></td>
      <td ><?=$ligne1[$i][0]?></td>
     </tr>  
     <?php   
  }?>
</table>


 </div>
  <?php
  unset($_GET["submet2"]);
     }
     ?>

      </div>

</div>




    <?php for($i=1;$i<=7;$i++) { ?>

      <div style="margin-top:50px;padding-left:20px;background-color:white;border-radius: 30px;margin-left:30px;margin-right:50px; ">
      <div  class="container" >
      <div  class="container" >
      <div style="padding-top:15px;">
      <h1 style="color: red; text-decoration: underline; text-decoration-color: black;">Semaine <?= $i?></h1>
    </div>
        
    <div style="padding-top:10px;padding-left:55px;padding-bottom:10px;" > 
      <div style="padding-bottom: 20px;" >
      <h3  style="font-family:cursive	">Pour mettre votre TPS</h3><br>
      <div style="padding-left:55px;">

       <form class="my-form" method="post" enctype="multipart/form-data">
        
  <input class="input-group-text" type="file" name="fileToUpload" id="fileToUpload" style="padding-bottom: 20px;"> 
  <div class="custom-control custom-checkbox"  style="padding-bottom: 12px;padding-left: 10px;padding-top: 0px;" >

  <label class="custom-control-label" for="customCheck1" style="padding-right: 6px;"> TP  N°<?= $i ?></label>
  <input type="checkbox" class="custom-control-input" id="customCheck1"name = tp  value = <?= $i ?> required>
  
</div>
<div class="form-floating" style="padding-bottom: 20px;">
  <textarea class="form-control" placeholder="A propos de ce tp" name="paragraphe" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">A propos de ce tp</label>
</div>
 
  <input class="btn btn-primary" type="submit" value="envoyer" name="submit"><br>
</form> 
<?php if(isset($_POST["tp"]) && $_POST["tp"]==$i && isset($message)){
   ?>
  <div style="width:350px;padding-top: 20px;">
 <p class="alert alert-success text text-center "><?= $message ?></p>

  </div>
   <?php
}
?>
<?php if(isset($_POST["tp"]) && $_POST["tp"]==$i && isset($erreur)){
   ?>
  <div style="width:350px;padding-top: 20px;">
 <p class="alert alert-danger text text-center "><?= $erreur ?></p>

  </div>
   <?php
}
?>
      </div>
     
      </div>
    </div>



<?php
  
  
       
  $req="SELECT * from fichier where module = '".$_SESSION["code_module"]."' and groupe = ".$_SESSION["vale"]." and tp =".$i." and enseignant='".$_SESSION['login']."';";
  $rep=$cn1->query($req);
  if($rep){ ?>
     
    <div  class="container" >
    <div  class="container" >
    <div  class="container" >
  <?php
      $row=$rep->fetchAll(PDO::FETCH_ASSOC);
      if(count($row)!=0){ ?>
      
       <div  class="container"> <h3  style="font-family:cursive	">Fichier deposé</h3><br></div>

<?php
        foreach( $row as $ligne){
        ?>
     
   <div style="padding-bottom: 20px;padding-left:80px;">  <a style="padding-right: 2px;" href="suprimer_fichier_enseignant.php?id=<?php echo"".$ligne["id"]?>">   <i class="fa-regular fa-trash-can fa-regular fa-trash-can fa-xl " style="color: #dd0e0e;"> </i> </a>    <a href="suprimer_fichier_enseignant.php?id=<?php echo"".$ligne["id"]?>"><?=$ligne["nom_fichier"]; ?></a><br> </div>
         
        
        <?php

        } ?>

<div style="display: flex; justify-content: center;padding-top:30px;padding-bottom:60px;padding-right:200px; ">
    <a  class="btn btn-success text-center"  href="les_notes.php?tp=<?php echo"".$i?>">Attribuer note </a>
</div>
<?php
      }?>

      </div></div></div>
  <?php  }?>
  </div> </div> </div><?php
 }
 

   
       
        
?>
  
  <div align="center" style="padding-top:50px;">
  <a href="DECONNEXION_enseignant.php" class="btn btn-primary" >Déconnexion</a>
<a  href="espace_enseignant_principale.php"  style="margin-left:20px" class="btn btn-secondary" >Acceuil</a>

</div>
  </div>
 
</div>


</div>
    

   
















    









</body>
</html>





   
