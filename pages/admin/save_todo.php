<?php
include '../include/dbConnection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $todoText = $_POST['todo_text'];

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO todos (todo_text) VALUES ('$todoText')";
    if ($conn->query($sql) === TRUE) {
        echo "Todo added successfully";
    } else {
        echo "Error adding todo: " . $conn->error;
    }

    $conn->close();
}
?>
