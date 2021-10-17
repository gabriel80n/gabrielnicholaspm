<?php

include_once("funcoes.php");


?>



<!DOCTYPE html>
<html>
<head>
	<title>Autenticação</title>
<script type="text/javascript">
	function loginsucesso(){

		setTimeout ("window.location='home.php'" , 0)

	}
	function loginfalha(){

		setTimeout("window.location='login.php'" , 0)

	}
	function login(){

		setTimeout("window.location='login.php'", 0)
	}
</script>


</head>
<body>
<?php
$op = @$_REQUEST['op'];
  //se a variavel OP não existir, mostrar o 
  //formulário
  if (!isset($op))
      $op = 0;
   
   //cadastrar dados
  if ($op == 1)
  {
$usuario= @$_REQUEST['usuario'];
$senha= @$_REQUEST['senha'];
if (conecta()) {
	
$sql = mysql_query("SELECT * FROM cad_usuario WHERE usuario ='$usuario' and senha = '$senha'  ") or die(mysql_error());
$row = mysql_num_rows($sql);
	if ($row > 0) {
		session_start();
		
		$_SESSION['usuario']  = strtolower($_REQUEST['usuario']);
		$_SESSION['senha'] = $_REQUEST['senha'];
		
		alert( "Voce foi logado com sucesso!" );
		echo "<script>   loginsucesso()   </script>";

	}
else{
	alert( "Senha ou usuário invalido!" );
	echo "<script>   loginfalha()   </script>";
	$op = 0;
}

}

}//fecha o OP= 1
?>
</body>
</html>
