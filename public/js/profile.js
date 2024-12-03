// Menampilkan/Menyembunyikan Password
function togglePasswordVisibility() {
    const passwordInput = document.getElementById('password');
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
    } else {
        passwordInput.type = 'password';
    }
}

// Menampilkan Form Ubah Password
function showChangePasswordForm() {
    document.getElementById('change-password-form').classList.remove('hidden');
    document.getElementById('profile-form').classList.add('hidden');
}

// Menyimpan Perubahan Profile
function saveProfile() {
    alert('Perubahan profil berhasil disimpan!');
    // Di sini tambahkan kode untuk mengirim data ke server menggunakan AJAX atau fetch
}

// Mengubah Password
function updatePassword() {
    const newPassword = document.getElementById('new-password').value;
    const confirmPassword = document.getElementById('confirm-password').value;

    if (newPassword === confirmPassword && newPassword !== '') {
        alert('Password berhasil diubah!');
        document.getElementById('change-password-form').classList.add('hidden');
        document.getElementById('profile-form').classList.remove('hidden');
        // Di sini tambahkan kode untuk mengirim data password ke server
    } else {
        alert('Password tidak cocok atau kosong. Silakan coba lagi!');
    }
}
