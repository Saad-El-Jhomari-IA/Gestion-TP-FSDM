<?php
session_start();
if(isset($_SESSION["login"])) {?>
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
<div>

    <!-- <a href="deconnexion_admin.php"> deconnexion </a>
 </div>
   

<a href ="javascript:history.go(-1)">Revenir à la précédente</a>
<a href ="page_principale_administration.php">Revenir à ACCEUILE</a> -->


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
          <a class="nav-link "  href="Ajouter_Etudiant_Admin.php" style="color:blue;"> <B> Ajouter étudiant </B></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="supprimer_etudiant.php" style="color:BLUE;"><b>Supprimer étudiant</b></a>
        </li>
      

        <li class="nav-item">
            <a class="nav-link" href="Etudiant.php" style="color:BLUE;"> <b>Espace étudiant</b> </a>
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
    
<!-- 
<h1>Supprimer un Enseignant</h1>
<form method = "post">


Entrez le code:              <input  type = "text"  name = "Code" required /><br>

Entrez le nom et Prenom:               <input  type = "text"  name = "Nom"  required/><br>
<input  type = 'submit'  value =  'Envoyer' /> <input  type = 'reset'  value =  'Annuler' />
</form> -->

<h1 align="center" >Supprimer Un Etudiant</h1>
<div align="center" class="card" style="width: 50%;margin-left:300px;margin-top:40px">
    <h2>Entrer le cne d'etudiant que vous voulez supprimer</h2>
<form method = "post">

<pre>

      <b>Entrez le code:</b>        <input  type = "text"  name = "Code" required />

<b>Entrez le nom et Prenom:  </b>   <input  type = "text"  name = "Nom"  required/>
<input style="margin-top: 30px;" class="btn btn-success" type = 'submit'  value =  'Envoyer' /> <input style="margin-top: 30px;" class="btn btn-secondary" type = 'reset'  value =  'Annuler' />
</pre>
</form>
</div>
<!-- <h1>Supprimer un Etudiant</h1>
<form method = "post">

Entrez le code:              <input  type = "text"  name = "Code" required /><br>

Entrez le nom et Prenom:               <input  type = "text"  name = "Nom"  required/><br>
<input  type = 'submit'  value =  'Envoyer' /> <input  type = 'reset'  value =  'Annuler' />
</form> -->

<?php
   try {
    $cn1 = new PDO("mysql:host=localhost;dbname=tp;port=3306;charset=utf8", 'root', '');
} catch(PDOException $erreur) {
    die("Erreur de connexion : " . $erreur->getMessage());
}
if(isset($_POST["Code"])&&isset($_POST["Nom"])){

$req="DELETE FROM `etudiant` WHERE cneetud='".$_POST["Code"]."' AND nometu= '".$_POST["Nom"]."';";
$rep=$cn1->exec($req);
if($rep){
    header('Location: page_principale_administration.php');
    
}
else{
    // echo"ERREURE DE SUPPRESION";
    header('Location: page_principale_administration.php');
}

}

?>
<!-- <a href ="javascript:history.go(-1)">Revenir à la précédente</a>
<div>
    <a href="deconnexion_admin.php"> deconnexion </a>
 </div> -->
   
 <?php
 } else{
    header("Location: acceuil.php");exit;
 } 