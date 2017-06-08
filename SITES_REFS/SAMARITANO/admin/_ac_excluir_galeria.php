<?php

include("_conecta.php");

function ExcluiDir($Dir){

	if ($dd = opendir($Dir)) {
		while (false !== ($Arq = readdir($dd))) {
			if($Arq != "." && $Arq != ".."){
				$Path = "$Dir/$Arq";
				if(is_dir($Path)){
					ExcluiDir($Path);
				}elseif(is_file($Path)){
					unlink($Path);
				}
			}
		}
		closedir($dd);
	}
	rmdir($Dir);
}

$id = $_GET['id'];

$sql = mysql_query("DELETE FROM eventogaleria WHERE id = '{$id}'") or die(mysql_error());

if($sql)
{
	$diretório = "fotos_uploads/".$id."/";
	
	ExcluiDir($diretório);
	
	$cons = mysql_query("SELECT * FROM fotosevento WHERE IdEvento = '{$id}'") or die(mysql_error());
	
	while($foto = mysql_fetch_object($cons)) {
		
		$delete = mysql_query("DELETE FROM fotosevento WHERE id = '{$foto->id}'") or die(mysql_error());
	}
	
	echo "<script>window.location=\"galerias.php?status=O Evento foi Excluído com Sucesso!\"</script>";
}
else
{
	echo "<script>window.location=\"artigos.php?erro=Ocorreu algum erro ao tentar realizar esta operação! Consulte o administrador do site.\"</script>";
}


?>