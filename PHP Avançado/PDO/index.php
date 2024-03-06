<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Nome</th><th>Telefone</th><th>
E-mail</th></tr>";
class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    8 function current() {
        return "<td style='width: 150px; border: 1px 
        solid black;'>" . parent::current() . "</td>";
    }
    function beginChildren() {
        echo "<tr>";
    } function endChilddren() {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clientes";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",
    $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, nome, telefone, email FROM
    clientes");
    $stmt->execute();
    // define o array resultante para associativo
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt-
    >fetchAll())) as $k=>$v) {
        echo $v;
        }
        }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        }
    $conn = null;
    echo "</table>";
?>