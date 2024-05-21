<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

//database connection
$conn = new mysqli('localhost', 'root', '', 'contactpagedb');

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO contactpagedb (name,email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);
    $stmt->execute();
    echo "Thank you";
    $stmt->close();
    $conn->close();
}
?>
