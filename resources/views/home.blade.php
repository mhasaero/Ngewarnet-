<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Frontend</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!-- Sidebar Menu -->
        <div class="sidebar">
            <div class="profile">
                <div class="profile-img"></div>
                <h3>Si Bera-bera (Admin)</h3>
                <p>UID: (001)</p>
                <p>Looking for orders</p>
            </div>
            <nav>
                <ul>
                    <li><a href="#">My Warnet</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Message</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="content">
            <h1>Ngewarnet!!!</h1>
            <div class="card">
                <h2>Landing Page</h2>
                <h3>Gamers</h3>
                <div class="card-content">
                    <div class="festival-info">
                        <h1>Online Gamers Festival</h1>
                        <p>June 14-18, 2021</p>
                        <button>Buy Tickets Here</button>
                        <div class="social-icons">
                            <span>Instagram</span>
                            <span>Facebook</span>
                            <span>Twitter</span>
                        </div>
                    </div>
                    <div class="image-section">
                        <img src="https://via.placeholder.com/200" alt="Gamers">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
