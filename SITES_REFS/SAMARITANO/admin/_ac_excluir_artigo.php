<?php

include("_conecta.php");

$id = $_GET['id'];

$sql = mysql_query("DELETE FROM artigos WHERE id = '{$id}'") or die(mysql_error());

if($sql)
{
	echo "<script>window.location=\"artigos.php?status=O Artigo foi Exclu�do com Sucesso!\"</script>";
}
else
{
	echo "<script>window.location=\"artigos.php?erro=Ocorreu algum erro ao tentar realizar esta opera��o! Consulte o administrador do site.\"</script>";
}


?>