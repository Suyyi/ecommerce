
<?php
include "funzioni.php";
if (!isset($_REQUEST["submit"])) {
    header("location:login.php?err=0");
    die();
}
?>  
<html>
    <head>
        <title><?php echo $_REQUEST["categoria"]; ?></title>
    </head>
    <body>
        <div>
            <?php
             $categoriaScelta = $_REQUEST["categoria"];
            $doc = new DOMDocument();
            if (!file_exists("magazzino.xml")) {
                header("location:login.php?err=2");
                die();
            }
            $doc->load("magazzino.xml");
            $categoria = $doc->getElementsByTagName("nameCat");
            $i=0;

            foreach ($categoria as $keyC=>$categoriaAtt){
                echo "<div>";
                echo $categoriaAtt->nodeValue;
                echo "</div>";
                if($categoriaAtt->nodeValue == $categoriaScelta){
                    echo "<div>";
                    //deve stampare tutti i prodotti di questa categoria
                    echo $doc->getElementsByTagName("prodotto")->item($i)->nodeValue;
                     echo"</div>";
                     $i++;
                }
            }
           
            
           
            ?>
        </div>
    </body>
</html>