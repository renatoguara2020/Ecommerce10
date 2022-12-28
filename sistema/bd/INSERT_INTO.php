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
  $stmt->$conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES (:firstname, :lastname, :email)");
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  // use exec() because no results are returned
  $stmt->bindValue(':firstname', $produto->setPreco, PDO::PARAM_STR);
  $stmt->bindValue(':nome', $produto->setNome, PDO::PARAM_STR);
  $stmt->exec();
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>