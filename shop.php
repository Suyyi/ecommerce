<?php
   include "funzioni.php";
session_start();
 if(!isset($_SESSION["user"])){
    header("location:login.php?err=0");
    die();
 }
?>

<html>
   <head>
      <title>SHOP </title>
   </head>
   <body> 
      <form name="categoria" method="POST" action="prodottiDiCategorie.php">
         <div>
            <select name="categoria">
               <?php
                  $array = array();
                  $array = leggiDaFileXml("nameCat");
                  if($array != -1){
                     foreach($array as  $value){
                        echo "<option vlaue=$value> $value </option>";
                     }
                  }else{
                     echo "<option> errore </option>";
                  }
               ?>
            </select>
         </div>
         <div>
            <input type="submit" name="submit" value="submit"/>
         </div>
      </form>
   </body>
</html>