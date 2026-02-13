<?php
    session_start();


    if(isset($_GET["codemodule"])){

      $_SESSION["code_module1"]=$_GET["codemodule"];
     
    }
     
    if(isset($_GET["val"])){
      
      $_SESSION["vale1"]=$_GET["val"];
     
    }


   
      $cn1 = new PDO("mysql:host=localhost;dbname=tp;port=3306;charset=utf8", 'root', '');
   
      




  $req="SELECT * FROM salle;";
  $rep2=$cn1->query(($req));
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
        <a class="nav-link "  href="espace_enseignant_principale.php" style="color:blue;font-size:22px; padding-left:10px;"><b>Acceuil</b> </a>
       </div>

  
        <div class="collapse navbar-collapse" id="navbarNav">
        <a class="nav-link "  href="DECONNEXION_enseignant.php" style="color:blue;font-size:22px; padding-left:10px;"><b>Deconnexion</b> </a>
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


<div class="container">
<div class="container" style="background-image: url('img105.jpg');">
<div class="container"><div class="container"><div class="container">
<a style=" font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;" href="javascript:history.go(-1)">
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg>Retour 
	</a>
<?php


if($rep2==true){ ?>
<div style="padding-top:100px;">
   <h1 align="center" >Reservation Des Salles </h1>
   <p align=center>(<?= $_SESSION["code_module1"]?> Groupe <?= $_SESSION["vale1"];?>)</p>
</div>
<div style="padding-top: 50px;;">
   <h3 style="font-style: oblique;">Quelle salle voudrez vous reserver ?</h3>
</div>

<div  style="width:80%; padding-top:20px;padding-left:450px;padding-right:90px;padding-bottom:50px;">
   
   <table class="table table-striped table-hover table-primary "  >
          <tr align="center">
              <th>Numero de salle</th>
          <th>Nombre de machine </th>
          </tr>
          <?php
           while($ligne1=$rep2->fetch() ){?>
          <tr align="center">
              <td><a href="reserveration_salle1.php?f=<?=$ligne1["numsalle"]?>"><?=$ligne1["numsalle"]?></a></td>
              <td><?=$ligne1["capacite"]?></td>
          </tr><?php
      } ?>
      </table>
   
</div>

</body>
</html>

      <?php
      } 
    
  







if(isset($_GET["f"])){
   $_SESSION["numsalle"]=$_GET["f"];
    
   $table=array("lcr1"=>"Lundi 8h:30 à 10h","lcr2"=>"Lundi 10h à 11h:30h","lcr3"=>"Lundi 11h:30 à 13h","lcr4"=>"Lundi 14h à 15h:30","lcr5"=>" Lundi 15h:30h à 17h","lcr6"=>"mardi 17h à 18h:30","mcr1"=>"mardi 8h:30 à 10h","mcr2"=>"mardi 10h à 11h:30h","mcr3"=>"mardi 11h:30 à 13h","mcr4"=>"mardi 14h à 15h:30","mcr5"=>"mardi 15h:30h à 17h","mcr6"=>"mardi 17h à 18h:30","mecr1"=>"mercredi 8h:30 à 10h","mecr2"=>"mercredi 10h à 11h:30h","mecr3"=>"mercredi 11h:30 à 13h","mecr4"=>"mercredi 14h à 15h:30","mecr5"=>" mercredi 15h:30h à 17h","mecr6"=>"mercredi 17h à 18h:30","jcr1"=>"jeudi 8h:30 à 10h","jcr2"=>"jeudi 10h à 11h:30h","jcr3"=>"jeudi 11h:30 à 13h","jcr4"=>"jeudi 14h à 15h:30","jcr5"=>"jeudi 15h:30h à 17h","jcr6"=>"jeudi 17h à 18h:30","vcr1"=>"vendredi 8h:30 à 10h","vcr2"=>"vendredi 10h à 11h:30h","vcr3"=>"vendredi 11h:30 à 13h","vcr4"=>"vendredi 14h à 15h:30","vcr5"=>"vendredi 15h:30h à 17h","vcr6"=>"vendredi 17h à 18h:30","scr1"=>"samedi 8h:30 à 10h","scr2"=>"samedi 10h à 11h:30h","scr3"=>"samedi 11h:30 à 13h");
         
          ?>
           <h4 style="padding-left: 40px;padding-bottom:50px;"> Voici les reservations effectuer pour la salle <?= $_GET["f"] ?> </h4>
       <?php
          $req="SELECT * FROM salle where numsalle=".$_GET["f"].";";
          $rep=$cn1->query($req);
  
      
       
          ?>
          <table align="center" class="table table-bordered table-warning" style="width: 70%;">
          <tr>
          
              <th>NUM MSALLE</th>
              <TH>JOUR</TH>
          <th colspan="2"> 8h:30 à 10h </th>
          <th colspan="2"> 10h à 11h:30h </th>
          <th colspan="2"> 11h:30 à 13h </th>
          <th colspan="2"> 14h à 15h:30 </th>
          <th colspan="2"> 15h:30h à 17h </th>
          <th colspan="2"> 17h à 18h:30 </th>
          </tr>
           
              <?php
               $x=0;
                while($ligne=$rep->fetch() and $x==0) { ?>
                <tr>
               <td><?= $ligne["numsalle"]?></td>
               <td>LUNDI</td>
            <?php  if($ligne["lcr1"]!=0){?>
                  
                 <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                 <td>-------</td><?php
             
          } else {?> <td style="background-color: hsl(118, 98%, 82%);">non Reserver</td>
          <td>                <a class="btn btn-primary" href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=lcr1&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td>
  
              <?php } if($ligne["lcr2"]!=0){?>
                  
                   <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                 <td>-------</td><?php
              }
              else {?><td style="background-color: hsl(118, 98%, 82%);">non Reserver</td>
          <td>                <a class="btn btn-primary" href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=lcr2&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td> 
              
              <?php } if($ligne["lcr3"]!=0){?>
                  
                     <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                 <td>-------</td><?php
               }
               else {?><td style="background-color: hsl(118, 98%, 82%);">non Reserver</td>
          <td>                <a class="btn btn-primary" href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=lcr3&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td> 
               
               <?php } if($ligne["lcr4"]!=0){?>
                  
                  <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                  <td>-------</td>
                  <?php
               }
               else { ?> <td style="background-color: hsl(118, 98%, 82%);">non Reserver</td> 
                <td>                <a class="btn btn-primary" href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=lcr4&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td> 
               
               <?php } if($ligne["lcr5"]!=0){?>
                  
                                 <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                 <td>-------</td><?php
               }
               else { ?><td style="background-color: hsl(118, 98%, 82%);">non Reserver</td>
          <td>                <a class="btn btn-primary" href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=lcr5&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td> 
               
               <?php } if($ligne["lcr6"]!=0){?>
                  
                  <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                <td>-------</td><?php
               }
               else { ?> <td style="background-color: hsl(118, 98%, 82%);">non Reserver</td> 
               <td>                <a class="btn btn-primary" href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=lcr6&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td> 
                <?php } ?>
               
                  </tr>
  
               <tr>
                  <TD></TD>
                  <td>MARDI</td>
               <?php  if($ligne["mcr1"]!=0){?>
  
                  <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                  <td>-------</td><?php
              }
              else { ?> <td style="background-color: hsl(118, 98%, 82%);">non Reserver</td>
              <td>                <a class="btn btn-primary" href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=mcr1&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td>  
  
              <?php } if($ligne["mcr2"]!=0){?>
                  
                                <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                 <td>-------</td><?php
              }
              else {?><td style="background-color: hsl(118, 98%, 82%);">non Reserver</td>
          <td>                <a class="btn btn-primary" href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=mcr2&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td> 
              
              <?php } if($ligne["mcr3"]!=0){?>
                  
                                 <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                 <td>-------</td><?php
               }
               else {?><td style="background-color: hsl(118, 98%, 82%);">non Reserver</td>
          <td>                <a class="btn btn-primary" href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=mcr3&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td> 
               
               <?php } if($ligne["mcr4"]!=0){?>
                  
                  <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                  <td>-------</td><?php
               }
               else {?> <td style="background-color: hsl(118, 98%, 82%);">non Reserver</td> 
               <td>                <a class="btn btn-primary" href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=mcr4&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td> 
               
               <?php } if($ligne["mcr5"]!=0){?>
                  
                                 <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                 <td>-------</td><?php
               }
               else {?><td style="background-color: hsl(118, 98%, 82%);">non Reserver</td>
          <td>                <a class="btn btn-primary" href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=mcr5&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td> 
               
               <?php  }if($ligne["mcr6"]!=0){?>
                  
                                 <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                 <td>-------</td><?php
               }
               else {?><td style="background-color: hsl(118, 98%, 82%);">non Reserver</td>
          <td>                <a class="btn btn-primary" href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=mcr6&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td> 
               </tr> <?php }?>
  
  
               <tr>
                  <TD></TD>
                  <td>MERCREDI</td>
               <?php  if($ligne["mecr1"]!=0){?>
  
                  <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                  <td>-------</td><?php
              }
              else { ?> <td style="background-color: hsl(118, 98%, 82%);">non Reserver</td> 
              <td>                <a  class="btn btn-primary"href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=mecr1&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td> 
  
              <?php } if($ligne["mecr2"]!=0){?>
                  
                                <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                 <td>-------</td><?php
              }
              else {?><td style="background-color: hsl(118, 98%, 82%);">non Reserver</td>
          <td>                <a  class="btn btn-primary"href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=mecr2&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td> 
              
              <?php } if($ligne["mecr3"]!=0){?>
                  
                                 <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                 <td>-------</td><?php
               }
               else {?><td style="background-color: hsl(118, 98%, 82%);">non Reserver</td>
          <td>                <a  class="btn btn-primary"href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=mecr3&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td> 
               
               <?php } if($ligne["mecr4"]!=0){?>
                  
                  <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                  <td>-------</td>
                  <?php
               }
               else {?> <td style="background-color: hsl(118, 98%, 82%);">non Reserver</td> 
               <td>                <a  class="btn btn-primary"href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=mecr4&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td> 
               
               <?php } if($ligne["mecr5"]!=0){?>
                  
                                 <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                 <td>-------</td><?php
               }
               else {?><td style="background-color: hsl(118, 98%, 82%);">non Reserver</td>
          <td>                <a  class="btn btn-primary"href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=mecr5&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td> 
               
               <?php  }if($ligne["mecr6"]!=0){?>
                  
                                 <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                 <td>-------</td><?php
               }
               else {?><td style="background-color: hsl(118, 98%, 82%);">non Reserver</td>
          <td>                <a  class="btn btn-primary"href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=mecr6&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td> 
               </tr> <?php }?>
  
               <tr>
                  <TD></TD>
                  <td>JEUDI</td>
               <?php  if($ligne["jcr1"]!=0){?>
  
                  <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                  <td>-------</td><?php
              }
              else { ?> <td style="background-color: hsl(118, 98%, 82%);">non Reserver</td>
                  <td>                <a class="btn btn-primary" href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=jcr1&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td>
  
              <?php } if($ligne["jcr2"]!=0){?>
                  
                                <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                 <td>-------</td><?php
              }
              else {?><td style="background-color: hsl(118, 98%, 82%);">non Reserver</td>
          <td>                <a class="btn btn-primary" href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=jcr2&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td> 
              
              <?php } if($ligne["jcr3"]!=0){?>
                  
                                 <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                 <td>-------</td><?php
               }
               else {?><td style="background-color: hsl(118, 98%, 82%);">non Reserver</td>
          <td>                <a class="btn btn-primary" href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=jcr3&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td> 
               
               <?php } if($ligne["jcr4"]!=0){?>
                  
                  <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                  <td>-------</td>
                  <?php
               }
               else {?> <td style="background-color: hsl(118, 98%, 82%);">non Reserver</td> 
                <td>                <a class="btn btn-primary" href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=jcr4&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td>
               
               <?php } if($ligne["jcr5"]!=0){?>
                  
                                 <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                 <td>-------</td><?php
               }
               else {?><td style="background-color: hsl(118, 98%, 82%);">non Reserver</td>
          <td>                <a class="btn btn-primary" href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=jcr5&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td> 
               
               <?php  }if($ligne["jcr6"]!=0){?>
                  
                                 <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                 <td>-------</td><?php
               }
               else {?><td style="background-color: hsl(118, 98%, 82%);">non Reserver</td>
          <td>                <a class="btn btn-primary" href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=jcr6&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td> 
               </tr> <?php }?>
  
               <tr>
                  <TD></TD>
                  <td>VENDREDI</td>
               <?php  if($ligne["vcr1"]!=0){?>
  
                  <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                  <td>-------</td><?php
              }
              else { ?> <td style="background-color: hsl(118, 98%, 82%);">non Reserver</td> 
              
              <td>                <a class="btn btn-primary" href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=vcr1&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td> 
              <?php } if($ligne["vcr2"]!=0){?>
                  
                                <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                 <td>-------</td><?php
              }
              else {?><td style="background-color: hsl(118, 98%, 82%);">non Reserver</td>
          <td>                <a class="btn btn-primary" href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=vcr2&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td> 
              
              <?php } if($ligne["vcr3"]!=0){?>
                  
                                 <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                 <td>-------</td><?php
               }
               else {?><td style="background-color: hsl(118, 98%, 82%);">non Reserver</td>
          <td>                <a class="btn btn-primary" href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=vcr3&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td> 
               
               <?php } if($ligne["vcr4"]!=0){?>
                  
                  <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                  <td>-------</td>
                  <?php
               }
               else {?> <td style="background-color: hsl(118, 98%, 82%);">non Reserver</td> 
               <td>                <a class="btn btn-primary" href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=vcr4&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td> 
               
               <?php } if($ligne["vcr5"]!=0){?>
                  
                                 <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                 <td>-------</td><?php
               }
               else {?><td style="background-color: hsl(118, 98%, 82%);">non Reserver</td>
          <td>                <a class="btn btn-primary" href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=vcr5&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td> 
               
               <?php  }if($ligne["vcr6"]!=0){?>
                  
                                 <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                 <td>-------</td><?php
               }
               else {?><td style="background-color: hsl(118, 98%, 82%);">non Reserver</td>
          <td>                <a class="btn btn-primary" href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=vcr6&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td> 
               </tr> <?php }?>
               <tr>
                  <TD></TD>
                  <td>SAMEDI</td>
               <?php  if($ligne["scr1"]!=0){?>
  
                  <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                  <td>-------</td>
                  <?php
              }
              else { ?> <td style="background-color: hsl(118, 98%, 82%);">non Reserver</td>
                          <td>                <a class="btn btn-primary" href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=scr1&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td> 
  
              <?php } if($ligne["scr2"]!=0){?>
                  
                                <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                 <td>-------</td><?php
              }
              else {?><td style="background-color: hsl(118, 98%, 82%);">non Reserver</td>
          <td>                <a class="btn btn-primary" href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=scr2&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td> 
              
              <?php } if($ligne["scr3"]!=0){?>
                  
                                 <td style="background-color:  hsl(0, 98%, 82%);">Deja reserver </td>
                 <td>-------</td><?php
               }
               else {?><td style="background-color: hsl(118, 98%, 82%);">non Reserver</td>
          <td>                <a class="btn btn-primary" href="reserver.php?val=<?=$_SESSION["vale"]?>&code=<?=$_SESSION["code_module"]?>&creno=scr3&salle=<?= $ligne["numsalle"]?>">reserver </a>
</td> 
<?php  }
          ?> 
               <td>week_end</td>
               <td>-------------</td>
               <td>week_end</td>
               <td>-------------</td>
  
               <td>week_end</td>
               <td>-------------</td>
  
              
          </tr>
         
          </table>
          <?php 
          
               }
              

}

        
   ?>
   <div align="center" style="padding-top: 60px;">
   <a class="btn btn-primary" href ="espace_enseignant_principale.php">Acceuil</a>  <a style="margin-left: 50px;"  class="btn btn-primary"  href="DECONNEXION_enseignant.php">Deconnexion</a>

   </div>
               




                </div></div></div></div></div>