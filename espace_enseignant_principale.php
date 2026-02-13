<?php session_start();
if(isset($_SESSION['login'])) {
    $tableau=array("reseaux"=>"Resaux Informatique","ro"=>"Recherche operationnelle","web_dynamique"=>"Web Dynamique","base_de_donnee"=>"Base De Donnee","projet_tutore"=>"Projet Tutoree","projet_tutore2"=>"Projet Tutoree2");

     try {
        $cn1 = new PDO("mysql:host=localhost;dbname=tp;port=3306;charset=utf8", 'root', '');
       
    } catch(PDOException $erreur) {
        die("Erreur de connexion : " . $erreur->getMessage());
    }
        $req="SELECT * FROM enseignant WHERE nomen= '". $_SESSION['login']."';";
        $rep=  $cn1->query($req);
        if($rep==true){
            while($ligne1=$rep->fetch() ){ 
                if($ligne1["web_dynamique"]==1) { 
                    $tab[]= "web_dynamique";                 
               } 
               if($ligne1["reseaux"]==1){
                     $tab[]= "reseaux"; 
                     } 
              if($ligne1["ro"]==1){ 
                     $tab[]= "ro";
                     }
              if($ligne1["projet_tutore"]==1){ 
                     $tab[]= "projet_tutore";
                     } 
                     if($ligne1["projet_tutore2"]==1){
                    $tab[]= "projet_tutore2";
                 } 
                 if($ligne1["base_de_donnee"]==1){ 
                    $tab[]= "base_de_donnee";   } } }
                    
                   
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
    <title>espace_enseignant_principale</title>
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
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="color:blue;font-size:22px; padding-left:10px;"><b>Mes modules</b></a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php
       $req="SELECT * FROM enseignant WHERE nomen= '". $_SESSION['login']."';";
        $rep=  $cn1->query($req);
        if($rep==true){
            while($ligne1=$rep->fetch() ){ 
                if($ligne1["web_dynamique"]==1) {  ?>
                <a class="dropdown-item" href="module.php?codemodule=web_dynamique"> Web Dynamique </a><br>
                <?php } if($ligne1["reseaux"]==1){ ?>
                <a class="dropdown-item" href="module.php?codemodule=reseaux">Reseau Informatique</a><br>
                <?php } if($ligne1["ro"]==1){  ?>
                <a class="dropdown-item" href="module.php?codemodule=ro"> Recherche Opérationnelle</a><br>
                <?php } if($ligne1["projet_tutore"]==1){  ?>
                <a class="dropdown-item" href="module.php?codemodule=projet_tutore"> Projet tutoré</a><br>
                <?php } if($ligne1["projet_tutore2"]==1){ ?>
                <a class="dropdown-item" href="module.php?codemodule=projet_tutore2">Projet tutoré2</a><br>
                <?php } if($ligne1["base_de_donnee"]==1){  ?>
                <a class="dropdown-item" href="module.php?codemodule=base_de_donnee">Base De Donnée</a><br>

         <?php   } } } 

        ?>
















         
          <div class="dropdown-divider"></div>
          <!-- <div  ><a class="btn btn-primary "  href="DECONNEXION_etudiant.php" style="font-size:22px; padding-left:10px;"><b>Deconnexion</b> </a></div> -->
          <div style="display: flex; justify-content: center; ">
    <a  href="DECONNEXION_enseignant.php" style="font-size:22px; padding-left:10px;" class="btn btn-primary text-center">Déconnexion</a>
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

 

  <div  style="padding-top:50px;" ><h1 align="center" class=""  style="font-size:50px;"> Espace Enseignant</h1></div>


  <div class="container" style="padding-top:70px;">
  <div class="container">

   
 

  <?php $i=0;
  
  if($i<$y){ ?>
   <div class="row" style="padding-top:50px;">
    <div class="col-md-6" style="padding-left:60px;">
    <div class="card" style="width:350px;">
    
    <img src="assets/img/fum7.jpg" class="card-img-top" alt="fum1"style="height:150PX;">

            <div class="card-body"style="padding-top:10px" >
           
                  <div style="padding-top:10px;padding-right:20px; " class="text text-primary" ><a href="module.php?codemodule=<?=$tab[$i]?>"> <p class=" text  text-center " style="font-size:30px;color:blue; "   ><?=$tableau[$tab[$i]] ?> </p></a> </div>
                   
                  
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
           
                  <div style="padding-top:10px;padding-right:20px; " class="text text-primary" ><a href="module.php?codemodule=<?=$tab[$i]?>"><p class=" text  text-center " style="font-size:30px;color:blue; "   ><?=$tableau[$tab[$i]] ?> </p></a> </div>
                   
                  
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
           
                  <div style="padding-top:10px;padding-right:20px; " class="text text-primary" ><a href="module.php?codemodule=<?=$tab[$i]?>"><p class=" text  text-center " style="font-size:30px;color:blue; "   ><?=$tableau[$tab[$i]] ?> </p></a> </div>
                   
                  
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
           
                  <div style="padding-top:10px;padding-right:20px; " class="text text-primary" ><a href="module.php?codemodule=<?=$tab[$i]?>"><p class=" text  text-center " style="font-size:30px;color:blue; "   ><?=$tableau[$tab[$i]] ?> </p></a> </div>
                   
                  
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
           
                  <div style="padding-top:10px;padding-right:20px; " class="text text-primary" ><a href="module.php?codemodule=<?=$tab[$i]?>"><p class=" text  text-center " style="font-size:30px;color:blue; "   ><?=$tableau[$tab[$i]] ?> </p></a> </div>
                   
                  
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
           
                  <div style="padding-top:10px;padding-right:20px; " class="text text-primary" ><a href="module.php?codemodule=<?=$tab[$i]?>"><p class=" text  text-center " style="font-size:30px;color:blue; "   ><?=$tableau[$tab[$i]] ?> </p></a> </div>
                   
                  
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
           
                  <div style="padding-top:10px;padding-right:20px; " class="text text-primary" ><a href="module.php?codemodule=<?=$tab[$i]?>"><p class=" text  text-center " style="font-size:30px;color:blue; "   ><?=$tableau[$tab[$i]] ?> </p></a> </div>
                   
                  
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
<?php
}
else{
    header("Location: Enseignant.php");
}
?>
