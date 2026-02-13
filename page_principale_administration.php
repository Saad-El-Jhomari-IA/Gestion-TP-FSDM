<?php
 session_start();
 if(isset($_SESSION["login"])) {?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page_principale_administration</title>
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







<div class="container" style="padding-top:10px;background-image: url(img103.jpg);height:AUTO;" >
    <div  style="padding-top:60px;" ><h1 align="center" >Bienvenue dans votre espace  </h1>
     </div>
    <div class="container"> 
                      <div  style="padding-top:100px;" ><h3 style="color: #e41dcd;"> Voici les travaux que vous pouvez faire :  </h3>
                      </div>
        <div class="container">
            <div class="container">  
                      
                <div class="row" style="padding-top:40px;">
                    <div class="col-md-6" style="padding-left:100px;">
                    <a href="Ajouter_Etudiant_Admin.php">   <div class="card" style="width: 350px; ">
                        <img src="assets/img/img10.jpg" class="card-img-top" alt="img10" style="height:150PX;">
                          
                           <div class="card-body"style="padding-top:10px;" >
                                   <ul>
                                    <div style="padding-top:10px;padding-right:20px; " class="text text-primary" ><h3 align="center">Gestion des étudiants</h3> </div>
                                       
                                      <!-- <div style="padding-top:20px;padding-left:30PX;" > <a  class="btn btn-success text-center"  href="Ajouter_Etudiant_Admin.php" >Ajouter un étudiant</a></div>
                                      <div style="padding-top:10px;padding-left:30PX;" > <a   class="btn btn-warning text-center" href="modifier_etudiant.php" >Modifier un étudiant</a></div>
                                      <div style="padding-top:10px;padding-left:30PX;" ><a   class="btn btn-danger text-center"  href="supprimer_etudiant.php" >Supprimer un étudiant</a> </div>    -->

                                </div>
                        </div>  </a>   

                    </div>
                    <div class="col-md-6" style="padding-left:60px;">
                   <a href="Ajouter_Enseignant_Admin.php">     <div class="card" style="width:350px;">
                        
                        <img src="assets/img/img11.jpg" class="card-img-top" alt="img11"style="height:150PX;">

                                <div class="card-body"style="padding-top:10px" >
                                <ul>
                                      <div style="padding-top:10px;padding-right:20px; " class="text text-primary" ><h3 align="center">Gestion des enseignants</h3> </div>
                                       
                                      <!-- <div style="padding-top:20px;padding-left:30PX;" > <a  class="btn btn-success text-center"  href="Ajouter_Enseignant_Admin.php">Ajouter un enseignant</a></div>
                                      <div style="padding-top:10px;padding-left:30PX;" > <a   class="btn btn-warning text-center" href="modifier_enseignant.php">Modifier un enseignant</a></div>
                                      <div style="padding-top:10px;padding-left:30PX;" ><a   class="btn btn-danger text-center"  href="supprimer_enseignant.php">Supprimer un enseignant</a></div>    -->


                                </div>     
                        </div>  </a>
                    </div>
                    

                </div>

                <div style="display: flex; justify-content: center;padding-top:130px;"> 
                 <a  class="btn btn-success text-center"  href="gestion_de_salles_de_tps.php"> <h2>Gestion des salles de TP </h2></a>
                </div>

                <div  style="padding-top:60px;">
                <a class="btn btn-primary text-center " href="deconnexion_admin.php"> <h6>Déconnexion </h6></a>
                </div>

            </div>    
        </div>
    </div>  
</div> 
</body>
</html>
 <?php
 } else{
    header("Location: acceuil.php");exit;
}