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
      <form name="categoria" method="POST" action="categorie.php">
         <div>
            <select>
               <?php
                  $array = array();
                  $array = leggiDaFileXml();
                  if($array != -1){
                     foreach($array as $key => $value){
                        echo "<option value=$key> $value </option>";
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