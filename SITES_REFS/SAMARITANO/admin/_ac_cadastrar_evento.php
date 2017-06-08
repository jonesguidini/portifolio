<?php

include("_conecta.php");

$IdTipoGaleria = $_POST['IdTipoGaleria'];

$titulo = $_POST['titulo'];

$descricao = $_POST['descricao'];

if($titulo == "" || $descricao == "" || $IdTipoGaleria == "") {
	echo "<script>window.location=\"novo_evento.php?erro=Informe os dados do evento!\"</script>";
}

$sql = mysql_query("INSERT INTO eventogaleria (IdTipoGaleria, titulo, descricao) VALUES ('{$IdTipoGaleria}', '{$titulo}', '{$descricao}') ") or die(mysql_error());

$ultimo_id = mysql_insert_id();


if($sql)
{
	echo "<script>window.location=\"ver_galeria.php?id=$ultimo_id&status=Evento Cadastrado!\"</script>";
}
else
{
	echo "<script>window.location=\"galerias.php?erro=Ocorreu algum erro ao tentar realizar esta operação! Consulte o administrador do site.\"</script>";
}


?>