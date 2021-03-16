<?php
// Dados
$host = "localhost";
$user = "root";
$pass = "";
$database = "nota1000";
// Conexão
$connection = mysqli_connect($host, $user, $pass, $database) or die (mysqli_error());
// Codificação
mysqli_set_charset($connection, 'utf8');