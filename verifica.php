<?php
include_once("funcoes.php");
if (conecta()) {
if (!isset($_SESSION)){
    session_start();
}	
if (!isset($_SESSION["usuario"]) and !isset($_SESSION["senha"]) ) {
	header("Location: http://localhost/gabrielnicholaspm/login.php");
	exit;
}




} // fecha conecta

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
