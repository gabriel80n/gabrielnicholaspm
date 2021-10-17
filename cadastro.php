<?php


  require("funcoes.php");
  
  $op = @$_REQUEST['op'];
  //se a variavel OP não existir, mostrar o 
  //formulário
       
       
  if (!isset($op))
      $op = 0;
   
   //cadastrar dados
  if ($op == 1)
  {
	//obter as variávias do formulário	
   $usuario        = @$_REQUEST['usuario'];
   $email       = @$_REQUEST['email'];
   $senha       = @$_REQUEST['senha'];
   $confirmar_senha = @$_REQUEST['confirmar_senha'];
	 $palavra_chave = @$_REQUEST['palavra_chave'];

	//processar os dados para cadastro 
   $texto_erro = '';//armazena todos os erros
   $erro = false; //controla o final da execução dos textos	
   //campo codigo  
   $string1 = strlen($usuario);
   if ($usuario == '')
   {
	//o campo de nome está vazio
	   $texto_erro = $texto_erro.'O Campo Usuario não pode estar em branco!.\n';
	   $erro = true;   
   }
   else if ($string1 < 6) {
      $texto_erro = $texto_erro.'O usuario não pode ter menos de 6 caracteres!\n';
      $erro = true;
   }
   else if ($string1 > 15) {
      $texto_erro = $texto_erro.'O usuario não pode ter menos de 6 caracteres!\n';
      $erro = true;
   }
   //campo e-mail
   if ($email == '')
   {
	//o campo e-mail está vazio
	   $texto_erro = $texto_erro.'O Campo e-mail não pode estar em branco!\n';
	   $erro = true;   
   }
   elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $texto_erro = $texto_erro.'Email não é valido!\n';
      $error = true;
    }

   	//campo senha
   $string = strlen($senha);
   if ($senha == '')
   {
	   $texto_erro = $texto_erro.'A senha não pode estar em branco!\n';
	   $erro = true;
   }
   
     else if ($string < 8)
      {
     	 $texto_erro = $texto_erro.'A senha não pode ter menos de 8 caracteres!\n';
	     $erro = true;
     }
   if ($confirmar_senha == '')
   {
	   $texto_erro = $texto_erro.'Confirmar senha não pode estar em branco!\n';
	   $erro = true;

   }
   else
   {
	   if ($senha != $confirmar_senha)
	   {
		 $texto_erro = $texto_erro.'Senhas diferentes!\n';
		 $erro = true;   
	   }
   }
   $string2 = strlen($palavra_chave);
   if ($palavra_chave == '')
   {
  //o campo e-mail está vazio
     $texto_erro = $texto_erro.'A resposta da pergunta não pode estar em branco!\n';
     $erro = true;   
   }
   else if ($string2 < 3)
      {
       $texto_erro = $texto_erro.'A resposta da pergunta não pode ter menos de 3 caracteres!\n';
       $erro = true;
     }
   
   //testando se houve erro
   if (!$erro)
   {
	   //neste ponto inserir no banco de dados
	   //alert("Dados OK");  
	   if (conecta())
	   {

		 $texto_sql = "INSERT INTO cad_usuario (usuario, email, senha, palavra_chave) VALUES ('$usuario', '$email', '$senha','$palavra_chave')";
		 $result = mysql_query($texto_sql);
		 if($result > 0){
		   alert("Cadastro feito com sucesso!");   
       $usuario = "";
     $email = "";
     $senha = "";
     $confirmar_senha = "";
     $palavra_chave = "";
     }
	     else alert("Email ou usuario ja cadastrado");
		 $op = 0;
		 $usuario = "";
		 $email = "";
		 $senha = "";
		 $confirmar_senha = "";	   
	   }
	   else alert("Não foi possível inserir os dados. Tente mais tarde!");
	   $op = 0;	
   }
   else
   {
	   //mostrar mensagem co os erros para o usuário
	   alert($texto_erro);   
	   $op = 0;
   }
	   echo  '<script>history.go(-1) </script>';
     echo '<script> login()</script>';

	   
  }//fim op = 1

?>
<?php
    $a = ['Qual cidade que você nasceu?', 'Qual cidade você mora?', ' Qual foi sua primeira escola?'];

    $pergunta_chave = $a[mt_rand(0, count($a) - 1)];
?>
<!DOCTYPE html>
<html>
<head>
	<title>SUJESTS: Cadastro</title>
</head>
<body >
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
<td valign="top" align="center" bgcolor="#C0C0C0" cellspacing="0">
	
<p style="font-size:5em;">FAÇA SEU CADASTRO!</p>

<?php
  if ($op == 0)
  {  

?>

<form id="form_cadastro" name="form_cadastro" method="post" action="cadastro.php?op=1 ">
  <table width="310" border="0" align="center">
    <tr>
      <td width="3000" align="right">Usuário:</td>
      <td width="357"><label for="usuario"></label>
      <input type="text" name="usuario" id="usuario"  value=""/></td>
    </tr>
    <tr>
      <td align="right">e-mail:</td>
      <td><label for="email"></label>
      <input type="text" name="email" id="email"  value=""/></td>
    </tr>
    <tr>
      <td align="right">Senha:</td>
      <td><label for="senha"></label>
      <input type="password" name="senha" id="senha" /></td>
    </tr>
    <tr>
      <td align="right">Confirmar-Senha:</td>
      <td><label for="confirmar_senha"></label>
      <input type="password" name="confirmar_senha" id="confirmar_senha" /></td>
    </tr>
    <tr>
      <td align="right"><?php echo $pergunta_chave;   ?></td>
      <td><label for="confirmar_senha"></label>
      <input type="text" name="palavra_chave" id="palavra_chave" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" class="botao" name="botao_enviar" id="button" value="Cadastrar"  />
      <input type="reset" class="botao" name="botao_cancelar" id="botao_cancelar" value="Limpar" /></td>
    </tr>
  </table>
</form>
<?php

   

  }


?>
</td> 
<td width="28%" bgcolor="#C0C0C0" ></td>  </tr>




</table>

</body>
</html>
<style type="text/css">

.botao {
padding: 4px 11px;
width: 80px;
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