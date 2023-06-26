<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "cysdo";

$conn = new mysqli($server, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['delete'])) {
    $todoId = $_POST['delete'];
    $deleteSql = "DELETE FROM todos WHERE id = $todoId";
    if ($conn->query($deleteSql) === TRUE) {
        // Todo deleted successfully
    } else {
        // Error deleting todo
    }
}

$conn->close();

?>
