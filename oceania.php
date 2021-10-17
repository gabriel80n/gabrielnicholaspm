<?php

include_once("verifica.php");
include_once("login2.php");
$usuario = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>SUJESTS: Oceania</title>
</head>
<body>
<table border="0" width="100%" height="650px" cellspacing="0">
<tr height="100px">
	<td width="100%" colspan="3">
		
		<table border="0" width="100%" height="100px" >
		<tr></tr>
		<tr >
			<!-- CADASTRO -->    <td align="center" width="17%" height="50px"><font size="4"><a href="painel.php" style="text-decoration:none;color:#000000"><?php echo $usuario ?><p></a><a href="login.php" style="text-decoration:none;color:#000000"><a href="logout.php" style="color:#000000"> LOG OUT</td>
			<!-- TAG DA PAGINA--><td align="center" width="17%"><font size="7" color="white"> <a href="home.php" class="botao" style="text-decoration:none;color:#ffffff"> SUJESTS </font></td>
			<!-- EUROPA -->      <td align="center" width="10%"> <a href="europa.php" style="text-decoration:none;color:#000000">EUROPA</a>    </td>
			<!-- AFRICA -->      <td align="center" width="10%"> <a href="africa.php" style="text-decoration:none;color:#000000">ÁFRICA</a>    </td>
			<!-- AMERICA -->     <td align="center" width="10%"> <a href="america.php" style="text-decoration:none;color:#000000">AMÉRICA</a>  </td>
			<!-- ÁSIA -->        <td align="center" width="10%"> <a href="asia.php" style="text-decoration:none;color:#000000">ÁSIA</a>        </td>
			<!-- OCEANIA -->     <td align="center" width="10%"> <a href="oceania.php" style="text-decoration:none;color:#ff0000">OCEANIA</a>  </td>
			<!-- CONTATO -->     <td align="center" width="16%"> <a href="contato.php" style="text-decoration:none;color:#000000">CONTATO</a>  </td>
		</tr>
		<tr></tr>

	</table>

	</td>

</tr>


<tr></tr>
<tr>  <td width="28%" bgcolor="#C0C0C0" valign="top" align="center"><font size="4">

                             ESCOLHA UMA ESTAÇÃO OU SOMENTE CLIQUE EM UMA DAS FOTOS <br><br> <br> <br><br><br> 

                              <a href="http://localhost/gabrielnicholaspm/voceania.php" class="botao" style="text-decoration:none;color:#ffffff">VERÃO </a><br> <br> <br><br> <br> <br><br> <br> <br>  <a href="http://localhost/gabrielnicholaspm/ioceania.php" class="botao" style="text-decoration:none;color:#ffffff">INVERNO</a>


</font> </td> 
<td align="center" bgcolor="#C0C0C0" cellspacing="0">
<table border="0" cellspacing="0" class="show">
 
 <tr>
  <td ><a href="http://localhost/gabrielnicholaspm/oceania1/lugar1.php"> <img  align="left" src="fotoO1.jpg" width="330" height="265px"> <span>SAIBA MAIS...</span></td> 
  <td ><a href="http://localhost/gabrielnicholaspm/oceania1/lugar2.php"><img  align="left" src="fotoO2.jpg" width="330" height="265px"></td> 
  <td ><a href="http://localhost/gabrielnicholaspm/oceania1/lugar3.php"><img  align="left" src="fotoO3.jpg" width="330" height="265px"></td> 
 </tr>
 <tr>
  <td><a href="http://localhost/gabrielnicholaspm/oceania1/lugar4.php"><img  align="left" src="fotoO4.jpg" width="330" height="265px"></td> 
  <td><a href="http://localhost/gabrielnicholaspm/oceania1/lugar5.php"><img  align="left" src="fotoO5.jpg" width="330" height="265px"></td> 
  <td><a href="http://localhost/gabrielnicholaspm/oceania1/lugar6.php"><img  align="left" src="fotoO6.jpg" width="330" height="270px"></td> 
 </tr>	


</td> 
<td width="28%" bgcolor="#C0C0C0" ></td>  </tr>




</table>
</body>
</html>
<style type="text/css">


.show td {
	position: relative;
}

.show td span {
	display: block;
	width: 100%;
	text-align: center;
	text-decoration: none;
	opacity: 0;
	
	position: absolute;
	bottom: 0;
	
	transition: all .3s ease-in-out;
	
	z-index: 999;
	background: transparent;
}

.show td:hover span {

	opacity: 1;
	
}

.imgExpande {
list-style: none;
padding: 0;
}
.imgExpande li {
display: inline;
}
.imgExpande li img {
width: 128px; /* Aqui é o tamanho da imagem */
margin-left: 10px; /* Espaço entre as imagem */
-webkit-transition: 1s all ease; /* É para pega no Chrome e Safira */
-moz-transition: 1s all ease; /* Firefox */
-o-transition: 1s all ease; /* Opera */
}
.imgExpande li img:hover {
-moz-transform: scale(1.5);
-webkit-transform: scale(1.5);
-o-transform: scale(1.5);
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
