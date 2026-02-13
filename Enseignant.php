<?php
 session_start();
 if(isset($_SESSION["nouvelle"])){ ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Authentification</title>
</head>
<body >
  <div style="padding-top:50px;"><h1 align="center">Espace D'authentification Enseignant</h1></div>

	<a href="acceuil.php">
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg>Retour 
	</a>
    <div style="padding-left:230px;padding-top:70px">
   
    
    <div  class="card" style="width: 50rem; margin-left:115px">
  <img src="assets/img/2.jpg" class="card-img-top" alt="img4" style="height:130PX;">
  <div class="card-body"style="padding-top:30px;"  >
  <h4 class="text text-danger text-center">Veuillez s'identifier pour accéder votre espace</h4>
  <div style="padding-top:50px; " class="row">
  <div class="col-md-12 " style="padding-left:30px;">
  <form style="  padding-left:250px;border: 2px solid rgb(143, 190, 190);border-radius:30px;" method="POST" action="VERIFICATION_ENSEIGNANT.php" >
  <div>

  <label for="cne" class="form-label" style="padding-top:10px;">Login</label>
<input type="text" id="cne" class="form-control" aria-labelledby="cnehelp"  name="cneens"  placeholder="Votre code"style="width:200px;" required>
<div id="cnehelp" class="form-text">
  <p class="alert alert-danger" style="width:200px;padding-top:7px">Pas d'éspace entre les lettres  </p>
</div>




 </div>
 <div>
 <label for="inputPassword5" class="form-label" >Mot de passe</label>
<input type="password" id="inputPassword5" class="form-control" aria-labelledby="passwordHelpBlock"  name="password" style="width:200px;" placeholder="Votre mot de passe" required>
<span style="position: absolute;
left: auto;
right: 40%;
top: 450px;
cursor: pointer;">
<script>
	var state=false;
	function toggle(){
		if(state){
			document.getElementById("inputPassword5").setAttribute("type","password");
		state=false;
		}else{
			document.getElementById("inputPassword5").setAttribute("type","text");
		state=true;		}
		
	}
</script>
<i class="fa fa-eye" onclick="toggle()" aria-hidden="true"></i>
</button>
</span>
<div id="passwordHelpBlock" class="form-text">
  <p class="alert alert-danger" style="width:200px;padding-top:7px">Pas d'éspace entre les lettres  </p>
</div>
 </div>

   <div  style="padding-bottom:20px;">
    <input type="submit" value="connexion" class="btn btn-success text-center">
 </div>
  </form> 
 </div>
 
  </div>
  </div>
 </div> 
 </div>



 


 <div style="display: flex; justify-content: center;padding-top:40px;margin-left:100px ">
    <a href="acceuil.php" class="btn btn-primary text-center">Sortir</a>
</div>
<div style="display: flex; justify-content: center;padding-top:80px; ">
</div>

</body>



</html>
<?php
} else{
    header("Location: acceuil.php");exit;
 } ?>