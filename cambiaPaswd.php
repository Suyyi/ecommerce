<?php
    include "funzioni.php";
    session_start();
    if(!isset($_REQUEST["submit"])){
        header("location:login.php?err=0");
        die();
    }

    cambiaPasword($_SESSION["user"], $_REQUEST["paswd"]);
    header("location:login.php");
    die();
?>