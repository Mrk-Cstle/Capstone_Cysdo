<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../../style/dashboard.css">

    <style>
    .popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        padding: 20px;
        border: 1px solid #ccc;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        z-index: 9999;
    }

    .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 9998;
    }

    .completed {
        text-decoration: line-through;
        color: #888;
    }
</style>
</head>

<body>
    <?php
    include 'include/session.php';
    if ($_SESSION['role'] === 'admin') {
        include '../../assets/template/nav.php';
    } elseif ($_SESSION['role'] === 'staff') {
        include '../../assets/template/staffNav.php';
    }
    ?>

    <section id="content" class="home-section">
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul>
                </div>

            </div>

            <ul class="box-info">
                <li>
                    <i class='bx bxs-calendar-check'></i>
                    <span class="text">
                        <h3>1020</h3>
                        <p>Total No. of Scholars</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-dollar-circle'></i>
                    <span class="text">
                        <h3>2543</h3>
                        <p>Active Scholars</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-group'></i>
                    <span class="text">
                        <h3>2834</h3>
                        <p>Inactive Scholars</p>
                    </span>
                </li>

            </ul>
            <ul class="box-info">
                <li>
                    <i class='bx bxs-calendar-check'></i>
                    <span class="text">
                        <h3>1020</h3>
                        <p>Number Of Approved Applicants</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-group'></i>
                    <span class="text">
                        <h3>2834</h3>
                        <p>Number Of Denied Applicants</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-dollar-circle'></i>
                    <span class="text">
                        <h3>2543</h3>
                        <p>Unrenewed Scholars</p>
                    </span>
                </li>
            </ul>


            <div class="table-data">
                <!-- <div class="order">
                    <div class="head">
                        <h3>Recent Orders</h3>
                        <i class='bx bx-search'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Date Order</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="img/people.png">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status completed">Completed</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/people.png">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/people.png">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status process">Process</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/people.png">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/people.png">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status completed">Completed</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div> -->
                <div class="todo">
    <div class="head">
        <h3>Todos</h3>
        <i class='bx bx-plus'></i>
        <i class='bx bx-filter'></i>
    </div>
    <ul class="todo-list">
        <?php
        // Fetch todos from the database

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
                echo "Todo deleted successfully.";
            } else {
                echo "Error deleting todo: " . $conn->error;
            }
        }

        $sql = "SELECT * FROM todos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $completed = $row['completed'] ? 'completed' : 'not-completed';
                $todoId = $row['id'];
                $todoText = $row['todo_text'];
        ?>
                <li class="<?php echo $completed; ?>">
                    <p><?php echo $todoText; ?></p>
                    <i class='bx bx-dots-vertical-rounded' onclick="openPopup(<?php echo $todoId; ?>)"></i>
                    <div id="popup-<?php echo $todoId; ?>" class="popup">
                        <button onclick="markAsDone(<?php echo $todoId; ?>)">Mark as Done</button>
                        <form method="post" style="display:inline;">
                            <input type="hidden" name="delete" value="<?php echo $todoId; ?>">
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this task?')">Delete</button>
                        </form>
                    </div>
                    <div id="overlay-<?php echo $todoId; ?>" class="overlay" onclick="closePopup(<?php echo $todoId; ?>)"></div>
                </li>
        <?php
            }
        } else {
            echo "No todos found.";
        }

        $conn->close();
        ?>
    </ul>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Add a new todo
        $('.head i.bx-plus').click(function() {
            var todoText = prompt('Enter a new todo:');
            if (todoText) {
                $.ajax({
                    url: 'add_todo.php',
                    type: 'POST',
                    data: { todo_text: todoText },
                    dataType: 'json', // Added to expect JSON response
                    success: function(response) {
                        if (response.status === 'success') {
                            var newTodo = $('<li>').addClass('not-completed')
                                .data('id', response.todo_id) // Store the todo ID as data attribute
                                .append($('<p>').text(todoText))
                                .append($('<i>').addClass('bx bx-dots-vertical-rounded'));
                            $('.todo-list').append(newTodo);
                        } else {
                            console.log(response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log('Error: ' + error);
                    }
                });
            }
        });

        // Toggle todo completion
        $('.todo-list').on('click', 'li', function() {
            var todoId = $(this).data('id');
            $(this).toggleClass('completed not-completed');
            $.ajax({
                url: 'update_todo.php',
                type: 'POST',
                data: { todo_id: todoId },
                success: function(response) {
                    console.log(response);
                }
            });
        });

        // Filter todos
        $('.head i.bx-filter').click(function() {
            $('.todo-list li').toggle();
        });
    });

    function openPopup(todoId) {
        $('#popup-' + todoId).show();
        $('#overlay-' + todoId).show();
    }

    function closePopup(todoId) {
        $('#popup-' + todoId).hide();
        $('#overlay-' + todoId).hide();
    }

    function markAsDone(todoId) {
        alert('Task marked as done!');
        $('#popup-' + todoId).closest('li').addClass('completed');
        closePopup(todoId);
    }

    function deleteTodo(todoId) {
        if (confirm('Are you sure you want to delete this task?')) {
            alert('Task deleted!');
            // Perform the necessary AJAX request or update the database as needed
            // Remove the todo from the list
            $('#popup-' + todoId).closest('li').remove();
        }
    }
</script>
        </main>
    </section>

</body>

</html>