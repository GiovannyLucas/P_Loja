<?php 
	include("config.php");
	
	$sqlNot = "SELECT * FROM notificacoes WHERE status = '0'";
	$queryNot = mysqli_query($conexao, $sqlNot);

	$not = mysqli_num_rows($queryNot);

	echo $not;
?>