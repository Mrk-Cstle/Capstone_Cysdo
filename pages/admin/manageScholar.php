<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Staff</title>
    <link rel="stylesheet" href="include/nav.css">
    <style>
        form {
            display: flex;
            flex-direction: column;
            width: 90%;
            margin-top: 100px;
            padding: 0px 150px;
        }

        #name {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            gap: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
        }

        label {
            margin-top: 30px;
        }

        #staffInfo {
            display: flex;
            flex-direction: column;
        }

        #submitBtn {
            margin-top: 50px;
            display: flex;
            flex-direction: row-reverse;
            justify-content: flex-start;
            gap: 20px;

        }

        button {
            width: 100px;
            height: 30px;
            border: 1px solid black;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <?php
    include 'include/nav.php';

    ?>
    <section class="home-section">

        <form method="POST" action="createStaffDb.php">
            <h1>Add Scholar</h1>
            <label>Name:</label>
            <div id="name">
                <input type="text" placeholder="Last Name" id="lastName" name="lastName" required />
                <input type="text" placeholder="First Name" id="firstName" name="firstName" required />
                <input type="text" placeholder="Middle Name" id="middleName" name="middleName" required />
            </div>
            <div id="staffInfo">
                <label for="position">Position:</label>
                <input type="text" name="position" id="position" required>

                <label for=" contactNum">Contact Number 1:</label>
                <input type="number" name="contactNum" id="contactNum" required>
                <label for=" contactNum">Contact Number 2:</label>
                <input type="number" name="contactNum" id="contactNum" required>
                <label for=" email">Email:</label>
                <input type="email" name="email" id="email" required>
                <label for="address">Address:</label>
                <input type="text" name="address" id="address" required>


            </div>
            <div id="submitBtn">
                <button type="submit">Submit</button>
                <button type="reset">Reset</button>
            </div>

        </form>
    </section>
</body>

</html>