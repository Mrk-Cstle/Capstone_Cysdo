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
        echo "";


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
            padding: 6px;
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
            padding: 20px;
        }

        @media screen {

            body {
                margin-bottom: 2em;
                margin-top: 10px;
                padding: 40;
            }

        }

/* print styles */
        @media print {

            body {
                margin: 0;
                color: #000;
                background-color: #fff;
                padding: 0;
            }
            #instruction {
                display: none;
            }
        }

        header, footer, aside, nav, form, iframe, .menu, .hero, .adslot {
            display: none;
        }

        @media print {

            .page-break {
                page-break-before: always;
            }
            body{
                font-size: 12px;
                font-family: Arial, sans-serif;
            }

            td, tr, th {
                font-size: 12px;
            }

            .headerz {
                font-size: 12px;
            }

            #instruction {
                display: none;
            }
            .ControlNm {
                margin-top: 2px;
                font-size: 8px;
                margin-bottom: 0;
            }
        }

        .signature {
            text-align: center;
            font-weight: 700;
            flex-direction: column;
            font-family: sans-serif;
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
            margin-right: 30px;
            margin-top: 15px;
        }

        #picture2x2 img {
            width: 200px;
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
            font-size: 14px;
            margin-right: 30px;
        }

        #instruction {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            width: 70%;
            font-size: 14;
        }

        .paalala {
            word-spacing: 0;
            line-height: 1.5;
            justify-content: start;
            text-align: start;
        }

        @media print {
            #headerCenter p {
            font-size: 12px;
            }

            #instruction {
                margin: 0;
                padding: 0;
                font-size: 12px;
            }

            #picture2x2 img {
                width: 120px;
                height: auto;
            }

            #headerLogo img {
                width: 80px;
                height: auto;
            }

        }

        @media (max-width: 710px) {
            
            .tablez {
            width: 100%;
            }
        }

        
    </style>
</head>

<body>
<div class="container-fluid">
    <header>


        <div id="headerLogo">
            <img class="img-fluid" src="../../assets/image/San-Jose-del-Monte-Official-Seal.png" alt="San Jose Logo" />
            <img class="img-fluid" src="../../assets/image/CysdoLogo.png" alt="CYSDO LOGO" />
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
        <p>Instructions: <br/>
            Please read the General and Documentary Requirements. Fill the required information.
            Do not leave an item blank. If item is not applicable, indicate "N/A".
        </p>
    </div>
    <div class="ControlNm">
        <p><strong> CONTROL NUMBER: ______________ </strong></p>
    </div>
    

    <div class="tablez">
        <div class="row">
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
        </div>
        <div class="row">
        <td colspan="6" class="headerz">EDUCATIONAL BACKGROUND</td>
            <tr>
                <th colspan="2">School Name</th>
                <th colspan="3">School Address</th>
                <th>School Type</th>
            </tr>
            <tr>
                <td colspan="2"><?php echo "$schoolName" ?></td>
                <td colspan="3"><?php echo "$schoolAddress" ?></td>
                <td><?php echo "$schoolType" ?></td>
            </tr>
            <tr>
                <th colspan="2">School Name</th>
                <th colspan="3">School Address</th>
                <th>School Type</th>
            </tr>
            <tr>
                <td colspan="2"><?php echo "$course" ?></td>

                <td colspan="3"><?php echo "$currentLevel" ?></td>
            </tr>
            <tr>

                <th colspan="2">Course/Strand</th>
                <th colspan="3">Current Year Level</th>
                <th></th>

            </tr>
        </div>
        <div class="row">
        <td colspan="6" class="headerz">FAMILY BACKGROUND</td>
            <tr>
                <td></td>
                <th colspan="2">Father: <?php echo "$father" ?></th>
                <th>Mother: <?php echo "$mother" ?></th>
                <th>Guardian</th>
                <th>Name of siblings</th>

            </tr>
            <tr>
                <th>Name</th>
                <td colspan="2"><?php echo "$fatherName" ?></td>
                <td><?php echo "$motherName" ?></td>
                <td><?php echo "$guardianName" ?></td>
                <td><?php echo "$sibling1" ?></td>

            </tr>
            <tr>
                <th>Address</th>
                <td colspan="2"><?php echo "$fatherAddress" ?></td>
                <td><?php echo "$motherAddress" ?></td>
                <td><?php echo "$guardianAddress" ?></td>
                <td><?php echo "$sibling2" ?></td>
            </tr>
            <tr>
                <th>Contact No.</th>
                <td colspan="2"><?php echo "$fatherNumber" ?></td>
                <td><?php echo "$motherNumber" ?></td>
                <td><?php echo "$guardianNumber" ?></td>
                <td><?php echo "$sibling3" ?></td>

            </tr>
            <tr>
                <th>Occupation</th>
                <td colspan="2"><?php echo "$fatherOccupation" ?></td>
                <td><?php echo "$motherOccupation" ?></td>
                <td><?php echo "$guardianOccupation" ?></td>
                <td><?php echo "$sibling4" ?></td>

            </tr>
            <tr>
                <th>Educational Attainment</th>
                <td colspan="2"><?php echo "$fEducAttainment" ?></td>
                <td><?php echo "$mEducAttainment" ?></td>
                <td><?php echo "$gEducAttainment" ?></td>
                <td><?php echo "$sibling5" ?></td>

            </tr>
            <tr>
                <th colspan="2">Total Parents Annual Gross Income: <?php echo "$familyIncome" ?></th>
                <th colspan="3">Size of Family: <?php echo "$sizeFamily" ?></th>
                <td><?php echo "$sibling6" ?></td>
            </tr>
      </div>
      <div class="row border-0">
      <td colspan="6" class="headerz">I/We hereby certify that the information above are true and correct.</td>
            <tr>
                <td class="signature" rowspan="4" colspan="2">____________________________<br/>Applicant's Signature over Printed Name  </td>
                <td class="signature" rowspan="4" colspan="2">____________________________<br/> Parent's / Guardian's Signature over Printed Name</td>
                <td class="signature" rowspan="4" colspan="2">__________________</br> (Date Accomplished) </td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td colspan="6" class="headerz">(Note: Fully accomplished form must be submitted to CYSDO.)</td>
            </tr>
            <tr>
                <td colspan="6">___________________________________________________________________________________________________________________________ <br/>
                Cut Here
                </td>
            </tr>
      </div>
      <table>
      <div class="row border-0">
        <td class="paalala" rowspan="6" colspan="6">(Student's Copy)<br/><p class="text-danger"> MGA PAALALA: </p><br/><p>1. Filipino, may asawa o wala at kailangang naninirahan sa Lungsod ng San Jose Del Monte sa loob ng tatlo (3) o mahigit pang taon, nakapagtapos ng sekondarya sa alin mang paaralan sa Lungsod, pribado man o pampubliko. Kung hindi naman nakapagtapos sa Lungsod ay kinakailangang residente nito sa nakalipas na limang (5) taon. <br/></p>
            <p>2. Hindi lalagpas ng 30 taon ang edad sa araw ng paghahain ng aplikasyon.<br/><p>
            <p>3. Hindi bababa sa 76% (passing grade) ang general average sa huling taon sa Senior High School.<br/></p>
            <p>4. Kailangang mapanatili ang 15 enrolled units lakip ang Curriculum or SYLLABUS per semester maliban sa mga magtatapos o graduating students.<br/></p>
            <p>5. Maaring magpatala sa anumang kursong kanilang nanaisin maging Degree Course (4-year o 5-year courses). o Non-Degree Course (3-year o 2-year courses).<br/></p>
            <p>6. Ang inyong aplikasyon ay hindi garantiya na kayo ay tanggap na, kailangang sumailalim at pumasa sa mga sumusunod:<br/> a. Qualifying Examination  b. Interview  c. Community Investigation<br/></p>
            <p>7. May mabuting asal (Certificate of Good Moral)<br/></p>
            <p>8. Tinatangkilik lamang ang magulang na may pinagsamang kita na hindi hihigit sa P25,000.00 kada buwan o P300,000.00 bawat taon.<br/></p>
            <p>9. Isa lamang sa bawat pamilya ang maaaring mabigyan ng Educational Assistance, sa pasubali na kung nakatapos na sa kolehiyo ang isang iskolar ay doon pa lang maaaring magkaroon ng pagkakataon na maging iskolar ang isa sa kanyang kapatid, maliban din naman kung kambal o triplet o quadruplet ay bibigyan ng exemption sa aytem na ito.<br/></p>
            <p>10. Walang tinatanggap na educational assistance o scholarship sa kahit anong ahensya o organisasyon ng Gobyerno at iba pang Lokal na Pamahalaan.<br/></p>
            <p>11. Ang mga mag-aaral ng City College of San Jose Del Monte (CCSJDM) at Bulacan State University-Sarmiento Campus (BSU-SC) o kahit anong State University o College sa loob ng Lungsod ng San Jose Del Monte na sumasailalim sa UNIFAST – Free Higher Education Program ay HINDI NA maaring maging benepisyaryo ng City Educational Assistance Program (CEAP).<br/></p>
        </td>
      </div>
      </table>
      <table>
      <div class="row border-0">
        <tr>
            <td colspan="6">___________________________________________________________________________________________________________________________ <br/>
            Cut Here
            </td>
        </tr>
        <th colspan="2" rowspan="3"><img src="../../assets/image/1x1.jpg" style="width: 200px; height: auto;"></th>
        <td colspan="3"><img src="../../assets/image/examStub.png" style="width: 400px; height: auto; space-between: none;"></td>
        
        <tr class="">
            <td colspan="5" rowspan="5" >
            <p class="float-start">Control Number:_________________</p>
            <p style="font-family: sans-serif;">Date Filling:_________________<br/></p>
            <p><img src="../../assets/image/RisingCity.png" style="width: 80px; height: auto; float: end;" class="float-end"></p>
            <p class="float-start" style="font-family: sans-serif;">Name of Applicant:________________________________<br/></p>
            <p style="font-family: sans-serif;">Examination Date & Venue:________________________________<br/></p><br/>
            <p class="float-start" style="font-family: sans-serif;">Signature:________________________________</p>
            <p class="float-start" style="font-family: sans-serif;">Received by:________________________________</p>
            
            
            </td>
        </tr>
        
      </div>
      </table>
    </div>
</div>
</body>

</html>