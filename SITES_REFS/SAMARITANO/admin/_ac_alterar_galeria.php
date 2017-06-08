<?php

include("_conecta.php");

$id = $_POST['id'];

$IdTipoGaleria = $_POST['IdTipoGaleria'];

$titulo = $_POST['titulo'];

$descricao = $_POST['descricao'];

if($titulo == "" || $descricao == "" || $IdTipoGaleria == "") {
	echo "<script>window.location=\"novo_evento.php?erro=Informe os dados do evento!\"</script>";
}

$sql = mysql_query("UPDATE eventogaleria SET titulo = '$titulo', descricao = '$descricao',IdTipoGaleria = '$IdTipoGaleria' WHERE id = '{$id}'") or die(mysql_error());

if($sql)
{
	echo "<script>window.location=\"galerias.php?status=Evento Atualizado!\"</script>";
}
else
{
	echo "<script>window.location=\"galerias.php?erro=Ocorreu algum erro ao tentar realizar esta operação! Consulte o administrador do site.\"</script>";
}


?>