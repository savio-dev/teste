<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
// PARTIU...
<<<<<<< HEAD
=======
// Cria conexão
>>>>>>> e903e7b28442396555b2f2a54f12a2bc81189195
$conn = new mysqli($servername, $username, $password, $dbname);
// Checa conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//seleciona do banco de dados
$sql = "SELECT id, firstname, lastname, email FROM MyGuests";
$result = $conn->query($sql);
//mostra todos os regristros
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //  echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " - email: " . $row["email"] . "<br>";
	    echo "<a href='delete_table/".$row["id"] . "' /> deletar <br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<html>
<body>
<a href="cadastro.php" /> cadastro
</body>
</html>