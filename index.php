<?php
$servername = "localhost";
$username = "root2808";
$password = "";
<<<<<<< HEAD

$dbname = "meuBanco2";

=======
$dbname = "myDB";
>>>>>>> 5c45a384cdf2f40ec9ea4516e3bf599c9469d4b6
// Cria conexão
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

echo "Um teste do GIT";

echo "Feito com sucesso";

<html>
<body>
<a href="cadastro.php" /> cadastro
</body>
</html>