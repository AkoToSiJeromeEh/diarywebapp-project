const inputUsername = document.getElementById('input-username');
const inputPassword = document.getElementById('input-password');

const emailError = document.getElementById('emailErr');
const passwordError = document.getElementById('passErr');

const formLoginContainer = document.getElementById('form-login');

const inputError = (field, error, input) => {
  const styleRed = 'red';
  field.style.color = styleRed;
  field.innerHTML = error;
  field.style.fontSize = '1rem';
  field.style.fontWeight = 'bolder';
  input.style.borderColor = styleRed;
  input.style.borderWidth = '0.2rem';
  field.classList.add('animate__animated', 'animate__shakeX');
};

const clearError = (field, input) => {
  field.innerHTML = '';
  input.style.borderColor = '';
};

const validateInputs = () => {
  if (inputUsername.value === '' && inputPassword.value === '') {
    inputError(emailError, 'Please Enter Username! Required...', inputUsername);
    inputError(passwordError, 'Please Enter Password! Required...', inputPassword);
    setTimeout(() => {
      clearError(emailError, inputUsername);
      clearError(passwordError, inputPassword);
    }, 10000);

    return false;
  }
  return true;
};

formLoginContainer.addEventListener('submit', (e) => {
  if (!validateInputs()) {
    e.preventDefault(); 
  }
});
