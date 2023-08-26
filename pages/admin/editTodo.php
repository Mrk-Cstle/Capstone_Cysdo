<?php
// editTodo.php

include '../include/dbConnection.php'; // Make sure to include your database connection file

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['todo_id']) && isset($_POST['todo_text'])) {
    $todoId = $_POST['todo_id'];
    $updatedTodoText = $_POST['todo_text'];

    // Sanitize the input to prevent SQL injection
    $todoId = mysqli_real_escape_string($conn, $todoId);
    $updatedTodoText = mysqli_real_escape_string($conn, $updatedTodoText);

    // Update the todo text in the database
    $updateSql = "UPDATE todos SET todo_text = '$updatedTodoText' WHERE id = $todoId";

    if ($conn->query($updateSql) === TRUE) {
        $response = array(
            'status' => 'success',
            'message' => 'Todo updated successfully.'
        );
        echo json_encode($response);
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'Error updating todo: ' . $conn->error
        );
        echo json_encode($response);
    }
} else {
    $response = array(
        'status' => 'error',
        'message' => 'Invalid request.'
    );
    echo json_encode($response);
}

$conn->close();
?>
