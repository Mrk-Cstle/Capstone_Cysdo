<?php

include '../include/dbConnection.php';


$lastName = $_POST['lastName'];
$firstName = $_POST['firstName'];
$middleName = $_POST['middleName'];
$gender = $_POST['gender'];
$civilStatus = $_POST['civilStatus'];
$registeredVoter = $_POST['registeredVoter'];
$birthDate = $_POST['birthDate'];
$birthPlace = $_POST['birthPlace'];
$citizenship = $_POST['citizenship'];
$addressNum = $_POST['addressNum'];
$addressStreet = $_POST['addressStreet'];
$addressBarangay = $_POST['addressBarangay'];
$contactNumber1 = $_POST['contactNumber1'];
$contactNumber2 = $_POST['contactNumber2'];
$picture = $_POST['2x2Pic'];
$signPic = $_POST['signPic'];
$schoolName = $_POST['schoolName'];
$schoolAddress = $_POST['schoolAddress'];
$schoolType = $_POST['schoolType'];
$course = $_POST['course'];
$currentLevel = $_POST['currentLevel'];
$fatherName = $_POST['fatherName'];
$father = $_POST['father'];
$fatherAddress = $_POST['fatherAddress'];
$fatherNumber = $_POST['fatherNumber'];
$fatherOccupation = $_POST['fatherOccupation'];
$fEducAttainment = $_POST['fEducAttainment'];
$motherName = $_POST['motherName'];
$mother = $_POST['mother'];
$motherAddress = $_POST['motherAddress'];
$motherNumber = $_POST['motherNumber'];
$motherOccupation = $_POST['motherOccupation'];
$mEducAttainment = $_POST['mEducAttainment'];
$guardianName = $_POST['guardianName'];
$guardianAddress = $_POST['guardianAddress'];
$guardianNumber = $_POST['guardianNumber'];
$guardianOccupation = $_POST['guardianOccupation'];
$gEducAttainment = $_POST['gEducAttainment'];
$sizeFamily = $_POST['sizeFamily'];
$familyIncome = $_POST['familyIncome'];
$sibling1 = $_POST['sibling1'];
$sibling2 = $_POST['sibling2'];
$sibling3 = $_POST['sibling3'];
$sibling4 = $_POST['sibling4'];
$sibling5 = $_POST['sibling5'];
$sibling6 = $_POST['sibling6'];


$fullName =  $lastName . ", " . $firstName . ' ' . $middleName;
$fullAddress = $addressNum . " " . $addressStreet . " " . $addressBarangay;

$query = "INSERT INTO registration (fullName, lastName, firstName,middleName,gender, civilStatus, voter, birthDate,birthPlace, citizenship, houseAddress, streetAddress, barangayAddress, contactNum1, contactNum2, 2x2Pic, signaturePic, schoolName, schoolAddress, schoolType, course, yearLevel, fatherName, fatherStatus,fatherAddress, fatherContact, fatherOccupation, fatherEduc, motherName, motherStatus, motherAddress, motherContact, motherOccupation, motherEduc, guardianName, guardianAddress, guardianContact, guardianOccupation, guardianEduc, sizeFamily, annualGross,  sibling1,sibling2,sibling3,sibling4,sibling5,sibling6 ) VALUES ( '$fullName','$lastName' , '$firstName', '$middleName', '$gender', '$civilStatus', '$registeredVoter', '$birthDate','$birthPlace', '$citizenship', '$addressNum', '$addressStreet', '$addressBarangay', '$contactNumber1', '$contactNumber2', '$picture', '$signPic', '$schoolName', '$schoolAddress', '$schoolType', '$course', '$currentLevel', '$fatherName', '$father', '$fatherAddress', '$fatherNumber', '$fatherOccupation',  '$fEducAttainment', '$motherName', '$mother', '$motherAddress', '$motherNumber', '$motherOccupation', '$mEducAttainment', '$guardianName', '$guardianAddress', '$guardianNumber', '$guardianOccupation', '$gEducAttainment', '$sizeFamily', '$familyIncome', '$sibling1', '$sibling2', '$sibling3', '$sibling4', '$sibling5', '$sibling6')";

$insert = mysqli_query($conn, $query);
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
                <td rowspan="2">Full Name</td>
                <td colspan="3"><?php echo "$fullName"; ?></td>
                <!-- <td></td>
                <td></td> -->
                <td colspan="2"><?php echo "$birthDate" ?></td>
            </tr>
            <tr>
                <!-- <td></td> -->
                <th>Last Name</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th colspan="2">Birth date</th>
            </tr>
            <tr>
                <th rowspan="2">Complete Address:</th>
                <td colspan="3"><?php echo "$fullAddress" ?></td>
                <!-- <td></td>
                <td></td> -->
                <td colspan="2"><?php echo "$birthPlace" ?></td>
            </tr>
            <tr>
                <!-- <td></td> -->
                <th>House No.</th>
                <th>Block/Lot</th>
                <th>Street/Phase/Section</th>
                <th colspan="2">Place of Birth</th>
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
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>School Name</th>
                <th>School Address</th>
                <th>School Type</th>
            </tr>
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

                <td colspan="2"><?php echo "$currentLevel" ?></td>
            </tr>
            <tr>

                <td>Course/Strand</td>
                <td colspan="2">Current Year Level</td>

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
                <td><?php echo "$sibling1" ?></td>

            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo "$fatherAddress" ?></td>
                <td><?php echo "$motherAddress" ?></td>
                <td><?php echo "$guardianAddress" ?></td>
                <td><?php echo "$sibling2" ?></td>
            </tr>
            <tr>
                <th>Contact No.</th>
                <td><?php echo "$fatherNumber" ?></td>
                <td><?php echo "$motherNumber" ?></td>
                <td><?php echo "$guardianNumber" ?></td>
                <td><?php echo "$sibling3" ?></td>

            </tr>
            <tr>
                <th>Occupation</th>
                <td><?php echo "$fatherOccupation" ?></td>
                <td><?php echo "$motherOccupation" ?></td>
                <td><?php echo "$guardianOccupation" ?></td>
                <td><?php echo "$sibling4" ?></td>

            </tr>
            <tr>
                <th>Educational Attainment</th>
                <td><?php echo "$fEducAttainment" ?></td>
                <td><?php echo "$mEducAttainment" ?></td>
                <td><?php echo "$gEducAttainment" ?></td>
                <td><?php echo "$sibling5" ?></td>

            </tr>
            <tr>
                <th colspan="2">Total Parents Annual Gross Income<?php echo "$familyIncome" ?></th>
                <th colspan="2">Size of Family<?php echo "$sizeFamily" ?></th>
                <td><?php echo "$sibling6" ?></td>


            </tr>

        </table>
    </main>
</body>

</html>