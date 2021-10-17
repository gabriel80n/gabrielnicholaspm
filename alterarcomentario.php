<?php
include_once("funcoes.php");
include_once("verifica.php");
include_once("login2.php");




$usuario = $_SESSION['usuario'];
$id = $_REQUEST['id'];
?>
<?php
if (isset($_REQUEST["alterar"])) {




$id = $_REQUEST['id'];
$sql ="SELECT * FROM comentario_site WHERE id = '$id' ";
$query = mysql_query($sql);
$row = mysql_num_rows($query);
if ($row > 0) {
	
	$sql4= "SELECT comentario FROM comentario_site where id ='$id'";
	$recordset2=mysql_query($sql4); // fazer o query a base de dados
	$record2=mysql_fetch_assoc($recordset2); // ler o registo do recordset
	$comentario=$record2['comentario'];
	$comentario = $_REQUEST['comentario_novo'];



	$sql4= "SELECT usuario FROM comentario_site where id ='$id'";
	$recordset2=mysql_query($sql4); // fazer o query a base de dados
	$record2=mysql_fetch_assoc($recordset2); // ler o registo do recordset
	$usuario2=$record2['usuario'];
	
// if ($usuario2 == $usuario) {
 	
 
 	$sql = "UPDATE comentario_site SET comentario='$comentario' WHERE id = '$id'";
  			$result = mysql_query($sql) or die(mysql_error());
  			//alert("Comentario alterado com sucesso!");
  			alert("Comentario alterado com sucesso");
  			echo "<script>history.go(-2)</script>";
  			$id = false;
  	//}
  //else	{
	//alert("Voce não é o autor deste comentario!");
	//echo "<scrip>history.go(-2)</script>";
//}
}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>SUJESTS: América</title>
</head>
<body>
<table border="0" width="100%" height="650px" cellspacing="0">
<tr height="100px">
	<td width="100%" colspan="5">
		
		<table border="0" width="100%" height="100px" >
		<tr></tr>
		<tr >
			<!-- CADASTRO -->    <td align="center" width="17%" height="50px"><font size="4"><a href="painel.php" style="text-decoration:none;color:#000000"><?php echo $usuario ?><p></a><a href="login.php" style="text-decoration:none;color:#000000"> <a href="logout.php" style="color:#000000"> LOG OUT </td>
			<!-- TAG DA PAGINA--><td align="center" width="17%" ><font size="7" color="white"> <a class="botao" href="home.php" style="text-decoration:none;color:#ffffff">SUJESTS </font></td>
			<!-- EUROPA -->      <td align="center" width="10%"> <a href="europa.php" style="text-decoration:none;color:#000000">EUROPA</a>    </td>
			<!-- AFRICA -->      <td align="center" width="10%"> <a href="africa.php" style="text-decoration:none;color:#000000">ÁFRICA</a>    </td>
			<!-- AMERICA -->     <td align="center" width="10%"> <a href="america.php" style="text-decoration:none;color:#000000">AMÉRICA</a>  </td>
			<!-- ÁSIA -->        <td align="center" width="10%"> <a href="asia.php" style="text-decoration:none;color:#000000">ÁSIA</a>        </td>
			<!-- OCEANIA -->     <td align="center" width="10%"> <a href="oceania.php" style="text-decoration:none;color:#000000">OCEANIA</a>  </td>
			<!-- CONTATO -->     <td align="center" width="16%"> <a href="contato.php" style="text-decoration:none;color:#000000">CONTATO</a>  </td>
		</tr>
		<tr></tr>

	</table>

	</td>

</tr>



<tr>	
		<td width="20%" bgcolor="#C0C0C0" align="center" valign="top" bgcolor="#C0C0C0" cellspacing="0"></td> 
		
 </tr>
 <tr>	
		<td width="20%" bgcolor="#C0C0C0" align="center" valign="top" bgcolor="#C0C0C0" cellspacing="0">
			<form id="form_nova" name="form_nova" method="post" >


				<table width="50%" height="300px" border="0">
					
					<tr>
						<td colspan="3" align="left"><p style="font-size:2em; "> Alteração de comentário: <?php echo $usuario; ?></p><hr>
							
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							Digite o comentário modificado:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							
						</td>
					</tr>
					<tr height="70">
						<td></td>
						<td align="center"><textarea name="comentario_novo" rows="6" maxlength="540" cols="80"></textarea></td>
						
						<td align="center"><input class="botao" type="submit" name="alterar" value="Alterar"></td>
						
							
					</tr>
					
					<tr>
						<td width="40%" align="center"></td>
						<td width="17%" align="center"></td>
						<td width="28%" align="center"></td>
						

							
								
					</tr>

				</table>



			</form>


		</td> 
		
 </tr>
 <tr>	
		<td width="20%" bgcolor="#C0C0C0" align="center" valign="top" bgcolor="#C0C0C0" cellspacing="0"></td> 
		
 </tr>




</table>

</body>
</html>
<style type="text/css">

.botao {
padding: 4px 11px;
width: 70px;
border: 1px solid #ffcc00;
-moz-border-radius: 8px;
-webkit-border-radius: 8px;
border-radius: 8px;

background-color: #ffcc00 !important;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffcc00), color-stop(100%,#ff6600)) !important;
background: -webkit-linear-gradient(top, #ffcc00, #ff6600) !important;
background: -moz-linear-gradient(top, #ffcc00, #ff6600) !important;
background: -ms-linear-gradient(top, #ffcc00, #ff6600) !important;
background: -o-linear-gradient(top, #ffcc00, #ff6600) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffcc00', endColorstr='#ff6600',GradientType=0 );
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmY2MwMCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmZjY2MDAiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);

font-family:"Segoe UI";
font-weight: bold;
color: #fff;
text-shadow: 0 1px 0 #666;

box-shadow: inset 0 1px 1px #fff, 0 2px 3px #666;
cursor:pointer;
position: relative;
}

.botao:hover {
box-shadow: inset 0 2px 5px #fff, 0 2px 3px #666;
background: -webkit-gradient(linear, left top, left bottom, from(#ffcc00), to(#ff6600)) !important;
}

.botao:active {
box-shadow: inset 0 2px 5px #fff, 0 1px 3px #666 !important;
top:2px
}
.botao a, .botao a:active, .botao a:hover, .botao a:visited { text-decoration:none; color: #fff; text-shadow: 0 1px 0 #666; }

</style>
