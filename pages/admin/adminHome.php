<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style/dashboard.css">
    <link rel="stylesheet" href="../../style/adminTodo.css">
    <title>Home</title>

</head>
    <?php
    include 'include/session.php';
    if ($_SESSION['role'] === 'admin') {
        include '../../assets/template/nav.php';
    } elseif ($_SESSION['role'] === 'staff') {
        include '../../assets/template/staffNav.php';
    }
    ?>


<body>
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
                
    <div class="todo">
    <div class="head">
        <h3>Todos</h3>

        <a class="btnAddTodo bx bx-plus dropdown-toggle-split text-black" type="button" data-bs-target="#addTodo" data-bs-toggle="modal" data-bs-whatever="@addTo-do"></a>
        <div class="modal fade" id="addTodo" aria-labelledby="addTodoLabel" aria-expanded="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title fs-5" id="addTodoLabel">New Todo</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Enter Text Here: </label>
                                    <textarea class="form-control" id="addNew"></textarea>
                                </div>
                            </form>
                        </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Add</button>
                        </div>
                </div>
            </div>
        </div>
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
                <div class="dropdown-center">
                    <a class="bx bx-dots-vertical-rounded text-black" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                    </a>
                    <ul class="dropdown-menu">
                        <button class="dropdown-item" type="button">Mark As Done</button>
                        <button class="dropdown-item" type="button">Delete</button>
                    </ul>
                </div>
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
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    const exampleModal = document.getElementById('addTodo')
if (exampleModal) {
  exampleModal.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget
    // Extract info from data-bs-* attributes
    const recipient = button.getAttribute('data-bs-whatever')
    // If necessary, you could initiate an Ajax request here
    // and then do the updating in a callback.

    // Update the modal's content.
    const modalTitle = exampleModal.querySelector('.modal-title')
    const modalBodyInput = exampleModal.querySelector('.modal-body input')

    modalTitle.textContent = `New message to ${recipient}`
    modalBodyInput.value = recipient
  })
}
</script>

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