<?php
$servername = "localhost";     
$username = "root";     //usuario
$password = "";         //senha
$dbname = "myDB";       //nome do banco de dados
// Criar conexão
$conn = new mysqli($servername, $username, $password);

// Checar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>