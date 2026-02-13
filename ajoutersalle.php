<?php
 session_start();
 if(isset($_SESSION["login"])) {?>
 
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajoutersalle</title>
</head>
<body> -->
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
    <!-- <div class="row">
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
          <a class="nav-link "  href="Ajouter_Etudiant_Admin.php" style="color:blue;"> <B> Ajouter Etudiant </B></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="supprimer_etudiant.php" style="color:BLUE;"><b>supprimer Etudiant</b></a>
        </li>
      

        <li class="nav-item">
            <a class="nav-link" href="Etudiant.php" style="color:BLUE;"> <b>Espace Etudiant</b> </a>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="deconnexion_admin.php" style="color:BLUE;"><b>Deconnexion</b> </a>
        </li>
         
             </ul>
            </div>
         </div>
         </nav>

        </div>
        <div class="col-md-1" style="width: 100px;height 30px;  ">
          <img  class="img rounded-circle"  style="width:100%;height:100%;"  src="assets/img/IMG5.jpg" alt="IMG5">
        </div>       
    </div> -->
    <div class="row" style="padding-top:0px;">
<div class="col-md-6" style="">
<img  class="img4" src="assets/img/2.jpg" alt="IMG4"  style=" width:100%; height:70px;" >
 </div>
<div class="col-md-5">

<nav class="navbar navbar-expand-lg bg-body-tertiary " style="width:100%; height:70px;">
        <div  class="container-fluid">
        <ul  class="navbar-nav">
            <div>
        <li  class="nav-item">
          <a class="nav-link " style="color:blue;" href="fsdm.php"> <B> FSDM </B></a>
        </li>
     </div>
        <div style="padding-left: 30px;" class="collapse navbar-collapse" id="navbarNav">
        <li class="nav-item">
          <a class="nav-link "  href="acceuil.php" style="color:blue;"> <B> Acceuil </B></a>
        </li>
     </div>
     <div style="padding-left: 30px;" class="collapse navbar-collapse" id="navbarNav">
        <li class="nav-item">
        <a class="nav-link "  style="color:blue;" href="gestion_de_salles_de_tps.php"> <b>GESTION DES SALLES </b>  </a>
        </li>
     </div>
        <div style="padding-left: 30px;" class="collapse navbar-collapse" id="navbarNav">
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

</div>
<a style=" font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;" href="page_principale_administration.php">
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg>Retour Acceuil
	</a>
</body>
</html>
<!-- <div align="center" class="card" style="width: 50%;margin-left:300px;margin-top:40px">
    <h2>Entrer Enseignant que voulez modifier</h2>
<form method = "post">

<pre>

      <b>Entrez le code:</b>        <input  type = "text"  name = "Code" required />

<b>Entrez le nom et Prenom:  </b>   <input  type = "text"  name = "Nom"  required/>
<input style="margin-top: 30px;" class="btn btn-success" type = 'submit'  value =  'Envoyer' /> <input style="margin-top: 30px;" class="btn btn-secondary" type = 'reset'  value =  'Annuler' />
</pre>
</form>
</div> -->
<div align="center" class="card" style="width: 50%;margin-left:300px;margin-top:40px">
    <h1>Ajouter une salle</h1>
    <form method="post">
    

<pre>
<!-- chaque  élément de formulaire à un attribut name -->
Entrez le Numero de salle:              <input  type = "text"  name = "numsalle" required />

Entrez le capacite de salle:               <input  type = "text"  name = "capacite" required />
<input   style="margin-top: 30px;" class="btn btn-success" type = 'submit'  value =  'Envoyer'  /> <input style="margin-top: 30px;" class="btn btn-secondary" type = 'reset'  value =  'Annuler' />

</pre>
    </form>
    <?php
    try {
        $cn1 = new PDO("mysql:host=localhost;dbname=tp;port=3306;charset=utf8", 'root', '');
       
    } catch(PDOException $erreur) {
        die("Erreur de connexion : " . $erreur->getMessage());
    }
    try {
        $cn2 = new PDO("mysql:host=localhost;dbname=tp;port=3306;charset=utf8", 'root', '');
       
    } catch(PDOException $erreur) {
        die("Erreur de connexion : " . $erreur->getMessage());
    }
    if(isset($_POST["numsalle"])){


    
    $req1="SELECT * from salle where numsalle=".$_POST["numsalle"].";";
    $rep1=$cn1->query($req1);
    $i=0;
    if($rep1){
        // echo"true";
    }
    while($ligne=$rep1->fetch()){
        $i++;
    }
    // echo"".$i;
    if($i==0){
        // echo"".$_POST["numsalle"];
        // echo"".$_POST["capacite"];

        //    $req="INSERT INTO `salle`(`numsalle`, `capacite`) VALUES  (".$_POST["numsalle"].",".$_POST["capacite"].";";
        $req = "INSERT INTO `salle` (`numsalle`, `capacite`) VALUES (" . $_POST["numsalle"] . ", " . $_POST["capacite"] . ")";

    $rep=$cn2->exec($req);
    if($rep){
        echo"la salle  ".$_POST["numsalle"] ." est ajouté";?>
    
    
<?php
    }else{
        echo"erreure de ajoutation de salle".$_POST["numsalle"] ;
    }
    }else{
        echo" la salle ".$_POST["numsalle"] ."est déja existe ";
    }
}

    ?>
    
      <div>
  
 </div>

<!-- </body>
</html> -->
<?php
 } else{
    header("Location: acceuil.php");exit;
 } 