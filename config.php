<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
<?php

define('HOST','localhost');
define("USER","root");
define("PASS","");
define("DB","p_loja");

//Conexão com BD
$conexao = mysqli_connect(HOST, USER, PASS, DB);

?>