document.addEventListener('DOMContentLoaded', () => {
    //tombol back-btn
    const backButton = document.querySelector('.back-btn');
  
    backButton.addEventListener('click', (event) => {
      event.preventDefault(); 
      window.location.href = 'tampilanawal'; 
    });
  
    const loginButton = document.querySelector('.submit-btn');

    loginButton.addEventListener('click', (event) => {
        event.preventDefault();
        window.location.href = '/home'; 
    });
  });
  