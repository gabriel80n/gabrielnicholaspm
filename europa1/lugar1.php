<?php

include_once("../verifica.php");

$usuario = $_SESSION['usuario'];
?>
 <!DOCTYPE html>
<html>
<head>
	<title>SUJESTS: Europa Lugar</title>
</head>
<body>
<table border="0" width="100%" height="650px" cellspacing="0">
<tr height="72px">
	<td width="100%" colspan="3" height="90">
		<header>
		<table border="0" width="100%" height="100px" >
		<tr></tr>
		<tr >
			<!-- CADASTRO -->    <td align="center" width="17%" height="50px"><font size="4"><a href="../painel.php" style="text-decoration:none;color:#000000"><?php echo $usuario ?><p></a><a href="http://localhost/gabrielnicholaspm/login.php" style="text-decoration:none;color:#000000"><a href="http://localhost/gabrielnicholaspm/logout.php" style="color:#000000"> LOG OUT</td>
			<!-- TAG DA PAGINA--><td align="center" width="17%" ><font size="7" color="white"> <a href="http://localhost/gabrielnicholaspm/home.php" class="botao" style="text-decoration:none;color:#ffffff"> SUJESTS </font></td>
			<!-- EUROPA -->      <td align="center" width="10%"> <a href="http://localhost/gabrielnicholaspm/europa.php" style="text-decoration:none;color:#FF0000">EUROPA</a>    </td>
			<!-- AFRICA -->      <td align="center" width="10%"> <a href="http://localhost/gabrielnicholaspm/africa.php" style="text-decoration:none;color:#000000">ÁFRICA</a>    </td>
			<!-- AMERICA -->     <td align="center" width="10%"> <a href="http://localhost/gabrielnicholaspm/america.php" style="text-decoration:none;color:#000000">AMÉRICA</a>  </td>
			<!-- ÁSIA -->        <td align="center" width="10%"> <a href="http://localhost/gabrielnicholaspm/asia.php" style="text-decoration:none;color:#000000">ÁSIA</a>        </td>
			<!-- OCEANIA -->     <td align="center" width="10%"> <a href="http://localhost/gabrielnicholaspm/oceania.php" style="text-decoration:none;color:#000000">OCEANIA</a>  </td>
			<!-- CONTATO -->     <td align="center" width="16%"> <a href="http://localhost/gabrielnicholaspm/contato.php" style="text-decoration:none;color:#000000">CONTATO</a>  </td>
		</tr>
		<tr></tr>

	</table>
</header>
	</td>

</tr>



<tr>  

<td width="25%" bgcolor="#C0C0C0" align="center" valign="top">
<div id="fixa">
<table>
<img  align="left" src="foto4.jpg" width="330" height="280px"><br>
<img  align="left" src="foto3.jpg" width="330" height="280px">
</table>
</div>
</td> 

<td width="1%" bgcolor="#C0C0C0" valign="top" >
	
<font size=6><br>
<center>Berggasthaus Aescher-Wildkirchli</center>
</font>
<br><br><br>
<font size=5 >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Localizado na Suiça, temos este hotel que podemos considerar um oásis alpino de madeira e rocha. Para chegar ao destino é necessário uma caminhada de 3 horas apartir da estação de comboios. Este alojamento é um verdadeiro refugio de montanha, possuindo 5 quartos que cabem 40 pessoas no máximo.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O hotel é um verdadeiro luxo, pelo menos para os sentidos, um desafio aliciante e que oferece vistas incrivelmente lindas para as montanhas que estão ao redor da região de Alpsteingebiet<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apesar da estadia não ser um grande luxo, é cobrado por noite 40 euros, o que obviamente vale a pena pelo relaxamento e pelo contato com a natureza em seu estado puro e magnífico!
<br><br>
</font>
<fonte size=3>fonte : https://www.idealista.pt/news/ferias/hoteis-com-encanto/2015/02/24/26057-berggasthaus-aescher-wildkirchli-natureza-em-estado-puro-na-suica-fotos1</fonte>
<br><br>
<font size=4>
COMENTÁRIOS<br>
<form name="comentario_form" method="POST" action="../comentario.php">

<textarea rows="6" cols="80" maxlength="540" placeholder="Deixe seu comentario aqui..."  name="comentario"></textarea>
<input type="submit" class="botao" name="b_comentario" value="Postar">
<input type="hidden" name="identificacao" value="Elugar1">

</form>
<?php

$usuario1 = $_SESSION['usuario'];

$sql ="SELECT * FROM comentario_site WHERE identificacao = 'Elugar1' ORDER BY id desc";
$query = mysql_query($sql);
$row = mysql_num_rows($query);
if ($row > 0) {
	while ($linha = mysql_fetch_array($query)) {
		$comentario = $linha['comentario'];

		$sql4= "SELECT usuario FROM comentario_site where comentario ='$comentario'";
	$recordset2=mysql_query($sql4); // fazer o query a base de dados
	$record2=mysql_fetch_assoc($recordset2); // ler o registo do recordset
	$usuario=$record2['usuario'];

	$sql5= "SELECT id FROM comentario_site where comentario ='$comentario'";
	$recordset3=mysql_query($sql5); // fazer o query a base de dados
	$record3=mysql_fetch_assoc($recordset3); // ler o registo do recordset
	$id=$record3['id'];

	$sql6= "SELECT data FROM comentario_site where comentario ='$comentario'";
	$recordset4=mysql_query($sql6) or die(mysql_error()); // fazer o query a base de dados
	$record4=mysql_fetch_assoc($recordset4); // ler o registo do recordset
	$data=$record4['data'];

		 		$usuario3 = $_SESSION['usuario'];
				if ($usuario3 == $usuario) {


		 		echo "<br /><hr>";
				echo "<table width=\"100%\" border=\"0\"> <tr><td width=\"20%\" valign=\"top\" >Você:<br><br>".$data."</td>";
				echo "<td width=\"200\" > <textarea disabled=\"disabled\" rows=\"7\" cols=\"60\" maxlength=\"540\">".$comentario." </textarea></td><tr><td></td><td>";
				echo "<form name=\"comentario_form1\" method=\"POST\" action=\"?op=11\" >";
				echo "<input type=\"hidden\" name=\"cid\" value=".$id.">";

				echo "<input type=\"submit\"  name=\"alterar_comentario\" class=\"botao\" value=\"Alterar\">";
				echo "<input type=\"submit\" name=\"deletar_comentario\" class=\"botao\" value=\"Deletar\">";
				echo "</form>";
				echo "</tr></td></tr></table>";

				$op = @ $_REQUEST['op'];
				if (($op == 11)&&(isset($_REQUEST['alterar_comentario']))) {
					$id1 = $_REQUEST['cid'];
					echo "<script>window.location=\"../alterarcomentario.php?id=$id1\";</script>";
					
				}
				if (($op == 11)&&(isset($_REQUEST['deletar_comentario']))) {
					$id1 = $_REQUEST['cid'];
					echo "<script>window.location=\"../deletarcomentario.php?id=$id1\";</script>";

				}
				
				
				}
				else {
					echo "<br /><hr>";
				echo "<table width=\"100%\" border=\"0\"> <tr><td width=\"20%\" valign=\"top\" >".$usuario.":<br><br>".$data."</td>";
				echo "<td width=\"200\" > <textarea disabled=\"disabled\" rows=\"7\" cols=\"60\" maxlength=\"540\">".$comentario." </textarea></td><tr><td></td><td>";
				echo "</tr></td></tr></table>";
				



				}

				} // fecha while
			}// fecha ifx_byteasvarchar(mode)
	 
else
	echo "Ainda não há comentarios. Seja o primeiro a comentar sobre sua experiência!";

?>
</font>
</td> 

<td width="25%" bgcolor="#C0C0C0" valign="top" align="center" >
<div id="fixa">
<table>
<img  align="right" src="foto2.jpg" width="360" height="280px">
<img  align="right" src="foto1.jpg" width="360" height="280px">

</table>
</div>
</td>
 </tr>




</table>
</body>
</html>
<style type="text/css">
header {
	
  display:block;
  position:fixed;
  top:0;
  left:0;
  width:100%;
  background:white;
  text-align:center;
  

}
div#fixa {
	position: fixed;
	background-color: #C0C0C0;
}
#menu {
  position: fixed;
  right: 0;
  top: 50%;
  width: 8em;
  margin-top: -2.5em;


 
}
</style>
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