<?php
session_start();
if(isset($_GET["codemodule"])){

    $_SESSION["code_module"]=$_GET["codemodule"];
}
$tableau=array("1"=>"Groupe 1","2"=>"Groupe 2","3"=>"Groupe 3","4"=>"Groupe 4","5"=>"Groupe 5","6"=>"Groupe 6");

try {
    $cn1 = new PDO("mysql:host=localhost;dbname=tp;port=3306;charset=utf8", 'root', '');
   
} catch(PDOException $erreur) {
    die("Erreur de connexion : " . $erreur->getMessage());
}


$req="SELECT * FROM groupesen where module='". $_SESSION["code_module"]."' and  cneens='".$_SESSION['cne']."';";
$rep=  $cn1->query($req);
if($rep==true){




    while($ligne1=$rep->fetch() ){ 
        if($ligne1["gr1"]==1) { 
            $tab[]= 1;                 
       } 
       if($ligne1["gr2"]==2){
             $tab[]= 2; 
             } 
      if($ligne1["gr3"]==3){ 
             $tab[]= 3;
             }
      if($ligne1["gr4"]==4){ 
             $tab[]=4;
             } 
             if($ligne1["gr5"]==5){
            $tab[]= 5;
         } 
         if($ligne1["gr6"]==6){ 
            $tab[]= 6;   } } }
            
           
            $x=count($tab);
            if($x%2==1){
        
                $y=$x-1;
                $a=1;
            }else{
                $y=$x;
                $a=0; 
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
    <title><?=$_GET["codemodule"]?></title>
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
  
  <div class="collapse navbar-collapse" id="navbarNav">
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
          <!-- <div  ><a class="btn btn-primary "  href="DECONNEXION_enseignant.php" style="font-size:22px; padding-left:10px;"><b>Deconnexion</b> </a></div> -->
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











<div class="container">
<div class="container" style="heighT: auto;margin-top:-20px;">

 

  <div  style="padding-top:50px;" ><h1 align="center" style="color: blue;">Module <?=$_GET["codemodule"]?></h1></div>


  <div class="container" style="padding-top:70px;">
  <div class="container">

   
 

  <?php $i=0;
  
  if($i<$y){ ?>
   <div class="row" style="padding-top:50px;">
    <div class="col-md-6" style="padding-left:60px;">
    <div class="card" style="width:350px;">
    
    <img src="assets/img/fum7.jpg" class="card-img-top" alt="fum1"style="height:150PX;">

            <div class="card-body"style="padding-top:10px" >
           
                  <div style="padding-top:10px;padding-right:20px; " class="text text-primary" ><a href="groupe.php?code_module=<?=$_SESSION["code_module"]?>&vale=<?=$tab[$i]?>"> <p class=" text  text-center " style="font-size:30px;color:blue; "   ><?=$tableau[$tab[$i]] ?> </p></a> </div>
                   
                  
            </div>     
    </div>  
   </div>
  <?php $i++; 
   if($i<$y){
      ?>

<div class="col-md-6" style="padding-left:60px;">
    <div class="card" style="width:350px;">
    
    <img src="assets/img/fum15.jpg" class="card-img-top" alt="fum1"style="height:150PX;">

            <div class="card-body"style="padding-top:10px" >
           
                  <div style="padding-top:10px;padding-right:20px; " class="text text-primary" ><a href="groupe.php?code_module=<?=$_SESSION["code_module"]?>&vale=<?=$tab[$i]?>"><p class=" text  text-center " style="font-size:30px;color:blue; "   ><?=$tableau[$tab[$i]] ?> </p></a> </div>
                   
                  
            </div>     
    </div>  
   </div>

    
<?php $i++; 
   }
      ?>

    </div >




<?php
  }





if($i<$y){ ?>
   <div class="row" style="padding-top:90px;" >
    <div class="col-md-6" style="padding-left:60px;">
    <div class="card" style="width:350px;">
    
    <img src="assets/img/fum10.jpg" class="card-img-top" alt="fum1"style="height:150PX;">

            <div class="card-body"style="padding-top:10px" >
           
                  <div style="padding-top:10px;padding-right:20px; " class="text text-primary" ><a href="groupe.php?code_module=<?=$_SESSION["code_module"]?>&vale=<?=$tab[$i]?>"><p class=" text  text-center " style="font-size:30px;color:blue; "   ><?=$tableau[$tab[$i]] ?> </p></a> </div>
                   
                  
            </div>     
    </div>  
   </div>
  <?php $i++; 
   if($i<$y){
      ?>

<div class="col-md-6" style="padding-left:60px;">
    <div class="card" style="width:350px;">
    
    <img src="assets/img/fum13.jpg" class="card-img-top" alt="fum2"style="height:150PX;">

            <div class="card-body"style="padding-top:10px" >
           
                  <div style="padding-top:10px;padding-right:20px; " class="text text-primary" ><a href="groupe.php?code_module=<?=$_SESSION["code_module"]?>&vale=<?=$tab[$i]?>"><p class=" text  text-center " style="font-size:30px;color:blue; "   ><?=$tableau[$tab[$i]] ?> </p></a> </div>
                   
                  
            </div>     
    </div>  
   </div>

    
<?php $i++; 
   }
      ?>

    </div >




<?php
  }










if($i<$y){ ?>
   <div class="row" style="padding-top:90px;"  >
    <div class="col-md-6" style="padding-left:60px;">
    <div class="card" style="width:350px;">
    
    <img src="assets/img/fum11.jpg" class="card-img-top" alt="fum3"style="height:150PX;">

            <div class="card-body"style="padding-top:10px" >
           
                  <div style="padding-top:10px;padding-right:20px; " class="text text-primary" ><a href="groupe.php?code_module=<?=$_SESSION["code_module"]?>&vale=<?=$tab[$i]?>"><p class=" text  text-center " style="font-size:30px;color:blue; "   ><?=$tableau[$tab[$i]] ?> </p></a> </div>
                   
                  
            </div>     
    </div>  
   </div>
  <?php $i++; 
   if($i<$y){
      ?>

<div class="col-md-6" style="padding-left:60px;">
    <div class="card" style="width:350px;">
    
    <img src="assets/img/fum14.jpg" class="card-img-top" alt="fum4"style="height:150PX;">

            <div class="card-body"style="padding-top:10px" >
           
                  <div style="padding-top:10px;padding-right:20px; " class="text text-primary" ><a href="groupe.php?code_module=<?=$_SESSION["code_module"]?>&vale=<?=$tab[$i]?>"><p class=" text  text-center " style="font-size:30px;color:blue; "   ><?=$tableau[$tab[$i]] ?> </p></a> </div>
                   
                  
            </div>     
    </div>  
   </div>

    
<?php $i++; 
   }
      ?>

    </div >




<?php
  }




  if($a==1){ ?>


<div style="display: flex; justify-content: center;padding-top:90px;">
    <div class="card" style="width:350px;">
    
    <img src="assets/img/fum14.jpg" class="card-img-top" alt="fum5"style="height:150PX;">

            <div class="card-body"style="padding-top:10px" >
           
                  <div style="padding-top:10px;padding-right:20px; " class="text text-primary" ><a href="groupe.php?code_module=<?=$_SESSION["code_module"]?>&vale=<?=$tab[$i]?>"><p class=" text  text-center " style="font-size:30px;color:blue; "   ><?=$tableau[$tab[$i]] ?> </p></a> </div>
                   
                  
            </div>     
    </div>  
  </div>

<?php
  }

?>
























</div>
</div>


  <div class="container" style="padding-top:90px;">
  <div class="container">
  <div class="container"style="padding-left:60px;">
  





  <a  style="margin-right:30px;" class="btn btn-primary"  href="DECONNEXION_enseignant.php">Déconnexion</a>
  <a class="btn btn-success"  href="acceuil.php">Acceuil</a>

  </div></div></div>
  
</div>
</div>





































































    
</body>
</html>