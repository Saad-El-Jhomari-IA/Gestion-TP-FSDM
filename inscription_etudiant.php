<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css" rel="stylesheet">
    <title>inscription</title>
</head>
<body>
	<div>
		<h1 align="center">Inscription Etudiant</h1>
	</div>
<form method="post" action="formulaire_inscri.php">
			<h2>Inscription</h2>
			<label>Nom complet:</label>
			<input type="text" name="fullname" required><br>
			<label>CNE:</label>
			<input type="text" name="cne" required><br>
			<label>Mot de passe:</label>
			<input type="password" name="password" required><br>
			<label>Confirmez votre mot de passe:</label>
			<input type="password" name="confirm_password" required><br>
			<button type="submit" name="signup">S'inscrire</button>
		</form>
		<a href ="javascript:history.go(-1)">Revenir à la précédente</a>
		<a href="acceuil.php">sortir</a>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Formulaire d'inscription</title>

<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
<link href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style11.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<meta name="robots" content="noindex, follow">
<body >
	

	<div class="card" style="margin-top: -120px;">
	<!-- <img src="2.jpg" class="card-img-top" alt="img4" style="height:130PX;"> -->
	<img src="assets/img/2.jpg" class="img-fluid" alt="Responsive image" style="margin-left: 320px;">
	</div>
	<a href="acceuil.php">
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg>Retour Acceuil
	</a>
	
<div class="main">

	<div>
	<div class="card" style="margin-left:100px;margin-right:100px;height:1000px">
	
	<section class="signup">
		

<div class="container" >
<div class="signup-content">
<form method="POST"  action="formulaire_inscri.php" id="signup-form" class="signup-form">
<h2 class="form-title">Inscription Etudiant</h2>
<div class="form-group">
<label>veuillez  saisire  votre CNE :</label>
<input type="text" class="form-input" name="cne" id="name" placeholder="Votre CNE" required />
</div>
<div class="form-group">
<label>veuillez  saisire  votre NOM :</label>
<input type="text" class="form-input" name="fullname" id="name" placeholder="Votre Nom" required />
</div>
<div class="form-group">
<label>veuillez  saisire  votre PASSWORD :</label>
<input type="password" class="form-input" name="password" id="password" placeholder="Mot De passe" required/>
<span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
</div>
<div class="form-group">
<label>veuillez  confirmer votre PASSWORD :</label>
<input type="text" class="form-input" name="confirm_password" id="re_password" placeholder="Confirmer Votre Mot De passe" />

<span>
<script>
	var state=false;
	function toggle(){
		if(state){
			document.getElementById("password").setAttribute("type","password");
		state=false;
		}else{
			document.getElementById("password").setAttribute("type","text");
		state=true;		}
		
	}
</script>
<i class="fa fa-eye" onclick="toggle()" aria-hidden="true"></i>
</button>
</span>

</div>

<div class="form-group">
</div>
<div class="form-group">
<input type="submit" name="signup" id="submit" class="form-submit" value="S'incrire" />
</div>
</form>
<p class="loginhere">
vous étes déja un compte? <a href="Etudiant.php" class="loginhere-link">Connecter ici</a>

</p>
</div>
</div>
</section>
	</div>

	</div>
	
</div>


<!-- <script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script> -->

<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script> -->
<!-- <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7bff14beefcc12b5","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.3.0","si":100}' crossorigin="anonymous"></script> -->
</body>
</html>