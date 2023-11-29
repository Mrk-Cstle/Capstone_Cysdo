
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="script/registration.js"></script>
    <title>Instructions</title>
</head>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

.header {
    text-align: center;
    padding-top: 100px;
    margin-bottom: 20px;
    text-transform: uppercase;
}

.appli {
    font-size: 26px;
    font-family: 'Poppins';
    color: #272829;
}

#accordItem {
  border-radius: 3px;
  box-shadow: 0px 2px 8px 0px rgba(0, 0, 0, 0.3);
}

#AccordBtn {
  background-color: #BEADFA;
  box-shadow: 0px 2px 8px 0px rgba(0, 0, 0, 0.5);
  border-radius: 3px;
}

.faqsBody {
  font-size: 16px;
  font-weight: 600;
  margin-top: 15px;
  text-transform: uppercase;
}

.fonty {
  font-size: 16px;
  list-style: disc;
  line-height: 2.1;
}

.fonty-1 {
  font-size: 16px;
}

.appBtn {
  text-align: center;
}

@media (max-width: 850px) {
  .appli {
    font-size: 22px;
    font-family: sans-serif;
  }
  .fonty {
    font-size: 14px;
  }
}

@media (max-width: 724px) {
  .appli {
    font-size: 20px;
    font-family: sans-serif;
  }

  .faqsBody {
    font-size: 16px;
    font-weight: 600;
  }
}
</style>

<body>
  <?php
  include 'assets/template/homeNavigation.php';
  ?>
<div class="header">
    <p class="appli">Application Instruction</p>
</div>
<div class="container">
      <div class="accordion accordion-flush" id="accordionFaqs">
        <div class="accordion-item" id="accordItem">
          <h2 class="accordion-header">
            <button class="accordion-button" id="AccordBtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <p class="faqsBody">QUALIFYING EXAMINATION</p>
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFaqs">
            <div class="accordion-body">
                <ul>
                    <li class="fonty">Go to examination place and present the examination stub and waiver (for below 18 y/o).</li>
                    <li class="fonty">Proceed to the assigned examination room with the examination stub and waiver on hand.</li>
                    <li class="fonty">Present the examination stub and waiver to the proctor/s in charge of the room.</li>
                    <li class="fonty">Secure a seat, receive the questionnaire and answer sheet, and listen to the instructions given.</li>
                    <li class="fonty">Proceed to answering the test questions.</li>
                    <li class="fonty">After finishing the examination, pass the questionnaire and answer sheet to the proctor/s, examinee may now leave the room.</li>
                </ul>
            </div>         
          </div>
        </div>
        
        <div class="accordion-item" id="accordItem">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" id="AccordBtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <p class="faqsBody">ORIENTATION</p>
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFaqs">
            <div class="accordion-body">
              <ul>
                <li class="fonty">Attend the CEAP Qualifying Examination Passers Orientation at the venue assigned by the office.</li>
                <li class="fonty">Listen attentively as the deadline of submission of the requirements is being announced.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="accordion-item" id="accordItem">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" id="AccordBtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <p class="faqsBody">SUBMISSION OF REQUIREMENTS and INTERVIEW</p>
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFaqs">
            <div class="accordion-body">
              <ul>
                <li class="fonty">Submit all the requirements to City Youth and Sports Development Office. </li>
                <li class="fonty">Get the received copy of the requirements from the staff. It must have a signature as well as the date received. </li>
                <li class="fonty">Proceed to the Interview Place/Desk within the office. </li>
                <li class="fonty">Wait for announcement of schedule of the Memorandum of Agreement Signing. </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="accordion-item" id="accordItem">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" id="AccordBtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <p class="faqsBody">MEMORANDUM OF AGREEMENT (MOA) SIGNING</p>
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFaqs">
              <div class="accordion-body">
                <ul>
                  <li class="fonty">Look and strictly follow the schedule of MOA Signing posted on the FB page/sent thru a text message or call by the office. </li>
                  <li class="fonty">Arrive on time at the venue of MOA Signing together with a parent. </li>
                </ul>
              </div>
            </div>
          </div>

        <div class="accordion-item" id="accordItem">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" id="AccordBtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <p class="faqsBody">PROCESSING/ENROLLMENT OF NEW LANDBANK ATM CASH CARD</p>
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFaqs">
              <div class="accordion-body">
                <ul>
                  <li class="fonty">Submit the completely accomplished Landbank Cash Card Enrollment Form to the office. </li>
                  <li class="fonty">Claim the New ATM Cash Card at the venue assigned by the office. </li>
                  <li class="fonty">Submit a clear photocopy of the Landbank ATM Cash Card. </li>
                </ul>             
              </div>
            </div>
        </div>

        <div class="accordion-item" id="accordItem">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" id="AccordBtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                <p class="faqsBody">COMMUNITY SERVICE</p>
              </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFaqs">
              <div class="accordion-body">
                <ul>
                <li class="fonty">Go to the LYDD Office and get the endorsement letter from the staff. </li>
                </ul>         
              </div>
            </div>
        </div>

        <div class="accordion-item" id="accordItem">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" id="AccordBtn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                <p class="faqsBody">APPLICATION FORM</p>
              </button>
            </h2>
            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFaqs">
              <div class="accordion-body appBtn">
                <li class="fonty text-center">Note: PLEASE READ ALL THE INSTRUCTIONS BEFORE PROCEEDING TO THE APPLICATION FORM (E-1 FORM)</li>
                <a type="button" href="pages/applicant/registration.php" class="btn btn-outline-success mt-3">Application</a>
                <a type="button" href="../../index.php" class="btn btn-outline-dark ms-2 mt-3">Go Back</a>
              </div>
            </div>
        </div>
      </div>
  </div>
    <!-- <div id="carouselExampleInterval" class="carousel carousel-dark slide" data-bs-touch="true">
      <div class="btnIndicator carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="5" aria-label="Slide 6"></button>
        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="6" aria-label="Slide 7"></button>
        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="7" aria-label="Slide 8"></button>
        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="8" aria-label="Slide 9"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <li class="d-block w-100 text-center">
            <p class="steps">APPLICATION GUIDE</p>
              <li class="car-text text-center">Submit the fully accomplished Application Form (E-1 Form) at the CYSDO</li>
              <li class="car-text text-center">Receive the application stub and make sure that it has the control number and signature from the staff.</li>
              </li>
        </div>
        <div class="carousel-item" data-bs-interval="10000">
          <li class="d-block w-100 text-center" >
            <p class="steps">QUALIFYING EXAMINATION</p>
            <li class="car-text text-center">Go to examination place and present the examination stub and waiver (for below 18 y/o).</li>
            <li class="car-text text-center">Proceed to the assigned examination room with the examination stub and waiver on hand.</li>
            <li class="car-text text-center">Present the examination stub and waiver to the proctor/s in charge of the room.</li>
            <li class="car-text text-center">Secure a seat, receive the questionnaire and answer sheet, and listen to the instructions given.</li>
            <li class="car-text text-center">Proceed to answering the test questions.</li>
            <li class="car-text text-center">After finishing the examination, pass the questionnaire and answer sheet to the proctor/s, examinee may now leave the room.</li>
          </li>
        </div>
        <div class="carousel-item" data-bs-interval="10000">
          <li class="d-block w-100 text-center" >
            <p class="steps">ORIENTATION</p>
            <li class="car-text text-center">Attend the CEAP Qualifying Examination Passers Orientation at the venue assigned by the office.</li>
            <li class="car-text text-center">Listen attentively as the deadline of submission of the requirements is being announced.</li>
          </li>
        </div>
        <div class="carousel-item" data-bs-interval="10000">
          <li class="d-block w-100 text-center" >
            <p class="steps"> SUBMISSION OF REQUIREMENTS and INTERVIEW</p>
            <li class="car-text text-center">Submit all the requirements to City Youth and Sports Development Office. </li>
            <li class="car-text text-center">Get the received copy of the requirements from the staff. It must have a signature as well as the date received. </li>
            <li class="car-text text-center">Proceed to the Interview Place/Desk within the office. </li>
            <li class="car-text text-center">Wait for announcement of schedule of the Memorandum of Agreement Signing. </li>
          </li>
        </div>
        <div class="carousel-item" data-bs-interval="10000">
          <li class="d-block w-100 text-center" >
            <p class="steps">MEMORANDUM OF AGREEMENT (MOA) SIGNING</p>
            <li class="car-text text-center">Look and strictly follow the schedule of MOA Signing posted on the FB page/sent thru a text message or call by the office. </li>
            <li class="car-text text-center">Arrive on time at the venue of MOA Signing together with a parent. </li>
          </li>
        </div>
        <div class="carousel-item" data-bs-interval="10000">
          <li class="d-block w-100 text-center" >
            <p class="steps">PROCESSING/ENROLLMENT OF NEW LANDBANK ATM CASH CARD</p>
            <li class="car-text text-center">Submit the completely accomplished Landbank Cash Card Enrollment Form to the office. </li>
            <li class="car-text text-center">Claim the New ATM Cash Card at the venue assigned by the office. </li>
            <li class="car-text text-center">Submit a clear photocopy of the Landbank ATM Cash Card. </li>
          </li>
        </div>
        <div class="carousel-item" data-bs-interval="10000">
          <li class="d-block w-100 text-center" >
            <p class="steps">RENEWAL</p>
            <li class="car-text text-center">Submit all the documents needed for the renewal of the educational assistance to the office. </li>
            <li class="car-text text-center">Get the received copy from the staff. </li>
          </li>
        </div>
        <div class="carousel-item" data-bs-interval="10000">
          <li class="d-block w-100 text-center" >
            <p class="steps">COMMUNITY SERVICE</p>
            <li class="car-text text-center">Go to the LYDD Office and get the endorsement letter from the staff. </li>
          </li>
        </div>
        <div class="carousel-item" data-bs-interval="10000">
          <li class="d-block w-100 text-center" >
            <p class="steps">YOU CAN NOW PROCEED TO THE APPLICATION</p>
            <a type="button" href="registration.php" class="btn btn-outline-success mt-4">Application</a>
            <a type="button" href="../../index.php" class="btn btn-outline-dark ms-2 mt-4">Go Back</a>
            <li class="note text-center">Note: PLEASE READ ALL THE INSTRUCTIONS BEFORE PROCEEDING TO THE APPLICATION FORM (E-1 FORM)</li>
          </li>
        </div>
      </div>
      <button class="carousel-control-prev position-fixed" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next position-fixed" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div> -->
   
</body>
</html>