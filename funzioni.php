<?php
	//controlla credenziali
	function login($utente,$password,$nomeFile="utenti.xml"){
		/*
		0 = credenziali corrette 
		-1 = utente non trovato
		1 = password sbagliata
		2 = file non esistente
		3 = magazziniere
		*/
		if (!file_exists($nomeFile)){
			return 2;
		
		}
		$doc = new DOMDocument();
		$doc->load($nomeFile);
		$utenti = $doc->getElementsByTagName("account");
		
		foreach ($utenti as $u) { 
			$user = $u->getElementsByTagName('user')->item(0)->nodeValue; 
			$pasw = $u->getElementsByTagName('pasw')->item(0)->nodeValue; 
			if($utente == "magazziniere" && $password == "magazziniere"){
				//magazziniere 
				return 3;
			}
			if($utente == $user && $password == $pasw){
			   //utente trovato
			   return 0;
			}
			if($utente == $user && $password != $pasw){
				//password non corretta
				return 1;
			}
		}
		//utente non trovato
		return -1;
	}
	
	//controllo errori 
	function controllaErrori($err){
		switch($err){
			case 0:
				echo "accesso non consentito";
				break;
			case 1:
				echo "password errata";
				break;
			case 2:
				echo "utente inesistente";
				break;
			case 3:
				echo "file non trovato";
				break;
			case 4:
				echo "numero di tentativi eccessivo";
				break;
			default:
				echo "errore generico";
				break;
		}
	}

	
	//leggi da file.xml
	function leggiDaFileXml($file="magazzino.xml"){
		/*
		-1 = file non esiste
		*/
		echo $file;
		 if(!file_exists($file)){
			return -1; 
		 } 
		 $array = array();
		 $doc = new DOMDocument(); 
		 $doc->load($file);

		 $magazzino = $doc->getElementsByTagName("nameCat");
		 foreach ($magazzino as $value) {
			$array[] = $value->nodeValue;
			}
		return $array;
	 
	}

	//trova utente
	function trovaUtente($utente,$nomeFile){
		/*
		0 = utente trovato
		-1 = utente non trovato
		2 = file non esistente
		*/
		if (!file_exists($nomeFile)){
			return 2;
		}
		$doc = new DOMDocument();
		$doc->load($nomeFile);
		$utenti = $doc->getElementsByTagName("account");
		
		foreach ($utenti as $u) { 
			$user = $u->getElementsByTagName('user')->item(0)->nodeValue; 
			if($utente == $user ){
			   //utente trovato
			   return 0;
			}
		}
		//utente non trovato
		return -1;
	}

	//cambia password
	 function cambiaPasword($user,$paswd){

	}
	
	
?>
