<?php

include("_conecta.php");

$instituicao = $_POST['instituicao'];

$id_registro = 1;

$sql = mysql_query("UPDATE config SET instituicao = '{$instituicao}' WHERE id = '1' ") or die(mysql_error());


if($sql)
{
	echo "<script>window.location=\"instituicao.php?status=A Instui��o foi Alterada com Sucesso!\"</script>";
}
else
{
	echo "<script>window.location=\"instituicao.php?erro=Ocorreu algum erro ao tentar realizar esta opera��o! Consulte o administrador do site.\"</script>";
}


?>