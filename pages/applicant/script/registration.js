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
        window.location.href = 'instructionsTab.php'; // redirect to the next page
    } else if (disagreeCheckbox.checked) {
        window.location.href = 'index.php';
        alert('Please agree to the terms and conditions');
    } 
    else {
    alert('Please agree to the terms and conditions');
  }
}
