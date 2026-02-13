<?php
 session_start();
 if(isset($_SESSION["nouvelle"])){ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
</head>
<?php
   
 if(isset($_POST["submit"])){
  try {
    $cn = new PDO("mysql:host=localhost;dbname=pfe;port=3306;charset=utf8", 'root', '');
    $cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $erreur) {
    die("Erreur de connexion : " . $erreur->getMessage());
}
 
   if(!empty($_POST["mot_de_passe"])) {

  $Rq = "SELECT *, count( password) as 'motdepasse' FROM user  where password = '".$_POST["mot_de_passe"]."';" ;
  $rep=$cn->query($Rq);
  if($rep){
    while($ligne=$rep->fetch()){
      if($ligne["motdepasse"]>=1){
        $_SESSION['login']=$ligne['password'];
       // echo"". $_SESSION['login'] .$ligne['password'];
     header("Location:page_principale_administration.php");
      }
      else $message="Donnees incorrect";
      
    }
  } else $message="Donnees incorrect";
  
  }

}
  ?>
 <body >
  <div style="padding-top:50px;"><h1 align="center">Espace D'authentification Administrateur</h1></div>
  <a href="acceuil.php">
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg>Retour 
	</a>

    <div style="padding-left:230px;padding-top:70px">
    
    <div class="card" style="width: 50rem; ">
  <img src="assets/img/2.jpg" class="card-img-top" alt="img4" style="height:130PX;">
  <div class="card-body"style="padding-top:30px" >
  <h4 class="text text-danger text-center">Veuillez s'identifier pour accéder votre espace</h4>
  <div style="padding-top:50px; " class="row">
  <div class="col-md-6 " style="padding-left:30px;">
  <form style="  padding-left:70px;border: 2px solid rgb(143, 190, 190);border-radius:30px;" method="POST">


 <div>
 <label for="inputPassword5" class="form-label"   style="padding-top:20px;" >Mot de passe</label>
<input type="password" id="inputPassword5" class="form-control" aria-labelledby="passwordHelpBlock"  name="mot_de_passe" style="width:200px;" placeholder="mot de passe" required>
<div id="passwordHelpBlock" class="form-text">
  <p class="alert alert-danger" style="width:200px;padding-top:10px">Pas d'éspace entre les lettres  </p>
</div>
 </div>

   <div  style="padding-bottom:20px;">
    <input type="submit" value="connexion" name="submit" class="btn btn-primary text-center">
 </div>
  </form> 
 </div>
 <div class="col-md-6" style="padding-left:30px;">
 
 <div style="  padding-top:10px;border: 2px solid rgb(143, 190, 190);border-radius:30px;" style="width: 22rem;">
 <h4 align="center">Première visite sur ce site ?</h4>
 <ul> <p class="text text-success" style="font-size:18px;">Première visite sur ce site ? </p>
 <li>Utilisez votre mot de passe réssu dans votre boite émail </li>
 </ul>
 <div><ul> <p class="text text-danger" style="font-size:18px;">Si non </p>
 <li> Soyez le bienvenu  </li>
 </ul>
 
 </div>
 </div>
 </div>
 </div>
  </div>
  </div>
 </div>

 
 </div>



 

<div>
 <div style="display: flex; justify-content: center;padding-top:40px; ">
    <a href="acceuil.php" class="btn btn-primary text-center">Sortir</a>
</div>
<div style="display: flex; justify-content: center;padding-top:80px; ">
    
</div>

</body>
    

</html>
<?php
 } else{
    header("Location: acceuil.php");exit;
}
?>