<?php
$servername = "localhost";
$username = "root"; // Nome de usuário padrão do XAMPP
$password = ""; // Senha padrão do XAMPP
$dbname = "sync360_challenge";

// Cria a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    echo "erro";
} else {
    echo "funcionando";
}

$name = $_POST["name"];
$age = $_POST["age"];
$address = $_POST["address"];
$bio = $_POST["bio"];

$result = mysqli_query($conn, "INSERT INTO users (name, age, address, bio) 
VALUES ('$name', '$age', '$address', '$bio')");

?>