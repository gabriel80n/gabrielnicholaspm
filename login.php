<?php

require("funcoes.php");
require("login2.php");


?>

<!DOCTYPE html>
<html>
<head>
	<title>SUJESTS: Login</title>
</head>
<body>
<table border="0" width="100%" height="650px" cellspacing="0">
<tr height="100px">
	<td width="100%" colspan="3">
		
		<table border="0" width="100%" height="100px" >
		<tr></tr>
		<tr >
			<!-- CADASTRO -->    <td align="center" width="17%" height="50px"><font size="4"><a href="login.php" style="text-decoration:none;color:#000000">LOGIN </a></font> <p> Cadastre-se <a href="cadastro.php" style="color:#000000"> aqui!</td>
			<!-- TAG DA PAGINA--><td align="center" width="2%" ><font size="7" color="white"> <a href="index.php" class="botao" style="text-decoration:none;color:#ffffff"> SUJESTS </font></td>
			  <td align="center" width="16%"> <a href="contato1.php" style="text-decoration:none;color:#000000">CONTATO</a>  </td>
		</tr>
		<tr></tr>

	</table>

	</td>

</tr>



<tr>  <td width="28%" bgcolor="#C0C0C0"></td> 
<td valign="top" align="center"  bgcolor="#C0C0C0" cellspacing="0">
	

<p style="font-size:5em;">FAÇA SEU LOGIN!</p>
<form id="form_cadastro" name="form_login" method="post" action="login.php?op=1 ">
  <table width="300" border="0" align="center">
    <tr>
      <td width="500" align="right">Usuário:</td>
      <td width="357"><label for="usuario"></label>
      <input type="text" name="usuario" id="usuario"  value=""/></td>
    </tr>
    <tr>
      <td align="right">Senha:</td>
      <td><label for="senha"></label>
      <input type="password" name="senha" id="senha" /></td>
    </tr>
    <tr>
      <td  align="center"></td>
      <td><input type="reset" class="botao" name="botao_cancelar" id="botao_cancelar" value="Limpar" />
      <input type="submit" class="botao" name="botao_login" id="button" value="Login"  /></td>
    </tr>
    <tr>
      <td align="center"></td>
      <td><font size="2"><a href="nova_senha.php">Esqueceu a senha?</a></font></td>
    </tr>
  </table>
</form>

</td> 
<td width="28%" bgcolor="#C0C0C0" ></td>  </tr>




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