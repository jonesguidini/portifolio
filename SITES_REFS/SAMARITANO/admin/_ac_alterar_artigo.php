<?php

include("_conecta.php");

$id = $_POST['id'];

$titulo = $_POST['titulo'];

$artigo = $_POST['artigo'];

if($titulo == "" || $artigo == "") {
	echo "<script>window.location=\"novo_artigo.php?erro=Informe os dados do artigo!\"</script>";
}

$sql = mysql_query("UPDATE artigos SET titulo = '$titulo', artigo = '$artigo' WHERE id = '{$id}'") or die(mysql_error());

if($sql)
{
	echo "<script>window.location=\"artigos.php?status=O Artigo foi Alterado com Sucesso!\"</script>";
}
else
{
	echo "<script>window.location=\"artigos.php?erro=Ocorreu algum erro ao tentar realizar esta operação! Consulte o administrador do site.\"</script>";
}


?>