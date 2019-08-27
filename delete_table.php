<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Criar Conexão
$conn = new mysqli($servername, $username, $password, $dbname);
// Checar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql para deletar um registro baseado no ID
$sql = "DELETE FROM MyGuests WHERE id=3";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>