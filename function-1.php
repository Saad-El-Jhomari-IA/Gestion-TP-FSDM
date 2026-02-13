<?php 




function connexion(){
    try {
        $cn1 = new PDO("mysql:host=localhost;dbname=tp;port=3306;charset=utf8", 'root', '');
       
    } catch(PDOException $erreur) {
        die("Erreur de connexion : " . $erreur->getMessage());
    }   
    return $cn1;
}





/*$cn2=connexion();
$req="SELECT * from liste_etudiant_tp where ".$_GET["codemodule"]."= 1 ;";
$rep=$cn2->query($req);
    while($ligne=$rep->fetch()){

      $req3="INSERT INTO `liste_etudiant_tp_base_donnee`(`cneetud`, `nometudtp`) VALUES ('".$ligne["cneetudtp"]."','".$ligne["cneetudtp"]."' );";
     $cn2->exec($req3);
    }
*/


function repartition_des_groupes($module,$tmp){
     $cn=connexion();
     $req="SELECT * from liste_etudiant_tp where ".$module."= 1 ;";
    $rep=$cn->query($req);
    if($rep){
        
        while($ligne=$rep->fetchAll()){
            $tab=$ligne;
            
        }
        
       
       $x=(int)(count($tab)/6);
       
    // echo"".$x;
        $y=count($tab)%6;
        if($tmp==1){
            $i=0;
            while($i<$x){
                $tab1[]=$tab[$i];
                $i++;
            }
        
        }
        
        if($tmp==2){
            $i=1 * $x;
            while($i<2*$x){
                $tab1[]=$tab[$i];
                $i++;
            }
        
        }
        if($tmp==3){
            $i=2*$x;
            while($i<3*$x){
                $tab1[]=$tab[$i];
                $i++;
            }
        
        }
        if($tmp==4){
            $i=3*$x;
            while($i<4*$x){
                $tab1[]=$tab[$i];
                $i++;
            }
        
        }
        if($tmp==5){
            $i=4*$x;
            while($i<5*$x){
                $tab1[]=$tab[$i];
                $i++;
            }
        
        }
        if($tmp==6){
            $i=5*$x;
            while($i<((6*$x)+$y)){
                $tab1[]=$tab[$i];
                $i++;
            }
        
        }
    }else echo"false";
   
return $tab1;
}

function inserer($module,$tmp){
    $tab3=repartition_des_groupes($module,$tmp);
    //while($ligne1=$rep->fetch()){
        $cn1=connexion();
        for($i=0;$i<count($tab3);$i++){
        
           $req1="INSERT INTO liste_etudiant_tp_ro (`cneetud`, `nometudtp`,`groupe`,`module`) values ('".$tab3[$i][7]."','".$tab3[$i][0]."',".$tmp.",'".$module."');";
       $rep1=$cn1->exec($req1); 
        }
        
    }
 
// inserer('web_dynamique',1);
// inserer('web_dynamique',2);
// inserer('web_dynamique',3);
// inserer('web_dynamique',4);
// inserer('web_dynamique',5);
// inserer('web_dynamique',6);
 inserer('ro',1);
 inserer('ro',2);
inserer('ro',3);
 inserer('ro',4);
inserer('ro',5);
inserer('ro',6);
// inserer('projet_tutore',1);
// inserer('projet_tutore',2);
// inserer('projet_tutore',3);
// inserer('projet_tutore',4);
// inserer('projet_tutore',5);
// inserer('projet_tutore',6);
// inserer('projet_tutore2',1);
// inserer('projet_tutore2',2);
// inserer('projet_tutore2',3);
// inserer('projet_tutore2',4);
// inserer('projet_tutore2',5);
// inserer('projet_tutore2',6);
// inserer('base_de_donnee',1);
// inserer('base_de_donnee',2);
// inserer('base_de_donnee',3);
// inserer('base_de_donnee',4);
// inserer('base_de_donnee',5);
// inserer('base_de_donnee',6);
