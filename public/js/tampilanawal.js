document.addEventListener('DOMContentLoaded', () => {
    const daftarButton = document.querySelector('.btn-primary');
    const loginButton = document.querySelector('.btn-secondary');
  
    daftarButton.addEventListener('click', () => {
      window.location.href = 'daftar'; // Ganti '/halamandaftar' dengan URL halaman daftar
    });
  
    loginButton.addEventListener('click', () => {
      window.location.href = 'login'; // Ganti '/halamanlogin' dengan URL halaman login
    });
  });
  