<?php

include("_conecta.php");

$titulo = $_POST['titulo'];

$artigo = $_POST['artigo'];

if($titulo == "" || $artigo == "") {
	echo "<script>window.location=\"novo_artigo.php?erro=Informe os dados do artigo!\"</script>";
}


$data_criacao = date('Y-m-d H:i:s');

$id_registro = 1;

$sql = mysql_query("INSERT INTO artigos (titulo, artigo) VALUES ('{$titulo}', '{$artigo}') ") or die(mysql_error());

if($sql)
{
	echo "<script>window.location=\"artigos.php?status=Artigo Cadastrado!\"</script>";
}
else
{
	echo "<script>window.location=\"artigos.php?erro=Ocorreu algum erro ao tentar realizar esta operação! Consulte o administrador do site.\"</script>";
}


?>