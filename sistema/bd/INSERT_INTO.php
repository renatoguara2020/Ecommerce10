<?php

require_once ('./sistema/classes/Produto.php');
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDBPDO";
 $produto = new Produto();
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt->$conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (:firstname, :lastname, :email)");
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  // use exec() because no results are returned
  $stmt->bindValue(':firstname', $produto->setPreco, PDO::PARAM_STR);
  $stmt->bindValue(':nome', $produto->setNome, PDO::PARAM_STR);
  $stmt->bindValue(':nome', $produto->getNome(), PDO::PARAM_STR);
  $stmt->exec();
  echo "New record created successfully". $produto->getNome();
} catch(PDOException $e) {
  echo $sql->error() . "</br>" . $e->getMessage() .' '. $e->getCode() .'</br>';
}

$conn = null;
?>


#####################################################################################################$_COOKIE
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>