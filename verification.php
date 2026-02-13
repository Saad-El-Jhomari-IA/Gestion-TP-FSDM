<?php
    session_start();
    if(isset($_POST['cne'])&& isset($_POST['password'])){
        try {
            $cn1 = new PDO("mysql:host=localhost;dbname=tp;port=3306;charset=utf8", 'root', '');
           
        } catch(PDOException $erreur) {
            die("Erreur de connexion : " . $erreur->getMessage());
        }
            $req="SELECT  count(passwordtp) as compter FROM liste_etudiant_tp where cneetudtp = '".$_POST["cne"] ."'  AND  passwordtp = ".$_POST["password"];
            $rep=  $cn1->query($req);
            
        if($rep==true){
            while($ligne1=$rep->fetch() ){
                if($ligne1["compter"] >0){
                 
                   header("Location: espace_etudiant_principale.php");
    
                }else {
              
                    header("Location: Etudiant.php");
                    
                }
              
            }
              
              
            }
            header("Location: Etudiant.php");
            
    }
    header("Location: Etudiant.php");
    ?>