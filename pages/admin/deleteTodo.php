<?php
include '../include/dbConnection.php';

$conn = new mysqli($server, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['todo_id'])) {
    $todoId = $_POST['todo_id'];
    $deleteSql = "DELETE FROM todos WHERE id = $todoId";
    if ($conn->query($deleteSql) === TRUE) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error deleting todo']);
    }
}

$conn->close();
?>
