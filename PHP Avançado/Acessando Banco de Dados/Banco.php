<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "clientes";
// Cria conexão
$conn = new mysqli($servername, $username, $password, 
$dbname);
// Check connection
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
$sql = "SELECT id, nome, telefone, email FROM clientes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " / CLIENTE: " . 
        $row["nome"]. " /
        TELEFONE: " .
        $row["telefone"]. " / E-MAIL: " . $row["email"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>