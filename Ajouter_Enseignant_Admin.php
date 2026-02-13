<?php
 session_start();
if(isset($_SESSION["login"])) {?>


    <!-- <form action="gestion_user1.php" method = "post">

<pre>

Entrez le code:              <input  type = "text"  name = "Code" required />

Entrez le nom et Prenom:               <input  type = "text"  name = "Nom"  required/>

Affecter un mot de passe:    <input  type =  "password"  name = "Pass"  required/>

Affecter les modules
<input  type = "checkbox"  name =  "web_dynamique"  value = "1"   /> Web_dynamique
<input  type = "checkbox"  name =  "ro"  value = "1"   /> Recherche opperationnel 
<input  type = "checkbox"  name =  "base_de_donnee"  value = "1"   /> Base de donnee
<input  type = "checkbox"  name =  "projet_tutore"  value = "1"   /> Projet_tutore
<input  type = "checkbox"  name =  "projet_tutore2"  value = "1"   />Projet_tutore2
<input  type = "checkbox"  name =  "reseaux"  value = "1"   /> Reseaux
</pre>
<input  type = 'submit'  value =  'Envoyer' /> <input  type = 'reset'  value =  'Annuler' />
    </form>
    <a href="modifier_enseignant.php">modifier un enseignant</a><br>
<a href="supprimer_enseignant.php">supprimer un enseignant</a><br>
<a href ="javascript:history.go(-1)">Revenir à la précédente</a>
<a href ="page_principale_administration.php">Revenir à ACCEUILE</a>
<div>
    <a href="deconnexion_admin.php"> deconnexion </a>
 </div> -->
 
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
<body >
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
<h1 align="center">Ajout des enseignants</h1>

<div align="center" style="background-image: url('img33.jpg');">
       <div class="card"  align="center" style="width: 60%;">
   
    <form  method="post" action=""  class="my-form">
  <div class="form-group">
    <label for="Code">Entrez le code:</label>
    <input type="text" class="form-control" id="Code" name="Code" placeholder="Saisir le CNE" required>
  </div>
  <div class="form-group">
    <label for="Nom">Entrez le nom et prénom:</label>
    <input type="text" class="form-control" id="Nom" name="Nom" placeholder="Saisir le nom complet" required>
  </div>
  <div class="form-group">
    <label for="password">Affecter un mot de passe:</label>
    <input type="password" class="form-control" id="password" name="Pass" required>
  </div>
  <div class="form-group">
    <label>Affecter les modules pour étudiant:</label><br>
    <div class="form-check">
      <input style="margin-left: 250px;" class="form-check-input" type="checkbox" name="web_dynamique" id="web_dynamique" value="1">
      <label class="form-check-label" for="web_dynamique">Web dynamique</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" style="margin-left: 250px;" type="checkbox" name="ro" id="ro" value="1">
      <label class="form-check-label" for="ro">Recherche opérationnelle</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" style="margin-left: 250px;" type="checkbox" name="base_de_donnee" id="base_de_donnee" value="1">
      <label class="form-check-label" for="base_de_donnee">Base de données</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" style="margin-left: 250px;" type="checkbox" name="projet_tutore" id="projet_tutore" value="1">
      <label class="form-check-label" for="projet_tutore">Projet tutoré</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" style="margin-left: 250px;" type="checkbox" name="projet_tutore2" id="projet_tutore2" value="1">
      <label class="form-check-label" for="projet_tutore2">Projet tutoré 2</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" style="margin-left: 250px;" type="checkbox" name="reseaux" id="reseaux" value="1">
      <label class="form-check-label" for="reseaux">Réseaux</label>
    </div>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-success">Envoyer</button>
    <button type="reset" class="btn btn-secondary">Annuler</button>
    
    <a class="btn btn-primary" href="deconnexion_admin.php"> Déconnexion </a>
  </div>
</form>

    </div>
    
</div>
 
</body>
</html>
 
<?php
try {
  $cn1 = new PDO("mysql:host=localhost;dbname=tp;port=3306;charset=utf8", 'root', '');
} catch(PDOException $erreur) {
  die("Erreur de connexion : " . $erreur->getMessage());
}


 if(isset($_POST["web_dynamique"])){
  $w=1;
} else {
  $w=0;
}

if(isset($_POST["ro"])){
  $r=1;
} else {
  $r=0;
}

if(isset($_POST["reseaux"])){
  $re=1;
} else {
  $re=0;
}

if(isset($_POST["base_de_donnees"])){
  $b=1;
} else {
  $b=0;
}

if(isset($_POST["projet_tutore"])){
  $p=1;
} else {
  $p=0;
}

if(isset($_POST["projet_tutore2"])){
  $p2=1;
} else {
  $p2=0;
}

$req3="INSERT INTO `enseignant`(`cneens`, `nomen`, `passworden`, `web_dynamique`, `reseaux`, `projet_tutore`, `projet_tutore2`, `base_de_donnee`, `ro`) VALUES ('".$_POST["Code"]."','".$_POST["Nom"]."',".$_POST["Pass"].",".$w.",".$re.",".$p.",".$p2.",".$b.",".$r.")";
$rep33 = $cn1->exec($req3);

if($rep33){ ?>






  <?php
?><div  style="width: 20%;margin-left:800px" class="alert alert-success"><b align="center"><?php echo"l'enseignant   ".$_POST["Nom"]."   est ajouté";?></b></div><?php
  
} else {
  header("Location: Ajouter_Enseignant_Admin.php");exit;?><?php
}





 } else{
    header("Location: acceuil.php");exit;
 } 
 