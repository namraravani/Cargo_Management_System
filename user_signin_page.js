const form = document.getElementById('loginForm');
const usernameInput = document.getElementById('username');
const emailInput = document.getElementById('email');
const cityInput = document.getElementById('city');
const dobInput = document.getElementById('dob');

form.addEventListener('submit', (event) => {
	event.preventDefault();

	if (validateInputs()) {
		// Perform login
		alert('Login successful!');
	}
});

function validateInputs() {
	let isValid = true;

	if (usernameInput.value === '') {
		isValid = false;
		usernameInput.classList.add('invalid');
	} else {
		usernameInput.classList.remove('invalid');
	}

	if (emailInput.value === '') {
		isValid = false;
		emailInput.classList.add('invalid');
	} else {
		emailInput.classList.remove('invalid');
	}

	if (cityInput.value === '') {
		isValid = false;
		cityInput.classList.add('invalid');
	} else {
		cityInput.classList.remove('invalid');
	}

	if (dobInput.value === '') {
		isValid = false;
		dobInput.classList.add('invalid');
	} else {
		dobInput.classList.remove('invalid');
	}

	return isValid;
}
