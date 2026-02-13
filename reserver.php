<?php
session_start();
/*$_SESSION["numsalle"]=$_GET["f"];
$_SESSION["code_module"]=$_GET["code_module"];
$_SESSION["vale"]=$_GET["vale"];*/

$table=array("lcr1"=>"Lundi 8h:30 à 10h","lcr2"=>"Lundi 10h à 11h:30h","lcr3"=>"Lundi 11h:30 à 13h","lcr4"=>"Lundi 14h à 15h:30","lcr5"=>" Lundi 15h:30h à 17h","lcr6"=>"mardi 17h à 18h:30","mcr1"=>"mardi 8h:30 à 10h","mcr2"=>"mardi 10h à 11h:30h","mcr3"=>"mardi 11h:30 à 13h","mcr4"=>"mardi 14h à 15h:30","mcr5"=>"mardi 15h:30h à 17h","mcr6"=>"mardi 17h à 18h:30","mecr1"=>"mercredi 8h:30 à 10h","mecr2"=>"mercredi 10h à 11h:30h","mecr3"=>"mercredi 11h:30 à 13h","mecr4"=>"mercredi 14h à 15h:30","mecr5"=>" mercredi 15h:30h à 17h","mecr6"=>"mercredi 17h à 18h:30","jcr1"=>"jeudi 8h:30 à 10h","jcr2"=>"jeudi 10h à 11h:30h","jcr3"=>"jeudi 11h:30 à 13h","jcr4"=>"jeudi 14h à 15h:30","jcr5"=>"jeudi 15h:30h à 17h","jcr6"=>"jeudi 17h à 18h:30","vcr1"=>"vendredi 8h:30 à 10h","vcr2"=>"vendredi 10h à 11h:30h","vcr3"=>"vendredi 11h:30 à 13h","vcr4"=>"vendredi 14h à 15h:30","vcr5"=>"vendredi 15h:30h à 17h","vcr6"=>"vendredi 17h à 18h:30","scr1"=>"samedi 8h:30 à 10h","scr2"=>"samedi 10h à 11h:30h","scr3"=>"samedi 11h:30 à 13h");


$req3 = "UPDATE salle SET ".$_GET["creno"]." = ".$_SESSION["vale"]. " WHERE numsalle = " .$_SESSION["numsalle"] . ";";
try {
  $cn2 = new PDO("mysql:host=localhost;dbname=tp;port=3306;charset=utf8", 'root', '');
 
} catch(PDOException $erreur) {
  die("Erreur de connexion : " . $erreur->getMessage());
}
$cn2->exec($req3);

$req4="INSERT INTO reservation (cneens,nomen,module,creno,groupe,numsalle,cr) Values ('".$_SESSION['cne']."','". $_SESSION['login']."','".$_SESSION["code_module"]."','".$table[$_GET["creno"]] ."',". $_SESSION["vale"] .","  .$_SESSION["numsalle"].",'".$_GET["creno"]."');";
try {
  $cn3 = new PDO("mysql:host=localhost;dbname=tp;port=3306;charset=utf8", 'root', '');
 
} catch(PDOException $erreur) {
  die("Erreur de connexion : " . $erreur->getMessage());
}
$cn3->exec($req4);
$_SESSION["reserver"]="reserver";
header("location:groupe.php");

?>