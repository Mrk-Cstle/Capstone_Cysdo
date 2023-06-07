<?php

include 'include/dbConnection.php';
$id = $_GET['id'];
$result  = mysqli_query($conn, "SELECT * FROM registration WHERE fullName='$id'");

while ($res = mysqli_fetch_array($result)) {
    $fullAddress = $res['fullAddress'];
    $fullName = $res['fullName'];
    $lastName = $res['lastName'];
    $firstName = $res['firstName'];
    $middleName = $res['middleName'];
    $gender = $res['gender'];
    $civilStatus = $res['civilStatus'];
    $registeredVoter = $res['voter'];
    $birthDate = $res['birthDate'];
    $birthPlace = $res['birthPlace'];
    $citizenship = $res['citizenship'];
    $addressNum = $res['houseAddress'];
    $addressStreet = $res['streetAddress'];
    $addressBarangay = $res['barangayAddress'];
    $contactNumber1 = $res['contactNum1'];
    $contactNumber2 = $res['contactNum2'];
    $picture = $res['2x2Pic'];
    $signPic = $res['signaturePic'];
    $schoolName = $res['schoolName'];
    $schoolAddress = $res['schoolAddress'];
    $schoolType = $res['schoolType'];
    $course = $res['course'];
    $currentLevel = $res['yearLevel'];
    $fatherName = $res['fatherName'];
    $father = $res['fatherStatus'];
    $fatherAddress = $res['fatherAddress'];
    $fatherNumber = $res['fatherContact'];
    $fatherOccupation = $res['fatherOccupation'];
    $fEducAttainment = $res['fatherEduc'];
    $motherName = $res['motherName'];
    $mother = $res['motherStatus'];
    $motherAddress = $res['motherAddress'];
    $motherNumber = $res['motherContact'];
    $motherOccupation = $res['motherOccupation'];
    $mEducAttainment = $res['motherEduc'];
    $guardianName = $res['guardianName'];
    $guardianAddress = $res['guardianAddress'];
    $guardianNumber = $res['guardianContact'];
    $guardianOccupation = $res['guardianOccupation'];
    $gEducAttainment = $res['guardianEduc'];
    $sizeFamily = $res['sizeFamily'];
    $familyIncome = $res['annualGross'];
    $status = $res['status'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        table,
        th,
        td {
            border-collapse: collapse;
            border: 1px solid black;
            padding: 20px;
            text-align: center;

        }

        table {
            width: 100%;
        }

        caption {
            border: 1px solid black;
            font-size: 20px;
            padding: 10px;
        }

        * {
            box-sizing: border-box;

        }

        body {

            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;

        }

        main {

            width: 80%;
        }

        header {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            width: 100%;


        }

        #headerLogo {
            display: flex;
            flex-direction: row;
            height: auto;
            gap: 30px;
        }


        #headerLogo img {
            width: 100px;
            height: 100px;


        }

        #picture2x2 img {

            width: 150px;
            height: auto;



        }

        #headerLogo,
        #picture2x2 {

            width: auto;




        }

        #headerCenter {
            display: flex;
            text-align: center;

            justify-content: center;
        }

        #headerCenter p {
            font-size: 15px;
        }

        #instruction {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            width: 70%;
        }
    </style>
</head>

<body>
    <p>CYSDO E-1 Form</p>
    <header>


        <div id="headerLogo">
            <img src="Images/San-Jose-del-Monte-Official-Seal.png" alt="San Jose Logo" />
            <img src="Images/CysdoLogo.png" alt="CYSDO LOGO" />
        </div>

        <div id="headerCenter">
            <p>Province of Bulacan<br />
                City of San Jose del Monte<br />
                Office of the City Mayor<br />
                CITY YOUTH AND SPORTS DEVELOPMENT OFFICE<br />
                <strong>
                    CITY EDUCATIONAL ASSISTANCE PROGRAM<br />
                    APPLICATION FORM </strong> <br />
            </p>
        </div>

        <div id="picture2x2">
            <img src="Images/No_Image_Available.jpg" alt="Picture 2x2" />
        </div>



    </header>
    <div id="instruction">
        <p>Instructions:</p>
        <p>Please read the General and Documentary Requirements. Fill the required information.
            Do not leave an item blank. If item is not applicable, indicate "N/A".
        </p>
        <p>CONTROL NUMBER: ______________</p>
    </div>

    <main>
        <table>
            <caption>PERSONAL INFO</caption>
            <tr>
                <th rowspan="2">Full Name</th>
                <td colspan="3"><?php echo "$fullName"; ?></td>
                <!-- <td></td>
                <td></td> -->
                <td><?php echo "$birthDate" ?></td>
                <td>
                    <form method="POST" action="applicantEditDb.php?id=<?php echo $id; ?>">

                        <label>Edit Status: </label>
                        <select id="status" name="status">
                            <option value="undefined">Undefined</option>
                            <option value="approved">Approve</option>
                            <option value="denied">Denied</option>
                        </select>
                        <button type="submit">Submit</button>
                    </form>
                </td>

            </tr>
            <tr>
                <!-- <td></td> -->
                <th>Last Name</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Birth date</th>
                <th>Application Status: <?php echo "$status" ?> </th>
            </tr>
            <tr>
                <td rowspan="2">Complete Address:</td>
                <td colspan="3"><?php echo "$fullAddress" ?></td>
                <!-- <td></td>
                <td></td> -->
                <td><?php echo "$birthPlace" ?></td>
            </tr>
            <tr>
                <!-- <td></td> -->
                <th>House No.</th>
                <th>Block/Lot</th>
                <th>Street/Phase/Section</th>
                <th>Place of Birth</th>
            </tr>
            <tr>
                <td><?php echo "$gender" ?></td>
                <td><?php echo "$civilStatus" ?></td>
                <td><?php echo "$citizenship" ?></td>
                <td><?php echo "$contactNumber1" ?></td>
                <td><?php echo "$contactNumber2" ?></td>
                <td><?php echo "$registeredVoter" ?></td>
            </tr>
            <tr>
                <!-- <td></td> -->
                <th>Gender</th>
                <th>Civil Status</th>
                <th>Citizenship</th>
                <th>Contact Number 1</th>
                <th>Contact Number 2</th>
                <th>Registered Voter?</th>
            </tr>
        </table>
        <table>
            <caption>EDUCATIONAL BACKGROUND</caption>


            <tr>
                <td><?php echo "$schoolName" ?></td>
                <td><?php echo "$schoolAddress" ?></td>
                <td><?php echo "$schoolType" ?></td>
            </tr>
            <tr>
                <th>School Name</th>
                <th>School Address</th>
                <th>School Type</th>
            </tr>
            <tr>
                <td><?php echo "$course" ?></td>

                <td><?php echo "$currentLevel" ?></td>
            </tr>
            <tr>

                <th>Course/Strand</th>
                <th rowspan="2">Current Year Level</th>

            </tr>
        </table>
        <table>
            <caption>FAMILY BACKGROUND</caption>
            <tr>
                <td></td>
                <th>Father: <?php echo "$father" ?></th>
                <th>Mother: <?php echo "$mother" ?></th>
                <th>Guardian</th>
                <th>Name of siblings</th>

            </tr>
            <tr>
                <th>Name</th>
                <td><?php echo "$fatherName" ?></td>
                <td><?php echo "$motherName" ?></td>
                <td><?php echo "$guardianName" ?></td>
                <td></td>

            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo "$fatherAddress" ?></td>
                <td><?php echo "$motherAddress" ?></td>
                <td><?php echo "$guardianAddress" ?></td>
                <td></td>
            </tr>
            <tr>
                <th>Contact No.</th>
                <td><?php echo "$fatherNumber" ?></td>
                <td><?php echo "$motherNumber" ?></td>
                <td><?php echo "$guardianNumber" ?></td>
                <td></td>

            </tr>
            <tr>
                <th>Occupation</th>
                <td><?php echo "$fatherOccupation" ?></td>
                <td><?php echo "$motherOccupation" ?></td>
                <td><?php echo "$guardianOccupation" ?></td>
                <td></td>

            </tr>
            <tr>
                <th>Educational Attainment</th>
                <td><?php echo "$fEducAttainment" ?></td>
                <td><?php echo "$mEducAttainment" ?></td>
                <td><?php echo "$gEducAttainment" ?></td>
                <td></td>

            </tr>
            <tr>
                <th colspan="3">Total Parents Annual Gross Income: <?php echo "$familyIncome" ?></th>
                <th colspan="2">Size of Family: <?php echo "$sizeFamily" ?></th>


            </tr>

        </table>
    </main>
</body>

</html>