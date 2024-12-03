<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Warnet</title>
    <link rel="stylesheet" href="{{ asset('css/mywarnet.css') }}">
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
                    <li><a href="mywarnet" class="active">My Warnet</a></li>
                    <li><a href="profile">Profile</a></li>
                    <li><a href="logout">Logout</a></li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="content">
            <h1>Ngewarnet!!!</h1>
            <button id="add-pc-btn" class="action-btn">Tambah PC</button>
            <button id="remove-pc-btn" class="action-btn">Kurangi PC</button>
            <div id="pc-list" class="pc-list">
                <!-- PC cards will be dynamically added here -->
            </div>
        </div>
    </div>

    <script src="mywarnet.js"></script>
</body>
</html>
