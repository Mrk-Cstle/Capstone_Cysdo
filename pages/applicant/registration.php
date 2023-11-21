<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="script/forms.js"></script>
  <title>Application</title>
</head>

<style>
  * {
    margin: 0px;
    padding: 0px;
  }

  h1 {
    text-align: center;
    margin-bottom: 40px;
  }

  h2 {
    margin: 10px 0px;
  }

  .btnDiv {
    margin-top: 10px;
  }

  .alignment {
    text-align: center;
  }

  .form-section {
    margin: 30px 0;
    padding-bottom: 5px;
    border-bottom: 1px solid #000000;
  }
</style>

<body>
  <form method="POST" action="registrationDb.php" enctype="multipart/form-data">
    <div class="container mt-4">
      <h1>APPLICATION FORM</h1>
      <h2 class="form-section bold font">Personal Information</h2>

      <div class="row">
        <div class="col-md-4 col-sm-5">
          <div class="form-group">
            <label class="control-label bold font-xs">Last Name <strong class="text-danger">*</strong></label>
            <input type="text" class="form-control" name="lastName" id="lastName" required>
          </div>
        </div>
        <div class="col-md-4 col-sm-5">
          <div class="form-group">
            <label class="control-label bold font-xs">First Name <strong class="text-danger">*</strong></label>
            <input type="text" class="form-control" name="firstName" id="firstName" required>
          </div>
        </div>
        <div class="col-md-4 col-sm-5">
          <div class="form-group">
            <label class="control-label bold font-xs">Middle Name</label>
            <input type="text" class="form-control" name="middleName" id="middleName">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2 col-sm-3">
          <div class="form-group">
            <label class="control-label bold font-xs">Gender <strong class="text-danger">*</strong></label>
            <select class="form-control" name="gender" id="gender" required>
              <option value="blank">-</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
        </div>
        <div class="col-md-3 col-sm-4">
          <div class="form-group">
            <label class="control-label bold font-xs">Civil Status <strong class="text-danger">*</strong></label>
            <select class="form-control" name="civilStatus" id="civilStatus" required>
              <option value="blank">-</option>
              <option value="single">Single</option>
              <option value="married">Married</option>
            </select>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label class="control-label bold font-xs">Birth Date <strong class="text-danger">*</strong></label>
            <div class="input-group">
              <input type="date" class="form-control" name="birthDate" id="birthDate" required>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-3">
          <div class="form-group">
            <label class="control-label bold font-xs">Registered Voter? <strong class="text-danger">*</strong></label>
            <select class="form-control" name="registeredVoter" id="registeredVoter" required>
              <option value="blank">-</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <div class="form-group">
            <label class="control-label bold font-xs">Place of Birth <strong class="text-danger">*</strong></label>
            <input type="text" class="form-control" name="birthPlace" id="birthPlace" required>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="form-group">
            <label class="control-label bold font-xs">Citizenship <strong class="text-danger">*</strong></label>
            <select class="form-control" name="citizenship" id="citizenship" required>
              <option value="-">-</option>
              <option value="American-">American</option>
              <option value="Arabic-">Arabic</option>
              <option value="Australian-">Australian</option>
              <option value="Belgian-">Belgian</option>
              <option value="Brazilian-">Brazilian</option>
              <option value="British-">British</option>
              <option value="Burmese-">Burmese</option>
              <option value="Canadian-">Canadian</option>
              <option value="Chinese-">Chinese</option>
              <option value="Dutch-">Dutch</option>
              <option value="Dutch-">Dutch</option>
              <option value="Egyptian-">Egyptian</option>
              <option value="Filipino-">Filipino</option>
              <option value="Filipino-Chinese">Filipino-Chinese</option>
              <option value="French-">French</option>
              <option value="German-">German</option>
              <option value="Greek-">Greek</option>
              <option value="Indian-">Indian</option>
              <option value="Indonesian-">Indonesian</option>
              <option value="Iranian-">Iranian</option>
              <option value="Iraqui-">Iraqui</option>
              <option value="Irish-">Irish</option>
              <option value="Israeli-">Israeli</option>
              <option value="Italian-">Italian</option>
              <option value="Japanese-">Japanese</option>
              <option value="Korean-">Korean</option>
              <option value="Mexican-">Mexican</option>
              <option value="Nigerian-">Nigerian</option>
              <option value="Polish-">Polish</option>
              <option value="Russian-">Russian</option>
              <option value="Singaporean-">Singaporean</option>
              <option value="Spanish-">Spanish</option>
              <option value="Sudanese-">Sudanese</option>
              <option value="Swiss-">Swiss</option>
              <option value="Taiwanese-">Taiwanese</option>
              <option value="Thai-">Thai</option>
              <option value="Turkish-">Turkish</option>

            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <div class="form-group">
            <label class="control-label bold font-xs">House No./Block/Lot <strong class="text-danger">*</strong></label>
            <input type="text" class="form-control" name="addressNum" id="addressNum" required>
          </div>
        </div>

        <div class="col-md-4 col-sm-5">
          <div class="form-group">
            <label class="control-label bold font-xs">Street/Phase/Section <strong class="text-danger">*</strong></label>
            <input type="text" class="form-control" name="addressStreet" id="addressStreet" required>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label class="control-label bold font-xs">Barangay <strong class="text-danger">*</strong></label>
            <select class="form-control" name="addressBarangay" id="addressBarangay" required>
              <option value="-">-</option>
              <option value="Assumption">Assumption</option>
              <option value="Bagong Buhay I">Bagong Buhay I</option>
              <option value="Bagong Buhay II">Bagong Buhay II</option>
              <option value="Bagong Buhay III">Bagong Buhay III</option>
              <option value="Citrus">Citrus</option>
              <option value="Ciudad Real">Ciudad Real</option>
              <option value="Dulong Bayan">Dulong Bayan</option>
              <option value="Fatima I">Fatima I</option>
              <option value="Fatima II">Fatima II</option>
              <option value="Fatima III">Fatima III</option>
              <option value="Fatima IV">Fatima IV</option>
              <option value="Fatima V">Fatima V</option>
              <option value="F. Homes Guijo">F. Homes Guijo</option>
              <option value="F. Homes Mulawin">F. Homes Mulawin</option>
              <option value="F. Homes Narra">F. Homes Narra</option>
              <option value="F. Homes Yakal">F. Homes Yakal</option>
              <option value="Gaya-Gaya">Gaya-Gaya</option>
              <option value="Graceville">Graceville</option>
              <option value="Gumaoc Central">Gumaoc Central</option>
              <option value="Gumaoc East">Gumaoc East</option>
              <option value="Gumaoc West">Gumaoc West</option>
              <option value="Kaybanban">Kaybanban</option>
              <option value="Kaypian">Kaypian</option>
              <option value="Lawang Pari">Lawang Pari</option>
              <option value="Maharlika">Maharlika</option>
              <option value="Minuyan I">Minuyan I</option>
              <option value="Minuyan II">Minuyan II</option>
              <option value="Minuyan III">Minuyan III</option>
              <option value="Minuyan IV">Minuyan IV</option>
              <option value="Minuyan Proper">Minuyan Proper</option>
              <option value="Minuyan V">Minuyan V</option>
              <option value="Muzon">Muzon</option>
              <option value="Paradise III">Paradise III</option>
              <option value="Poblacion">Poblacion</option>
              <option value="Poblacion I">Poblacion I</option>
              <option value="San Isidro">San Isidro</option>
              <option value="San Manuel">San Manuel</option>
              <option value="San Martin de Porres">San Martin de Porres</option>
              <option value="San Martin I">San Martin I</option>
              <option value="San Martin II">San Martin II</option>
              <option value="San Martin III">San Martin III</option>
              <option value="San Martin IV">San Martin IV</option>
              <option value="San Pedro">San Pedro</option>
              <option value="San Rafael I">San Rafael I</option>
              <option value="San Rafael II">San Rafael II</option>
              <option value="San Rafael III">San Rafael III</option>
              <option value="San Rafael IV">San Rafael IV</option>
              <option value="San Rafael V">San Rafael V</option>
              <option value="San Roque">San Roque</option>
              <option value="Santa Cruz">Santa Cruz</option>
              <option value="Santa Cruz II">Santa Cruz II</option>
              <option value="Santa Cruz III">Santa Cruz III</option>
              <option value="Santa Cruz IV">Santa Cruz IV</option>
              <option value="Santa Cruz V">Santa Cruz V</option>
              <option value="Santo Cristo">Santo Cristo</option>
              <option value="Santo Niño">Santo Niño</option>
              <option value="Santo Niño II">Santo Niño II</option>
              <option value="Sapang Palay">Sapang Palay</option>
              <option value="Tungkong Mangga">Tungkong Mangga</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <label class="control-label bold font-xs">Contact Number <strong class="text-danger">*</strong></label>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">+63</span>
            <input type="number" class="noscroll form-control" placeholder="Enter Number" aria-label="Username" aria-describedby="basic-addon1" name="contactNumber1" id="contactNumber1" required>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <label class="control-label bold font-xs">Email <strong class="text-danger">*</strong></label>
          <div class="input-group mb-3">

            <input type="email" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="contactNumber2" id="contactNumber2" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <div class="form-group">
            <label class="control-label bold font-xs">Upload 2x2 Picture (Jpeg/Jpg): <strong class="text-danger">*</strong></label>
            <input type="file" class="form-control" id="2x2Pic" name="2x2Pic" accept="image/jpeg" required />
          </div>
        </div>

      </div>
      <!-- EDUCTIONAL BACKGROUND PART -->

      <h2 class="form-section bold font">Educational Background</h2>
      <div class="row">
        <div class="col-md-5 col-sm-6">
          <div class="form-group">
            <label class="control-label bold font-xs">School Name (Current School) <strong class="text-danger">*</strong></label>
            <input type="text" class="form-control" name="schoolName" id="schoolName" required>
          </div>
        </div>
        <div class="col-md-4 col-sm-5">
          <div class="form-group">
            <label class="control-label bold font-xs">School Address <strong class="text-danger">*</strong></label>
            <input type="text" class="form-control" name="schoolAddress" id="schoolAddress" required>
          </div>
        </div>
        <div class="col-md-3 col-sm-4">
          <div class="form-group">
            <label class="control-label bold font-xs">School Type <strong class="text-danger">*</strong></label>
            <select class="form-control" name="schoolType" id="schoolType" required>
              <option value="-">-</option>
              <option value="Public">Public</option>
              <option value="Private">Private</option>
            </select>
          </div>
        </div>
        <div class="col-md-4 col-sm-5">
          <div class="form-group">
            <label class="control-label bold font-xs">Course/Strand <strong class="text-danger">*</strong></label>
            <input type="text" class="form-control" name="course" id="course" required>
          </div>
        </div>
        <div class="col-md-3 col-sm-4">
          <div class="form-group">
            <label class="control-label bold font-xs">Current Year Level <strong class="text-danger">*</strong></label>
            <select class="form-control" name="currentLevel" id="currentLevel" required>
              <option value="-">-</option>
              <option value="ALS Graduate">ALS Graduate <strong class="text-danger">*</strong></option>
              <option value="Grade 12">Grade 12</option>
              <option value="High School Graduat">High School Graduate</option>
              <option value="1st Year College">1st Year College</option>
              <option value="2nd Year College">2nd Year College</option>
              <option value="3rd Year College">3rd Year College</option>
            </select>
          </div>
        </div>
      </div>

      <!-- Family Background -->

      <h2 class="form-section bold font">Family Background</h2>
      <h4 class="form-section bold font">Father</h4>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3 col-sm-4">
              <div class="form-group">
                <label class="control-label bold font-xs">Father Name</label>
                <input type="text" class="form-control" name="fatherName" id="fatherName">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="control-label bold font-xs">Full Address</label>
                <input type="text" class="form-control" name="fatherAddress" id="fatherAddress">
              </div>
            </div>


            <div class="col-md-4 col-sm-4">
              <label class="control-label bold font-xs">Contact Number</label>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">+63</span>
                <input type="number" class="noscroll form-control" placeholder="Enter Number" aria-label="Username" aria-describedby="basic-addon1" name="fatherNumber" id="fatherNumber">
              </div>
            </div>
            <div class="col-md-3 col-sm-4">
              <div class="form-group">
                <label class="control-label bold font-xs">Occupation</label>
                <input type="text" class="form-control" name="fatherOccupation" id="fatherOccupation">
              </div>
            </div>
            <div class="col-md-3 col-sm-4">
              <div class="form-group">
                <label class="control-label bold font-xs">Educational Attainment</label>
                <input type="text" class="form-control" name="fEducAttainment" id="fEducAttainment">
              </div>
            </div>
            <div class="col-md-2 col-sm-3">
              <div class="form-group">
                <label class="control-label bold font-xs">Father Status</label>
                <select class="form-control" name="father" id="father">
                  <option value="-">-</option>
                  <option value="Living">Living</option>
                  <option value="Deceased">Deceased</option>
                </select>
              </div>
            </div>
          </div>
          <h4 class="form-section bold font">Mother</h4>
          <div class="row">
            <div class="col-md-3 col-sm-4">
              <div class="form-group">
                <label class="control-label bold font-xs"> Mother Name</label>
                <input type="text" class="form-control" name="motherName" id="motherName">
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label class="control-label bold font-xs">Full Address</label>
                <input type="text" class="form-control" name="motherAddress" id="motherAddress">
              </div>
            </div>

            <div class="col-md-4 col-sm-4">
              <label class="control-label bold font-xs">Contact Number</label>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">+63</span>
                <input type="number" class="noscroll form-control" placeholder="Enter Number" aria-label="Username" aria-describedby="basic-addon1" name="motherNumber" id="motherNumber">
              </div>
            </div>
            <div class="col-md-3 col-sm-4">
              <div class="form-group">
                <label class="control-label bold font-xs">Occupation</label>
                <input type="text" class="form-control" name="motherOccupation" id="motherOccupation">
              </div>
            </div>
            <div class="col-md-3 col-sm-4">
              <div class="form-group">
                <label class="control-label bold font-xs">Educational Attainment</label>
                <input type="text" class="form-control" name="mEducAttainment" id="mEducAttainment">
              </div>
            </div>
            <div class="col-md-2 col-sm-3">
              <div class="form-group">
                <label class="control-label bold font-xs">Mother Status</label>
                <select class="form-control" name="mother" id="mother">
                  <option value="-">-</option>
                  <option value="Living">Living</option>
                  <option value="Deceased">Deceased</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <h4 class="form-section bold font">Guardian (if not living with parent/s)</h4>
        <div class="row">
          <div class="col-md-3 col-sm-4">
            <div class="form-group">
              <label class="control-label bold font-xs">Guardian Name</label>
              <input type="text" class="form-control" name="guardianName" id="guardianName">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label class="control-label bold font-xs">Full Address</label>
              <input type="text" class="form-control" name="guardianAddress" id="guardianAddress">
            </div>
          </div>



          <div class="col-md-4 col-sm-4">
              <label class="control-label bold font-xs">Contact Number</label>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">+63</span>
                <input type="number" class="noscroll form-control" placeholder="Enter Number" aria-label="Username" aria-describedby="basic-addon1" name="guardianNumber" id="guardianNumber">
              </div>
            </div>
          <div class="col-md-3 col-sm-4">
            <div class="form-group">
              <label class="control-label bold font-xs">Occupation</label>
              <input type="text" class="form-control" name="guardianOccupation" id="guardianOccupation">
            </div>
          </div>
          <div class="col-md-3 col-sm-4">
            <div class="form-group">
              <label class="control-label bold font-xs">Educational Attainment</label>
              <input type="text" class="form-control" name="gEducAttainment" id="gEducAttainment">
            </div>
          </div>
          <h4 class="form-section bold font">Income</h4>
          <div class="col-md-4 col-sm-5">
            <div class="form-group">
              <label class="control-label bold font-xs">Total Parent/s or Guardian/s Annual Gross Income <strong class="text-danger">*</strong></label>
              <input type="text" class="form-control" name="familyIncome" id="familyIncome" required>
            </div>
          </div>
          <h4 class="form-section bold font">Family Size</h4>
          <div class="col-md-2 col-sm-3">
            <div class="form-group">
              <label class="control-label bold font-xs">Size of the Family (person)<strong class="text-danger">*</strong></label>
              <input type="text" class="form-control" name="sizeFamily" id="sizeFamily" required>
            </div>
          </div>
          <h4 class="form-section bold font">Name of Siblings (if any)</h4>
          <div class="col-md-3 col-sm-4">
            <div class="form-group">
              <label class="control-label bold font-xs">Full Name (All Siblings)</label>
              <input type="text" class="form-control" name="sibling1" id="sibling1">
            </div>
          </div>
          <div class="col-md-3 col-sm-4">
            <div class="form-group">
              <label class="control-label bold font-xs"></label>
              <input type="text" class="form-control" name="sibling2" id="sibling2">
            </div>
          </div>
          <div class="col-md-3 col-sm-4">
            <div class="form-group">
              <label class="control-label bold font-xs"></label>
              <input type="text" class="form-control" name="sibling3" id="sibling3">
            </div>
          </div>
          <div class="col-md-3 col-sm-4">
            <div class="form-group">
              <label class="control-label bold font-xs"></label>
              <input type="text" class="form-control" name="sibling4" id="sibling4">
            </div>
          </div>
          <div class="col-md-3 col-sm-4">
            <div class="form-group">
              <label class="control-label bold font-xs"></label>
              <input type="text" class="form-control" name="sibling5" id="sibling5">
            </div>
          </div>
          <div class="col-md-3 col-sm-4">
            <div class="form-group">
              <label class="control-label bold font-xs"></label>
              <input type="text" class="form-control" name="sibling6" id="sibling6">
            </div>
          </div>

        </div>
      </div>
    </div>
    <hr class="mb-3 mt-3">
    <div class="btnDiv">
      <input type="submit" class="btn btn-primary mb-5 float-end ms-3" value="Submit">
      <a type="button" href="instructionsTab.php" class="btn btn-secondary mb-5 float-end">Back</a>
    </div>
    </div>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script>
  document.addEventListener("wheel", function(event){
    if(document.activeElement.type === "number" &&
       document.activeElement.classList.contains("noscroll"))
    {
        document.activeElement.blur();
    }
});
</script>
</body>

</html>