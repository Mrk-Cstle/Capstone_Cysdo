<?php

include '../include/dbConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

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

    // Generate a unique random number
    $uniqueNumber = uniqid();

    // Get the original file extension
    $extension2x2 = pathinfo($_FILES["2x2Pic"]["name"], PATHINFO_EXTENSION);
    $extensionSign = pathinfo($_FILES["signPic"]["name"], PATHINFO_EXTENSION);

    // Construct the new file name
    $newFileName2x2 = $lastName . "_" . $uniqueNumber . "_2x2image." . $extension2x2;
    $newFileNameSign = $lastName . "_" . $uniqueNumber . "_Signature." . $extensionSign;


    // Image upload paths
    $uploadDir = "../../uploads/applicant/2x2/";
    $picturePath = $uploadDir . $newFileName2x2;
    $signPicPath = $uploadDir . $newFileNameSign;
    $imageName = $newFileName2x2;
    $signName = $newFileNameSign;




    // Check if the file uploads were successful
    if (
        move_uploaded_file($_FILES["2x2Pic"]["tmp_name"], $picturePath) &&
        move_uploaded_file($_FILES["signPic"]["tmp_name"], $signPicPath)
    ) {
        // Both images were successfully uploaded
        echo "Both images were successfully uploaded.";


        $query = "INSERT INTO registration (fullName, lastName, firstName,middleName,gender, civilStatus, voter, birthDate,birthPlace, citizenship, houseAddress, streetAddress, barangayAddress, contactNum1, contactNum2, pic2x2, signaturePic, schoolName, schoolAddress, schoolType, course, yearLevel, fatherName, fatherStatus,fatherAddress, fatherContact, fatherOccupation, fatherEduc, motherName, motherStatus, motherAddress, motherContact, motherOccupation, motherEduc, guardianName, guardianAddress, guardianContact, guardianOccupation, guardianEduc, sizeFamily, annualGross,  sibling1,sibling2,sibling3,sibling4,sibling5,sibling6 ) VALUES ( '$fullName','$lastName' , '$firstName', '$middleName', '$gender', '$civilStatus', '$registeredVoter', '$birthDate','$birthPlace', '$citizenship', '$addressNum', '$addressStreet', '$addressBarangay', '$contactNumber1', '$contactNumber2', '$imageName', '$signName', '$schoolName', '$schoolAddress', '$schoolType', '$course', '$currentLevel', '$fatherName', '$father', '$fatherAddress', '$fatherNumber', '$fatherOccupation',  '$fEducAttainment', '$motherName', '$mother', '$motherAddress', '$motherNumber', '$motherOccupation', '$mEducAttainment', '$guardianName', '$guardianAddress', '$guardianNumber', '$guardianOccupation', '$gEducAttainment', '$sizeFamily', '$familyIncome', '$sibling1', '$sibling2', '$sibling3', '$sibling4', '$sibling5', '$sibling6')";

        $insert = mysqli_query($conn, $query);
    } else {
        echo "Sorry, there was an error uploading your images.";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Registration</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
        }

        table,
        th,
        td {
            border-collapse: collapse;
            border: 1px solid black;
            padding: 20px;
            text-align: center;
        }

        .headerz {
            text-align: center;
            font-weight: 700;
            flex-direction: column;
        }

        table {
            width: 100%;
        }

        .tablez {
            width: 100%;
        }

        caption {
            border: 1px solid black;
            font-size: 20px;
            padding: 10px;
        }

        body {

            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
        }

        header {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            width: 100%;
        }

        #headerLogo {
            display: flex;
            flex-direction: row;
            height: auto;
            gap: 30px;
            width: 100%;
        }


        #headerLogo img {
            width: 100px;
            height: 100px;
            align-items: start;
        }

        #picture2x2 img {
            width: 120px;
            height: auto;
        }

        #headerLogo,
        #picture2x2 {
            display: block;
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

        @media (max-width: 710px) {
            
            .tablez {
            width: 50%;
            }
        }
    </style>
</head>

<body>
<div class="container">
    <header>


        <div id="headerLogo">
            <img src="../../assets/image/San-Jose-del-Monte-Official-Seal.png" alt="San Jose Logo" />
            <img src="../../assets/image/CysdoLogo.png" alt="CYSDO LOGO" />
        </div>

        <div id="headerCenter">
            <p>CYSDO E-1 Form <br />
                Province of Bulacan<br />
                City of San Jose del Monte<br />
                Office of the City Mayor<br />
                CITY YOUTH AND SPORTS DEVELOPMENT OFFICE<br />
                <strong>
                    CITY EDUCATIONAL ASSISTANCE PROGRAM<br />
                    APPLICATION FORM </strong> <br />
            </p>
        </div>

        <div id="picture2x2">
            <?php
            $pictureName = $imageName; // Replace with the actual image name
            $picturePath = $uploadDir . $pictureName;

            // Check if the image file exists
            if (file_exists($picturePath)) {
                echo '<img src="' . $picturePath . '" alt="2x2 Picture">';
            } else {
                echo '2x2 Picture not found.';
            }
            ?>

        </div>



    </header>
    <div id="instruction">
        <p>Instructions:</p>
        <p>Please read the General and Documentary Requirements. Fill the required information.
            Do not leave an item blank. If item is not applicable, indicate "N/A".
        </p>
        <p><strong> CONTROL NUMBER: ______________ </strong></p>
    </div>

    <div class="tablez">
        <table>
            <td colspan="6" class="headerz">PERSONAL INFO</td>
            <tr>
                <th rowspan="2">Full Name</th>
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
                <th colspan="3">House No./Block/Lot/Street/Phase/Section/barangay</th>

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
        <td colspan="6" class="headerz">EDUCATIONAL BACKGROUND</td>
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

                <th>Course/Strand</th>
                <th colspan="2">Current Year Level</th>

            </tr>
        </table>
        <table>
        <td colspan="6" class="headerz">FAMILY BACKGROUND</td>
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
                <th colspan="2">Total Parents Annual Gross Income: <?php echo "$familyIncome" ?></th>
                <th colspan="2">Size of Family: <?php echo "$sizeFamily" ?></th>
                <td><?php echo "$sibling6" ?></td>
            </tr>
        </table>
    </div>
</div>
</body>

</html>