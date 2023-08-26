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

 .btnDiv{
margin-top: 10px;
 }

 .alignment{
    text-align: center;
 }

  .form-section{
    margin: 30px 0;
    padding-bottom: 5px;
    border-bottom: 1px solid #000000;
 }

</style>

<body>
  <form method="POST" action="registrationDb.php">
  <div class="container mt-4">
    <h1>APPLICATION FORM</h1>
    <h2 class="form-section bold font">Personal Information</h2>

    <div class="row">
        <div class="col-md-4 col-sm-5">
          <div class="form-group">
              <label class="control-label bold font-xs">Last Name</label>
              <input type="text" class="form-control" name="l-name" id="L-name" required>
          </div>
        </div>
        <div class="col-md-4 col-sm-5">
          <div class="form-group">
            <label class="control-label bold font-xs">First Name</label>
            <input type="text" class="form-control" name="f-name" id="F-name" required>
          </div>
        </div>
        <div class="col-md-4 col-sm-5">
          <div class="form-group">
            <label class="control-label bold font-xs">Middle Name</label>
            <input type="text" class="form-control" name="m-name" id="M-name" required>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 col-sm-3">
          <div class="form-group">
              <label class="control-label bold font-xs">Gender</label>
              <select class="form-control" name="gender" id="G-ender" required>
                <option value="blank">-</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
          </div>
        </div>
        <div class="col-md-3 col-sm-4">
          <div class="form-group">
              <label class="control-label bold font-xs">Civil Status</label>
              <select class="form-control" name="c-status" id="C-status" required>
                <option value="blank">-</option>
                <option value="single">Single</option>
                <option value="married">Married</option>
              </select>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
              <label class="control-label bold font-xs">Birth Date</label>
              <div class="input-group">
                <input type="date" class="form-control" name="b-date" id="b-date" required>
              </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-3">
          <div class="form-group">
              <label class="control-label bold font-xs">Registered Voter?</label>
              <select class="form-control" name="r-voter" id="R-voter" required>
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
          <label class="control-label bold font-xs">Place of Birth</label>
          <input type="text" class="form-control" name="place-birth" id="place-birth" required>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="form-group">
          <label class="control-label bold font-xs">Citizenship</label>
          <select class="form-control" name="citizenship" id="citizenship" required>
          <option value="-">-</option>
            <option value="mrWV0mBQ2V4-">American</option>
            <option value="n4SV0mBQ2V4-">Arabic</option>
            <option value="nYGV0mBQ2V4-">Australian</option>
            <option value="nYWV0mBQ2V4-">Belgian</option>
            <option value="nYyV0mBQ2V4-">Brazilian</option>
            <option value="n4eV0mBQ2V4-">Brazilian</option>
            <option value="noKV0mBQ2V4-">British</option>
            <option value="m7WV0mBQ2V4-">Burmese</option>
            <option value="lLWV0mBQ2V4-">Canadian</option>
            <option value="n7WV0mBQ2V4-">Chinese</option>
            <option value="nYeV0mBQ2V4-">Dutch</option>
            <option value="nYKV0mBQ2V4-">Dutch</option>
            <option value="noaV0mBQ2V4-">Egyptian</option>
            <option value="nbWV0mBQ2V4-">Filipino</option>
            <option value="n4OV0mBQ2V4-">Filipino-Chinese</option>
            <option value="nYSV0mBQ2V4-">French</option>
            <option value="nYCV0mBQ2V4-">Gerrman</option>
            <option value="n4aV0mBQ2V4-">Greek</option>
            <option value="noSV0mBQ2V4-">Indian</option>
            <option value="n42V0mBQ2V4-">Indonesian</option>
            <option value="noGV0mBQ2V4-">Iranian</option>
            <option value="noCV0mBQ2V4-">Iraqui</option>
            <option value="lbWV0mBQ2V4-">Irish</option>
            <option value="noeV0mBQ2V4-">Israeli</option>
            <option value="nYaV0mBQ2V4-">Italian</option>
            <option value="mbWV0mBQ2V4-">Japanese</option>
            <option value="nrWV0mBQ2V4-">Korean</option>
            <option value="n4WV0mBQ2V4-">Mexican</option>
            <option value="n4CV0mBQ2V4-">Nigerian</option>
            <option value="noyV0mBQ2V4-">Polish</option>
            <option value="nY2V0mBQ2V4-">Russian</option>
            <option value="n4GV0mBQ2V4-">Singaporean</option>
            <option value="noOV0mBQ2V4-">Spanish</option>
            <option value="n4KV0mBQ2V4-">Sudanese</option>
            <option value="nYOV0mBQ2V4-">Swiss</option>
            <option value="mLWV0mBQ2V4-">Taiwanese</option>
            <option value="noWV0mBQ2V4-">Thai</option>
            <option value="no2V0mBQ2V4-">Turkish</option>

          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2">
        <div class="form-group">
          <label class="control-label bold font-xs">House No.</label>
            <input type="number" class="form-control" name="h-num" id="H-num"required>
        </div>
      </div>
      <div class="col-md-3 col-sm-3">
        <div class="form-group">
          <label class="control-label bold font-xs">Block/Lot</label>
            <input type="text" class="form-control" name="block-lot" id="Blck-lot"required>
        </div>
      </div>
      <div class="col-md-4 col-sm-5">
        <div class="form-group">
          <label class="control-label bold font-xs">Street/Phase/Section</label>
            <input type="text" class="form-control" name="street" id="Street"required>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label class="control-label bold font-xs">Barangay</label>
            <select class="form-control" name="brgy" id="Brgy" required>
              <option value="-">-</option>
              <option value="Adia">Adia</option>
              <option value="Ag-Agrao">Ag-Agrao</option>
              <option value="Ampuagan">Ampuagan</option>
              <option value="Baballasioan">Baballasioan</option>
              <option value="Bagbaguin">Bagbaguin</option>
              <option value="Bagong Pook">Bagong Pook</option>
              <option value="Bagumbayan">Bagumbayan</option>
              <option value="Bal-Loy">Bal-Loy</option>
              <option value="Balasing">Balasing</option>
              <option value="Baliw Daya">Baliw Daya</option>
              <option value="Baliw Laud">Baliw Laud</option>
              <option value="Bangad">Bangad</option>
              <option value="Bantog">Bantog</option>
              <option value="Barangay I">Barangay I</option>
              <option value="Barangay II">Barangay II</option>
              <option value="Barangay III">Barangay III</option>
              <option value="Barangay IV">Barangay IV</option>
              <option value="Basiawan">Basiawan</option>
              <option value="Bia-O">Bia-O</option>
              <option value="Bonga">Bonga</option>
              <option value="Bubukal">Bubukal</option>
              <option value="Buca">Buca</option>
              <option value="Buenavista">Buenavista</option>
              <option value="Bulac">Bulac</option>
              <option value="Butir">Butir</option>
              <option value="Cabaroan">Cabaroan</option>
              <option value="Caboluan">Caboluan</option>
              <option value="Cabooan">Cabooan</option>
              <option value="Cadaatan">Cadaatan</option>
              <option value="Cal-Litang">Cal-Litang</option>
              <option value="Calamagui East">Calamagui East</option>
              <option value="Calamagui North">Calamagui North</option>
              <option value="Calamagui West">Calamagui West</option>
              <option value="Calangay">Calangay</option>
              <option value="Camangyanan">Camangyanan</option>
              <option value="Cambuja">Cambuja</option>
              <option value="Capandanan">Capandanan</option>
              <option value="Catmon">Catmon</option>
              <option value="Cauplasan">Cauplasan</option>
              <option value="Cay Pombo">Cay Pombo</option>
              <option value="Caysio">Caysio</option>
              <option value="Concepcion Norte">Concepcion Norte</option>
              <option value="Concepcion Sur">Concepcion Sur</option>
              <option value="Coralan">Coralan</option>
              <option value="Cueva">Cueva</option>
              <option value="Dalayap">Dalayap</option>
              <option value="Danuman East">Danuman East</option>
              <option value="Danuman West">Danuman West</option>
              <option value="Datu Daligasao">Datu Daligasao</option>
              <option value="Datu Intan">Datu Intan</option>
              <option value="Divisoria">Divisoria</option>
              <option value="Dunglayan">Dunglayan</option>
              <option value="Gusing">Gusing</option>
              <option value="Guyong">Guyong</option>
              <option value="Inayapan">Inayapan</option>
              <option value="Jose Laurel, Sr.">Jose Laurel, Sr.</option>
              <option value="Jose Rizal">Jose Rizal</option>
              <option value="Kayhakat">Kayhakat</option>
              <option value="Kidadan">Kidadan</option>
              <option value="Kinilidan">Kinilidan</option>
              <option value="Kisulad">Kisulad</option>
              <option value="Lalakhan">Lalakhan</option>
              <option value="Langaoan">Langaoan</option>
              <option value="Laslasong Norte">Laslasong Norte</option>
              <option value="Laslasong Sur">Laslasong Sur</option>
              <option value="Laslasong West">Laslasong West</option>
              <option value="Lesseb">Lesseb</option>
              <option value="Libsong">Libsong</option>
              <option value="Lingaling">Lingaling</option>
              <option value="Lingsat">Lingsat</option>
              <option value="Lubong">Lubong</option>
              <option value="Macasipac">Macasipac</option>
              <option value="Mag-Asawang Sapa">Mag-Asawang Sapa</option>
              <option value="Mahabang Parang">Mahabang Parang</option>
              <option value="Malalag Tubig">Malalag Tubig</option>
              <option value="Mamacao">Mamacao</option>
              <option value="Manggahan">Manggahan</option>
              <option value="Masinao">Masinao</option>
              <option value="Mataling-Ting">Mataling-Ting</option>
              <option value="Maynganay Norte">Maynganay Norte</option>
              <option value="Maynganay Sur">Maynganay Sur</option>
              <option value="Mozzozzin North">Mozzozzin North</option>
              <option value="Mozzozzin Sur">Mozzozzin Sur</option>
              <option value="Naganacan">Naganacan</option>
              <option value="Nagsayaoan">Nagsayaoan</option>
              <option value="Nagtupacan">Nagtupacan</option>
              <option value="Nalvo">Nalvo</option>
              <option value="Namagbagan">Namagbagan</option>
              <option value="Ogpao">Ogpao</option>
              <option value="Pacang">Pacang</option>
              <option value="Paitan">Paitan</option>
              <option value="Pao-O">Pao-O</option>
              <option value="Parada">Parada</option>
              <option value="Parang Ng Buho">Parang Ng Buho</option>
              <option value="Paroyhog">Paroyhog</option>
              <option value="Pataquid">Pataquid</option>
              <option value="Penned">Penned</option>
              <option value="Pilar">Pilar</option>
              <option value="Poblacion">Poblacion</option>
              <option value="Poblacion 1">Poblacion 1</option>
              <option value="Poblacion 2">Poblacion 2</option>
              <option value="Poblacion 3">Poblacion 3</option>
              <option value="Poblacion East">Poblacion East</option>
              <option value="Poblacion Norte">Poblacion Norte</option>
              <option value="Poblacion Sur">Poblacion Sur</option>
              <option value="Poblacion West">Poblacion West</option>
              <option value="Pongpong">Pongpong</option>
              <option value="Pugot">Pugot</option>
              <option value="Pulong Buhangin">Pulong Buhangin</option>
              <option value="Quinagabian">Quinagabian</option>
              <option value="Samon">Samon</option>
              <option value="San Agustin">San Agustin</option>
              <option value="San Alejandro">San Alejandro</option>
              <option value="San Antonio">San Antonio</option>
              <option value="San Gabriel">San Gabriel</option>
              <option value="San Isidro">San Isidro</option>
              <option value="San Isidro East">San Isidro East</option>
              <option value="San Isidro West">San Isidro West</option>
              <option value="San Jose Patag">San Jose Patag</option>
              <option value="San Juan">San Juan</option>
              <option value="San Mariano">San Mariano</option>
              <option value="San Pablo">San Pablo</option>
              <option value="San Patricio">San Patricio</option>
              <option value="San Pedro">San Pedro</option>
              <option value="San Rafael East">San Rafael East</option>
              <option value="San Rafael West">San Rafael West</option>
              <option value="San Roque">San Roque</option>
              <option value="San Vicente">San Vicente</option>
              <option value="Santa Clara">Santa Clara</option>
              <option value="Santa Cruz">Santa Cruz</option>
              <option value="Santa Rosa">Santa Rosa</option>
              <option value="Santiago">Santiago</option>
              <option value="Santo Nino">Santo Nino</option>
              <option value="Santo Rosario">Santo Rosario</option>
              <option value="Silag">Silag</option>
              <option value="Silangan">Silangan</option>
              <option value="Sumagui">Sumagui</option>
              <option value="Suso">Suso</option>
              <option value="Tabing Bakod">Tabing Bakod</option>
              <option value="Talangka">Talangka</option>
              <option value="Tangaoan">Tangaoan</option>
              <option value="Tanglad">Tanglad</option>
              <option value="Tinaan">Tinaan</option>
              <option value="Tumana">Tumana</option>
              <option value="Tungkod">Tungkod</option>
              <option value="Villabuena">Villabuena</option>
            </select>
        </div>
      </div>
    </div>
    <div class="row">                            
      <div class="col-md-4 col-sm-4">
        <div class="form-group">
          <label class="control-label bold font-xs">Contact Number 1</label>
            <input type="number" class="form-control" name="contactNum" id="contact-Num" required>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="form-group">
          <label class="control-label bold font-xs">Contact Number 2</label>
            <input type="number" class="form-control" name="contactNum2" id="contact-Num2">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-4">
        <div class="form-group">
        <label class="control-label bold font-xs">Upload 2x2 Picture (Jpeg/Jpg): </label>
          <input type="file" class="form-control" id="2x2Pic" name="2x2Pic" accept="image/jpeg" required />
        </div>
      </div>
        <div class="col-md-4 col-sm-4">
          <div class="form-group">
            <label class="control-label bold font-xs">Upload Signature Picture (Png): </label>
            <input type="file" class="form-control" id="signPic" name="signPic" accept="image/png" required />
          </div>
        </div>
    </div>
    <!-- EDUCTIONAL BACKGROUND PART -->

    <h2 class="form-section bold font">Educational Background</h2>
    <div class="row">
      <div class="col-md-5 col-sm-6">
        <div class="form-group">
          <label class="control-label bold font-xs">School Name (Current School)</label>
          <input type="text" class="form-control" name="school-name" id="school-name" required>
        </div>
      </div>
      <div class="col-md-4 col-sm-5">
        <div class="form-group">
          <label class="control-label bold font-xs">School Address</label>
          <input type="text" class="form-control" name="school-name" id="school-name" required>
        </div>
      </div>
      <div class="col-md-3 col-sm-4">
        <div class="form-group">
          <label class="control-label bold font-xs">School Type</label>
          <select class="form-control" name="school-type" id="school-type" required>
            <option value="-">-</option>
            <option value="Public">Public</option>
            <option value="Private">Private</option>
          </select>
        </div>
      </div>
        <div class="col-md-4 col-sm-5">
          <div class="form-group">
            <label class="control-label bold font-xs">Course/Strand</label>
            <input type="text" class="form-control" name="school-name" id="school-name" required>
          </div>
        </div>
        <div class="col-md-3 col-sm-4">
          <div class="form-group">
            <label class="control-label bold font-xs">Current Year Level</label>
            <select class="form-control" name="school-type" id="school-type" required>
              <option value="-">-</option>
              <option value="ALS Graduate">ALS Graduate</option>
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
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-2 col-sm-3">
            <div class="form-group">
              <label class="control-label bold font-xs">Father Status</label>
              <select class="form-control" name="f-status" id="f-status" required>
                <option value="-">-</option>
                <option value="Living">Living</option>
                <option value="Deceased">Deceased</option>
              </select>
            </div>
          </div>
          <div class="col-md-3 col-sm-4">
            <div class="form-group">
              <label class="control-label bold font-xs">Last Name</label>
              <input type="text" class="form-control" name="fl-name" id="fl-name" required>
            </div>
          </div>
          <div class="col-md-3 col-sm-4">
            <div class="form-group">
              <label class="control-label bold font-xs">First Name</label>
              <input type="text" class="form-control" name="ff-name" id="ff-name" required>
            </div>
          </div>
          <div class="col-md-3 col-sm-4">
            <div class="form-group">
              <label class="control-label bold font-xs">Middle Name</label>
              <input type="text" class="form-control" name="fm-name" id="fm-name" required>
            </div>
          </div>
          <h4 class="form-section bold font">Address</h4>
          <div class="col-md-2">
            <div class="form-group">
              <label class="control-label bold font-xs">House No.</label>
              <input type="number" class="form-control" name="fadd-ress" id="fadd-ress" required>
            </div>
          </div>
          <div class="col-md-4 col-sm-5">
            <div class="form-group">
              <label class="control-label bold font-xs">Block/Lot</label>
              <input type="text" class="form-control" name="fblock-lot" id="fblock-lot" required>
            </div>
          </div>
          <div class="col-md-4 col-sm-5">
            <div class="form-group">
              <label class="control-label bold font-xs">Street/Phase/Section</label>
              <input type="text" class="form-control" name="fstreet" id="fstreet" required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label class="control-label bold font-xs">Barangay</label>
              <select class="form-control" name="faddr-brgy" id="faddr-brgy" required>
                                                        <option value="-">-</option>
                                                                                                                <option value="Adia">Adia</option>
                                                                                                                <option value="Ag-Agrao">Ag-Agrao</option>
                                                                                                                <option value="Ampuagan">Ampuagan</option>
                                                                                                                <option value="Baballasioan">Baballasioan</option>
                                                                                                                <option value="Bagbaguin">Bagbaguin</option>
                                                                                                                <option value="Bagong Pook">Bagong Pook</option>
                                                                                                                <option value="Bagumbayan">Bagumbayan</option>
                                                                                                                <option value="Bal-Loy">Bal-Loy</option>
                                                                                                                <option value="Balasing">Balasing</option>
                                                                                                                <option value="Baliw Daya">Baliw Daya</option>
                                                                                                                <option value="Baliw Laud">Baliw Laud</option>
                                                                                                                <option value="Bangad">Bangad</option>
                                                                                                                <option value="Bantog">Bantog</option>
                                                                                                                <option value="Barangay I">Barangay I</option>
                                                                                                                <option value="Barangay II">Barangay II</option>
                                                                                                                <option value="Barangay III">Barangay III</option>
                                                                                                                <option value="Barangay IV">Barangay IV</option>
                                                                                                                <option value="Basiawan">Basiawan</option>
                                                                                                                <option value="Bia-O">Bia-O</option>
                                                                                                                <option value="Bonga">Bonga</option>
                                                                                                                <option value="Bubukal">Bubukal</option>
                                                                                                                <option value="Buca">Buca</option>
                                                                                                                <option value="Buenavista">Buenavista</option>
                                                                                                                <option value="Bulac">Bulac</option>
                                                                                                                <option value="Butir">Butir</option>
                                                                                                                <option value="Cabaroan">Cabaroan</option>
                                                                                                                <option value="Caboluan">Caboluan</option>
                                                                                                                <option value="Cabooan">Cabooan</option>
                                                                                                                <option value="Cadaatan">Cadaatan</option>
                                                                                                                <option value="Cal-Litang">Cal-Litang</option>
                                                                                                                <option value="Calamagui East">Calamagui East</option>
                                                                                                                <option value="Calamagui North">Calamagui North</option>
                                                                                                                <option value="Calamagui West">Calamagui West</option>
                                                                                                                <option value="Calangay">Calangay</option>
                                                                                                                <option value="Camangyanan">Camangyanan</option>
                                                                                                                <option value="Cambuja">Cambuja</option>
                                                                                                                <option value="Capandanan">Capandanan</option>
                                                                                                                <option value="Catmon">Catmon</option>
                                                                                                                <option value="Cauplasan">Cauplasan</option>
                                                                                                                <option value="Cay Pombo">Cay Pombo</option>
                                                                                                                <option value="Caysio">Caysio</option>
                                                                                                                <option value="Concepcion Norte">Concepcion Norte</option>
                                                                                                                <option value="Concepcion Sur">Concepcion Sur</option>
                                                                                                                <option value="Coralan">Coralan</option>
                                                                                                                <option value="Cueva">Cueva</option>
                                                                                                                <option value="Dalayap">Dalayap</option>
                                                                                                                <option value="Danuman East">Danuman East</option>
                                                                                                                <option value="Danuman West">Danuman West</option>
                                                                                                                <option value="Datu Daligasao">Datu Daligasao</option>
                                                                                                                <option value="Datu Intan">Datu Intan</option>
                                                                                                                <option value="Divisoria">Divisoria</option>
                                                                                                                <option value="Dunglayan">Dunglayan</option>
                                                                                                                <option value="Gusing">Gusing</option>
                                                                                                                <option value="Guyong">Guyong</option>
                                                                                                                <option value="Inayapan">Inayapan</option>
                                                                                                                <option value="Jose Laurel, Sr.">Jose Laurel, Sr.</option>
                                                                                                                <option value="Jose Rizal">Jose Rizal</option>
                                                                                                                <option value="Kayhakat">Kayhakat</option>
                                                                                                                <option value="Kidadan">Kidadan</option>
                                                                                                                <option value="Kinilidan">Kinilidan</option>
                                                                                                                <option value="Kisulad">Kisulad</option>
                                                                                                                <option value="Lalakhan">Lalakhan</option>
                                                                                                                <option value="Langaoan">Langaoan</option>
                                                                                                                <option value="Laslasong Norte">Laslasong Norte</option>
                                                                                                                <option value="Laslasong Sur">Laslasong Sur</option>
                                                                                                                <option value="Laslasong West">Laslasong West</option>
                                                                                                                <option value="Lesseb">Lesseb</option>
                                                                                                                <option value="Libsong">Libsong</option>
                                                                                                                <option value="Lingaling">Lingaling</option>
                                                                                                                <option value="Lingsat">Lingsat</option>
                                                                                                                <option value="Lubong">Lubong</option>
                                                                                                                <option value="Macasipac">Macasipac</option>
                                                                                                                <option value="Mag-Asawang Sapa">Mag-Asawang Sapa</option>
                                                                                                                <option value="Mahabang Parang">Mahabang Parang</option>
                                                                                                                <option value="Malalag Tubig">Malalag Tubig</option>
                                                                                                                <option value="Mamacao">Mamacao</option>
                                                                                                                <option value="Manggahan">Manggahan</option>
                                                                                                                <option value="Masinao">Masinao</option>
                                                                                                                <option value="Mataling-Ting">Mataling-Ting</option>
                                                                                                                <option value="Maynganay Norte">Maynganay Norte</option>
                                                                                                                <option value="Maynganay Sur">Maynganay Sur</option>
                                                                                                                <option value="Mozzozzin North">Mozzozzin North</option>
                                                                                                                <option value="Mozzozzin Sur">Mozzozzin Sur</option>
                                                                                                                <option value="Naganacan">Naganacan</option>
                                                                                                                <option value="Nagsayaoan">Nagsayaoan</option>
                                                                                                                <option value="Nagtupacan">Nagtupacan</option>
                                                                                                                <option value="Nalvo">Nalvo</option>
                                                                                                                <option value="Namagbagan">Namagbagan</option>
                                                                                                                <option value="Ogpao">Ogpao</option>
                                                                                                                <option value="Pacang">Pacang</option>
                                                                                                                <option value="Paitan">Paitan</option>
                                                                                                                <option value="Pao-O">Pao-O</option>
                                                                                                                <option value="Parada">Parada</option>
                                                                                                                <option value="Parang Ng Buho">Parang Ng Buho</option>
                                                                                                                <option value="Paroyhog">Paroyhog</option>
                                                                                                                <option value="Pataquid">Pataquid</option>
                                                                                                                <option value="Penned">Penned</option>
                                                                                                                <option value="Pilar">Pilar</option>
                                                                                                                <option value="Poblacion">Poblacion</option>
                                                                                                                <option value="Poblacion 1">Poblacion 1</option>
                                                                                                                <option value="Poblacion 2">Poblacion 2</option>
                                                                                                                <option value="Poblacion 3">Poblacion 3</option>
                                                                                                                <option value="Poblacion East">Poblacion East</option>
                                                                                                                <option value="Poblacion Norte">Poblacion Norte</option>
                                                                                                                <option value="Poblacion Sur">Poblacion Sur</option>
                                                                                                                <option value="Poblacion West">Poblacion West</option>
                                                                                                                <option value="Pongpong">Pongpong</option>
                                                                                                                <option value="Pugot">Pugot</option>
                                                                                                                <option value="Pulong Buhangin">Pulong Buhangin</option>
                                                                                                                <option value="Quinagabian">Quinagabian</option>
                                                                                                                <option value="Samon">Samon</option>
                                                                                                                <option value="San Agustin">San Agustin</option>
                                                                                                                <option value="San Alejandro">San Alejandro</option>
                                                                                                                <option value="San Antonio">San Antonio</option>
                                                                                                                <option value="San Gabriel">San Gabriel</option>
                                                                                                                <option value="San Isidro">San Isidro</option>
                                                                                                                <option value="San Isidro East">San Isidro East</option>
                                                                                                                <option value="San Isidro West">San Isidro West</option>
                                                                                                                <option value="San Jose Patag">San Jose Patag</option>
                                                                                                                <option value="San Juan">San Juan</option>
                                                                                                                <option value="San Mariano">San Mariano</option>
                                                                                                                <option value="San Pablo">San Pablo</option>
                                                                                                                <option value="San Patricio">San Patricio</option>
                                                                                                                <option value="San Pedro">San Pedro</option>
                                                                                                                <option value="San Rafael East">San Rafael East</option>
                                                                                                                <option value="San Rafael West">San Rafael West</option>
                                                                                                                <option value="San Roque">San Roque</option>
                                                                                                                <option value="San Vicente">San Vicente</option>
                                                                                                                <option value="Santa Clara">Santa Clara</option>
                                                                                                                <option value="Santa Cruz">Santa Cruz</option>
                                                                                                                <option value="Santa Rosa">Santa Rosa</option>
                                                                                                                <option value="Santiago">Santiago</option>
                                                                                                                <option value="Santo Ni±o">Santo Ni±o</option>
                                                                                                                <option value="Santo Nino">Santo Nino</option>
                                                                                                                <option value="Santo Rosario">Santo Rosario</option>
                                                                                                                <option value="Silag">Silag</option>
                                                                                                                <option value="Silangan">Silangan</option>
                                                                                                                <option value="Sumagui">Sumagui</option>
                                                                                                                <option value="Suso">Suso</option>
                                                                                                                <option value="Tabing Bakod">Tabing Bakod</option>
                                                                                                                <option value="Talangka">Talangka</option>
                                                                                                                <option value="Tangaoan">Tangaoan</option>
                                                                                                                <option value="Tanglad">Tanglad</option>
                                                                                                                <option value="Tinaan">Tinaan</option>
                                                                                                                <option value="Tumana">Tumana</option>
                                                                                                                <option value="Tungkod">Tungkod</option>
                                                                                                                <option value="Villabuena">Villabuena</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label class="control-label bold font-xs">Place of Birth</label>
              <input type="text" class="form-control" name="fplace-birth" id="fplace-birth" required>
            </div>
          </div>
          <h4 class="form-section bold font">Other Information</h4>
          <div class="col-md-3 col-sm-4">
            <div class="form-group">
              <label class="control-label bold font-xs">Contact Number</label>
              <input type="number" class="form-control" name="contactNumf" id="contactNumf">
            </div>
          </div>
          <div class="col-md-3 col-sm-4">
            <div class="form-group">
              <label class="control-label bold font-xs">Occupation</label>
              <input type="text" class="form-control" name="f-occupation" id="f-occupation" required>
            </div>
          </div>
          <div class="col-md-3 col-sm-4">
            <div class="form-group">
              <label class="control-label bold font-xs">Educational Attainment</label>
              <input type="text" class="form-control" name="f-educ-attainment" id="f-educ-attainment" required> 
            </div>
          </div>
        </div>
        <h4 class="form-section bold font">Mother</h4>
        <div class="row">
          <div class="col-md-2 col-sm-3">
            <div class="form-group">
              <label class="control-label bold font-xs">Mother Status</label>
              <select class="form-control" name="m-status" id="m-status" required>
                <option value="-">-</option>
                <option value="Living">Living</option>
                <option value="Deceased">Deceased</option>
              </select>
            </div>
          </div>
          <div class="col-md-3 col-sm-4">
            <div class="form-group">
              <label class="control-label bold font-xs">Last Name</label>
              <input type="text" class="form-control" name="ml-name" id="ml-name" required>
            </div>
          </div>
          <div class="col-md-3 col-sm-4">
            <div class="form-group">
              <label class="control-label bold font-xs">First Name</label>
              <input type="text" class="form-control" name="mf-name" id="mf-name" required>
            </div>
          </div>
          <div class="col-md-3 col-sm-4">
            <div class="form-group">
              <label class="control-label bold font-xs">Middle Name</label>
              <input type="text" class="form-control" name="Mm-name" id="Mm-name" required>
            </div>
          </div>
          <h4 class="form-section bold font">Address</h4>
          <div class="col-md-2">
            <div class="form-group">
              <label class="control-label bold font-xs">House No.</label>
              <input type="number" class="form-control" name="madd-ress" id="madd-ress" required>
            </div>
          </div>
          <div class="col-md-4 col-sm-5">
            <div class="form-group">
              <label class="control-label bold font-xs">Block/Lot</label>
              <input type="text" class="form-control" name="mblock-lot" id="mblock-lot" required>
            </div>
          </div>
          <div class="col-md-4 col-sm-5">
            <div class="form-group">
              <label class="control-label bold font-xs">Street/Phase/Section</label>
              <input type="text" class="form-control" name="mstreet" id="mstreet" required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label class="control-label bold font-xs">Barangay</label>
              <select class="form-control" name="maddr-brgy" id="maddr-brgy" required>
                                                        <option value="-">-</option>
                                                                                                                <option value="Adia">Adia</option>
                                                                                                                <option value="Ag-Agrao">Ag-Agrao</option>
                                                                                                                <option value="Ampuagan">Ampuagan</option>
                                                                                                                <option value="Baballasioan">Baballasioan</option>
                                                                                                                <option value="Bagbaguin">Bagbaguin</option>
                                                                                                                <option value="Bagong Pook">Bagong Pook</option>
                                                                                                                <option value="Bagumbayan">Bagumbayan</option>
                                                                                                                <option value="Bal-Loy">Bal-Loy</option>
                                                                                                                <option value="Balasing">Balasing</option>
                                                                                                                <option value="Baliw Daya">Baliw Daya</option>
                                                                                                                <option value="Baliw Laud">Baliw Laud</option>
                                                                                                                <option value="Bangad">Bangad</option>
                                                                                                                <option value="Bantog">Bantog</option>
                                                                                                                <option value="Barangay I">Barangay I</option>
                                                                                                                <option value="Barangay II">Barangay II</option>
                                                                                                                <option value="Barangay III">Barangay III</option>
                                                                                                                <option value="Barangay IV">Barangay IV</option>
                                                                                                                <option value="Basiawan">Basiawan</option>
                                                                                                                <option value="Bia-O">Bia-O</option>
                                                                                                                <option value="Bonga">Bonga</option>
                                                                                                                <option value="Bubukal">Bubukal</option>
                                                                                                                <option value="Buca">Buca</option>
                                                                                                                <option value="Buenavista">Buenavista</option>
                                                                                                                <option value="Bulac">Bulac</option>
                                                                                                                <option value="Butir">Butir</option>
                                                                                                                <option value="Cabaroan">Cabaroan</option>
                                                                                                                <option value="Caboluan">Caboluan</option>
                                                                                                                <option value="Cabooan">Cabooan</option>
                                                                                                                <option value="Cadaatan">Cadaatan</option>
                                                                                                                <option value="Cal-Litang">Cal-Litang</option>
                                                                                                                <option value="Calamagui East">Calamagui East</option>
                                                                                                                <option value="Calamagui North">Calamagui North</option>
                                                                                                                <option value="Calamagui West">Calamagui West</option>
                                                                                                                <option value="Calangay">Calangay</option>
                                                                                                                <option value="Camangyanan">Camangyanan</option>
                                                                                                                <option value="Cambuja">Cambuja</option>
                                                                                                                <option value="Capandanan">Capandanan</option>
                                                                                                                <option value="Catmon">Catmon</option>
                                                                                                                <option value="Cauplasan">Cauplasan</option>
                                                                                                                <option value="Cay Pombo">Cay Pombo</option>
                                                                                                                <option value="Caysio">Caysio</option>
                                                                                                                <option value="Concepcion Norte">Concepcion Norte</option>
                                                                                                                <option value="Concepcion Sur">Concepcion Sur</option>
                                                                                                                <option value="Coralan">Coralan</option>
                                                                                                                <option value="Cueva">Cueva</option>
                                                                                                                <option value="Dalayap">Dalayap</option>
                                                                                                                <option value="Danuman East">Danuman East</option>
                                                                                                                <option value="Danuman West">Danuman West</option>
                                                                                                                <option value="Datu Daligasao">Datu Daligasao</option>
                                                                                                                <option value="Datu Intan">Datu Intan</option>
                                                                                                                <option value="Divisoria">Divisoria</option>
                                                                                                                <option value="Dunglayan">Dunglayan</option>
                                                                                                                <option value="Gusing">Gusing</option>
                                                                                                                <option value="Guyong">Guyong</option>
                                                                                                                <option value="Inayapan">Inayapan</option>
                                                                                                                <option value="Jose Laurel, Sr.">Jose Laurel, Sr.</option>
                                                                                                                <option value="Jose Rizal">Jose Rizal</option>
                                                                                                                <option value="Kayhakat">Kayhakat</option>
                                                                                                                <option value="Kidadan">Kidadan</option>
                                                                                                                <option value="Kinilidan">Kinilidan</option>
                                                                                                                <option value="Kisulad">Kisulad</option>
                                                                                                                <option value="Lalakhan">Lalakhan</option>
                                                                                                                <option value="Langaoan">Langaoan</option>
                                                                                                                <option value="Laslasong Norte">Laslasong Norte</option>
                                                                                                                <option value="Laslasong Sur">Laslasong Sur</option>
                                                                                                                <option value="Laslasong West">Laslasong West</option>
                                                                                                                <option value="Lesseb">Lesseb</option>
                                                                                                                <option value="Libsong">Libsong</option>
                                                                                                                <option value="Lingaling">Lingaling</option>
                                                                                                                <option value="Lingsat">Lingsat</option>
                                                                                                                <option value="Lubong">Lubong</option>
                                                                                                                <option value="Macasipac">Macasipac</option>
                                                                                                                <option value="Mag-Asawang Sapa">Mag-Asawang Sapa</option>
                                                                                                                <option value="Mahabang Parang">Mahabang Parang</option>
                                                                                                                <option value="Malalag Tubig">Malalag Tubig</option>
                                                                                                                <option value="Mamacao">Mamacao</option>
                                                                                                                <option value="Manggahan">Manggahan</option>
                                                                                                                <option value="Masinao">Masinao</option>
                                                                                                                <option value="Mataling-Ting">Mataling-Ting</option>
                                                                                                                <option value="Maynganay Norte">Maynganay Norte</option>
                                                                                                                <option value="Maynganay Sur">Maynganay Sur</option>
                                                                                                                <option value="Mozzozzin North">Mozzozzin North</option>
                                                                                                                <option value="Mozzozzin Sur">Mozzozzin Sur</option>
                                                                                                                <option value="Naganacan">Naganacan</option>
                                                                                                                <option value="Nagsayaoan">Nagsayaoan</option>
                                                                                                                <option value="Nagtupacan">Nagtupacan</option>
                                                                                                                <option value="Nalvo">Nalvo</option>
                                                                                                                <option value="Namagbagan">Namagbagan</option>
                                                                                                                <option value="Ogpao">Ogpao</option>
                                                                                                                <option value="Pacang">Pacang</option>
                                                                                                                <option value="Paitan">Paitan</option>
                                                                                                                <option value="Pao-O">Pao-O</option>
                                                                                                                <option value="Parada">Parada</option>
                                                                                                                <option value="Parang Ng Buho">Parang Ng Buho</option>
                                                                                                                <option value="Paroyhog">Paroyhog</option>
                                                                                                                <option value="Pataquid">Pataquid</option>
                                                                                                                <option value="Penned">Penned</option>
                                                                                                                <option value="Pilar">Pilar</option>
                                                                                                                <option value="Poblacion">Poblacion</option>
                                                                                                                <option value="Poblacion 1">Poblacion 1</option>
                                                                                                                <option value="Poblacion 2">Poblacion 2</option>
                                                                                                                <option value="Poblacion 3">Poblacion 3</option>
                                                                                                                <option value="Poblacion East">Poblacion East</option>
                                                                                                                <option value="Poblacion Norte">Poblacion Norte</option>
                                                                                                                <option value="Poblacion Sur">Poblacion Sur</option>
                                                                                                                <option value="Poblacion West">Poblacion West</option>
                                                                                                                <option value="Pongpong">Pongpong</option>
                                                                                                                <option value="Pugot">Pugot</option>
                                                                                                                <option value="Pulong Buhangin">Pulong Buhangin</option>
                                                                                                                <option value="Quinagabian">Quinagabian</option>
                                                                                                                <option value="Samon">Samon</option>
                                                                                                                <option value="San Agustin">San Agustin</option>
                                                                                                                <option value="San Alejandro">San Alejandro</option>
                                                                                                                <option value="San Antonio">San Antonio</option>
                                                                                                                <option value="San Gabriel">San Gabriel</option>
                                                                                                                <option value="San Isidro">San Isidro</option>
                                                                                                                <option value="San Isidro East">San Isidro East</option>
                                                                                                                <option value="San Isidro West">San Isidro West</option>
                                                                                                                <option value="San Jose Patag">San Jose Patag</option>
                                                                                                                <option value="San Juan">San Juan</option>
                                                                                                                <option value="San Mariano">San Mariano</option>
                                                                                                                <option value="San Pablo">San Pablo</option>
                                                                                                                <option value="San Patricio">San Patricio</option>
                                                                                                                <option value="San Pedro">San Pedro</option>
                                                                                                                <option value="San Rafael East">San Rafael East</option>
                                                                                                                <option value="San Rafael West">San Rafael West</option>
                                                                                                                <option value="San Roque">San Roque</option>
                                                                                                                <option value="San Vicente">San Vicente</option>
                                                                                                                <option value="Santa Clara">Santa Clara</option>
                                                                                                                <option value="Santa Cruz">Santa Cruz</option>
                                                                                                                <option value="Santa Rosa">Santa Rosa</option>
                                                                                                                <option value="Santiago">Santiago</option>
                                                                                                                <option value="Santo Ni±o">Santo Ni±o</option>
                                                                                                                <option value="Santo Nino">Santo Nino</option>
                                                                                                                <option value="Santo Rosario">Santo Rosario</option>
                                                                                                                <option value="Silag">Silag</option>
                                                                                                                <option value="Silangan">Silangan</option>
                                                                                                                <option value="Sumagui">Sumagui</option>
                                                                                                                <option value="Suso">Suso</option>
                                                                                                                <option value="Tabing Bakod">Tabing Bakod</option>
                                                                                                                <option value="Talangka">Talangka</option>
                                                                                                                <option value="Tangaoan">Tangaoan</option>
                                                                                                                <option value="Tanglad">Tanglad</option>
                                                                                                                <option value="Tinaan">Tinaan</option>
                                                                                                                <option value="Tumana">Tumana</option>
                                                                                                                <option value="Tungkod">Tungkod</option>
                                                                                                                <option value="Villabuena">Villabuena</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label class="control-label bold font-xs">Place of Birth</label>
              <input type="text" class="form-control" name="mplace-birth" id="mplace-birth" required>
            </div>
          </div>
          <h4 class="form-section bold font">Other Information</h4>
          <div class="col-md-3 col-sm-4">
            <div class="form-group">
              <label class="control-label bold font-xs">Contact Number</label>
              <input type="number" class="form-control" name="mcontactNum" id="mcontactNum">
            </div>
          </div>
          <div class="col-md-3 col-sm-4">
            <div class="form-group">
              <label class="control-label bold font-xs">Occupation</label>
              <input type="text" class="form-control" name="m-occupation" id="m-occupation" required>
            </div>
          </div>
          <div class="col-md-3 col-sm-4">
            <div class="form-group">
              <label class="control-label bold font-xs">Educational Attainment</label>
              <input type="text" class="form-control" name="m-educ-attainment" id="m-educ-attainment" required>
            </div>
          </div>
        </div>
        <h4 class="form-section bold font">Guardian (if not living with parent/s)</h4>
        <div class="row">
           <div class="col-md-3 col-sm-4">
              <div class="form-group">
                <label class="control-label bold font-xs">Last Name</label>
                <input type="text" class="form-control" name="gl-name" id="gl-name" required>
              </div>
            </div>
            <div class="col-md-3 col-sm-4">
              <div class="form-group">
                <label class="control-label bold font-xs">First Name</label>
                <input type="text" class="form-control" name="gf-name" id="gf-name" required>
              </div>
            </div>
            <div class="col-md-3 col-sm-4">
              <div class="form-group">
                <label class="control-label bold font-xs">Middle Name</label>
                <input type="text" class="form-control" name="gm-name" id="gm-name" required>
              </div>
            </div>
            <h4 class="form-section bold font">Address</h4>
            <div class="col-md-2">
              <div class="form-group">
                <label class="control-label bold font-xs">House No.</label>
                <input type="number" class="form-control" name="gadd-ress" id="gadd-ress" required>
              </div>
            </div>
            <div class="col-md-4 col-sm-5">
              <div class="form-group">
                <label class="control-label bold font-xs">Block/Lot</label>
                <input type="text" class="form-control" name="gblock-lot" id="gblock-lot" required>
               </div>
            </div>
            <div class="col-md-4 col-sm-5">
              <div class="form-group">
                <label class="control-label bold font-xs">Street/Phase/Section</label>
                <input type="text" class="form-control" name="gstreet" id="gstreet" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label class="control-label bold font-xs">Barangay</label>
                <select class="form-control" name="gaddr-brgy" id="gaddr-brgy" required>
                                                        <option value="-">-</option>
                                                                                                                <option value="Adia">Adia</option>
                                                                                                                <option value="Ag-Agrao">Ag-Agrao</option>
                                                                                                                <option value="Ampuagan">Ampuagan</option>
                                                                                                                <option value="Baballasioan">Baballasioan</option>
                                                                                                                <option value="Bagbaguin">Bagbaguin</option>
                                                                                                                <option value="Bagong Pook">Bagong Pook</option>
                                                                                                                <option value="Bagumbayan">Bagumbayan</option>
                                                                                                                <option value="Bal-Loy">Bal-Loy</option>
                                                                                                                <option value="Balasing">Balasing</option>
                                                                                                                <option value="Baliw Daya">Baliw Daya</option>
                                                                                                                <option value="Baliw Laud">Baliw Laud</option>
                                                                                                                <option value="Bangad">Bangad</option>
                                                                                                                <option value="Bantog">Bantog</option>
                                                                                                                <option value="Barangay I">Barangay I</option>
                                                                                                                <option value="Barangay II">Barangay II</option>
                                                                                                                <option value="Barangay III">Barangay III</option>
                                                                                                                <option value="Barangay IV">Barangay IV</option>
                                                                                                                <option value="Basiawan">Basiawan</option>
                                                                                                                <option value="Bia-O">Bia-O</option>
                                                                                                                <option value="Bonga">Bonga</option>
                                                                                                                <option value="Bubukal">Bubukal</option>
                                                                                                                <option value="Buca">Buca</option>
                                                                                                                <option value="Buenavista">Buenavista</option>
                                                                                                                <option value="Bulac">Bulac</option>
                                                                                                                <option value="Butir">Butir</option>
                                                                                                                <option value="Cabaroan">Cabaroan</option>
                                                                                                                <option value="Caboluan">Caboluan</option>
                                                                                                                <option value="Cabooan">Cabooan</option>
                                                                                                                <option value="Cadaatan">Cadaatan</option>
                                                                                                                <option value="Cal-Litang">Cal-Litang</option>
                                                                                                                <option value="Calamagui East">Calamagui East</option>
                                                                                                                <option value="Calamagui North">Calamagui North</option>
                                                                                                                <option value="Calamagui West">Calamagui West</option>
                                                                                                                <option value="Calangay">Calangay</option>
                                                                                                                <option value="Camangyanan">Camangyanan</option>
                                                                                                                <option value="Cambuja">Cambuja</option>
                                                                                                                <option value="Capandanan">Capandanan</option>
                                                                                                                <option value="Catmon">Catmon</option>
                                                                                                                <option value="Cauplasan">Cauplasan</option>
                                                                                                                <option value="Cay Pombo">Cay Pombo</option>
                                                                                                                <option value="Caysio">Caysio</option>
                                                                                                                <option value="Concepcion Norte">Concepcion Norte</option>
                                                                                                                <option value="Concepcion Sur">Concepcion Sur</option>
                                                                                                                <option value="Coralan">Coralan</option>
                                                                                                                <option value="Cueva">Cueva</option>
                                                                                                                <option value="Dalayap">Dalayap</option>
                                                                                                                <option value="Danuman East">Danuman East</option>
                                                                                                                <option value="Danuman West">Danuman West</option>
                                                                                                                <option value="Datu Daligasao">Datu Daligasao</option>
                                                                                                                <option value="Datu Intan">Datu Intan</option>
                                                                                                                <option value="Divisoria">Divisoria</option>
                                                                                                                <option value="Dunglayan">Dunglayan</option>
                                                                                                                <option value="Gusing">Gusing</option>
                                                                                                                <option value="Guyong">Guyong</option>
                                                                                                                <option value="Inayapan">Inayapan</option>
                                                                                                                <option value="Jose Laurel, Sr.">Jose Laurel, Sr.</option>
                                                                                                                <option value="Jose Rizal">Jose Rizal</option>
                                                                                                                <option value="Kayhakat">Kayhakat</option>
                                                                                                                <option value="Kidadan">Kidadan</option>
                                                                                                                <option value="Kinilidan">Kinilidan</option>
                                                                                                                <option value="Kisulad">Kisulad</option>
                                                                                                                <option value="Lalakhan">Lalakhan</option>
                                                                                                                <option value="Langaoan">Langaoan</option>
                                                                                                                <option value="Laslasong Norte">Laslasong Norte</option>
                                                                                                                <option value="Laslasong Sur">Laslasong Sur</option>
                                                                                                                <option value="Laslasong West">Laslasong West</option>
                                                                                                                <option value="Lesseb">Lesseb</option>
                                                                                                                <option value="Libsong">Libsong</option>
                                                                                                                <option value="Lingaling">Lingaling</option>
                                                                                                                <option value="Lingsat">Lingsat</option>
                                                                                                                <option value="Lubong">Lubong</option>
                                                                                                                <option value="Macasipac">Macasipac</option>
                                                                                                                <option value="Mag-Asawang Sapa">Mag-Asawang Sapa</option>
                                                                                                                <option value="Mahabang Parang">Mahabang Parang</option>
                                                                                                                <option value="Malalag Tubig">Malalag Tubig</option>
                                                                                                                <option value="Mamacao">Mamacao</option>
                                                                                                                <option value="Manggahan">Manggahan</option>
                                                                                                                <option value="Masinao">Masinao</option>
                                                                                                                <option value="Mataling-Ting">Mataling-Ting</option>
                                                                                                                <option value="Maynganay Norte">Maynganay Norte</option>
                                                                                                                <option value="Maynganay Sur">Maynganay Sur</option>
                                                                                                                <option value="Mozzozzin North">Mozzozzin North</option>
                                                                                                                <option value="Mozzozzin Sur">Mozzozzin Sur</option>
                                                                                                                <option value="Naganacan">Naganacan</option>
                                                                                                                <option value="Nagsayaoan">Nagsayaoan</option>
                                                                                                                <option value="Nagtupacan">Nagtupacan</option>
                                                                                                                <option value="Nalvo">Nalvo</option>
                                                                                                                <option value="Namagbagan">Namagbagan</option>
                                                                                                                <option value="Ogpao">Ogpao</option>
                                                                                                                <option value="Pacang">Pacang</option>
                                                                                                                <option value="Paitan">Paitan</option>
                                                                                                                <option value="Pao-O">Pao-O</option>
                                                                                                                <option value="Parada">Parada</option>
                                                                                                                <option value="Parang Ng Buho">Parang Ng Buho</option>
                                                                                                                <option value="Paroyhog">Paroyhog</option>
                                                                                                                <option value="Pataquid">Pataquid</option>
                                                                                                                <option value="Penned">Penned</option>
                                                                                                                <option value="Pilar">Pilar</option>
                                                                                                                <option value="Poblacion">Poblacion</option>
                                                                                                                <option value="Poblacion 1">Poblacion 1</option>
                                                                                                                <option value="Poblacion 2">Poblacion 2</option>
                                                                                                                <option value="Poblacion 3">Poblacion 3</option>
                                                                                                                <option value="Poblacion East">Poblacion East</option>
                                                                                                                <option value="Poblacion Norte">Poblacion Norte</option>
                                                                                                                <option value="Poblacion Sur">Poblacion Sur</option>
                                                                                                                <option value="Poblacion West">Poblacion West</option>
                                                                                                                <option value="Pongpong">Pongpong</option>
                                                                                                                <option value="Pugot">Pugot</option>
                                                                                                                <option value="Pulong Buhangin">Pulong Buhangin</option>
                                                                                                                <option value="Quinagabian">Quinagabian</option>
                                                                                                                <option value="Samon">Samon</option>
                                                                                                                <option value="San Agustin">San Agustin</option>
                                                                                                                <option value="San Alejandro">San Alejandro</option>
                                                                                                                <option value="San Antonio">San Antonio</option>
                                                                                                                <option value="San Gabriel">San Gabriel</option>
                                                                                                                <option value="San Isidro">San Isidro</option>
                                                                                                                <option value="San Isidro East">San Isidro East</option>
                                                                                                                <option value="San Isidro West">San Isidro West</option>
                                                                                                                <option value="San Jose Patag">San Jose Patag</option>
                                                                                                                <option value="San Juan">San Juan</option>
                                                                                                                <option value="San Mariano">San Mariano</option>
                                                                                                                <option value="San Pablo">San Pablo</option>
                                                                                                                <option value="San Patricio">San Patricio</option>
                                                                                                                <option value="San Pedro">San Pedro</option>
                                                                                                                <option value="San Rafael East">San Rafael East</option>
                                                                                                                <option value="San Rafael West">San Rafael West</option>
                                                                                                                <option value="San Roque">San Roque</option>
                                                                                                                <option value="San Vicente">San Vicente</option>
                                                                                                                <option value="Santa Clara">Santa Clara</option>
                                                                                                                <option value="Santa Cruz">Santa Cruz</option>
                                                                                                                <option value="Santa Rosa">Santa Rosa</option>
                                                                                                                <option value="Santiago">Santiago</option>
                                                                                                                <option value="Santo Ni±o">Santo Ni±o</option>
                                                                                                                <option value="Santo Nino">Santo Nino</option>
                                                                                                                <option value="Santo Rosario">Santo Rosario</option>
                                                                                                                <option value="Silag">Silag</option>
                                                                                                                <option value="Silangan">Silangan</option>
                                                                                                                <option value="Sumagui">Sumagui</option>
                                                                                                                <option value="Suso">Suso</option>
                                                                                                                <option value="Tabing Bakod">Tabing Bakod</option>
                                                                                                                <option value="Talangka">Talangka</option>
                                                                                                                <option value="Tangaoan">Tangaoan</option>
                                                                                                                <option value="Tanglad">Tanglad</option>
                                                                                                                <option value="Tinaan">Tinaan</option>
                                                                                                                <option value="Tumana">Tumana</option>
                                                                                                                <option value="Tungkod">Tungkod</option>
                                                                                                                <option value="Villabuena">Villabuena</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="control-label bold font-xs">Place of Birth</label>
                <input type="text" class="form-control" name="gplace-birth" id="gplace-birth" required>
              </div>
            </div>
            <h4 class="form-section bold font">Other Information</h4>
            <div class="col-md-3 col-sm-4">
              <div class="form-group">
                <label class="control-label bold font-xs">Contact Number</label>
                <input type="number" class="form-control" name="gcontactNum" id="gcontactNum">
              </div>
            </div>
            <div class="col-md-3 col-sm-4">
              <div class="form-group">
                <label class="control-label bold font-xs">Occupation</label>
                <input type="text" class="form-control" name="g-occupation" id="g-occupation" required>
              </div>
            </div>
            <div class="col-md-3 col-sm-4">
              <div class="form-group">
                <label class="control-label bold font-xs">Educational Attainment</label>
                <input type="text" class="form-control" name="g-educ-attainment" id="g-educ-attainment" required>
              </div>
            </div>
            <h4 class="form-section bold font">Income</h4>
            <div class="col-md-4 col-sm-5">
              <div class="form-group">
                <label class="control-label bold font-xs">Total Parent/s or Guardian/s Annual Gross Income</label>
                  <input type="text" class="form-control" name="total-income" id="total-income" required>
              </div>
            </div>
            <h4 class="form-section bold font">Family Size</h4>
            <div class="col-md-2 col-sm-3">
              <div class="form-group">
                <label class="control-label bold font-xs">Size of the Family (person)</label>
                <input type="text" class="form-control" name="fam-size" id="fam-size" required>
              </div>
            </div>
            <h4 class="form-section bold font">Name of Siblings (if any)</h4>
            <div class="col-md-3 col-sm-4">
              <div class="form-group">
                <label class="control-label bold font-xs"></label>
                <input type="text" class="form-control" name="sibling-1" id="sibling-1">
              </div>
            </div>
            <div class="col-md-3 col-sm-4">
              <div class="form-group">
                <label class="control-label bold font-xs"></label>
                <input type="text" class="form-control" name="sibling-2" id="sibling-2">
              </div>
            </div>
            <div class="col-md-3 col-sm-4">
              <div class="form-group">
                <label class="control-label bold font-xs"></label>
                <input type="text" class="form-control" name="sibling-3" id="sibling-3">
              </div>
            </div>
            <div class="col-md-3 col-sm-4">
              <div class="form-group">
                <label class="control-label bold font-xs"></label>
                <input type="text" class="form-control" name="sibling-4" id="sibling-4">
              </div>
            </div>
            <div class="col-md-3 col-sm-4">
              <div class="form-group">
                <label class="control-label bold font-xs"></label>
                <input type="text" class="form-control" name="sibling-5" id="sibling-5">
              </div>
            </div>
            <div class="col-md-3 col-sm-4">
              <div class="form-group">
                <label class="control-label bold font-xs"></label>
                <input type="text" class="form-control" name="sibling-6" id="sibling-6">
              </div>
            </div>
            <div class="col-md-3 col-sm-4">
              <div class="form-group">
                <label class="control-label bold font-xs"></label>
                <input type="text" class="form-control" name="sibling-7" id="sibling-7">
              </div>
            </div>
            <div class="col-md-3 col-sm-4">
              <div class="form-group">
                <label class="control-label bold font-xs"></label>
                <input type="text" class="form-control" name="fsibling-8" id="sibling-8">
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr class="mb-3 mt-3"> 
    <div class="btnDiv">
    <a type="button" href="#" class="btn btn-primary mb-5 float-end ms-3">Submit</a>
    <a type="button" href="instructionsTab.php" class="btn btn-secondary mb-5 float-end">Back</a>
    </div>
</div>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>