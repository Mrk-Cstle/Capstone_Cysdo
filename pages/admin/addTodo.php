<?php
include '../include/dbConnection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['todo_text'])) {
    $todoText = $_POST['todo_text'];

    $sql = "INSERT INTO todos (todo_text) VALUES ('$todoText')";

    if (mysqli_query($conn, $sql)) {
        $todoId = mysqli_insert_id($conn); // Retrieve the auto-generated ID of the inserted todo
        $response = array('status' => 'success', 'message' => 'Todo added successfully.', 'todo_id' => $todoId);
        echo json_encode($response);
    } else {
        $response = array('status' => 'error', 'message' => 'Error: ' . mysqli_error($conn));
        echo json_encode($response);
    }
}
?>
