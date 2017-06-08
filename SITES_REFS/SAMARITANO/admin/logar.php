<?php
session_start(); 
include("_conecta.php");
// Define $login and $senha 
$login2 = $_POST['login']; 
$senha2 = $_POST['senha']; 
$login = addslashes($login2);
$senha = addslashes($senha2);
$sql= mysql_query("SELECT * FROM usuarios WHERE login = '$login' and senha = '$senha'") or die (mysql_error());
// conta quantas linhas de registro te no banco de dados
$count = mysql_num_rows($sql);
// If result matched $login and $senha, table row must be 1 row


if($count==1)
{
	// Register $login, $senha and redirect to file "login_success.php"
	$_SESSION['login'] = $login; 
	//$_SESSION['login'] = $login;
	echo "<script>window.location=\"inicial.php\"</script>";
}
else
{
	echo "<script>window.location=\"index.php?ac=invalido\"</script>";
}
ob_end_flush();
?>







