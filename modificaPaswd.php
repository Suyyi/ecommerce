<?php
    if(!isset($_SESSION["user"])){
        header("login.php?err=0");
        die();
    }
?>
<html>
    <head>
        <title>cambia password </title>
    <head>
    <body>
        <form action="cambiaPaswd.php" method="POST" name="change">
            <div>   
                <input type="password" name="paswd" placeholder="password"/>    
            <div>
            <div>
                <input type="submit" name="submit" value="submit"/>
            <div>
        </form>
    </body> 
<html>