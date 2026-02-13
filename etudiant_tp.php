<?php
 session_start();
 include("function.php");


   ?>
   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
   </head>
   <body style="background-image: url('img105.jpg');">  
   <h1 align="center">Groupe <?=$_GET["val"]?></h1>
     <div align="center" style="margin-top: 40px;">
  
    <?php   $ligne1= repartition_des_groupes( $_GET["codemodule"],$_GET["val"]);  ?>
    <table class="table table-hover table-info table-striped" style=" border: 1px solid ; border-radius:25px;width:50%;">
    <tr align="center">
        <th >CNE</th>
        <th >NOM</th>

    </tr>
    <?php

    for($i=0;$i<count($ligne1);$i++){
       ?><tr>
        <td align="center"><?=$ligne1[$i][7]?></td>
        <td align="center"><?=$ligne1[$i][0]?></td>
       </tr>  
       <?php   
    }?>
</table>


   </div>




   </body>

   </html>
   