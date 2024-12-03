<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="profile">
                <div class="profile-img"></div>
                <h3>Si Bera-bera (Admin)</h3>
                <p>ID: (001)</p>
                <p>Looking for orders</p>
            </div>
            <nav>
                <ul>
                    <li><a href="mywarnet">My Warnet</a></li>
                    <li><a href="profile" class="active">Profile</a></li>
                    <li><a href="logout">Logout</a></li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="content">
            <h1>Profile</h1>
            <form id="profile-form">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" value="bonekaambalabu3663@gmail.com" disabled>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" value="Si Bera-bera" disabled>
                </div>
                <div class="form-group">
                    <label>ID</label>
                    <input type="text" value="001" disabled>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <div class="password-container">
                        <input type="password" value="********" id="password" disabled>
                        <button type="button" class="toggle-password" onclick="togglePasswordVisibility()">👁️</button>
                    </div>
                </div>
                <button type="button" id="change-password-btn" class="action-btn" onclick="showChangePasswordForm()">Ubah Password</button>
                <button type="button" id="save-profile-btn" class="action-btn" onclick="saveProfile()">Simpan Perubahan</button>
            </form>

            <!-- Change Password Form -->
            <form id="change-password-form" class="hidden">
                <div class="form-group">
                    <label>Password Baru</label>
                    <input type="password" id="new-password">
                </div>
                <div class="form-group">
                    <label>Konfirmasi Password</label>
                    <input type="password" id="confirm-password">
                </div>
                <button type="button" class="action-btn" onclick="updatePassword()">Ubah Password</button>
            </form>
        </div>
    </div>

    <script src="profile.js"></script>
</body>
</html>
