<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VERIFICATION_ETUDIANT</title>
</head>
<body>
    <?php
    try {
        $cn1 = new PDO("mysql:host=localhost;dbname=tp;port=3306;charset=utf8", 'root', '');
        $cn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $erreur) {
        die("Erreur de connexion : " . $erreur->getMessage());
    }
    
    $req="INSERT INTO `formulaire_inscri`(`cneinscri`, `nomcomplet`, `passwordform`) VALUES('". $_POST["cne"] . "','".$_POST["fullname"]."','". $_POST["password"]."');";
   
    $cn1->exec($req);
    $req1="SELECT COUNT(passwordetu) AS 'pass' FROM `etudiant` WHERE passwordetu = ". $_POST["password"]." AND nometu  = '" .$_POST["fullname"]. "'  AND cneetud = '". $_POST["cne"]. "'";
    $rep1=  $cn1->query($req1);
    while($ligne1=$rep1->fetch()){
        if($ligne1["pass"]>=1){
        $req2="SELECT `nometu`, `passwordetu`, `web_dynamique`, `reseaux`, `projet_tutore`, `projet_tutore2`, `base_de_donnee`, `ro`, `cneetud` FROM `etudiant` WHERE passwordetu=". $_POST["password"]." AND nometu ='".$_POST["fullname"]."' AND cneetud ='". $_POST["cne"]. "';" ;
        $rep2 =  $cn1->query($req2);
       while($ligne2=$rep2->fetch()){
        $nb=mt_rand(100000000,999999999);
       
            $req3="INSERT INTO `liste_etudiant_tp`(`nometudtp`, `web_dynamique`, `reseaux`, `projet_tutore`, `projet_tutore2`, `base_de_donnee`, `ro`, `cneetudtp`,`passwordtp`) VALUES ('" . $ligne2["nometu"]."',". $ligne2["web_dynamique"].",".$ligne2["reseaux"].",".$ligne2["projet_tutore"].",".$ligne2["projet_tutore2"].",".$ligne2["base_de_donnee"].",".$ligne2["ro"].",'".$ligne2["cneetud"]."',".$nb.");";
            $cn1->exec($req3);
          ?><div style="margin-top: 300px;margin_bottom: 300px;margin-left: 500px;width:20%;" class="alert alert-success"><b align="center" > <?php echo "Votre demande  est en cours de traitement";?> 
        <script> alert("ce code te permet de se connecter a votre espace "+<?php $nb?>); </script>
        <form action="Etudiant.php">
            <button value="Cliquer ici ">Cliquer ici</button>
        </form>
        <?php
        }

        }
        else echo"vos informations sont incorrectes";
    }
      
    
    
    ?>
</body>
</html>
