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
        <i class="bx bx-plus"></i>
        <i class="bx bx-filter" onclick="toggleTodoList()"></i>
    </div>
    <ul class="todo-list">
        <?php
        // Fetch todos from the database
        $server = "localhost";
        $username = "root";
        $password = "";
        $db = "cysdo";

        // Create a database connection
        $conn = new mysqli($server, $username, $password, $db);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to fetch todos
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
                    <i class="bx bx-dots-vertical-rounded" onclick="openPopup(<?php echo $todoId; ?>)"></i>
                    <div id="popup-<?php echo $todoId; ?>" class="popup">
                        <button onclick="markAsDone(<?php echo $todoId; ?>)">Mark as Done</button>
                        <button onclick="deleteTodoAjax(<?php echo $todoId; ?>)">Delete</button>
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
    // Function to initialize event handlers
    function initializeEventHandlers() {
        // Add click event handler to the dots icon
        $('.todo-list').on('click', '.bx-dots-vertical-rounded', function() {
            var todoId = $(this).closest('li').data('id');
            openPopup(todoId);
        });
    }

    // Add a new todo
    $('.head i.bx-plus').click(function() {
        var todoText = prompt('Enter a new todo:');
        if (todoText) {
            $.ajax({
                url: 'addTodo.php',
                type: 'POST',
                data: { todo_text: todoText },
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        var todoId = response.todo_id;
                        var newTodo = $('<li>').addClass('not-completed')
                            .data('id', todoId)
                            .append($('<p>').text(todoText))
                            .append(
                                $('<i>').addClass('bx bx-dots-vertical-rounded').attr('onclick', 'openPopup(' + todoId + ')')
                            )
                            .append(
                                $('<div>').attr('id', 'popup-' + todoId).addClass('popup')
                                    .append(
                                        $('<button>').text('Mark as Done').attr('onclick', 'markAsDone(' + todoId + ')')
                                    )
                                    .append(
                                        $('<button>').text('Delete').attr('onclick', 'deleteTodoAjax(' + todoId + ')')
                                    )
                            )
                            .append(
                                $('<div>').attr('id', 'overlay-' + todoId).addClass('overlay').attr('onclick', 'closePopup(' + todoId + ')')
                            );
                        $('.todo-list').append(newTodo);
                        initializeEventHandlers(); // Re-initialize event handlers for the new todo
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

    // Initialize event handlers
    initializeEventHandlers();
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
    // Update the UI immediately
    var listItem = $('#popup-' + todoId).closest('li');
    var isCompleted = listItem.hasClass('completed');

    if (isCompleted) {
        listItem.removeClass('completed');
        listItem.addClass('not-completed');
    } else {
        listItem.removeClass('not-completed');
        listItem.addClass('completed');
    }

    closePopup(todoId);

    // Send AJAX request to update the completed status in the database
    $.ajax({
        url: 'updateTodo.php',
        type: 'POST',
        data: { todo_id: todoId, completed: isCompleted ? 0 : 1 }, // Toggle the completed status
        success: function(response) {
            // Todo status updated successfully
            // You can perform any other actions if needed
        },
        error: function(xhr, status, error) {
            // Error updating todo status
            console.log(xhr.responseText);
            // Revert the UI back to the original state if an error occurs
            if (isCompleted) {
                listItem.removeClass('not-completed');
                listItem.addClass('completed');
            } else {
                listItem.removeClass('completed');
                listItem.addClass('not-completed');
            }
        }
    });
}

function toggleTodoList() {
        $('.todo-list').toggle();
    }


    function deleteTodoAjax(todoId) {
        if (confirm('Are you sure you want to delete this task?')) {
            $.ajax({
                url: 'deleteTodo.php',
                type: 'POST',
                data: {
                    delete: todoId
                },
                success: function(response) {
                    // Todo deleted successfully
                    // You can update the UI or perform any other actions
                    $('#popup-' + todoId).closest('li').remove();
                },
                error: function(xhr, status, error) {
                    // Error deleting todo
                    console.log(xhr.responseText);
                }
            });
        }
    }
</script>

        </main>
    </section>

</body>

</html>