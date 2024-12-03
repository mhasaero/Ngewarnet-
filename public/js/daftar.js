document.addEventListener('DOMContentLoaded', () => {
    //tombol back-btn
    const backButton = document.querySelector('.back-btn');
  
    backButton.addEventListener('click', (event) => {
      event.preventDefault(); 
      window.location.href = 'tampilanawal'; 
    });
  
    const submitButton = document.querySelector('.submit-btn');
  
    submitButton.addEventListener('click', (event) => {
      event.preventDefault(); 
      window.location.href = 'login'; 
    });
  });
  