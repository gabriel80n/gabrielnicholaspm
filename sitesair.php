<?php
session_start();
	if ((!isset($_SESSION["usuario"]) == true) and (!isset($_SESSION["senha"]) == true )) {
		unset($_SESSION['usuario']);
		unset($_SESSION['senha']);
		header('location:index.php');
	}
	$user = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>