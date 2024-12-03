<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout Modal</title>
    <link rel="stylesheet" href="{{ asset('css/logout.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="profile">
                <div class="profile-img"></div>
                <h3>Si Bera-bera (Admin)</h3>
                <p>UID: (001)</p>
                <p>Looking for orders</p>
            </div>
            <nav>
                <ul>
                    <li><a href="mywarnet">My Warnet</a></li>
                    <li><a href="profile">Profile</a></li>
                    <li><a href="logout" class="active">Logout</a></li>
                </ul>
            </nav>
        </div>

        <!-- Logout Modal -->
        <div id="logout" class="hidden">
            <div class="modal-content">
                <p>Apakah yakin ingin log out?</p>
                <div class="modal-buttons">
                    <button id="cancel-logout" class="cancel-btn">Tidak</button>
                    <button id="confirm-logout" class="logout-btn">Logout</button>
                </div>
            </div>
        </div>
    </div>

    <script src="logout.js"></script>
</body>
</html>
