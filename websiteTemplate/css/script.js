const form = document.querySelector('.signup-form');
const username = document.querySelector('#username');
const email = document.querySelector('#email');
const password = document.querySelector('#password');
const confirmPassword = document.querySelector('#confirm-password');

form.addEventListener('submit', (event) => {
	event.preventDefault();
	
	if (password.value !== confirmPassword.value) {
		alert('Passwords do not match!');
		return;
	}
	
	// Code to handle form submission
	console.log('Form submitted');
});
