<?php
// Dados de Acesso
$host = "localhost";
$user = "root";
$pass = "";
$database = "nota1000";

// Conexão
try {
    $connection = mysqli_connect($host, $user, $pass, $database);
    // Codificação
    mysqli_set_charset($connection, 'utf8');
} catch (exception $e) {
    echo $e;
}
