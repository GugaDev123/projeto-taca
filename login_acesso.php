<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #101728;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            padding: 30px;
            text-align: center;
        }

        h2 {
            color: #9800ff;
            margin-bottom: 20px;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        .input-field:focus {
            border-color: #9800ff;
            outline: none;
        }

        .login-btn {
            width: 100%;
            padding: 12px;
            background-color: #9800ff;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-btn:hover {
            background-color: #7a00cc;
        }

        .signup-link {
            margin-top: 15px;
            font-size: 14px;
        }

        .signup-link a {
            color: #9800ff;
            text-decoration: none;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="listar_user.php">
            <input type="email" name="email" class="input-field" placeholder="E-mail" required><br>
            <input type="password" name="senha" class="input-field" placeholder="Senha" required><br>
            <button type="submit" class="login-btn">Entrar</button>
        </form>
        <p class="signup-link">Ainda não tem uma conta? <a href="cadastro_usuario.php">Cadastre-se</a></p>
    </div>

</body>
</html>


