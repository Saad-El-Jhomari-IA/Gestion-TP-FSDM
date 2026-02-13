<?php
 session_start();
 if(isset($_POST['cneens'])&& isset($_POST['password'])){
  
    try {
        $cn1 = new PDO("mysql:host=localhost;dbname=tp;port=3306;charset=utf8", 'root', '');
       
    } catch(PDOException $erreur) {
        die("Erreur de connexion : " . $erreur->getMessage());
    }
        $req="SELECT nomen,cneens,count(passworden)  FROM enseignant where cneens = '".$_POST["cneens"] ."'  AND  passworden= ".$_POST["password"];
        $rep=  $cn1->query($req);
        
    if($rep==true){
        echo"true";
        while($ligne1=$rep->fetch() ){
            if($ligne1["count(passworden)"] >0){
                $_SESSION['login']=$ligne1['nomen'];
                $_SESSION['cne']=$ligne1['cneens'];
              header("Location: espace_enseignant_principale.php");
             exit;
                   
            }else {
                echo"nexiste pas";
                header("Location: Enseignant.php");
                exit;
            }
          
        }
          
          
        }else {header("Location: Enseignant.php");exit;


            
        }  }
        
        else
        header("Location: Enseignant.php");exit;
    ?>