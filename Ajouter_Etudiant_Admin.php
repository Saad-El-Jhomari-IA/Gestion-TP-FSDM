<?php
function getCn(){	
	static $cn;
	if(!$cn) $cn= new PDO("mysql:host=localhost;dbname=tp", "root", "");
	return $cn;
}

function getAlldemande(){
	return getCn()->query("select * from formulaire_inscri")->fetchAll();
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
    <title>Document</title>
</head>
<body>

<div class="div1">
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
          <a class="nav-link "  href="modifier_enseignant.php" style="color:blue;"> <B> Modifier un Enseignant </B></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="supprimer_enseignant.php" style="color:BLUE;"><b>Supprimer un Enseignant</b></a>
        </li>
      

        <li class="nav-item">
            <a class="nav-link" href="espace_enseignant_principale.php" style="color:BLUE;"> <b>FSDM</b> </a>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="deconnexion_admin.php" style="color:BLUE;"><b>Déconnexion</b> </a>
        </li>
         
             </ul>
            </div>
         </div>
         </nav>

        </div>
        <div class="col-md-1" style="width: 100px;height 30px;  ">
          <img  class="img rounded-circle"  style="width:100%;height:100%;"  src="assets/img/IMG.jpg" alt="IMG5">
        </div>       
    </div>
</div>
<a href="page_principale_administration.php">
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg>Retour 
	</a>




    <div class="container"><div class="container"><div style="background-image: url('img103.jpg');height:100000px;" class="card">
    <div>
        <h1 align="center" style="margin-top:80px;color:blue">Gestion des étudiants</h1>

    </div>

<?php if(!isset($_GET["val"])){?>

<div align="center" style="padding-top:60px;padding-bottom:30px;" > <a style="width:20%;"  class="btn btn-success text-center"  href="Ajouter_Etudiant_Admin.php?val=ok" >Voir les demandes </a></div> <?php } ?>

<?php if(isset($_GET["val"])){

$tab=getAlldemande();

if(count($tab)>0){?>
<div style="padding-top: 40px;">
    <h1 style="color: blueviolet;">Liste des demandes  actives</h1>
</div>


<hr />
<div style="margin-left:250px;width: 60%">
<table class="table table-bordered table-warning table-hover" border="1" align = "center" width = "60%">
			<tr> 
				<th>Cne</th>
				<th>Nom </th>
				<th>Action </th>
			</tr>	
		 
	 
			
	


<?php


    foreach($tab as $row ){ ?>

        <tr>
        <td> <?= $row["cneinscri"]  ?></td>
        <td> <?= $row["nomcomplet"]  ?> </td>
        <td> demande </td>
        
        
    </tr>
   
  <?php  } ?>
  </table></div>
  <div style="margin-top:50px;margin-left:50PX;" > <a style="width:20%" class="btn btn-warning text-center"  href="Ajouter_Etudiant_Admin.php?traiter=traiter" >Traiter les demandes </a></div>
 <?php
}else{ ?><div style="margin-top: 50px;margin-left:50px;margin-right:50px;width:40%" class="alert alert-danger" ><h4 align="center">Aucune demande jusqu'a maintenant</h4></div> <?php }


}

?>


             

<?php if(isset($_GET["traiter"])){



$tab=getAlldemande();

if(count($tab)>0){?>
<div style="padding-top:40px;">
    <h1 style="color: blueviolet;">Traitement des demandes </h1>
</div>


<hr />
<div style="margin-left:250px;width: 60%">
<table class="table table-bordered table-warning table-hover" border="1" align = "center" width = "60%">
			<tr> 
				<th>Cne</th>
				<th>Nom </th>
				<th>Statut </th>
			</tr>	
		 
	 
			
	


<?php


    foreach($tab as $row ){ ?>

        <tr>
        <td> <?= $row["cneinscri"]  ?></td>
        <td> <?= $row["nomcomplet"]  ?> </td><?php

        if( $row["etat"]==0){ ?>

            <td align="center" style="background-color:  hsl(0, 98%, 82%);"> Refusé </td>
       <?php } ?>
       <?php

        if( $row["etat"]==1){ ?>

            <td align="center" style="background-color: hsl(118, 98%, 82%);"> Accepté </td>
       <?php } ?>
       
        
        
    </tr>

  <?php  } ?>
  </table> 
</div>
 <div  style="padding-top:20px;padding-left:30PX;" > <a  class="btn btn-warning text-center" href="Ajouter_Etudiant_Admin.php?confirmer=ok">Mis a jour</a> </div>
<?php
}else{ ?><h1> Tous les demandes sont déja traitées  </h1> <?php }


    

}?>

<?php
if(isset($_GET["confirmer"]) && $_GET["confirmer"]=="ok"){
    $cn2=getCn();
    $req="DELETE FROM formulaire_inscri";
    $cn2->query($req);
}

?>

<div class="row" style="padding-top: 80px;">
<div class="col md-6">
<a style="margin-left:220px;width:40%;" class="btn btn-primary" href="modifier_etudiant.php">Modifier un étudiant</a>
</div>
<div class="col md-6">
<a class="btn btn-danger" style="margin-left:90px;width:40%;" href="supprimer_etudiant.php">Supprimer un étudiant</a><br>
</div>
</div>


<a style="width: 20%;margin-top:80px;" class="btn btn-primary" href ="javascript:history.go(-1)">Revenir à la précédente</a>
<!-- <a href ="page_principale_administration.php">Revenir à acceuil</a> -->
<div><div><div>
</body>
</html>
 