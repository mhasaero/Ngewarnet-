<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NgeWarnet</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/daftar.css') }}">
</head>
<body>
  <header>
    <div class="logo">Ngewarnet!!!</div>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">Service</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <div class="background-overlay">
      <div class="form-container">
        <button class="back-btn">&larr;</button>
        <h2>Login Ngewarnet!!!</h2>
        <form>

          <label for="username">Username</label>
          <input type="text" id="username" placeholder="username yang ingin digunakan..." required>

          <label for="password">Password</label>
          <input type="password" id="password" placeholder="masukkan kata sandi..." required>

          <button type="submit" class="submit-btn">Login</button>
        </form>
      </div>
    </div>
  </main>
  
  <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
