<!DOCTYPE html>
<html>
<head>
  <title></title>
 
</head>
<body>


</body>
</html>

<?php
//Função para mostrar uma mensagem 
function alert($mensagem)
{
  echo "<script language=\"javascript\">";
  echo "alert(\"$mensagem\");";
  echo "</script>";
}

//Função para conectar em um banco de dados
//A função retorna TRUE se conseguir uma conexão com o servidor e banco de dados
//A função retorna FALSE se não conseguir uma conexão com o servidor ou com o banco de dados
function conecta()
{
//definindo as variaveis para um banco de dados
  $servidor     = "localhost";
  $usuario      = "root";
  $senha        = "";	
  $bancodedados = "info3c_gn";
//testando a conexao com o servidor
  $ss = mysql_connect($servidor, $usuario, $senha);
  if ($ss > 0)
  {
	  //testando a conexao com o banco de dados
	 $db = mysql_select_db($bancodedados, $ss);
	 if ($db){
   
	   return true;
   }
	 else 
	   return false;  
  }
  else
	return false;    	
}

function get_post_action($name)
{
    $params = func_get_args();

    foreach ($params as $name) {
        if (isset($_REQUEST[$name])) {
            return $name;
        }
    }
}


?>