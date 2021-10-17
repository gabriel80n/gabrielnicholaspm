<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" name="teste" action="teste.php">


	<input type="hidden" name="teste" value="10">
	<input type="submit" name="teste1">
	



</form>
<?php

$teste = $_REQUEST['teste'];
echo $teste;

?>
</body>
</html>