<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0px;
            padding: 0px;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
            background-image: url("../../assets/image/SanjoseBg.jpg");
            backdrop-filter: blur(9px);
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: scroll;
            background-size: cover;
        }

        h1 {
            text-align: center;
        }

        #Main {
            border: 1px solid black;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            height: 550px;
            width: 500px;
            background: #f788a0;
            box-shadow: 10px 20px 26px 10px rgba(5, 5, 5, 0.7);
        }

        .header {
            display: inline-flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin: 20px 0px;
            padding-bottom: 20px;
            border-bottom: 1px solid black;
        }

        img {
            height: 60px;
            width: auto;
        }

        #Content {
            display: flex;

            flex-direction: column;
            margin-top: 50px;
            margin-left: 50px;
        }

        form input {
            width: 400px;
            align-self: center;
            margin-top: 10px;
            margin-bottom: 15px;
            height: 25px;
            border: 0.2px solid black;
        }

        .BtnDiv input {
            width: 100px;
            margin-right: 50px;
            float: right;
            height: 30px;
            margin-top: 100px;
            border-radius: 10px;
            border: 0.2px solid black;
        }
    </style>
</head>

<body>
    <div id="Main">
        <div class="header">

            <img src="../../assets/image/CysdoLogo.png" />
            <img src="../../assets/image/Header.png" />
        </div>
        <h1>Admin Login</h1>
        <div id="Content">
            <form action="action/adminDb.php" method="POST">
                <label for="UserName">Username/Email</label>
                <input type="text" id="UserName" name="userName" />
                <label for="Password">Password</label>
                <input type="password" id="Password" name="password" />
                <div class="BtnDiv">
                    <a href="../../index.php">Back</a>
                    <input type="submit" value="Submit" />
                </div>
            </form>
        </div>
    </div>
</body>

</html>