<?php 
session_start();
/*$_SESSION["numsalle"]=$_GET["f"];
$_SESSION["code_module"]=$_GET["code_module"];
$_SESSION["vale"]=$_GET["vale"];*/
//echo"bonjour" .$_GET["code"].$_GET["val"].$_SESSION["cne"] ;
$req3 = "UPDATE salle SET ".$_GET["creno"]." = 0  WHERE numsalle = " .$_SESSION["numsalle"] . ";";
$cn2 = new PDO("mysql:host=localhost;dbname=tp;port=3306;charset=utf8", 'root', '');
$cn2->exec($req3);
$cn1 = new PDO("mysql:host=localhost;dbname=tp;port=3306;charset=utf8", 'root', '');
$req="DELETE from reservation where cneens='".$_SESSION["cne"]."' and  module='".$_SESSION["code_module"]."' and groupe=".$_SESSION["vale"].";";
$cn1->exec($req);

header("location:groupe.php");
?>