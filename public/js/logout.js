document.addEventListener('DOMContentLoaded', () => {
    const logoutLink = document.getElementById('logout-link');
    const logoutModal = document.getElementById('logout-modal');
    const cancelLogoutBtn = document.getElementById('cancel-logout');
    const confirmLogoutBtn = document.getElementById('confirm-logout');

    // Show modal when logout is clicked
    logoutLink.addEventListener('click', (e) => {
        e.preventDefault(); // Prevent default link behavior
        logoutModal.classList.remove('none');
    });

    // Close modal when cancel is clicked
    cancelLogoutBtn.addEventListener('click', () => {
        logoutModal.classList.add('none');
    });

    // Handle logout confirmation
    confirmLogoutBtn.addEventListener('click', () => {
        alert('Anda telah logout!'); // Simulate logout action
        window.location.href = 'login'; // Replace with your login page route
    });
});
