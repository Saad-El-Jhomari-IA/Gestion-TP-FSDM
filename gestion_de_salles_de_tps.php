<?php
 session_start();
 if(isset($_SESSION["login"])) {
   try {
      $cn1 = new PDO("mysql:host=localhost;dbname=tp;port=3306;charset=utf8", 'root', '');
  } catch(PDOException $erreur) {
      die("Erreur de connexion : " . $erreur->getMessage());
  }
  if(isset($_GET["cod"])){
  
  $req="DELETE FROM `salle` WHERE  numsalle=".$_GET["cod"].";";
  $rep=$cn1->exec($req);
  if($rep){
      header('Location: gestion_de_salles_de_tps.php');
      
  }
  else{
      echo"ERREURE DE SUPPRESION DE salle";
  }
  
  }
  
  
  
  
  
  
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <link href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des salles de tp</title> 
    <?php
    try{
    $cn=new PDO("mysql:host=localhost;dbname=tp;port=3306;charset=utf8" ,'root','');
   }
  catch(PDOException $erreur){
    die("erreure de connexion:".$erreur->getMessage());
  } 
  $Rq = "SELECT *  FROM salle order by numsalle ;";
   $rep= $cn-> query($Rq);
   ?>
</head>
<body>
<div class="row" style="padding-top:0px;">
<div class="col-md-6" style="">
<img  class="img4" src="assets/img/2.jpg" alt="IMG4"  style=" width:100%; height:70px;" >
 </div>
<div class="col-md-5">

<nav class="navbar navbar-expand-lg bg-body-tertiary " style="width:90%; height:70px;">
        <div class="container-fluid">
        <ul class="navbar-nav">
            <div>
        <li class="nav-item">
          <a class="nav-link " style="color:blue;" href="fsdm.php"> <B> FSDM </B></a>
        </li>
     </div>
        <div class="collapse navbar-collapse" id="navbarNav">
        <li class="nav-item">
          <a class="nav-link "  href="acceuil.php" style="color:blue;"> <B> Acceuil </B></a>
        </li>
     </div>
     <div class="collapse navbar-collapse" id="navbarNav">
        <li class="nav-item">
        <a class="nav-link "  style="color:blue;" href="gestion_de_salles_de_tps.php"> <b>Gestion des salles </b>  </a>
        </li>
     </div>
        <div class="collapse navbar-collapse" id="navbarNav">
        <li class="nav-item">
        <a class="nav-link "  href="deconnexion_admin.php" style="color:blue;"> <b> Déconnexion</b> </a>
        </li>
     </div>


             </ul>
            </div>
         
         </nav>

        </div>
 <div class="col-md-1" style="padding-right:30px;">
 <img  class="img rounded-circle"  style="width:100%;height:100%;"  src="assets/img/IMG.jpg" alt="IMG5">
 </div>
 
 </div>

           




    <div class="container" style="padding-top:10px;background-image: url(img33.jpg);height:AUTO;"  >
         <div  style="padding-top:60px;" ><h1 align="center" >Bienvenue dans l'espace de gestion des salles de TP </h1>  </div>
                <div class="container" style="padding-top:30px;">
                    <div  style="padding-top:60px;padding-left:160px; " ><h4 style="color: blue;">Liste des salles :  </h4>  </div>
                  <div style="display: flex; justify-content: center;padding-top:15px;">
                    <table  class="table table-light table-bordered border-primary" style="width:400px;">
                        <tr  class=" table table-danger table-bordered border-primary">
                        <th>  <div style="display: flex; justify-content: center;padding-top:0px;"> Salle </th> </div>
                        <th>  <div style="display: flex; justify-content: center;padding-top:0px;"> Capacité  </th>	</div>
                        <th>  <div style="display: flex; justify-content: center;padding-top:0px;">  Suppression</th></div>
                            </tr>

                            <?php if ($rep) { while($ligne=$rep->fetch(PDO::FETCH_ASSOC)){ ?>
                                <tr class="table table-danger table-bordered border-primary"> <td> <div style="display: flex; justify-content: center;padding-top:20px;"><?=$ligne["numsalle"] ?></div> </td> 
                            <td> <div style="display: flex; justify-content: center;padding-top:20px;"><?=$ligne["capacite"] ?></div> </td>

                            <td>  <div style="display: flex; justify-content: center;padding-top:5px;"><a  class="btn btn-danger text-center"   href="gestion_de_salles_de_tps.php?cod=<?= $ligne["numsalle"]?>"> <img src="assets/img/delete.jpg" style="width:80px;height:40px;">  </a>  </td></div>
                        </tr>
                        <?php }}?>
                     </table> 


                </div>  
                
                
                <div style="display: flex; justify-content: center;padding-top:40px;">
                <a  class="btn btn-success text-center"  href="ajoutersalle.php">Ajouter salle</a>
                </div>
                <div style="padding-top:40px;">
                            </div>
                <a  class="btn btn-primary text-center" href ="javascript:history.go(-1)">Précédent</a>
                
         <div style="padding-top:10px;">
                <a  class="btn btn-primary text-center"  href="deconnexion_admin.php"> Déconnexion </a> 
           </div>

         </div>
        

         

  
    </div>


 <?php



?>
 








   



  
   
   
   
  
     
  
   




</body>
</html>
<?php
} else{
    header("Location: acceuil.php");exit;
}