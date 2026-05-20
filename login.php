<?php
session_start();
require_once 'auth.php'; 

if (isAuthorized()) {
    header('Location: admin.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вхід в Адмінку | VISTAL</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #E4ECF0;
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 72, 109, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .login-container h2 {
            color: #00486D;
            margin-top: 0;
            margin-bottom: 30px;
        }
        .login-form input {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
        }
        
        .password-wrapper {
            position: relative;
            width: 100%;
        }
        .password-wrapper input {
            margin-bottom: 20px;
            padding-right: 45px; 
        }
        .toggle-password-btn {
            position: absolute;
            top: 25px; 
            right: 15px;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            font-size: 20px;
            color: #00486D;
            padding: 0;
            outline: none;
        }

        .login-btn {
            width: 100%;
            background-color: #00486D;
            color: white;
            padding: 15px;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s;
        }
        .login-btn:hover {
            background-color: #002B41;
        }
        .error-message {
            color: red;
            margin-bottom: 15px;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Вхід для адміністратора</h2>
        <form class="login-form" id="loginForm">
            <p class="error-message" id="errorMessage"></p>
            
            <input type="text" name="login" placeholder="Логін" required>
            
            <div class="password-wrapper">
                <input type="password" id="passwordInput" name="password" placeholder="Пароль" required>
                <button type="button" class="toggle-password-btn" id="togglePassword">👁️</button>
            </div>

            <button type="submit" class="login-btn" id="loginBtn">Увійти</button>
        </form>
    </div>

    <script>
        const togglePasswordBtn = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('passwordInput');

        togglePasswordBtn.addEventListener('click', function () {
            const isPassword = passwordInput.getAttribute('type') === 'password';
            
            passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
            
            this.textContent = isPassword ? '🙈' : '👁️'; 
        });

        const loginForm = document.getElementById('loginForm');
        const errorMessage = document.getElementById('errorMessage');
        const loginBtn = document.getElementById('loginBtn');

        loginForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            errorMessage.textContent = '';
            loginBtn.textContent = 'Зачекайте...';
            loginBtn.disabled = true;

            const formData = {
                login: loginForm.querySelector('input[name="login"]').value,
                password: loginForm.querySelector('input[name="password"]').value
            };

            try {
                const response = await fetch('login_process.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(formData)
                });
                
                const result = await response.json();

                if (result.success) {
                    window.location.href = 'admin.php'; 
                } else {
                    errorMessage.textContent = result.message;
                    loginBtn.textContent = 'Увійти';
                    loginBtn.disabled = false;
                }
            } catch (error) {
                errorMessage.textContent = 'Помилка з\'єднання з сервером.';
                loginBtn.textContent = 'Увійти';
                loginBtn.disabled = false;
            }
        });
    </script>
</body>
</html>