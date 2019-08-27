<?php
//pega os dados do formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";  //caso o nome seja obrigatorio e não possa estar vazio
  } else {
    $name = $_POST["name"];     //coloca o valor do formulario para a variavel 
  }
  if (empty($_POST["lastname"])) {
    $nameErr = " Last Name is required";
  } else {
    $lastname = $_POST["lastname"];
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
  }
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Cria conexão
$conn = new mysqli($servername, $username, $password, $dbname);
// Checa conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('$name', '$lastname', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>