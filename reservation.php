<?php
session_start();


try {
    $cn1 = new PDO("mysql:host=localhost;dbname=tp;port=3306;charset=utf8", 'root', '');
   
} catch(PDOException $erreur) {
    die("Erreur de connexion : " . $erreur->getMessage());
}

$req="SELECT * FROM salle;";
$rep=$cn1->query(($req));
if($rep==true){ ?>
    <table border="1px">
        <tr>
            <th>Numero de salle</th>
        <th>Nombre de machine </th>
        </tr>
        <?php
         while($ligne1=$rep->fetch() ){?>
        <tr>
            <td><a href="reserveration_salle1.php?f=<?=$ligne1["numsalle"]?>&code_module=<?=$_GET["codemodule"]?>&vale=<?= $_GET["val"]?>"><?=$ligne1["numsalle"]?></a></td>
            <td><?=$ligne1["capacite"]?></td>
        </tr><?php
    } ?>
    </table>
    <?php
    } ?>
  
