<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);
// Checar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// criar tabela
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>