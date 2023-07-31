let formLogin = document.querySelector('.form-login');
let formRegister = document.querySelector('.form-register');
let logBtn = document.querySelector('.log-btn');
let regBtn = document.querySelector('.reg-btn');

if(logBtn && formLogin && formRegister) {
  logBtn.addEventListener('click', function(e) {
    e.preventDefault();
    formRegister.classList.toggle('hide-form');
    formLogin.classList.toggle('display-form');
    logBtn.classList.toggle('hide-btn');
    regBtn.classList.toggle('display-btn');
  });
  
  regBtn.addEventListener('click', function(e) {
    e.preventDefault();
    formRegister.classList.toggle('hide-form');
    formLogin.classList.toggle('display-form');
    logBtn.classList.toggle('hide-btn');
    regBtn.classList.toggle('display-btn');
  });
}

let submitFormOne = document.querySelector('#form-1');
let submitFormTwo = document.querySelector('#form-2');
let regSubmit = document.querySelector('.submit-reg-btn');
let loginSubmit = document.querySelector('.submit-log-btn');

if(loginSubmit) {
  let link = 'http://localhost/LocalServer/apprenticship/code_challenges/pixspin/home_page.php';
  loginSubmit.addEventListener('click', (e) => {
    e.preventDefault();
    const formData = new FormData(submitFormTwo);
    fetch('functions/user_login_function.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(result => {
      if (result.status === 'error') {
        // Handle error (e.g., display error message to user)
        alert(result.message);
      } else {
        window.location.href = link;
      }
    })
    .catch(error => {
      // Handle fetch error
      alert('An error occurred during the login attempt. Please try again later.');
      console.log('Error:', error);
    });
      });
}

if(regSubmit) {
  let link = 'http://localhost/LocalServer/apprenticship/code_challenges/pixspin/home_page.php';

  regSubmit.addEventListener('click', (e) => {
    e.preventDefault();
    const formData = new FormData(submitFormOne);
    fetch('functions/user_login_function.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(result => {
      if (result.status === 'error') {
        // Handle error (e.g., display error message to user)
        alert(result.message);
      } else {
        window.location.href = link;
      }
    })
    .catch(error => {
      // Handle fetch error
      alert('An error occurred during the login attempt. Please try again later.');
      console.log('Error:', error);
    });
  });
}

/*********** / end login and register ***********/