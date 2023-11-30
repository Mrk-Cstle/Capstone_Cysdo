
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Registration</title>
  </head>
  <style>
  * {
    margin: 0px;
    padding: 0px;
    scroll-behavior: smooth;
 }

 h1 {
    text-align: center;
    margin-bottom: 40px;
 }

 .alignment{
    text-align: center;
 }

 .text-break {
    text-align: justify;
 }

 .btnDiv{
    margin-top: 10px;
 }

 .formLayout {
    display: flex;
    flex-direction: row;
    gap: 15px;
 }

 .listLayout{
    margin: 5px 30px;
    margin-bottom: 14px;
 }

  #agreementInput{
    display: flex;
    flex-direction: row;
    width: 100%;
    justify-content: flex-end;
    margin-top: 50px;
    margin-bottom: 30px;
 }
  #agreementInput input {
    width: 30px;
    margin-left: 20px;
 }

 input {
    width: 100%;
    margin-top: 6px;
    margin-bottom: 10px;
 }

 .container {
    padding-top: 80px;
 }
    @media (max-width: 1321px){
      .container{
        padding-top: 140px;
      
      }
    }

    @media (max-width: 1202px){
      .container{
        padding-top: 90px;
      }
    }
     @media (max-width: 990px){
    li{
      font-size: 16px;
      
    }
    p{
      font-size: 16px;
      
    }
    label{
      font-size: 16px;

    }
   
  }
  @media (max-width: 767px){
    li{
      font-size: 14px;
      
      
    }
    p{
      font-size: 14px;
      
    }
    label{
      font-size: 14px;
      
    }
   
  }
  </style>
  <body>
  <?php
  include 'assets/template/homeNavigation.php';
  ?>
  <div class="container">
    <form class="terms">
      <h1>Mga Paalala:</h1>
      <strong><ol>
        <li>
        <p class="text-break">Filipino, may asawa o wala at kailangang naninirahan sa Lungsod ng San
          Jose Del Monte sa loob ng tatlo (3) o mahigit pang taon, nakapagtapos
          ng sekondarya sa alin mang paaralan sa Lungsod, pribado man o
          pampubliko. Kung hindi naman nakapagtapos sa Lungsod ay kinakailangang
          residente nito sa nakalipas na limang (5) taon.</p>
        </li>
        <li>
        <p class="text-break">Hindi lalagpas ng 30 taon ang edad sa araw ng paghahain ng aplikasyon.</p>
        </li>
        <li>
        <p class="text-break">Hindi bababa sa 76% (passing grade) ang general average sa huling taon
          sa Senior High School.</p>
        </li>
        <li>
        <p class="text-break">Kailangang mapanatili ang 15 enrolled units lakip ang Curriculum or
          SYLLABUS per semester maliban sa mga magtatapos o graduating students.</p>
        </li>
        <li>
        <p class="text-break">Maaring magpatala sa anumang kursong kanilang nanaisin maging Degree
          Course (4-year o 5-year courses). o Non-Degree Course (3-year o 2-year
          courses).</p>
        </li>
        <li>
        <p class="text-break">Ang inyong aplikasyon ay hindi garantiya na kayo ay tanggap na,
          kailangang sumailalim at pumasa sa mga sumusunod:</p>
          <ol class="listLayout" type="a">
            <li>Qualifying Examination</li>
            <li>Interview</li>
            <li>Community Investigation</li>
          </ol>
        </li>
        <li><p class="text-break">May mabuting asal(Certificate of Good Moral)</p></li>
        <li>
        <p class="text-break">Tinatangkilik lamang ang magulang na may pinagsamang kita na hindi
          hihigit sa P25,000.00 kada buwan o P300,000.00 bawat taon.</p>
        </li>
        <li>
        <p class="text-break">Isa lamang sa bawat pamilya ang maaaring mabigyan ng Educational
          Assistance, sa pasubali na kung nakatapos na sa kolehiyo ang isang
          iskolar ay doon pa lang maaaring magkaroon ng pagkakataon na maging
          iskolar ang isa sa kanyang kapatid, maliban din naman kung kambal o
          triplet o quadruplet ay bibigyan ng exemption sa aytem na ito.</p>
        </li>
        <li>
        <p class="text-break">Walang tinatanggap na educational assistance o scholarship sa kahit
          anong ahensya o organisasyon ng Gobyerno at iba pang Lokal na
          Pamahalaan.</p>
        </li>
        <li>
        <p class="text-break">Ang mga mag-aaral ng City College of San Jose Del Monte (CCSJDM) at
          Bulacan State University-Sarmiento Campus (BSU-SC) o kahit anong State
          University o College sa loob ng Lungsod ng San Jose Del Monte na
          sumasailalim sa UNIFAST – Free Higher Education Program ay HINDI NA
          maaring maging benepisyaryo ng City Educational Assistance Program
          (CEAP).</p>
        </li>
      </ol>
      <div id="agreementInput">
        <input type="radio" id="agree" name="agreement" value="agree" required />
        <label for="agree"><strong>Agree</strong></label>
        <input type="radio" id="disagree" name="agreement" value="disagree" />
        <label for="disagree"><strong>Disagree</strong></label>
      </div>
     <div class="btnDiv">
        <div class="formLayout justify-content-center">
        <a type="button" onclick="goToPreviousPage()" class="btn btn-secondary mb-5 w-25">Back</a>
        <a type="button" onclick="goToSubmit()" class="btn btn-primary mb-5 w-25">Proceed</a>
        </div>
    </form>
  </div>
      <script src="pages/applicant/script/registration.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
