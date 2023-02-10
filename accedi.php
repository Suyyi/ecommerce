 <?php
	include "funzioni.php";
	session_start();
	if(!isset($_REQUEST["submit"])){
		header("location:login.php?err = 0");
		die();
	}
	$nome = $_REQUEST["user"];
	$_SESSION[$nome];
	if(isset($_SESSION[$nome]["numTentativi"])){
		if($_SESSION[$nome]["numTentativi"]>=3){
		 header("location:login.php?err=4");
		 $_SESSION[$nome]["numTentativi"]=0;
		die();
		}
	}
 	$_SESSION[$nome]["numTentativi"] += 1;

	$login = login($_REQUEST["user"],$_REQUEST["paswd"]);
 	switch ($login) {
	 case 0:
		 //credenziali corrette
		 $_SESSION["user"] = $_REQUEST["user"];
		 $_SESSION["numTentativi"] = 0;
		 header("location:shop.php");
		 die();
	 case 1:
		 //password errata
 		header("location:login.php?err=1");
		 die();
	 case -1:
		 //utente inesistente
 		header("location:login.php?err=2");
		 die();
	 case 2:
		//file non trovato
		 header("location:login.php?err=3");
		 die();
	 
 	case 3:
		 //magazziniere 
 		header("location:magazziniere.php");
		 die();
 }

 ?>
