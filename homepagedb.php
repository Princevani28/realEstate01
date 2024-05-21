<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

//database connection
$conn = new mysqli('localhost', 'root', '', 'homepagedb');

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO homepagedb (name,email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);
    $stmt->execute();
    echo "Thank you";
    $stmt->close();
    $conn->close();
}
?>
