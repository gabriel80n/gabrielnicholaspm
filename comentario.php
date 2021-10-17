<?php
 include_once("funcoes.php");
 include_once("login2.php");
if (conecta()) {
	session_start();
$usuario = $_SESSION['usuario'];
$comentario = $_REQUEST['comentario'];
$identificacao = $_REQUEST['identificacao'];

date_default_timezone_set('America/Sao_Paulo');
	$data = date('d-m-Y H:i');
	

$inserir = "INSERT INTO comentario_site(comentario, identificacao, usuario, data) VALUES ('$comentario', '$identificacao','$usuario','$data')";
$query   = mysql_query($inserir);
echo  '<script>history.go(-1) </script>';












}



?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>