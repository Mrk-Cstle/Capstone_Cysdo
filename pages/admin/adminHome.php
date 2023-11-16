<?php
include 'include/session.php'; ?>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Home</title>

    <link rel="stylesheet" href="../../style/dashboard.css">
    <style>
        #content main {
            width: 100%;
            padding: 36px 24px;
            font-family: var(--poppins);
            padding-right: 100px;
        }

        #content main .box-info li {
            padding: 24px;
            background: #eee;
            border-radius: 20px;
            display: flex;
            align-items: center;
            grid-gap: 24px;
        }

        #editTodo .modal-dialog {
            max-width: 400px;
        }

        #editTodo .modal-body {
            padding: 10px;
        }

        #editTodo .modal-footer {
            padding: 10px;
        }

        #editTodo .modal-title {
            font-size: 18px;
            font-weight: bold;
        }

        #content main .box-info #bx-1 {
            background: #CFE8FF;
            color: #3C91E6;
        }

        #content main .box-info #bx-2 {
            background: #FFE0D3;
            color: #FD7238;
        }

        .container-1 {
            width: 100%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .TG-button {
            background-color: #d2d2d2;
            width: 65px;
            height: 35px;
            border-radius: 200px;
            cursor: pointer;
            position: relative;
            transition: 0.2s;
            margin-bottom: 3px;
        }

        .TG-button::before {
            position: absolute;
            content: '';
            background-color: #fff;
            width: 25px;
            height: 25px;
            border-radius: 200px;
            margin: 5px;
            transition: 0.2s;
        }

        input:checked+.TG-button {
            background-color: rgb(236, 55, 146);
        }

        input:checked+.TG-button::before {
            transform: translateX(30px);
        }

        .hidebtn {
            display: none;
        }

        #content main .box-info-togglebtn li {
            padding: 24px;
            background: #eee;
            border-radius: 20px;
            display: flex;
            align-items: center;
            grid-gap: 24px;
        }

        #content main .box-info-togglebtn {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
            grid-gap: 24px;
            margin-top: 36px;
        }

        #content main .box-info-togglebtn li .text h3 {
            font-size: 24px;
            font-weight: 600;
            color: #342E37;
        }

        #content main .box-info-togglebtn li .text p {
            color: #342E37;
        }

        .toggle-name {
            display: block;
            padding: 20px;
        }

        .toggle-no {
            text-align: center;
            padding: 3px;
            font-size: 20px;
            font-weight: 500;
        }

        .toggle-text {
            display: flex;
        }

        @media screen and (max-width: 779px) {
            #content main .box-info-togglebtn li {
                padding: 15px;
                grid-gap: 24px;
                margin-left: -50px;
            }

            #content main {
                width: 100%;
                padding-bottom: 10px;
                padding-right: 0;
            }

            .toggle-no {
                text-align: center;
                padding: 3px;
                font-size: 18px;
                font-weight: 500;
            }
        }
    </style>
    <title>Home</title>

</head>



<body>
    <?php
    include 'include/session.php';
    if ($_SESSION['role'] === 'admin') {
        include '../../assets/template/profileNav.php';
    } elseif ($_SESSION['role'] === 'staff') {
        include '../../assets/template/staffNavi.php';
    }
    ?>
    <section id="content" class="home-section">
        <?php
        include 'action/dashboardDb.php';
        if ($_SESSION['role'] === 'admin') {
        ?> <main>
                <div class="head-title">
                    <div class="left">
                        <h1>Dashboard</h1>

                    </div>

                </div>

                <ul class="box-info">
                    <li class="box-1">
                        <i class='bx bx bi-person-check-fill' id="bx-1"></i>
                        <span class="text">
                            <h3> <?php
                                    echo $totalScholar->num_rows;

                                    ?></h3>
                            <p>Total No. of Scholars</p>
                        </span>
                    </li>

                    <li class="box-4">
                        <i class="bx bx bi-people-fill" id="bx-1"></i>
                        <span class="text">
                            <h3><?php
                                echo $totalApplicant->num_rows;

                                ?></h3>
                            <p>Number of Applicants</p>
                        </span>
                    </li>
                    <li class="box-4">
                        <i class="bx bx bi-person-fill-check" id="bx-1"></i>
                        <span class="text">
                            <h3><?php
                                echo $totalNewScholar->num_rows;

                                ?></h3>
                            <p>Number of New Scholar</p>
                        </span>
                    </li>
                </ul>
                <ul class="box-info">
                    <li class="box-6">
                        <i class="bx bx bi-arrow-repeat" id="bx-2"></i>
                        <span class="text">
                            <h3><?php
                                echo $totalRenewalProcess->num_rows;

                                ?></h3>
                            <p>Number of Renewal</p>
                        </span>
                    </li>
                    <li class="box-3">
                        <i class="bx bx bi-people-fill" id="bx-2"></i>
                        <span class="text">
                            <h3><?php
                                echo $totalExaminer->num_rows;

                                ?></h3>
                            <p>Number of Examiner</p>
                        </span>
                    </li>
                    <li class="box-5">
                        <i class="bx bx bi-person-fill-check" id="bx-2"></i>
                        <span class="text">
                            <h3><?php
                                echo $totalRelease->num_rows;

                                ?></h3>
                            <p>Number of for Release Scholar</p>
                        </span>
                    </li>
                </ul>


                <ul class="box-info-togglebtn">
                    <li>
                        <?php
                        function getSwitchStatus()
                        {
                            // Establish a database connection
                            include '../include/dbConnection.php';

                            if (!$conn) {
                                die('Could not connect: ' . mysqli_connect_error());
                            }

                            // Query to retrieve the switch status
                            $sql = "SELECT switch_status FROM renewal_control WHERE renew_control_id = 1"; // Adjust the query as needed

                            $result = mysqli_query($conn, $sql);

                            if (!$result) {
                                die('Error: ' . mysqli_error($conn));
                            }

                            // Fetch the switch status
                            $row = mysqli_fetch_assoc($result);
                            $switchStatus = $row['switch_status'];

                            // Close the database connection
                            mysqli_close($conn);

                            return $switchStatus;
                        }

                        // Get the switch status from the database
                        $switchStatus = getSwitchStatus();
                        ?>
                        <div class="container-1">
                            <h5 class="toggle-name">Renewal Form:</h5>
                            <input type="checkbox" id="check" class="hidebtn" name="registrationSwitch" <?php echo ($switchStatus == 1) ? 'checked' : ''; ?>>
                            <label for="check" class="TG-button"></label>
                        </div>
                    </li>
                    <li>

                        <?php
                        $sql = "SELECT * FROM registration_control WHERE reg_control_id = '1'";

                        $result = mysqli_query($conn, $sql);

                        if ($result) {
                            // Step 3: Check if the row exists
                            if (mysqli_num_rows($result) > 0) {
                                // Step 4: Fetch the row
                                $row = mysqli_fetch_assoc($result);

                                // Step 5: Access the values of the row
                                extract($row);
                                // ...

                                // Process the retrieved row as needed
                                // For example, you can display the values or perform any other operations

                                // Free the result set
                                mysqli_free_result($result);
                            }
                        }
                        ?>
                        <div class="container-1">
                            <span class="text">

                                <h5 class="toggle-no quotaVal">Quota Set : <?php echo $quota ?></h5>
                                <div class="col-md-10 ms-2">
                                    <div class="toggle-text form-group">
                                        <label class="control-label bold font-xs"></label>
                                        <div class="input-group ms-3">
                                            <input type="number" class="form-control quotaVal" name="quota" id="quota" value="<?php echo $quota ?>">
                                        </div>
                                        <button type="submit" class="btn btn-outline-success ms-3" id="submitBtn">Submit</button>

                                    </div>
                                </div>
                        </div>
                    </li>
                </ul>
            </main>


        <?php } ?>
        <main>
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
                                        <button type="button" class="btn btn-primary" id="addButton">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="editTodo" aria-labelledby="editTodoLabel" aria-expanded="false">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title fs-5" id="editTodoLabel">Edit Todo</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="editNew" class="col-form-label">Edit Text Here: </label>
                                                <textarea class="form-control" id="editNew"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success" id="editButton">Save Changes</button>
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

                                <li class="<?php echo $completed; ?>" data-id="<?php echo $todoId; ?>">
                                    <p><?php echo $todoText; ?></p>
                                    <div class="dropdown-center">
                                        <a class="bx bx-dots-vertical-rounded text-black" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="visually-hidden">Toggle Dropdown</span>
                                        </a>
                                        <ul class="dropdown-menu" data-id="<?php echo $todoId; ?>">
                                            <button class="dropdown-item" type="button" onclick="markAsDone(<?php echo $todoId; ?>)">Mark As Done</button>
                                            <button class="dropdown-item" type="button" onclick="deleteTodoAjax(<?php echo $todoId; ?>)">Delete</button>
                                            <button class="dropdown-item" type="button" onclick="openEditModal(<?php echo $todoId; ?>, '<?php echo $todoText; ?>')">Edit</button>
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

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
            <script>
                $(document).ready(function() {
                    $('#submitBtn').click(function() {
                        // Get the value of the input
                        var quotaValue = $('#quota').val();

                        // Send an AJAX request
                        $.ajax({
                            type: 'POST',
                            url: 'action/updateSwitchRegistration.php', // Replace with your server-side script
                            data: {
                                quota: quotaValue
                            },
                            success: function(response) {
                                $('.quotaVal').text('Quota Set: ' + quotaValue);
                                console.log(response);
                            },
                            error: function(error) {
                                // Handle errors if any
                                console.log(error);
                            }
                        });
                    });
                });
            </script>
            <script>
                $(document).ready(function() {
                    $('#check').change(function() {
                        // Get the checkbox state
                        var switchStatus = $(this).prop('checked') ? 1 : 0;

                        // Send an AJAX request to update_switch.php
                        $.ajax({
                            type: 'POST',
                            url: 'action/update_switch.php',
                            data: {
                                switchStatus: switchStatus
                            },
                            success: function(response) {
                                // Handle the response if needed
                                console.log(response);
                            },
                            error: function(error) {
                                // Handle errors if any
                                console.log(error);
                            }
                        });
                    });

                    $('#check').change(function() {
                        // Get the checkbox state
                        if ($(this).prop("checked")) {
                            // Get the checkbox state
                            var switchStatus = true;

                            // Send an AJAX request to update_switch.php
                            $.ajax({
                                type: 'POST',
                                url: 'action/update_switchDb.php',
                                data: {
                                    switchStatus: switchStatus
                                },
                                success: function(response) {
                                    // Handle the response if needed
                                    console.log(response);
                                },
                                error: function(error) {
                                    // Handle errors if any
                                    console.log(error);
                                }
                            });
                        }

                    });
                });
            </script>
            <script>
                $(document).ready(function() {
                    // Function to initialize event handlers
                    function initializeEventHandlers() {
                        // Add click event handler to the dots icon
                        $('.todo-list').on('click', '.bx-dots-vertical-rounded', function() {
                            var todoId = $(this).closest('li').data('id');
                            openPopup(todoId);
                        });

                        // Add click event handler to the delete button
                        $('.todo-list').on('click', '.delete-button', function() {
                            var todoId = $(this).closest('li').data('id');
                            deleteTodoAjax(todoId);
                        });
                    }

                    // Add a new todo
                    $('#addButton').click(function() {
                        var todoText = $('#addNew').val().trim();
                        if (todoText !== '') {
                            $.ajax({
                                url: 'addTodo.php',
                                type: 'POST',
                                data: {
                                    todo_text: todoText
                                },
                                dataType: 'json',
                                success: function(response) {
                                    if (response.status === 'success') {
                                        var todoId = response.todo_id;
                                        var newTodo = $('<li>').addClass('not-completed')
                                            .data('id', todoId)
                                            .append($('<p>').text(todoText))
                                            .append(
                                                $('<div>').addClass('dropdown-center')
                                                .append(
                                                    $('<a>').addClass('bx bx-dots-vertical-rounded text-black').attr('data-bs-toggle', 'dropdown')
                                                    .append(
                                                        $('<span>').addClass('visually-hidden').text('Toggle Dropdown')
                                                    )
                                                )
                                                .append(
                                                    $('<ul>').addClass('dropdown-menu').attr('data-id', todoId)
                                                    .append(
                                                        $('<button>').addClass('dropdown-item').attr('type', 'button').text('Mark As Done')
                                                        .on('click', function() {
                                                            markAsDone(todoId);
                                                        })
                                                    )
                                                    .append(
                                                        $('<button>').addClass('dropdown-item delete-button').attr('type', 'button').text('Delete')
                                                    )
                                                )
                                            );
                                        $('.todo-list').append(newTodo);
                                        $('#addTodo').modal('hide');
                                        $('#addNew').val('');
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
                    var listItem = $('li[data-id="' + todoId + '"]');
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
                        data: {
                            todo_id: todoId,
                            completed: isCompleted ? 0 : 1
                        }, // Toggle the completed status
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

                function deleteTodoAjax(todoId) {
                    // Send AJAX request to delete the todo from the database
                    $.ajax({
                        url: 'deleteTodo.php',
                        type: 'POST',
                        data: {
                            todo_id: todoId
                        },
                        success: function(response) {
                            // Todo deleted successfully
                            // Remove the todo from the UI
                            $('li[data-id="' + todoId + '"]').remove();
                        },
                        error: function(xhr, status, error) {
                            // Error deleting todo
                            console.log(xhr.responseText);
                        }
                    });
                }

                function openEditModal(todoId, todoText) {
                    // Populate the edit modal with the existing todo text
                    $('#editNew').val(todoText);

                    // Show the edit modal
                    $('#editTodo').modal('show');

                    // Update the todo when the edit button is clicked
                    $('#editButton').off('click').on('click', function() {
                        var updatedTodoText = $('#editNew').val().trim();
                        if (updatedTodoText !== '') {
                            $.ajax({
                                url: 'editTodo.php',
                                type: 'POST',
                                data: {
                                    todo_id: todoId,
                                    todo_text: updatedTodoText
                                },
                                dataType: 'json',
                                success: function(response) {
                                    if (response.status === 'success') {
                                        // Update the UI with the new todo text
                                        $('li[data-id="' + todoId + '"] p').text(updatedTodoText);
                                        // Hide the edit modal
                                        $('#editTodo').modal('hide');
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
                }
            </script>
        </main>
    </section>
</body>

</html>