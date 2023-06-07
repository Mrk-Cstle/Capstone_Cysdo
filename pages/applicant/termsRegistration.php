
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/forms.css" />
  
    <title>Registration</title>
  </head>
  <body>
    <form >
      <h1>Mga Paalala:</h1>
      <ol>
        <li>
          Filipino, may asawa o wala at kailangang naninirahan sa Lungsod ng San
          Jose Del Monte sa loob ng tatlo (3) o mahigit pang taon, nakapagtapos
          ng sekondarya sa alin mang paaralan sa Lungsod, pribado man o
          pampubliko. Kung hindi naman nakapagtapos sa Lungsod ay kinakailangang
          residente nito sa nakalipas na limang (5) taon.
        </li>
        <li>
          Hindi lalagpas ng 30 taon ang edad sa araw ng paghahain ng aplikasyon.
        </li>
        <li>
          Hindi bababa sa 76% (passing grade) ang general average sa huling taon
          sa Senior High School.
        </li>
        <li>
          Kailangang mapanatili ang 15 enrolled units lakip ang Curriculum or
          SYLLABUS per semester maliban sa mga magtatapos o graduating students.
        </li>
        <li>
          Maaring magpatala sa anumang kursong kanilang nanaisin maging Degree
          Course (4-year o 5-year courses). o Non-Degree Course (3-year o 2-year
          courses).
        </li>
        <li>
          Ang inyong aplikasyon ay hindi garantiya na kayo ay tanggap na,
          kailangang sumailalim at pumasa sa mga sumusunod:
          <ol class="listLayout" type="a">
            <li>Qualifying Examination</li>
            <li>Interview</li>
            <li>Community Investigation</li>
          </ol>
        </li>
        <li>May mabuting asal(Certificate of Good Moral)</li>
        <li>
          Tinatangkilik lamang ang magulang na may pinagsamang kita na hindi
          hihigit sa P25,000.00 kada buwan o P300,000.00 bawat taon.
        </li>
        <li>
          Isa lamang sa bawat pamilya ang maaaring mabigyan ng Educational
          Assistance, sa pasubali na kung nakatapos na sa kolehiyo ang isang
          iskolar ay doon pa lang maaaring magkaroon ng pagkakataon na maging
          iskolar ang isa sa kanyang kapatid, maliban din naman kung kambal o
          triplet o quadruplet ay bibigyan ng exemption sa aytem na ito.
        </li>
        <li>
          Walang tinatanggap na educational assistance o scholarship sa kahit
          anong ahensya o organisasyon ng Gobyerno at iba pang Lokal na
          Pamahalaan.
        </li>
        <li>
          Ang mga mag-aaral ng City College of San Jose Del Monte (CCSJDM) at
          Bulacan State University-Sarmiento Campus (BSU-SC) o kahit anong State
          University o College sa loob ng Lungsod ng San Jose Del Monte na
          sumasailalim sa UNIFAST – Free Higher Education Program ay HINDI NA
          maaring maging benepisyaryo ng City Educational Assistance Program
          (CEAP).
        </li>
      </ol>
      <div id="agreementInput">
        <input type="radio" id="agree" name="agreement" value="agree" required />
        <label for="agree">Agree</label>
        <input type="radio" id="disagree" name="agreement" value="disagree" />
        <label for="disagree">Disagree</label>
      </div>
     <div class="btnDiv">
        <div class="formLayout">
          <input type="button" onclick="goToPreviousPage()" value="Back" />
          <input type="button" onclick="goToSubmit()" value="Next" />
         
        </div>
    </form>
      <script src="script/forms.js"></script>
  </body>
</html>
