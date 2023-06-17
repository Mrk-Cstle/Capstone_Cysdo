

// const form = document.getElementById('registrationForm');

// function redirectToNextPage(event) {
//   event.preventDefault(); // prevent the form from submitting normally

//   const agreeCheckbox = document.getElementById('agree');
//   if (agreeCheckbox.checked) {
//     window.location.href = 'Registration.html'; // redirect to the next page
//   } else {
//     alert('Please agree to the terms and conditions');
//   }
// }

// form.addEventListener('submit', redirectToNextPage);

function goToPreviousPage() {
    
    window.location.href = 'index.php';
	
}
function goToTerms() {
    
    window.location.href = 'termsRegistration.php';
	
}

function goToSubmit() {
    const agreeCheckbox = document.getElementById('agree');
    const disagreeCheckbox = document.getElementById ('disagree');
    if (agreeCheckbox.checked) {
        window.location.href = 'registration.php'; // redirect to the next page
    } else if (disagreeCheckbox.checked) {
        window.location.href = 'index.php';
        alert('Please agree to the terms and conditions');
    } 
    else {
    alert('Please agree to the terms and conditions');
  }
}
