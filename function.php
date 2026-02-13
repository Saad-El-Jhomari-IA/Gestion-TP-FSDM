<?php 
function connexion(){
    try {
        $cn1 = new PDO("mysql:host=localhost;dbname=tp;port=3306;charset=utf8", 'root', '');
       
    } catch(PDOException $erreur) {
        die("Erreur de connexion : " . $erreur->getMessage());
    }   
    return $cn1;
}
function repartition_des_groupes($module,$tmp){
     $cn=connexion();
     $req="SELECT * from liste_etudiant_tp where ".$module."= 1 ;";
    $rep=$cn->query($req);
    while($ligne=$rep->fetch()){
        $tab[]=$ligne;
        
    }
    
   
   $x=(int)(count($tab)/6);
   
   
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
return $tab1;
}

?>