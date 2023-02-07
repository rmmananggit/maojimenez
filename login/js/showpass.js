const togglePassword = 
    document.querySelector('#togglePassword'); 
    const password = document.querySelector('#password');
  
togglePassword.addEventListener('click', function (e) {
  
	// Toggle the type attribute
	const type = password.getAttribute(
	'type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
  
    // Toggle the eye slash icon
    if (togglePassword.src.match("images/eye-close.png")) {
        togglePassword.src ="images/eye-open.png";
        } else {
            togglePassword.src ="images/eye-close.png";
        }
});