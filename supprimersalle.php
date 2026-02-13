<?php
session_start();
if(isset($_SESSION["login"])) {?>

<?php
   try {
    $cn1 = new PDO("mysql:host=localhost;dbname=tp;port=3306;charset=utf8", 'root', '');
} catch(PDOException $erreur) {
    die("Erreur de connexion : " . $erreur->getMessage());
}
if(isset($_GET["Cod"])){

$req="DELETE FROM `salle` WHERE  numsalle=".$_GET["Cod"].";";
$rep=$cn1->exec($req);
if($rep){
    header('Location: gestion_de_salles_de_tps.php');
    
}
else{
    echo"ERREURE DE SUPPRESION DE salle";
}

}

?>
<a href ="javascript:history.go(-1)">Revenir à la précédente</a>
<a href ="page_principale_administration.php">Revenir à ACCEUILE</a>
<div>
    <a href="deconnexion_admin.php"> deconnexion </a>
 </div>

<?php
 } else{
    header("Location: acceuil.php");exit;
 } 