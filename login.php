<?php
	include "funzioni.php";
if (isset($_REQUEST["err"])) {
	controllaErrori($_REQUEST["err"]);
	if ($_REQUEST["err"] == 4) {
		?> 
			<div> 
			per reimpostare la password :
			<a href="modificaPaswd.php"> modifica </a>
		</div>
		<?php
		die();
	}
}
?>
<!Doctype HTML>
 <HTML>
	<head>
		<title> login</title>
	</head>
	<body>
		<form name="login" method="post" action="accedi.php">
			<div>
				<input type = "text" name="user" placeholder ="nomeUtente"/>
			</div> 
			<div>
				<input type = "password" name="paswd" placeholder ="password"/>
			</div> 
			<div>
				<input type = "submit" name="submit"  value="submit"/>
			</div> 
		</form>
		<div>
			<a href="registrazione.php"/>
		</div>
	</body>
	
	
 </HTML>
 