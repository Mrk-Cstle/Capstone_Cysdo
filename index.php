<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>CYSDO Scholar</title>
</head>

  <style>
    /* Main */
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    main {
      display: block;
      width: 100%;
    }

    .homeimg {
      margin-top: 65px;
    }

    #about {
      display: flex;
      flex-direction: row;
      padding: 10px 10px;
      background-color: whitesmoke;
    }

    #aboutPic {
      width: 40%;
      display: flex;
      justify-items: center;
    }

    #aboutInfo {
      width: 60%;
      display: flex;
      flex-direction: column;
      margin-left: 60px;
    }

    .aboutFormat {
      margin: 40px 5px;
    }

    .aboutFormat p,
    li {
      font-size: 20px;
      line-height: 1.8;
    }

    .aboutFormat h3 {
      font-size: 40px;
      margin-bottom: 20px;
    }

    #FontSize {
      font-size: 40px;
      font-weight: 600px;
      text-align: justify;
    }

    @media (max-width: 850px){
      #aboutPic {
        display: none;
      }
      .aboutFormat li, h3 {
      font-size: 14px;
      margin-left: 50px;
    }
    }

    #aboutPic img {
      width: 100%;
      height: auto;

    }

    #faqs {
      width: 100%;
      display: flex;
      background-color: #e6e6e6;
      flex-direction: column;
      padding: 0px 80px;
      margin: 0px;
      line-height: 1.8;
    }

    #collapseTwo p {
      font-size: 18px;
    }

    #collapseThree p {
      font-size: 18px;
    }

    #collapseSix p {
      font-size: 18px;
    }

    #collapseSeven p {
      font-size: 18px;
    }

    #faqs h3 {
      font-size: 40px;
    }

    #faqsHeader {
      width: 100%;
    }

    strong {
      text-transform: uppercase;
    }
    
    #accordItem {
      border: 0.2px solid black;
    }

    #AccordBtn {
      background-color: powderblue;
    }

    #contact {
      width: 100%;
      display: flex;
      flex-direction: column;
      padding: 0px 80px;
      margin: auto;
      line-height: 1.8;
    }

    #Fontsizes {
      font-size: 40px;
      font-weight: 600px;
      text-align: justify;
    }

    @media (max-width: 850px){
      #Fontsizes {
      font-size: 30px;
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
      font-size: 20px;
    }

    #contactDetails {
      width: 100%;
      margin-bottom: 200px;

    }

    .contactText {
      background-color: #d2c8c1;
    }

    .contactText a,
    p {
      font-size: 15px;
    }

    .contactFormat {
      display: flex;
      flex-direction: row;
      gap: 10px;
      margin-top: 50px;
    }

    .contactIcon {
      height: 100px;
      width: 5%;
      margin-right: 20px;
      height: auto;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 10px;
    }

    .contactIcon img {
      height: 70px;
      width: auto;
    }

    .contactText {
      display: inline-block;
      height: 100px;
      width: 95%;
      border: 1px solid black;
      border-radius: 5px;
      padding: 15px;
    }

    #FontSize {
      font-size: 40px;
      font-weight: 600px;
      text-align: justify;
    }

    @media (max-width: 850px){
      #FontSize {
      font-size: 30px;
      text-align: center;
      margin-top: 10px;
      }
    }

  </style>

<body>
  <?php
  include 'assets/template/homeNavigation.php';
  ?>
  <main>
    <div class="1">
    <img src="assets/image/s.jpg" class="img-fluid homeimg">
    </div>

    <div id="2"></div>
  </main>
  <div id="about">
    <div id="aboutPic" class="img-fluid">
      <img src="assets/image/CysdoLogo.png" />
    </div>

    <div id="aboutInfo">
      <div class="aboutFormat">
        <p id="FontSize">MANDATE</p>
        <li>Assist the City Mayor in the implementation of the Constitutional Provisions
          relative to youth development through promotion of its youth welfare
          enhancement, sport, and education programs and become a progressive
          community with competent youth thriving in a vibrant economy.</li>
      </div>
      <div class="aboutFormat">
      <p id="FontSize">VISION</p>
        <li>A highly efficient office who caters comprehensively to the needs of the youth
          sector integral to the over-all enhancement and relevant social transformation of
          San Joseños.</li>
      </div>
      <div class="aboutFormat">
      <p id="FontSize">MISSION</p>
          <li>Provide quality service to young clientele.</li>
          <li>Promote holistic development both in-school and out-of-school youth.</li>
          <li>Strengthen the capacity level of young people to make them competitive in the
            National and Global Market.
          </li>
          <li>Empower the youth sector to become dynamic leaders.</li>
      </div>
    </div>
  </div>
  <div id="faqs">
    <div id="faqsHeader">
    <p id="FontSize">Frequently Asked Questions</p>

    <div class="container-sm mb-5">
      <div class="accordion accordion-flush" id="accordionFaqs">
        <div class="accordion-item" id="accordItem">
          <h2 class="accordion-header">
            <button class="accordion-button" id="AccordBtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <strong>Who Can Apply?</strong>
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFaqs">
            <div class="accordion-body">
                <ul>
                    <li>Incoming college students/ Current college students (30 years old andbelow only)</li>
                    <li>Bonafide resident of the City of San Jose Del Monte, Bulacan</li>
                </ul>
            </div>         
          </div>
        </div>
        
        <div class="accordion-item" id="accordItem">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" id="AccordBtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <strong>When To Apply?</strong>
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFaqs">
            <div class="accordion-body">
                <p class="ms-4">Online application usually happens on the 1st quarter of every year. The online application will be posted on our FB Page: <strong> City Youth and Sports Development Office - CSJDM.</strong></p>
            </div>
          </div>
        </div>

        <div class="accordion-item" id="accordItem">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" id="AccordBtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <strong>What are the Qualifications?</strong>
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFaqs">
            <div class="accordion-body">
                <p class="ms-3">Ang lokal na pamahalaan ng Lungsod ng San Jose Del Monte ay patuloy na naghahatid ng programang pang-edukasyon sa mga kabataang San Joseños na mas kilala bilang City Educational Assistance Program (CEAP). Itinataguyod nito ang layunin na makapagbigay ng tulong pinansiyal sa mga kabataan upang makapagtapos ng pag-aaral.</p>

                <h5><strong>QUALIFICATIONS:</strong></h5>
                <ol>
                  <li>Filipino, may asawa o wala, at naninirahan sa Lungsod ng San Jose Del Monte sa loob ng tatlo (3) o mahigit pang taon, nakapagtapos ng sekondarya sa alin mang paaralan sa Lungsod, pribado man o pampubliko. Kung hindi naman nakapagtapos sa Lungsod ay kinakailangang residente nito sa nakalipas na limang (5) taon.</li>
                  <li>Hindi lalagpas ng 30 taon ang edad sa araw ng paghahain ng aplikasyon.</li>
                  <li>Hindi bababa sa 76% (passing grade) ang general average sa huling taon sa Senior High School.</li>
                  <li>Kailangang mapanatili ang 15 enrolled units lakip ang Curriculum or SYLLABUS per semester maliban sa mga magtatapos o graduating students.</li>
                  <li>Maaring magpatala sa anumang kursong kanilang nanaisin maging Degree Course (4-year o 5-year courses). o Non-Degree Course (3-year o 2-year courses).</li>
                  <li>Ang inyong aplikasyon ay hindi garantiya na kayo ay tanggap na, kailangang sumailalim at pumasa sa mga sumusunod:</li>
                  <ol>
                    <li>Qualifying Examination</li>
                    <li>Interview</li>
                    <li>Community Investigation</li>
                  </ol>
                  <li>May mabuting asal (Certificate of Good Moral).</li>
                  <li>Tinatangkilik lamang ang magulang na may pinagsamang kita na hindi hihigit sa P25,000.00 kada buwan o P300,000.00 bawat taon.</li>
                  <li>Isa lamang sa bawat pamilya ang maaaring mabigyan ng Educational Assistance, sa pasubali na kung nakatapos na sa kolehiyo ang isang iskolar ay doon pa lang maaaring magkaroon ng pagkakataon na maging iskolar ang isa sa kanyang kapatid, maliban din naman kung kambal o triplet o quadruplet ay bibigyan ng exemption sa aytem na ito.</li>
                  <li>Walang tinatanggap na educational assistance o scholarship sa kahit anong ahensya o organisasyon ng Gobyerno at iba pang Lokal na Pamahalaan.</li>
                  <li>Ang mga mag-aaral ng City College of San Jose Del Monte <strong>(CCSJDM)</strong> at Bulacan State University-Sarmiento Campus <strong>(BSU-SC)</strong> o kahit anong State University o College sa loob ng Lungsod ng San Jose Del Monte na sumasailalim sa <strong>UNIFAST</strong> – Free Higher Education Program ay HINDI NA maaring maging benepisyaryo ng City Educational Assistance Program (CEAP).</li>
                </ol>            
            </div>
          </div>
        </div>

        <div class="accordion-item" id="accordItem">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" id="AccordBtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <strong>Initial Requirements</strong>
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFaqs">
              <div class="accordion-body">
                <p class="fs-5"><strong>PAALALA:</strong></p>
                <ul>
                  <li>Ang LAHAT NG REQUIREMENTS na ito ay IPAPALIWANAG SA ARAW NG ORIENTATION.</li>
                  <li>Kung hindi makakarating sa araw ng orientation ang aplikante, maaaring ang PARENT O GUARDIAN ang dumalo.</li>
                  <li>Hindi na bibigyan ng pangalawang pagkakataon ang mga NAG-REGISTER ONLINE NA HINDI MAKAKARATING SA ORIENTATION.</li>
                  <li>Ang initial requirements ay kinakailangang MAKUMPLETO upang payagang makapag-exam ang aplikante.</li>
                </ul>
                <ol>
                  <li><strong>FOR APPLICANTS:</strong></li>
                  <ol>
                    <li>Birth Certificate (PSA);</li>
                    <li>Cedula ng aplikante na may edad 18 taon pataas;</li>
                    <li>Certificate of Good Moral Character (Date Issued: 2023) Endorsement Letter</li>
                    <li>Certificate of Residency (No. of years of residency must be indicated)</li>
                    <li>Sketch ng inyong bahay mula sa barangay (sketch o map)</li>
                    <li>Litrato ng permanenteng tirahan (labas at loob);</li>
                    <li>Voter's Stub/Certification (Kung wala pa nito ay kinakailangang magpa-rehistro sa COMELEC kapag nag-resume na ang registration).</li>
                  </ol>
                  <li><strong>FOR PARENT/GUARDIAN:</strong></li>
                  <ol>
                    <li>Cedula</li>
                    <li>Indigency Certificate from Barangay</li>
                    <li>Solo Parent I.D</li>
                    <li>Notarized Guardianship Certificate from Barangay</li>
                  </ol>
                </ol>
                <p class="fs-5"> Kung kayo ay MAKAKAPASA sa QUALIFYING EXAMINATION, narito ang FINAL REQUIREMENTS na kailangang asikasuhin:</p>
                <ol>
                  <li>Katunayan ng taunang pinagsamang kita ng magulang:</li>
                  <ol>
                    <li>TAX EXEMPTION CERTIFICATE from BIR para sa walang pirmihang pinagkakakitaan o hindi nagbabayad ng buwis;</li>
                    <li>INCOME TAX RETURN (Year 2022) para sa may pirmihang pinagkakakitaan o nagbabayad ng buwis.</li>
                    <li>Latest copy of contract or Proof of Income for children of OFWs</li>
                  </ol>
                  <li>Health Certificate (City Health Office)</li>
                  <li>Katunayan ng enrollment at nakamit na grado mula sa paaralan:</li>
                  <ol>
                    <li>Para sa mga SHS Graduates/Incoming College Students:</li>
                    <ol>
                      <li>Form 138 (Original o Certified True Copy);</li>
                      <li>Registration Form/Card 1st Semester S.Y 2023-2024 (Original o Certified True Copy) ng kasalukuyang semestre sa kolehiyo.</li>
                    </ol>
                    <li>Para sa mga nasa Kolehiyo:</li>
                    <ol>
                      <li>Registration Card/Form (Original o Certified True Copy) noong nakaraang semestre (2nd Semester S.Y 2022-2023);</li>
                      <li>Certificate of Grades (Original o Certified True Copy) noong nakaraang semestre (2nd Semester S.Y 2022-2023);</li>
                      <li>Registration Form/Card (Original o Certified True Copy) ng kasalukuyang semestre (1st Semester S.Y 2023-2024).</li>
                    </ol>
                    <li>Para sa mga Alternative Learning System (ALS) Graduates: DepEd Certification of Equivalency for ALS Graduate</li>
                  </ol>
                  <li>Kopya ng Curriculum na nakadepende sa bilang ng taon/semestre ng kinukuhang Course/Degree</li>
                  <li>Kinakailangang dokumento para sa pagkuha ng ATM Cash Card:</li>
                  <ul>
                    <li>ATM Cash Card Registration Form (Landbank Form);</li>
                    <li>Photocopy ng Valid ID o School ID;</li>
                    <li>2x2 ID Picture;</li>
                  </ul>
                </ol>              
              </div>
            </div>
          </div>

        <div class="accordion-item" id="accordItem">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" id="AccordBtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <strong>Filing of Application</strong>
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFaqs">
              <div class="accordion-body">
                <ol>
                    <li>Like and follow the Official Facebook Page of the City Youth and Sports Development Office.</li>
                    <li>Wait for the post regarding the Opening of the Online Application.</li>
                    <li>Fill out the Google Form/Online Application Form.</li>
                    <li>After the successful registration, wait for the schedule of orientation to be posted on the FB Page.</li>
                  </ol>
                </details>
                <details>
                  <summary class="dropdown-toggle"><strong>Issuance of Examination Stub</strong></summary>
                  <p class="fs-5">Upon submission of the Application Form during the Orientation, Examination Stub will be released to the applicants.</p>
                </details>
                <details>
                  <summary class="dropdown-toggle"><strong>Announcement of Qualifiers</strong></summary>
                  <p class="fs-5">List of all the CEAP Qualifiers will be posted at the Official Facebook Page of the City Youth and Sports Development Office.</p>              
              </div>
            </div>
        </div>

        <div class="accordion-item" id="accordItem">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" id="AccordBtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                <strong>Issuance of Examination Stub</strong>
              </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFaqs">
              <div class="accordion-body">
                <p class="ms-4">Upon submission of the Application Form during the Orientation, Examination Stub will be released to the applicants.</p>   
              </div>
            </div>
        </div>

        <div class="accordion-item" id="accordItem">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" id="AccordBtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                <strong>Announcement of Qualifiers</strong>
              </button>
            </h2>
            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFaqs">
              <div class="accordion-body">
                <p class="ms-4">List of all the CEAP Qualifiers will be posted at the Official Facebook Page of the City Youth and Sports Development Office.</p>              
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
          <h5>Facebook Page</h5>
          <a class="text-break lh-sm text-decoration-underline" href="https://www.facebook.com/CEAP.CYSDO">https://www.facebook.com/CEAP.CYSDO(City Youth and Sports Development Office – CSJDM)</a>
        </div>
      </div>
      <div class="contactFormat">
        <div class="contactIcon">
          <img src="assets/image/gmailIcon.png" />
        </div>
        <div class="contactText">
          <h5>Email</h5>
          <a class="text-break text-decoration-underline" href="csjdm.cysdo1@gmail.com">csjdm.cysdo1@gmail.com</a>
        </div>
      </div>
      <div class="contactFormat">
        <div class="contactIcon">
          <img src="assets/image/callIcon.png" />
        </div>
        <div class="contactText">
          <h5>Contact No.</h5>
          <li class="text-break lh-sm">(639)905-603-7218</li>
        </div>
      </div>
      <div class="contactFormat">
        <div class="contactIcon">
          <img src="assets/image/locationIcon.png" />
        </div>
        <div class="contactText">
          <h5>Address</h5>
          <li class="text-break lh-sm">Productivity Complex, Barangay Sapang Palay Proper, City of San Jose del Monte, Bulacan</li>
        </div>
      </div>
    </div>
  </div>

</body>

</html>