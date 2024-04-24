<?php

$host="127.0.0.1:3308";
$user="root";
$pass="";
$banco="bancocae";
$conexao=mysqli_connect($host, $user, $pass, $banco);
mysqli_select_db($conexao, $banco);

?>


