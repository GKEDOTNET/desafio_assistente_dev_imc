<?php

$hostname = "mysql.kovaleski.kinghost.net";
$user = "kovaleski05";
$pass = "87IBcXL2hNy3";
$base = "kovaleski05";


$con = mysqli_connect($hostname, $user, $pass, $base);

if(mysqli_connect_errno()){
    printf("Conexão Falhou %s\n", mysqli_connect_errno());
    exit();
}
include('validacao.php');

?>