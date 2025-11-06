<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registracija</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #74ABE2, #5563DE);
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .register-container {
      background-color: white;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.2);
      width: 340px;
      text-align: center;
    }

    .register-container h2 {
      margin-bottom: 20px;
      color: #333;
    }

    .form-group {
      text-align: left;
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: 600;
      color: #444;
    }

    input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 8px;
      box-sizing: border-box;
      transition: border-color 0.3s;
    }

    input:focus {
      border-color: #5563DE;
      outline: none;
    }

    button {
      width: 100%;
      background-color: #5563DE;
      color: white;
      border: none;
      padding: 10px;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #4653c5;
    }

    .login-link {
      margin-top: 15px;
      font-size: 14px;
    }

    .login-link a {
      color: #5563DE;
      text-decoration: none;
    }

    .login-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="register-container">
    <h2>Registracija</h2>
    <form method="POST" action="decisionMaker.php">
      <input type="hidden" name="register" />

      <div class="form-group">
        <label for="username">Korisničko ime</label>
        <input type="text" id="username" name="username" placeholder="Unesite korisničko ime" required>
      </div>

      <div class="form-group">
        <label for="password">Lozinka</label>
        <input type="password" id="password" name="password" placeholder="Unesite lozinku" required>
      </div>

      <div class="form-group">
        <label for="confirm-password">Potvrdi lozinku</label>
        <input type="password" id="confirm-password" name="confirm_password" placeholder="Ponovite lozinku" required>
      </div>

      <button type="submit">Registriraj se</button>

      <p class="login-link">Već imaš račun? <a href="login.php">Prijavi se</a></p>
    </form>
  </div>
</body>
</html>
