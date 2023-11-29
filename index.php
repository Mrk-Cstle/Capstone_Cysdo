<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <title>CYSDO Portal</title>
</head>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

  /* Main */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }

  main {
    display: block;
    width: 100%;
  }

  .car-header {
    padding-top: 80px;
  }

  .announcer {
    width: 100%;
    max-width: 1500px;
    height: auto;
    max-height: 650px;
    object-fit: contain;

  }

  .car-about {
    background-color: #e6e6e6;
  }

  .steps {
    margin-top: 60px;
    font-weight: 600;
    font-size: 22px;
    -webkit-text-fill-color: #F05941;
  }

  .car-body {
    width: 100%;
    height: 400px;
  }

  .car-text {
    font-size: 20px;
    word-wrap: break-word;
    list-style: square;
  }

  #FontSize {
    font-size: 24px;
    font-weight: 600px;
    text-align: justify;
  }

  #faqs {
    width: 100%;
    display: flex;
    background-color: #e6e6e6;
    flex-direction: column;
    padding: 0 20px;
    margin-left: 0;
    line-height: 1.8;
  }

  #collapseTwo p {
    font-size: 18px;
  }

  #collapseThree p {
    font-size: 16px;
  }

  #collapseSix p {
    font-size: 18px;
  }

  #collapseSeven p {
    font-size: 18px;
  }

  #faqsHeader {
    width: 100%;
  }

  .faqsBody {
    font-size: 16px;
    font-weight: 600;
    margin-top: 10px;
    text-transform: uppercase;
  }

  strong {
    text-transform: uppercase;
  }

  #accordItem {
    border-radius: 3px;
    box-shadow: 0px 2px 8px 0px rgba(0, 0, 0, 0.3);
  }

  #AccordBtn {
    background-color: #D0BFFF;
    box-shadow: 0px 2px 8px 0px rgba(0, 0, 0, 0.5);
    border-radius: 3px;
  }

  #contact {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    padding: 0px 20px;
    line-height: 1.8;
  }

  #Fontsizes {
    font-size: 24px;
    font-weight: 600px;
    text-align: justify;
    margin-left: 10px;
  }

  @media (max-width: 850px) {
    #Fontsizes {
      font-size: 20px;
      text-align: center;
      margin-top: 10px;
    }
  }

  #contactHeader {
    width: 100%;
    margin-top: 0px;
  }

  #contactHeader h3 {
    font-size: 40px;
  }

  #contactHeader p {
    margin-left: 30px;
    font-size: 18px;
  }

  #contactDetails {
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    width: 100%;
  }

  .contactText {
    background-color: #FFACC7;
  }

  .contactText h5,
  a,
  .text-break {
    padding-left: 30px;
  }

  .contactText a,
  p {
    font-size: 15px;
  }

  .contactText a,
  .Con-Icon {
    font-size: 16px;
    padding: 0;
    margin: 0;
  }

  .Con-Icon {
    display: block;
    font-size: 16px;
    font-weight: 500;
    padding: 0;
    margin-right: 10px;
    margin-left: 10px;
  }

  .ConNm,
  .Add-ress {
    font-size: 18px;
    padding: 0;
    margin: 0;
    text-align: center;
  }

  .contactFormat {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 50px;
    gap: 30px;
    justify-content: center;
  }

  .contactIcon {
    height: 80px;
    width: 80px;
    height: auto;
    display: flex;
    padding: 10px;
  }

  .contactIcon img {
    flex-direction: column;
    height: 60px;
    width: 60px;
  }

  .contactText {
    display: flex;
    flex-wrap: wrap;
    align-content: space-around;
    height: 100px;
    width: 40%;
    border: 1px solid black;
    border-radius: 100px;
    box-shadow: 0px 2px 8px 0px rgba(0, 0, 0, 0.3);
    padding: 15px;
  }

  #FontSize {
    font-size: 24px;
    font-weight: 600px;
    text-align: justify;
  }

  .fonty {
    font-size: 16px;
  }

  .fonty-1 {
    font-size: 16px;
  }

  @media (max-width: 2000px) {
    .Con-Icon {
      display: none;
    }

    .conNm {
      display: flex;
      font-weight: 500;
      margin-left: 250px;
    }

    .contactText .gmail {
      margin-left: 250px;
    }
  }

  @media (max-width: 1533px) {
    .conNm {
      margin-left: 200px;
    }

    .contactText .gmail {
      margin-left: 200px;
    }
  }

  @media (max-width: 1374px) {
    .conNm {
      margin-left: 160px;
    }

    .contactText .gmail {
      margin-left: 160px;
    }
  }

  @media (max-width: 1303px) {
    .contactFormat {
      flex-direction: row;
      display: flex;
      flex-wrap: nowrap;
    }

    .conNm {
      font-size: 14px;
      margin-top: 5px;
      margin-left: 80px;
    }

    .contactText .gmail {
      margin-top: 0;
      margin-left: 80px;
    }

  }

  @media (max-width: 961px) {
    .contactFormat {
      flex-direction: column;
      display: flex;
      flex-wrap: nowrap;
      align-items: center;
      gap: 10px;
    }

    .contactIcon {
      display: none;
    }

    .contactText {
      display: flex;
      flex-wrap: wrap;
      align-content: space-around;
      height: 80px;
      width: 50%;
      padding: 20px;
      text-align: center;
    }

    .Con-Icon {
      display: flex;
    }

    .ConNm,
    .Add-ress {
      font-size: 16px;
    }

    .conNm {
      font-size: 14px;
      margin-top: 5px;
      margin-left: 0;
    }

    .contactText .gmail {
      margin-top: 0;
      margin-left: 0;
    }
  }

  @media (max-width: 879px) {

    a,
    .Con-Icon {
      margin-left: 20px;
      font-size: 16px;
    }

    .contactText a {
      font-size: 14px;
    }

    .ConNm {
      font-size: 14px;
      margin-top: 5px;

    }

    .Add-ress {
      font-size: 14px;
    }

    .conNm {
      font-size: 14px;
      margin-top: 5px;
      margin-left: 0;
    }

    .contactText .gmail {
      margin-top: 0;
      margin-left: 0;
    }
  }

  @media (max-width: 850px) {
    #FontSize {
      font-size: 20px;
      text-align: center;
      margin-top: 10px;
    }

    .fonty {
      font-size: 14px;
    }

    #contactHeader p {
      text-align: center;
      font-size: 14px;
      margin-right: 20px;
    }

    .contactFormat {
      margin-bottom: 10px;
    }

    .car-text {
      font-size: 16px;
      padding: 20px;
    }

    .steps {
      font-size: 18px;
    }

    .conNm {
      font-size: 14px;
      margin-top: 5px;
      margin-left: 0;
    }

    .contactText .gmail {
      margin-left: 0;
    }

  }

  @media (max-width: 724px) {
    .contactText {
      display: flex;
      height: 80px;
      width: 100%;
      padding: 15px;
      margin-bottom: 10px;
    }

    .Con-Icon {
      display: flex;
    }

    a,
    .Con-Icon {
      margin-left: 5px;
      font-size: 16px;
    }

    .conNm {
      font-size: 14px;
      margin-top: 5px;
      font-weight: 500;
      margin-left: 0;
    }

    .contactText .gmail {
      margin-left: 0;
    }

    .Add-ress {
      font-size: 14px;
    }

    .contactFormat {
      margin-bottom: 10px;
    }

    .faqsBody {
      font-size: 16px;
      font-weight: 600;
    }

  }

  @media (max-width: 497px) {
    .contactText {
      display: flex;
      height: 85px;
      width: 100%;
      padding: 15px;
      margin-bottom: 10px;
    }

    #FontSize {
      font-size: 16px;
      font-weight: 500;
    }

    .contactFormat {
      margin-bottom: 10px;
    }

    .Con-Icon {
      display: flex;
      font-weight: 600;
    }

    a,
    .Con-Icon {
      margin-left: 5px;
      font-size: 14px;
    }

    .conNm {
      font-size: 14px;
      margin-top: 5px;
      font-weight: 500;
      margin-left: 0;
    }

    .contactText .gmail {
      margin-left: 0;
    }

    .Add-ress {
      font-size: 14px;
    }

    .faqsBody {
      font-size: 14px;
      font-weight: 600;
    }
  }
</style>

<body>
  <?php
  include 'assets/template/homeNavigation.php';
  ?>
  <main>
    <div id="carouselExampleAutoplaying" class="carousel carousel-dark slide car-header" data-bs-ride="carousel" data-bs-touch="true">
      <div class="container-fluid">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="4000">
            <img src="uploads/announcement/form1.jpeg" class="announcer d-block mx-auto" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img src="uploads/announcement/form2.jpeg" class="announcer d-block mx-auto" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img src="uploads/announcement/form3.jpeg" class="announcer d-block mx-auto" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img src="uploads/announcement/form4.jpeg" class="announcer d-block mx-auto" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img src="uploads/announcement/form5.jpeg" class="announcer d-block mx-auto" alt="...">
          </div>
        </div>
        <div class="car-btn">
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </div>
        </button>
      </div>
    </div>

    <div id="2"></div>
  </main>
  <div id="about">
    <div id="carouselExampleRide" class="car-about carousel carousel-dark slide" data-bs-ride="true" data-bs-touch="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleRide" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleRide" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleRide" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="container">
        <div class="carousel-inner">
          <div class="car-body carousel-item active" data-bs-interval="8000">
            <li class="d-block w-100 text-center">
              <p class="steps">MANDATE</p>
            <li class="car-text text-center">Assist the City Mayor in the implementation of the Constitutional Provisions
              relative to youth development through promotion of its youth welfare
              enhancement, sport, and education programs and become a progressive
              community with competent youth thriving in a vibrant economy.</li>
            </li>
          </div>

          <div class="car-body carousel-item" data-bs-interval="8000">
            <li class="d-block w-100 text-center">
              <p class="steps">MISSION</p>
            <li class="car-text text-center p-1">Provide quality service to young clientele.</li>
            <li class="car-text text-center p-1">Promote holistic development both in-school and out-of-school youth.</li>
            <li class="car-text text-center p-1">Strengthen the capacity level of young people to make them competitive in the
              National and Global Market.
            </li>
            <li class="car-text text-center p-1">Empower the youth sector to become dynamic leaders.</li>
            </li>
          </div>
          <div class="car-body carousel-item" data-bs-interval="8000">
            <li class="d-block w-100 text-center">
              <p class="steps">VISION</p>
            <li class="car-text text-center">A highly efficient office who caters comprehensively to the needs of the youth
              sector integral to the over-all enhancement and relevant social transformation of
              San Joseños.</li>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--<div id="about">
    <div id="aboutPic" class="img-fluid">
      <img src="assets/image/CysdoLogo.png" />
    </div>

    <div id="aboutInfo">
      <div class="aboutFormat">
        <p id="FontSize">MANDATE</p>
        <li class="abt">Assist the City Mayor in the implementation of the Constitutional Provisions
          relative to youth development through promotion of its youth welfare
          enhancement, sport, and education programs and become a progressive
          community with competent youth thriving in a vibrant economy.</li>
      </div>
      <div class="aboutFormat">
      <p id="FontSize">MISSION</p>
          <li class="abt">Provide quality service to young clientele.</li>
          <li class="abt">Promote holistic development both in-school and out-of-school youth.</li>
          <li class="abt">Strengthen the capacity level of young people to make them competitive in the
            National and Global Market.
          </li>
          <li class="abt">Empower the youth sector to become dynamic leaders.</li>
      </div>
      <div class="aboutFormat">
      <p id="FontSize">VISION</p>
        <li class="abt">A highly efficient office who caters comprehensively to the needs of the youth
          sector integral to the over-all enhancement and relevant social transformation of
          San Joseños.</li>
      </div>
    </div>
  </div> -->
  <div id="faqs">
    <div id="faqsHeader">
      <p id="FontSizes">Frequently Asked Questions</p>

      <div class="container-sm mb-5">
        <div class="accordion accordion-flush" id="accordionFaqs">
          <div class="accordion-item" id="accordItem">
            <h2 class="accordion-header">
              <button class="accordion-button" id="AccordBtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <p class="faqsBody">Who Can Apply?</p>
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFaqs">
              <div class="accordion-body">
                <ul>
                  <li class="fonty">Incoming college students/ Current college students (30 years old andbelow only)</li>
                  <li class="fonty">Bonafide resident of the City of San Jose Del Monte, Bulacan</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="accordion-item" id="accordItem">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" id="AccordBtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <p class="faqsBody">When To Apply?</p>
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFaqs">
              <div class="accordion-body">
                <p class="fs-6 ms-4">Online application usually happens on the 1st quarter of every year. The online application will be posted on our FB Page: <strong> City Youth and Sports Development Office - CSJDM.</strong></p>
              </div>
            </div>
          </div>

          <div class="accordion-item" id="accordItem">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" id="AccordBtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <p class="faqsBody">What are the Qualifications?</p>
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFaqs">
              <div class="accordion-body">
                <p class="fonty">Ang lokal na pamahalaan ng Lungsod ng San Jose Del Monte ay patuloy na naghahatid ng programang pang-edukasyon sa mga kabataang San Joseños na mas kilala bilang City Educational Assistance Program (CEAP). Itinataguyod nito ang layunin na makapagbigay ng tulong pinansiyal sa mga kabataan upang makapagtapos ng pag-aaral.</p>

                <li class="fonty-1"><strong>QUALIFICATIONS:</strong></li>
                <ol>
                  <li class="fonty">Filipino, may asawa o wala, at naninirahan sa Lungsod ng San Jose Del Monte sa loob ng tatlo (3) o mahigit pang taon, nakapagtapos ng sekondarya sa alin mang paaralan sa Lungsod, pribado man o pampubliko. Kung hindi naman nakapagtapos sa Lungsod ay kinakailangang residente nito sa nakalipas na limang (5) taon.</li>
                  <li class="fonty">Hindi lalagpas ng 30 taon ang edad sa araw ng paghahain ng aplikasyon.</li>
                  <li class="fonty">Hindi bababa sa 76% (passing grade) ang general average sa huling taon sa Senior High School.</li>
                  <li class="fonty">Kailangang mapanatili ang 15 enrolled units lakip ang Curriculum or SYLLABUS per semester maliban sa mga magtatapos o graduating students.</li>
                  <li class="fonty">Maaring magpatala sa anumang kursong kanilang nanaisin maging Degree Course (4-year o 5-year courses). o Non-Degree Course (3-year o 2-year courses).</li>
                  <li class="fonty">Ang inyong aplikasyon ay hindi garantiya na kayo ay tanggap na, kailangang sumailalim at pumasa sa mga sumusunod:</li>
                  <ol>
                    <li class="fonty">Qualifying Examination</li>
                    <li class="fonty">Interview</li>
                    <li class="fonty">Community Investigation</li>
                  </ol>
                  <li class="fonty">May mabuting asal (Certificate of Good Moral).</li>
                  <li class="fonty">Tinatangkilik lamang ang magulang na may pinagsamang kita na hindi hihigit sa P25,000.00 kada buwan o P300,000.00 bawat taon.</li>
                  <li class="fonty">Isa lamang sa bawat pamilya ang maaaring mabigyan ng Educational Assistance, sa pasubali na kung nakatapos na sa kolehiyo ang isang iskolar ay doon pa lang maaaring magkaroon ng pagkakataon na maging iskolar ang isa sa kanyang kapatid, maliban din naman kung kambal o triplet o quadruplet ay bibigyan ng exemption sa aytem na ito.</li>
                  <li class="fonty">Walang tinatanggap na educational assistance o scholarship sa kahit anong ahensya o organisasyon ng Gobyerno at iba pang Lokal na Pamahalaan.</li>
                  <li class="fonty">Ang mga mag-aaral ng City College of San Jose Del Monte <strong>(CCSJDM)</strong> at Bulacan State University-Sarmiento Campus <strong>(BSU-SC)</strong> o kahit anong State University o College sa loob ng Lungsod ng San Jose Del Monte na sumasailalim sa <strong>UNIFAST</strong> – Free Higher Education Program ay HINDI NA maaring maging benepisyaryo ng City Educational Assistance Program (CEAP).</li>
                </ol>
              </div>
            </div>
          </div>

          <div class="accordion-item" id="accordItem">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" id="AccordBtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <p class="faqsBody">Initial Requirements</p>
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFaqs">
              <div class="accordion-body">
                <h6>PAALALA:</h6>
                <ul>
                  <li class="fonty">Ang LAHAT NG REQUIREMENTS na ito ay IPAPALIWANAG SA ARAW NG ORIENTATION.</li>
                  <li class="fonty">Kung hindi makakarating sa araw ng orientation ang aplikante, maaaring ang PARENT O GUARDIAN ang dumalo.</li>
                  <li class="fonty">Hindi na bibigyan ng pangalawang pagkakataon ang mga NAG-REGISTER ONLINE NA HINDI MAKAKARATING SA ORIENTATION.</li>
                  <li class="fonty">Ang initial requirements ay kinakailangang MAKUMPLETO upang payagang makapag-exam ang aplikante.</li>
                </ul>
                <ol>
                  <li class="fonty-1"><strong>FOR APPLICANTS:</strong></li>
                  <ol>
                    <li class="fonty">Birth Certificate (PSA);</li>
                    <li class="fonty">Cedula ng aplikante na may edad 18 taon pataas;</li>
                    <li class="fonty">Certificate of Good Moral Character (Date Issued: 2023) Endorsement Letter</li>
                    <li class="fonty">Certificate of Residency (No. of years of residency must be indicated)</li>
                    <li class="fonty">Sketch ng inyong bahay mula sa barangay (sketch o map)</li>
                    <li class="fonty">Litrato ng permanenteng tirahan (labas at loob);</li>
                    <li class="fonty">Voter's Stub/Certification (Kung wala pa nito ay kinakailangang magpa-rehistro sa COMELEC kapag nag-resume na ang registration).</li>
                  </ol>
                  <li class="fonty-1"><strong>FOR PARENT/GUARDIAN:</strong></li>
                  <ol>
                    <li class="fonty">Cedula</li>
                    <li class="fonty">Indigency Certificate from Barangay</li>
                    <li class="fonty">Solo Parent I.D</li>
                    <li class="fonty">Notarized Guardianship Certificate from Barangay</li>
                  </ol>
                </ol>
                <p> Kung kayo ay MAKAKAPASA sa QUALIFYING EXAMINATION, narito ang FINAL REQUIREMENTS na kailangang asikasuhin:</p>
                <ol>
                  <li class="fonty">Katunayan ng taunang pinagsamang kita ng magulang:</li>
                  <ol>
                    <li class="fonty">TAX EXEMPTION CERTIFICATE from BIR para sa walang pirmihang pinagkakakitaan o hindi nagbabayad ng buwis;</li>
                    <li class="fonty">INCOME TAX RETURN (Year 2022) para sa may pirmihang pinagkakakitaan o nagbabayad ng buwis.</li>
                    <li class="fonty">Latest copy of contract or Proof of Income for children of OFWs</li>
                  </ol>
                  <li class="fonty">Health Certificate (City Health Office)</li>
                  <li class="fonty">Katunayan ng enrollment at nakamit na grado mula sa paaralan:</li>
                  <ol>
                    <li class="fonty">Para sa mga SHS Graduates/Incoming College Students:</li>
                    <ol>
                      <li class="fonty">Form 138 (Original o Certified True Copy);</li>
                      <li class="fonty">Registration Form/Card 1st Semester S.Y 2023-2024 (Original o Certified True Copy) ng kasalukuyang semestre sa kolehiyo.</li>
                    </ol>
                    <li class="fonty">Para sa mga nasa Kolehiyo:</li>
                    <ol>
                      <li class="fonty">Registration Card/Form (Original o Certified True Copy) noong nakaraang semestre (2nd Semester S.Y 2022-2023);</li>
                      <li class="fonty">Certificate of Grades (Original o Certified True Copy) noong nakaraang semestre (2nd Semester S.Y 2022-2023);</li>
                      <li class="fonty">Registration Form/Card (Original o Certified True Copy) ng kasalukuyang semestre (1st Semester S.Y 2023-2024).</li>
                    </ol>
                    <li class="fonty">Para sa mga Alternative Learning System (ALS) Graduates: DepEd Certification of Equivalency for ALS Graduate</li>
                  </ol>
                  <li class="fonty">Kopya ng Curriculum na nakadepende sa bilang ng taon/semestre ng kinukuhang Course/Degree</li>
                  <li class="fonty">Kinakailangang dokumento para sa pagkuha ng ATM Cash Card:</li>
                  <ul>
                    <li class="fonty">ATM Cash Card Registration Form (Landbank Form);</li>
                    <li class="fonty">Photocopy ng Valid ID o School ID;</li>
                    <li class="fonty">2x2 ID Picture;</li>
                  </ul>
                </ol>
              </div>
            </div>
          </div>

          <div class="accordion-item" id="accordItem">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" id="AccordBtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <p class="faqsBody">Filing of Application</p>
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFaqs">
              <div class="accordion-body">
                <ol>
                  <li class="fonty">Like and follow the Official Facebook Page of the City Youth and Sports Development Office.</li>
                  <li class="fonty">Wait for the post regarding the Opening of the Online Application.</li>
                  <li class="fonty">Fill out the Google Form/Online Application Form.</li>
                  <li class="fonty">After the successful registration, wait for the schedule of orientation to be posted on the FB Page.</li>
                </ol>
                </details>
                <details>
                  <summary class="dropdown-toggle"><strong>Issuance of Examination Stub</strong></summary>
                  <p>Upon submission of the Application Form during the Orientation, Examination Stub will be released to the applicants.</p>
                </details>
                <details>
                  <summary class="dropdown-toggle"><strong>Announcement of Qualifiers</strong></summary>
                  <p>List of all the CEAP Qualifiers will be posted at the Official Facebook Page of the City Youth and Sports Development Office.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item" id="accordItem">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" id="AccordBtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                <p class="faqsBody">Issuance of Examination Stub</p>
              </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFaqs">
              <div class="accordion-body">
                <p class="fonty fs-6 ms-4">Upon submission of the Application Form during the Orientation, Examination Stub will be released to the applicants.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item" id="accordItem">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" id="AccordBtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                <p class="faqsBody">Announcement of Qualifiers</p>
              </button>
            </h2>
            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFaqs">
              <div class="accordion-body">
                <p class="fonty fs-6 ms-4">List of all the CEAP Qualifiers will be posted at the Official Facebook Page of the City Youth and Sports Development Office.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="contact">
    <p id="Fontsizes">Contact & Address</p>
    <div id="contactHeader">
      <p>You can contact us through the following:</p>
    </div>
    <div id="contactDetails">
      <div class="contactFormat">
        <div class="contactIcon">
          <img src="assets/image/fbIcon.png" />
        </div>
        <div class="contactText">
          <p class="Con-Icon">Facebook Page</p>
          <a class="text-break lh-sm text-decoration-underline fb1" href="https://www.facebook.com/CEAP.CYSDO">https://www.facebook.com/CEAP.CYSDO(City Youth and Sports Development Office – CSJDM)</a>
        </div>
        <div class="contactIcon">
          <img src="assets/image/gmailIcon.png" />
        </div>
        <div class="contactText">
          <p class="Con-Icon">Email</p>
          <a class="gmail text-break text-decoration-underline" href="csjdm.cysdo1@gmail.com">csjdm.cysdo1@gmail.com</a>
        </div>
      </div>
      <div id="contactDetails">
        <div class="contactFormat">
          <div class="contactIcon">
            <img src="assets/image/phone.png" />
          </div>
          <div class="contactText">
            <p class="Con-Icon">Phone</p>
            <li class="text-break lh-sm conNm">(639)905-603-7218</li>
          </div>
          <div class="contactIcon">
            <img src="assets/image/locationIcon.png" />
          </div>

          <div class="contactText">
            <p class="Con-Icon">Address</p>
            <li class="text-break lh-sm Add-ress">Productivity Complex, Barangay Sapang Palay Proper, City of San Jose del Monte, Bulacan</li>
          </div>
        </div>
      </div>
    </div>

</body>

</html>