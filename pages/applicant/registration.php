<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style/forms.css" />
  <script src="script/forms.js"></script>
  <title>Registration</title>
</head>

<body>
  <form method="POST" action="registrationDb.php">
    <h1>APPLICATION FORM</h1>
    <div class="formContainer">
      <h2>Personal Information</h2>

      <label>Name: </label>
      <div class="formLayout">
        <input type="text" placeholder="Last Name" id="lastName" name="lastName" required />
        <input type="text" placeholder="First Name" id="firstName" name="firstName" required />
        <input type="text" placeholder="Middle Name" id="middleName" name="middleName" required />
      </div>
      <div class="formLayout">
        <div class="labelInput">
          <label for="gender">Gender:</label>
          <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>
        <div class="labelInput">
          <label for="civilStatus">Civil Status:</label>
          <select id="civilStatus" name="civilStatus" required>
            <option value="single">Single</option>
            <option value="married">Married</option>
          </select>
        </div>
        <div class="labelInput">
          <label for="registeredVoter">Registered Voter? :</label>
          <select id="registeredVoter" name="registeredVoter" required>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>
        </div>
      </div>
      <div class="formLayout">
        <div class="labelInput">
          <label for="birthDate">Birth Date:</label>
          <input type="date" id="birthDate" name="birthDate" required />
          <label for="birthDate">Place of Birth:</label>
          <input type="text" id="birthPlace" name="birthPlace" required />
        </div>
        <div class="labelInput">
          <label for="citizenship">Citizenship:</label>
          <input type="text" id="citizenship" name="citizenship" required />
        </div>
      </div>
      <label>Complete Address: </label>
      <div class="formLayout">
        <input type="text" placeholder="House No./Block/Lot" id="addressNum" name="addressNum" required />
        <input type="text" placeholder="Street/Phase/Section" id="addressStreet" name="addressStreet" required />
        <input type="text" placeholder="Barangay" id="addressBarangay" name="addressBarangay" required />
      </div>

      <div class="formLayout">
        <div class="labelInput">
          <label for="contactNumber1">Contact Number 1: </label>
          <input type="number" id="contactNumber1" name="contactNumber1" required />
        </div>
        <div class="labelInput">
          <label for="contactNumber2">Contact Number 2: </label>
          <input type="number" id="contactNumber2" name="contactNumber2" required />
        </div>
      </div>
      <div class="formLayout">
        <div class="labelInput">
          <label for="2x2Pic">Upload 2x2 Picture (Jpeg/Jpg): </label>
          <input type="file" id="2x2Pic" name="2x2Pic" accept="image/jpeg" />
        </div>
        <div class="labelInput">
          <label for="signPic">Upload Signature Picture (Png): </label>
          <input type="file" id="signPic" name="signPic" accept="image/png" />
        </div>
      </div>
    </div>

    <!-- EDUCTIONAL BACKGROUND PART -->

    <h2>Educational Background</h2>
    <div class="formContainer">
      <div class="formLayout">
        <div class="labelInput">
          <label for="schoolName">School Name: </label>
          <input type="text" placeholder="Current School" id="schoolName" name="schoolName" required />
        </div>
        <div class="labelInput">
          <label for="schoolAddress">School Address: </label>
          <input type="text" placeholder="Current School" id="schoolAddress" name="schoolAddress" required />
        </div>
      </div>
      <label for="schoolType">School Type:</label>
      <select id="schoolType" name="schoolType" required>
        <option value="public">Public</option>
        <option value="private">Private</option>
      </select>

      <label for="course">Course/Strand: </label>
      <input type="text" id="course" name="course" required />

      <label for="currentLevel">Current Year Level:</label>
      <select id="currentLevel" name="currentLevel" required>
        <option value="als">ALS</option>
        <option value="grd12">Grade 12</option>
        <option value="highSchoolGrad">High School Graduate</option>
        <option value="1stYearCollege">1st Year College</option>
        <option value="2ndYearCollege">2nd Year College</option>
        <option value="3rdYearCollege">3rd Year College</option>
      </select>
    </div>

    <!-- Family Background -->

    <h2>Family Background</h2>
    <div class="formContainer">
      <!-- Father Info -->
      <div id="parentForm">
        <div id="fatherInput">
          <label for="fatherName">Father's Name: </label>
          <input type="text" placeholder="Father's Full Name" id="fatherName" name="fatherName" />
          <label for="father">Father: </label>
          <select id="father" name="father" required>
            <option value="alive">Alive</option>
            <option value="deceased">Deceased</option>
          </select>
          <label for="fatherAddress">Father's Address: </label>
          <input type="text" id="fatherAddress" name="fatherAddress" />
          <label for="fatherNumber">Father's Contact Number: </label>
          <input type="number" id="fatherNumber" name="fatherNumber" />
          <label for="fatherOccupation">Father's Occupation: </label>
          <input type="text" id="fatherOccupation" name="fatherOccupation" />
          <label for="fEducAttainment">Father's Educational Attainment:
          </label>
          <input type="text" id="fEducAttainment" name="fEducAttainment" />
        </div>
        <!-- Mother Info -->
        <div id="motherInput">
          <label for="motherName">Mother's Name: </label>
          <input type="text" placeholder="Mother's Full Name" id="motherName" name="motherName" />
          <label for="mother">Mother: </label>
          <select id="mother" name="mother" required>
            <option value="alive">Alive</option>
            <option value="deceased">Deceased</option>
          </select>
          <label for="motherAddress">Mother's Address: </label>
          <input type="text" id="motherAddress" name="motherAddress" />
          <label for="fatherNumber">Mother's Contact Number: </label>
          <input type="number" id="motherNumber" name="motherNumber" />
          <label for="motherOccupation">Mother's Occupation: </label>
          <input type="text" id="motherOccupation" name="motherOccupation" />
          <label for="mEducAttainment">Mother's Educational Attainment:
          </label>
          <input type="text" id="mEducAttainment" name="mEducAttainment" />
        </div>
        <div id="guardianInput">
          <!-- Guardian Info -->

          <label for="guardianName">Guardian's Name (if not living with parents):
          </label>
          <input type="text" placeholder="Guardian's Full Name" id="guardianName" name="guardianName" />
          <label for="guardianAddress">Guardian's Address: </label>
          <input type="text" id="guardianAddress" name="guardianAddress" />
          <label for="guardianNumber">Guardian's Contact Number: </label>
          <input type="number" id="guardianNumber" name="guardianNumber" />
          <label for="guardianOccupation">Guardian's Occupation: </label>
          <input type="text" id="guardianOccupation" name="guardianOccupation" />
          <label for="gEducAttainment">Guardian's Educational Attainment:
          </label>
          <input type="text" id="gEducAttainment" name="gEducAttainment" />
        </div>
      </div>
      <div class="formLayout">
        <div class="labelInput">
          <label for="sizeFamily">Size of the Family : </label>
          <input type="number" id="sizeFamily" name="sizeFamily" />
        </div>
        <div class="labelInput">
          <label for="familyIncome">Total Annual Gross Income (Parents/Guardian) :
          </label>
          <input type="text" id="familyIncome" name="familyIncome" />
        </div>
      </div>
    </div>
    <div class="btnDiv">
      <input type="button" onclick="goToTerms()" value="Back" />
      <input type="submit" value="Submit" />
    </div>
  </form>
</body>

</html>