<?php session_start();
  include("function.php");
  $id=$_GET["id"];
  $cn1=connexion();
  $req="SELECT * from fichier where id=".$id.";";
  $rep=$cn1->query($req);
  if($rep){
    while($ligne=$rep->fetch()){
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.$ligne["nom_fichier"].'"');
        header('Content-Length: ' . filesize("teste_img/".$ligne["nom_fichier"]));
        ob_clean();
        readfile("teste_img/".$ligne["nom_fichier"]);
    }
  }
  else{
    echo"ce fichier n'existe pas";
  }
  ?>