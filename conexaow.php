<?php
$host = 'localhost';
$dbname = 'bd_webb';
$username = 'root';
$password = ''; 

try {
    $conexao = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     echo "Conexão realizada com sucesso!"; 
} catch(PDOException $erro) {
    echo "Erro na conexão: " . $erro->getMessage();
    exit(); 
}
?>
