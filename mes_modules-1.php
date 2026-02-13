
<?php session_start();
ini_set('post_max_size', '16M');

if(isset($_GET["codemodule"])){
  $_SESSION["module"]=$_GET["codemodule"];
}
include("function.php");
$tableau=array("reseaux"=>"Resaux Informatique","ro"=>"Recherche operationnelle","web_dynamique"=>"Web Dynamique","base_de_donnee"=>"Base De Donnee","projet_tutore"=>"Projet Tutoree","projet_tutore2"=>"Projet Tutoree2");
$cn1=connexion();
$req1="SELECT groupe FROM  liste_etudiant_tp_".$_SESSION["module"]." where nometudtp='".$_SESSION["login"]."' and module = '".$_SESSION["module"]."' and cneetud = '".$_SESSION["cne"]."';";
$rep1=$cn1->query($req1);
if($rep1){
  $c=$rep1->fetchColumn();

  
  $req2="SELECT * FROM  reservation where module = '".$_SESSION["module"]."' and groupe = '".$c."';";
$rep2=$cn1->query($req2);
$tab=$rep2->fetch();
}else echo"false";

?>
<!-- <p><a</p> -->

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?=$_SESSION["module"] ?>   </title>
  </head>
  <body>
  <div class="row" style="padding-bottom: 0px;">

  <div class="col-md-2" style="">
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="  padding-left:10px;height: 70px;">
  <a class="nav-link " href="Profil.php" style="color:black;font-size:20px; padding-left:25px;"><i style="font-size: 30px;" class="fa-solid fa-user fa-beat"></i></a>
  <a class="nav-link " href="Profil.php" style="color:black;font-size:20px; padding-left:25px;"> <?=$_SESSION['login'] ?></a>
  </nav>
  </div>


<div class="col-md-4" style="">
<img  class="img4" src="assets/img/2.jpg" alt="2"  style=" width:100%; height:70px;" >
 </div>
<div class="col-md-5">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <div class="collapse navbar-collapse" id="navbarNav">
        <a class="nav-link "  href="espace_etudiant_principale.php" style="color:blue;font-size:22px; padding-left:10px;"><b>Acceuil</b> </a>
       </div>

  
        <div class="collapse navbar-collapse" id="navbarNav">
        <a class="nav-link "  href="DECONNEXION_etudiant.php" style="color:blue;font-size:22px; padding-left:10px;"><b>Déconnexion</b> </a>
       </div>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="color:blue;font-size:22px; padding-left:10px;"><b>Mes modules</b></a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php
        $req="SELECT * FROM liste_etudiant_tp WHERE nometudtp= '". $_SESSION['login']."';";
        $rep=  $cn1->query($req);
        if($rep==true){
            while($ligne1=$rep->fetch() ){ 
                if($ligne1["web_dynamique"]==1) {  ?>
                <a class="dropdown-item" href="mes_modules-1.php?codemodule=web_dynamique"> Web Dynamique </a><br>
                <?php } if($ligne1["reseaux"]==1){ ?>
                <a class="dropdown-item" href="mes_modules-1.php?codemodule=reseaux">Reseau Informatique</a><br>
                <?php } if($ligne1["ro"]==1){  ?>
                <a class="dropdown-item" href="mes_modules-1.php?codemodule=ro"> Recherche Operationnelle</a><br>
                <?php } if($ligne1["projet_tutore"]==1){  ?>
                <a class="dropdown-item" href="mes_modules-1.php?codemodule=projet_tutore"> Projet Tutore</a><br>
                <?php } if($ligne1["projet_tutore2"]==1){ ?>
                <a class="dropdown-item" href="mes_modules-1.php?codemodule=projet_tutore2">Projet Tutore2</a><br>
                <?php } if($ligne1["base_de_donnee"]==1){  ?>
                <a class="dropdown-item" href="mes_modules-1.php?codemodule=base_de_donnee">Base De Donnée</a><br>

         <?php   } } } 

        ?>
















         
          <div class="dropdown-divider"></div>
          <!-- <div  ><a class="btn btn-primary "  href="DECONNEXION_etudiant.php" style="font-size:22px; padding-left:10px;"><b>Deconnexion</b> </a></div> -->
          <div style="display: flex; justify-content: center; ">
    <a  href="DECONNEXION_etudiant.php" style="font-size:22px; padding-left:10px;" class="btn btn-primary text-center">Déconnexion</a>
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





<div class="container" style="padding-top: 0px;margin-top:-26px;" >
<div  class="container">
<div  class="container">

<div class="container" style="background-image: url('img105.jpg');">
<a style="padding-top: 250px;height:100%;;" href="espace_etudiant_principale.php">
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg>
	</a>


<div  class="container">
<div style="display: flex; justify-content: center;padding-top:60px; ">
<h1 align="center" style="font-size:80px;" ><?=$tableau[$_SESSION["module"]]?></h1>
</div>

<div >
<div style="padding-top:80px;padding-left:20px; ">
<h3 class="text text-primary"> A propos de module  <?=$tableau[$_SESSION["module"]]?> </h3>
</div>
<div style="padding-top:25px;padding-left:35px;margin-left:500px;border: 15px solid orange;border-radius:40px;width:30%;margin-top:15px;padding-bottom:10px;padding-right:35px; "> 

 
<table class="table table-hover table-warning">
      <tr><th>Module</th>
      <td><?=$tab["module"]?></td></tr>
    <tr><th>Encadrent</th>
    <td><?=$tab["nomen"]?></td></tr>
    <tr><th>Créno</th>
    <td><?=$tab["creno"]?></td></tr>
    <tr><th>Groupe</th>
    <td><?=$tab["groupe"]?></td></tr>
    <tr><th>Salle</th>
    <td><?=$tab["numsalle"]?></td></tr>
    <tr><th>NB° Séances</th>
    <td>7</td></tr>
     
    

    </table>
  </div>
</div>
    
    <?php
 
if(isset($_POST["submit"])){
 
  $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
?><br><?php



// Check if file already exists
if (file_exists($target_file)) {
$message= "erreure, file is deja existe.";?><br><?php
$uploadOk = 0;
}
else  $uploadOk = 1;

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000000000000000000000000000000000000000) {
$message="Sorry, your file is too large.";?><br><?php
$uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "pdf"
&& $imageFileType != "c" ) {
$message= "erreur!!!!,juste JPG, pdf, PNG & GIF files sont accepter.";?><br><?php
$uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
$message= " il y a une erreur dans le telechargement";?><br><?php
// if everything is ok, try to upload file
} else {
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"teste_img/".$_FILES["fileToUpload"]["name"])) {
$message= "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " est bien telecharger .";?><br><?php
/* try {
   $cn1 = new PDO("mysql:host=localhost;dbname=tp;port=3306;charset=utf8", 'root', '');
  
} catch(PDOException $erreur) {
   die("Erreur de connexion : " . $erreur->getMessage());
}
$x=0;
//echo"".$_FILES["fileToUpload"]["name"]."et    ".$_SESSION["module"]."  et   ". $c." et     ". $_SESSION['login'] ."   et   ". $tab["nomen"]." et ".$i." et  ".$x." et  ";
*/
$req4="SELECT max(id)  from fichier_etudiant ;";
$rep4=$cn1->query($req4);
$resu= $rep4->fetchColumn();
if(empty($resu)){
$resu=1;
} else{ $resu=$resu+1;}
//echo"rsultat  ".$resu;
$x=0;
$req2="INSERT INTO `fichier_etudiant`(`id`,`nom_fichier`,`module`,`groupe`,`nometud`,`nomprof`,`tp`,`note`) VALUES (".$resu.",'".$_FILES["fileToUpload"]["name"]."','" .$_SESSION["module"]."',". $c.",'". $_SESSION['login'] ."','". $tab["nomen"]."',".$_POST["tp"].",".$x.");";
$rep1=$cn1->query($req2);
} else {
echo " il y a une erreur dans le telechargement de ce fichier.";?><br><?php
}
}
}
 
 
  $req1="SELECT groupe FROM  liste_etudiant_tp_".$_SESSION["module"]." where nometudtp='".$_SESSION["login"]."' and module = '".$_SESSION["module"]."' and cneetud = '".$_SESSION["cne"]."';";
  $rep1=$cn1->query($req1);
  if($rep1){
    $c=$rep1->fetchColumn();

    
    $req2="SELECT * FROM  reservation where module = '".$_SESSION["module"]."' and groupe = '".$c."';";
  $rep2=$cn1->query($req2);
  $tab=$rep2->fetch();
  }else echo"false";
?>



<div style="padding-top:50px;padding-left:20px; "  >
<?php
  for($i=1;$i<=7;$i++){ ?>


  


    
  
  <?php
  

    $req="SELECT * from fichier where module = '".$_SESSION["module"]."' and groupe = ".$c." and tp =".$i." and enseignant='". $tab["nomen"]."';";
    $rep=$cn1->query($req);
    if($rep){

        $row=$rep->fetchAll(PDO::FETCH_ASSOC);
        if(count($row)!=0){ ?>
          <div style="margin-top:100px;padding-left:20px;background-color:white;border-radius: 30px;"  >
          <div class="container">
            
          

          <div style="padding-top:15px;">
      <h1 style="color: red; text-decoration: underline; text-decoration-color: black;">Semaine <?= $i?></h1>
    </div>
  
      <?php
          foreach( $row as $ligne){
          ?>
        
        
        


    <div style="padding-top:10px;padding-left:55px;padding-bottom:10px;" > 
      
          <div >
          <div>
  


    
    <a href="telecharger_fichier.php?id=<?php echo"".$ligne["id"]?>">         <i  class="fa-sharp fa-solid fa-file" style="color: #18191b;padding-right:5px;"></i></a><a href="telecharger_fichier.php?id=<?php echo"".$ligne["id"]?>"><?php echo"".$ligne["nom_fichier"]; ?></a>
        
          </div>
           <div style="padding-top: 20px;">
            
            <p style="font-style: oblique;text-align:left;padding-right:70px;padding-left:70px"> <?= $ligne["paragraphe"] ?> </p>
        </div>

          </div>

    </div>
        
         
    <?php } ?>
    <div style="padding-top:10px;margin-left:200px;border:2px solid bisque ;border-radius:20px;margin-right:200px;margin-bottom:30px;">
    <div style="padding-top:20px;padding-left:55px;padding-bottom:10px;" > 
      <div style="padding-bottom: 20px;" >
      <h3  style="font-family:cursive;color:red;	">Pour mettre tes TPs</h3><br>
      <div>

       <form class="my-form" method="post" enctype="multipart/form-data">
  <input class="input-group-text" type="file" name="fileToUpload" id="fileToUpload" style="padding-bottom: 0px;"><br> 

  <div class="custom-control custom-checkbox"  style="padding-bottom: 5px;padding-left: 10px;" >

  <label class="custom-control-label" for="customCheck1" style="padding-right: 6px;"> TP  N°<?= $i ?></label>
  <input type="checkbox" class="custom-control-input" id="customCheck1"name = tp  value = <?= $i ?> required>
  
</div>


  <input class="btn btn-primary" type="submit" value="envoyer" name="submit"><br>
</form> 
<?php if(isset($_POST["tp"]) && $_POST["tp"]==$i){
   ?>
  <div style="width:350px;padding-top: 20px;">
 <p class="alert alert-success text text-center "><?= $message ?></p>

  </div>
   <?php
}
?>
      </div>
     
      </div>
    </div>
      <?php
  $req3="SELECT *  from fichier_etudiant where module = '".$_SESSION["module"]."' and groupe = ".$c." and tp =".$i." and nomprof='". $tab["nomen"]."' and nometud ='".$_SESSION["login"]."';";
  $rep3=$cn1->query($req3);

  if($rep3){

    $row1=$rep3->fetchAll(PDO::FETCH_ASSOC);
  




     //echo"count(row1)=".count($row1);

    if(count($row1)!=0){
      foreach( $row1 as $ligne1){ ?>
      <div style="padding-top:10px;padding-left:55px;padding-bottom:20px;" > 
       <div>
        <ul>
            <li><a href="telecharger_fichier_etudiant.php?id=<?php echo"".$ligne1["id"]?>"><?php echo"".$ligne1["nom_fichier"]; ?></a></li>
          <div style="padding-top: 10px;">  <a  class="btn btn-danger" href="supprimer_fichier_etudiant.php?id=<?php echo"".$ligne1["id"]?>"><?php echo"supprimer fichier"?></a></div>

          </ul>
      </div>
   <?php
       if($ligne1["note"]>=10){?>
        <div style="width:300px;padding-top: 20px; font-family:Marker Felt, fantasy;padding-bottom:30px;"><h4 class="alert alert-success text text-center"> TP N° <?= $i ?> Validé  </h4> </div>
       <?php 
       }  
       if($ligne1["note"]<10 && $ligne1["note"]!=0){?>
       <div style=" padding-bottom:30px;width:300px;padding-top: 20px;font-family:Marker Felt, fantasy"> <h4 class="alert alert-danger text text-center"> TP N° <?= $i ?> <b> Non validé </b> </h4></div>
        <?php 
        }  
        else if($ligne1["note"]== 0){?>
        <div style="width:450px;padding-top: 20px;padding-bottom:30px;">  <p class="alert alert-warning text text-center"> Tp N° <?= $i ?> N'est pas encore traité par ton encadrant </p></div>
          <?php 
          }
          ?>
      </div>  
   
<?php
    }
      }
       else { ?>
       <div style="padding-bottom: 40px;padding-left: 60px;"><h5 class="text text-danger" style="font-family:'Comic Sans MS, Comic Sans, cursive'"> Vous n'avez pas encore diposer le rapport </h5></div>

<?php
      }
      }
  
      ?>
     

          </div><div></div>
      </div>
  </div>
      <?php 
    }
     else { ?>
<div class="container" style="border: 15px solid orange;border-radius:40px; background-color:bisque;margin-top:30px;">
<div style="padding-top:15px;" >
      <h1 style="color: red; text-decoration: underline; text-decoration-color: black;">Semaine <?= $i?></h1>
    </div>

      <div style="margin-left: 120px;">
        <h3 style="font-family: Snell Roundhand, cursive;" > Cette session sera affiche aprés </h3>
      </div>
      


     </div>

      <?php
    }
     
    
  } 
  
  
  
  }
 
  ?>

</div>
  <div class="text text-center" style="padding-top: 80px;">
      <a class="btn btn-primary" href="DECONNEXION_etudiant.php">Déconnexion</a>
     <a  class="btn btn-primary" href="espace_etudiant_principale.php">Acceuil</a>
   

  </div>


</div>
</div>


</div>
</div>
</div>


</body>
  </html>























































  