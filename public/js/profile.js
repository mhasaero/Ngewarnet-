document.addEventListener('DOMContentLoaded', () => {
    const formInputs = document.querySelectorAll('#profile-form input');
    const changePasswordBtn = document.getElementById('change-password-btn');
    const saveProfileBtn = document.getElementById('save-profile-btn');

    // Mengaktifkan kolom input untuk diedit
    saveProfileBtn.addEventListener('click', () => {
        if (saveProfileBtn.textContent === 'Simpan Perubahan') {
            // Aktifkan semua input
            formInputs.forEach((input) => {
                if (input.id !== 'password') { // Tetap disabled untuk password
                    input.disabled = false;
                }
            });

            saveProfileBtn.textContent = 'Simpan'; // Ubah teks tombol
        } else {
            // Ambil nilai dari semua kolom yang telah diedit
            const updatedProfile = {};
            formInputs.forEach((input) => {
                updatedProfile[input.id] = input.value;
                input.disabled = true; // Kunci kembali input setelah disimpan
            });

            // Simpan perubahan ke server (simulasi)
            console.log('Perubahan disimpan:', updatedProfile);

            // Reset tombol setelah menyimpan
            saveProfileBtn.textContent = 'Simpan Perubahan';

            alert('Perubahan telah disimpan!');
        }
    });

    // Tampilkan/ubah form password
    changePasswordBtn.addEventListener('click', () => {
        document.getElementById('change-password-form').classList.toggle('hidden');
    });
});

// Fungsi untuk menampilkan/mengubah visibilitas password
function togglePasswordVisibility() {
    const passwordInput = document.getElementById('password');
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
    } else {
        passwordInput.type = 'password';
    }
}

// Fungsi untuk memperbarui password
function updatePassword() {
    const newPassword = document.getElementById('new-password').value;
    const confirmPassword = document.getElementById('confirm-password').value;

    if (newPassword !== confirmPassword) {
        alert('Password baru dan konfirmasi tidak sesuai!');
        return;
    }

    // Simulasi penyimpanan password baru
    console.log('Password baru disimpan:', newPassword);
    alert('Password berhasil diubah!');

    // Sembunyikan form perubahan password
    document.getElementById('change-password-form').classList.add('hidden');
}
