<?php
include '../include/dbConnection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['todo_id'])) {
    $todoId = $_POST['todo_id'];

    $sql = "UPDATE todos SET completed = NOT completed WHERE id = $todoId";

    if (mysqli_query($conn, $sql)) {
        echo "Todo updated successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
