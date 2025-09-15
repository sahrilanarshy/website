<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gameboost Admin - Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .login-container {
            max-width: 400px;
            margin: 60px auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.08);
            padding: 32px 24px;
        }
        .login-title {
            text-align: center;
            font-size: 1.7rem;
            font-weight: 700;
            margin-bottom: 24px;
        }
        .login-form label {
            font-weight: 600;
            margin-bottom: 6px;
            display: block;
        }
        .login-form input {
            width: 100%;
            padding: 10px 12px;
            border-radius: 8px;
            border: 1px solid #E0E0E0;
            margin-bottom: 18px;
            font-size: 1rem;
        }
        .login-form button {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            background: var(--primary-color);
            color: #fff;
            font-weight: 600;
            font-size: 1rem;
            border: none;
            cursor: pointer;
            transition: background 0.3s;
        }
        .login-form button:hover {
            background: #4b44d3;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-title">Gameboost Admin Login</div>
        <form class="login-form" method="post" action="dashboard.php">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <button type="submit"><i class="fas fa-sign-in-alt"></i> Login</button>
        </form>
    </div>
</body>
</html>
