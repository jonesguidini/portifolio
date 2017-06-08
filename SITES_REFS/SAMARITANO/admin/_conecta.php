<?php

$host = "localhost:3306";
$user = "samaritanodf";
$pass = "@visuweb2017@";
$banco = "samaritanodf";

$con = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco, $con) or die(mysql_error());

class Configuracoes {
	
	function retornar_resumo($texto_edit, $max_caracter)
	{
		return (strlen($texto_edit) >= $max_caracter) ? (substr($texto_edit, 0, $max_caracter) . '<b>...</b>') :$texto_edit;
	}
}

$config = new Configuracoes();

?>