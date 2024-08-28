 // Function to get the geolocation
 function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        alert("Geolocation is not supported by this browser.");
    }
}

// Function to handle the retrieved position
function showPosition(position) {
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    document.getElementById("location").value = latitude + "," + longitude;
}

// Call getLocation() when the page loads
window.onload = function () {
    getLocation();
};



function preview_image(event) {
    var reader = new FileReader();
    reader.onload = function () {
        var output = document.getElementById('output_image');
        output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}
//full name validation
document.getElementById('full_name').addEventListener('input', function () {
    const fullName = this.value.trim();
    const nameiconCheck = document.querySelector('#name-icon .fa-circle-check');
    const nameiconTimes = document.querySelector('#name-icon .fa-circle-exclamation');
    const namemessage = document.getElementById('name-message');

    // Simple full name validation regex
    // Ensures at least two words separated by a space, no special characters, and a minimum length
    const fullNamePattern = /^[A-Za-z]+(?: [A-Za-z]+){1,}$/;

    if (fullNamePattern.test(fullName)) {
        nameiconCheck.style.visibility = 'visible';
        nameiconTimes.style.visibility = 'hidden';
        namemessage.textContent = '';
    } else {
        nameiconCheck.style.visibility = 'hidden';
        nameiconTimes.style.visibility = 'visible';
        namemessage.textContent = 'Please enter a valid full name (e.g., Sunil Bhattarai)';
    }
});



//email validation
document.getElementById('email').addEventListener('input', function () {
    const email = this.value;
    const emailiconCheck = document.querySelector('#email-icon .fa-circle-check');
    const emailiconTimes = document.querySelector('#email-icon .fa-circle-exclamation');
    const emailmessage = document.getElementById('email-message');

    // Advanced email validation regex
    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    if (emailPattern.test(email)) {
        emailiconCheck.style.visibility = 'visible';
        emailiconTimes.style.visibility = 'hidden';
        emailmessage.textContent = '';
    } else {
        emailiconCheck.style.visibility = 'hidden';
        emailiconTimes.style.visibility = 'visible';
        emailmessage.textContent = 'Invalid email address(e.g., sunilbhattarai131@gmail.com)';
    }
});


// Password validation and strength check
document.getElementById('password1').addEventListener('input', function () {
    const password = this.value;
    const passwordIconCheck = document.querySelector('#password-icon .fa-circle-check');
    const passwordIconTimes = document.querySelector('#password-icon .fa-circle-exclamation');
    const passwordMessage = document.getElementById('password-message');
    const passwordStrength = document.getElementById('password-strength');

    // Password strength validation regex
    const strongPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z\d]).{8,}$/;
    const mediumPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{6,}$/;

    let strengthText = "";
    if (strongPattern.test(password)) {
        strengthText = "Very Strong";
        passwordStrength.style.color = "green";
    } else if (mediumPattern.test(password)) {
        strengthText = "Moderate";
        passwordStrength.style.color = "orange";
    } else if (password.length >= 6) {
        strengthText = "Weak";
        passwordStrength.style.color = "red";
    } else {
        strengthText = "";
    }

    passwordStrength.innerText = strengthText;

    if (strongPattern.test(password)) {
        passwordIconCheck.style.visibility = 'visible';
        passwordIconTimes.style.visibility = 'hidden';
        passwordMessage.textContent = '';
    } else {
        passwordIconCheck.style.visibility = 'hidden';
        passwordIconTimes.style.visibility = 'visible';
        passwordMessage.textContent = 'Password must be at least 8 characters long including uppercase, lowercase, number, and special character';
    }
});

// Confirm password validation
document.getElementById('password2').addEventListener('input', function () {
    const password = document.getElementById('password1').value;
    const confirmPassword = this.value;
    const confirmPasswordIconCheck = document.querySelector('#confirm-password-icon .fa-circle-check');
    const confirmPasswordIconTimes = document.querySelector('#confirm-password-icon .fa-circle-exclamation');
    const confirmPasswordMessage = document.getElementById('confirm-password-message');

    if (confirmPassword === password && confirmPassword !== '') {
        confirmPasswordIconCheck.style.visibility = 'visible';
        confirmPasswordIconTimes.style.visibility = 'hidden';
        confirmPasswordMessage.textContent = '';
    } else {
        confirmPasswordIconCheck.style.visibility = 'hidden';
        confirmPasswordIconTimes.style.visibility = 'visible';
        confirmPasswordMessage.textContent = 'Passwords do not match.';
    }
});

// Toggle password visibility
function togglePasswordVisibility(fieldId) {
    const passwordField = document.getElementById(fieldId);
    const icon = passwordField.nextElementSibling;
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    } else {
        passwordField.type = 'password';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    }
}


// Phone number validation
document.getElementById('phone_no').addEventListener('input', function () {
    const phoneNo = this.value.trim();
    const phoneIconCheck = document.querySelector('#phone-icon .fa-circle-check');
    const phoneIconTimes = document.querySelector('#phone-icon .fa-circle-exclamation');
    const phoneMessage = document.getElementById('phone-message');

    // Phone number validation regex (10 digits)
    const phonePattern = /^\d{10}$/;

    if (phonePattern.test(phoneNo)) {
        phoneIconCheck.style.visibility = 'visible';
        phoneIconTimes.style.visibility = 'hidden';
        phoneMessage.textContent = '';
    } else {
        phoneIconCheck.style.visibility = 'hidden';
        phoneIconTimes.style.visibility = 'visible';
        phoneMessage.textContent = 'Please enter a valid 10-digit phone number';
    }
});


// Address validation 
document.getElementById('address').addEventListener('input', function () {
    const address = this.value.trim();
    const addressIconCheck = document.querySelector('#address-icon .fa-circle-check');
    const addressIconTimes = document.querySelector('#address-icon .fa-circle-exclamation');
    const addressMessage = document.getElementById('address-message');

    // Address validation regex 
    const addressPattern = /^[A-Za-z\s,.-/]+(?: [A-Za-z0-9\s,.-/]+)*$/;

    if (addressPattern.test(address) && address.length >= 5) {
        addressIconCheck.style.visibility = 'visible';
        addressIconTimes.style.visibility = 'hidden';
        addressMessage.textContent = '';
    } else {
        addressIconCheck.style.visibility = 'hidden';
        addressIconTimes.style.visibility = 'visible';
        addressMessage.textContent = 'Please enter a valid address (e.g., Thamel, Kathmandu)';
    }
});


function Validate() {
    var password = document.getElementById("password1").value;
    var confirmPassword = document.getElementById("password2").value;
    if (password != confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }
    return true;
}