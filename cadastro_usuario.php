<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <!-- Incluindo FontAwesome para os ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Estilo do formulário */
        .form-container {
            background-color: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            width: 100%;
            max-width: 400px;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
        }

        .sec-form {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            min-height: 100vh;
            background-image: url('image/bg-teste2.jpg');
            background-size: cover;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            color: #333;
            background-color: rgba(255, 255, 255, 0.8);
            transition: all 0.3s ease;
            outline: none;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus,
        input[type="date"]:focus,
        select:focus {
            border-color: #4CAF50;
            box-shadow: 0 0 5px rgba(76, 175, 80, 0.4);
            background-color: rgba(255, 255, 255, 1);
        }

        input::placeholder {
            color: #888;
            font-style: italic;
        }

        .terms {
            margin-top: 15px;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            background-color: #9800ff;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #8308d6;
        }

        /* Estilo do ícone de olho */
        .eye-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .password-wrapper {
            position: relative;
            width: 100%;
        }
    </style>
</head>
<body>
    <section class="sec-form" id="#CADASTRO">
        <div class="form-container">
            <h2>Cadastro de Usuário</h2>
            <form id="registrationForm" method="POST" action="insert.php">
                <label for="name">Nome Completo</label>
                <input type="text" id="name" name="nome" placeholder="Nome Completo" required>

                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="E-mail" required>

                <label for="password">Senha</label>
                <div class="password-wrapper">
                    <input type="password" id="password" name="senha" placeholder="Senha" required>
                    <i id="eye-icon" class="fas fa-eye eye-icon" onclick="togglePassword()"></i>
                </div>

                <label class="terms">
                    <input type="checkbox" id="terms" name="terms" required>
                    Aceito os termos de uso
                </label>

                <button type="submit">Cadastrar</button>
            </form>
            <p id="errorMessage" class="error-message"></p>
        </div>
    </section>

    <script>
        // Função para alternar a visibilidade da senha
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        }
    </script>
</body>
</html>
