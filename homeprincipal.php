<?php 
    #include_once('conexao.php');
    #echo "Hello word";
    #var_dump($conexao);
    ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taca Digital</title>
    <link rel="icon" type="image/png" href="image/logo.webp" style="border-radius: 50%;">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Menu de Navegação -->
    <nav class="navbar">
        <a href="homeprincipal.php" style="text-decoration: none; color:#fafafa;"><h1 >TACA</h1></a>
        <ul class="menu">
            <li><a href="#homeprincipal.php">Inicio</a></li>
            <li><a href="#about">Sobre Nós</a></li>
            <li><a href="servicos.php">Serviços</a></li>
            <li><a href="#contact">Contato</a></li>
        </ul>
        <div class="icon-container">
            <a href="suporte.php.php" target="_blank" style="text-decoration: none; color:#f0f0f0;"><i class="fas fa-headset icon"> </i></a> <!-- Ícone de headset -->
            <a href="login_acesso.php" target="_blank" style="text-decoration: none; color:#f0f0f0;"><i class="fas fa-user icon"> </i></a> <!-- Ícone de usuário -->
            <a href="carrinho.php" target="_blank" style="text-decoration: none; color:#f0f0f0;"><i class="fas fa-shopping-cart icon"></i></a> <!-- Ícone de carrinho -->
        </div>
    </nav>

    <section class="sec-apresentar" id="#inicio">
        <h1 class="t1">Precisa colocar sua empresa na internet?</h1>
        <h1>A <span>Taca</span> está aqui!</h1>
        <a class="button" href="https://w.app/5Z6eoI" target="_blank">Contate-Nós</a>
    </section>

    
    <section class="saiba-mais" id="about">
        <div class="container">
            <div class="text">
                <H1>Taca</H1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <a 
                    style="
                        text-decoration: none;
                        color: #fff;
                        margin-top: 40px;
                        font-size: 16px;
                        font-weight: bold;
                        padding: 10px 15px;
                        background-color: #8308d6;
                        border-radius: 15px;
                        width: 100%;
                        display: inline-block;
                        text-align: center;
                    " 
                    href=""
                    aria-label="Saiba mais sobre os nossos serviços">
                Saiba mais
            </a>

            </div>
            <div class="image">
                <img src="image/bg-teste2.jpg" alt="">
            </div>
        </div>
    </section>

    <section class="sec-marca">
        
            <h1>A <span>Taca</span> é uma startup que busca mudar </br>a maneira de conectar as pessoas.</h1>
            <p>Nosso aplicativo móvel é construído para criar e aumentar as conexões entre </br> você,
            pessoas que conhece e pessoas que você quer conhecer.
            Com várias </br> startups em nosso portfólio,
            a equipe da Netric está trabalhando para trazer </br> a você tudo em um único aplicativo.
            </p>
    </section>

    <section class="sec-images" id="#servicos">
        <h1>A <span> Taca</span> está aqui para mudar o rumo da sua </br> empresa com os nossos melhores serviços.</h1>
        <a 
            style="
                text-decoration: none;
                color: #fff;
                width:50%;
                margin-bottom:20px;
                font-size: 20px;
                font-weight: bold;
                padding: 15px 15px;
                background-color: #8308d6;
                border-radius: 15px;
                display: inline-block; /* Garante que seja tratado como um botão */
                text-align: center; /* Centraliza o texto dentro do botão */
            " 
            href="servicos.php"
            aria-label="Saiba mais sobre o conteúdo">
            Saiba mais
        </a>
        <div class="gallery">
            <img src="image/img1.jpg" alt="Tecnologia 1">
            <img src="image/img2.jpg" alt="Tecnologia 2">
            <img src="image/img3.jpg" alt="Tecnologia 3">
            <img src="image/img4.jpg" alt="Tecnologia 4">
            <img src="image/img5.jpg" alt="Tecnologia 5">
        </div>

    </section>
   
   
    <!-- Conteúdo do Formulário -->
    <section class="sec-form" id="#CADASTRO">
    <div class="form-container">
        <h2>Cadastro de Usuário</h2>
        <form id="registrationForm" method="POST" action="insert.php">
            <label for="name">Nome Completo</label>
            <input type="text" id="name" name="nome" placeholder="Nome Completo" required> <!-- Alterado para name="nome" -->

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="E-mail" required>

            <label for="password">Senha</label>
            <input type="password" id="password" name="senha" placeholder="Senha" required> <!-- Alterado para name="senha" -->

            <label class="terms">
                <input type="checkbox" id="terms" name="terms" required>
                Aceito os termos de uso
            </label>

            <button type="submit">Cadastrar</button>
        </form>
        <p id="errorMessage" class="error-message"></p>
    </div>
</section>


        <div class="footer">
        <!-- Logo -->
        <div class="logo">
        <img src="image/logo.webp" alt="Logo" style="border-radius: 50%;"/>
        <span>Marca</span>
        </div>

        <!-- Informações de contato -->
        <div class="contact">
        <h3>Fale conosco</h3>
        <p>(12) 11111-1111</p>
        <p>Rua Blabla, 123, Cidade Aleatória</p>
        <p>estranho@gmail.com.br</p>
        </div>

        <!-- Ícones de redes sociais -->
        <div class="social-icons">
            <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
        </div>
    </div>

    <script>
        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const errorMessage = document.getElementById('errorMessage');

            if (password !== confirmPassword) {
                errorMessage.textContent = 'As senhas não coincidem!';
                errorMessage.style.display = 'block';
                event.preventDefault(); // Impede o envio do formulário
            } else {
                errorMessage.style.display = 'none';
            }
        });
    </script>

    <style>
        /* Reset */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* Estilo do corpo */
        body {
            background-color: #101728;
            padding-top: 60px; /* Espaço para o menu fixo */
        }
        .container {
            width: 1100px;
            display: flex;
            justify-content: center;
            
        }
        /* Estilo do menu */
        .navbar {
            height: 50px;
            position: fixed;
            top: 0;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            padding: 10px 0;
            z-index: 1000;
            display: flex;
            justify-content: space-around;
        }

        .navbar h1 {
            color: #fff;
        }

        .menu {
            list-style: none;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .menu li {
            display: flex;
            align-items: center;
        }

        .menu a {
            text-decoration: none;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            padding: 10px 15px;
            transition: background-color 0.3s, color 0.3s;
            border-radius: 5px;
        }

        .menu a:hover {
            background-color: #9800ff;
        }

        .icon-container {
            display: flex;
            gap: 15px;
            align-items: center;
            color: #fff;
        }

        .icon {
            font-size: 20px;
            cursor: pointer;
            transition: color 0.3s, transform 0.3s;
        }

        .icon:hover {
            color: #9800ff;
            transform: scale(1.1);
        }

        .sec-apresentar {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 80vh; /* Altura total da tela */
            background-image: url('image/bgg.webp');
            background-size: cover;
            color: #f0f0f0;
            text-align: center;
            justify-content: center;
        }

        .sec-apresentar h1 {
            font-size: 3rem;
        }

        .sec-apresentar span {
            color: #9800ff;
        }

        .sec-apresentar .button {
            background-color:#9800ff ;
            padding: 10px;
            color: #f0f0f0;
            width: 25%;
            font-size: 2rem;
            text-decoration: none;
            border-radius: 20px;
            margin-top: 50px;
     
        }

        .sec-apresentar a:hover {
            transition: all 3s;
            background-color: #8308d6;
        }

        .saiba-mais {
            display: grid; /* Ativa o grid */
            grid-template-columns: repeat(2, 1fr); /* Cria duas colunas de tamanhos iguais */
            gap: 30px; /* Espaço entre as divs */
            padding: 100px;

        }
        .saiba-mais .text p {
            color: #f0f0f0;
            font-size: 18px;
            text-align: center;
        }

        .saiba-mais .text h1 {
            color: #8308d6;
            font-size: 3rem;
            margin-bottom: 40px;
            text-align: center;
        }
        
    
        .saiba-mais .image img {
            margin-left: 100px;
            width: 400px;
            height: 260px;
            border-radius: 15px;
            box-shadow: 7px 5px 50px #8308d6;
        }
        .sec-marca {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding-top: 60px;
            padding-bottom: 60px;
        }
        .sec-marca h1 {
            color: #fafafa;
            margin-bottom: 30px;
            font-size: 2rem;
        }
        .sec-marca span {
            color: #8308d6;
        }
        .sec-marca p {
            color: #f0f0f0;
        }

        .sec-images {
            background-image:url('image/sec-images.png') ;
            background-size: cover;
            text-align: center; /* Centraliza o texto e outros elementos */
        }

        .sec-images h1 {
            color: #fff;
            font-size: 30px;
            padding: 100px;
            text-align: center;
        }

        .sec-images span {
            color: #8308d6;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 10px;
            padding: 20px;
            }
            .gallery img {
            width: 100%;
            height: 200px;
            border-radius: 10px;
            object-fit: cover;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-top: 10px;
            margin-bottom: 40px;
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

        .error-message {
            color: red;
            text-align: center;
            margin-top: 10px;
            display: none;
        }

        .footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 70px;
    }
    .logo {
      font-size: 24px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logo img {
        width: 40px;
        height: 40px;
    }
    .logo span {
      color: #8308d6;
      font-weight: bold;
    }
    .contact {
      text-align: left;
    }
    .contact h3 {
      padding-top: 20px;  
      margin-bottom: 30px;
      color: #8308d6;
      margin: 0 0 10px;
    }
    .contact p {
      margin: 5px 0;
      color: #f0f0f0;
    }
    .social-icons {
      display: flex;
      gap: 15px;
    }
    .social-icons a {
      text-decoration: none;
      color: #fff;
      font-size: 20px;
      transition: color 0.3s;
    }
    .social-icons a:hover {
      color: #8308d6;
    }

    
    </style>
</body>
</html>
