<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Suporte</title>
    <style>
        /* Estilos globais */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #101728; /* Cor de fundo escura */
            color: white; /* Cor do texto principal */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            box-sizing: border-box;
        }

        /* Cabeçalho */
        header {
            background-color: #9800ff; /* Cor principal roxa */
            width: 100%;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra suave */
        }

        header h1 {
            font-size: 2.5em;
            margin: 0;
            color: white; /* Cor do título no cabeçalho */
            letter-spacing: 1px;
        }

        /* Seção de conteúdo */
        .content {
            text-align: center;
            padding: 30px 20px;
            max-width: 800px;
            width: 100%;
            margin-top: 40px;
            background-color: #1e2a47; /* Cor de fundo suave para o conteúdo */
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Sombra para destaque */
        }

        .content h2 {
            color: #9800ff; /* Cor roxa no título */
            font-size: 2.2em;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 1.1em;
            line-height: 1.6;
            margin-bottom: 20px;
            color: #ccc; /* Texto em cor suave */
        }

        .content ul {
            list-style-type: none;
            padding: 0;
            text-align: left;
            margin: 0;
            font-size: 1.1em;
            color: #ccc;
        }

        .content ul li {
            margin: 15px 0;
        }

        /* Estilo do botão */
        .button {
            background-color: #9800ff; /* Cor roxa para o botão */
            color: white;
            padding: 15px 30px;
            text-align: center;
            font-size: 1.2em;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-top: 30px;
            transition: background-color 0.3s ease, transform 0.2s ease-in-out;
        }

        .button:hover {
            background-color: #7a00c7; /* Cor roxa mais escura ao passar o mouse */
            transform: scale(1.05); /* Leve aumento de tamanho para interação */
        }

        /* Rodapé */
        footer {
            position: absolute;
            bottom: 20px;
            text-align: center;
            color: #9800ff; /* Cor roxa no rodapé */
            font-size: 1em;
        }

        footer p {
            margin: 0;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2em;
            }

            .content h2 {
                font-size: 1.8em;
            }

            .content p {
                font-size: 1em;
            }

            .content ul li {
                font-size: 1em;
            }

            .button {
                padding: 12px 24px;
                font-size: 1em;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>Suporte Técnico</h1>
</header>

<div class="content">
    <h2>Como podemos te ajudar?</h2>
    <p>Estamos aqui para fornecer o melhor suporte possível. Se você tiver alguma dúvida ou problema, entre em contato conosco através das opções abaixo:</p>
    
    <ul>
        <li><strong>Email:</strong> suporte@exemplo.com</li>
        <li><strong>Telefone:</strong> (11) 98765-4321</li>
        <li><strong>Chat ao Vivo:</strong> Clique no botão abaixo para iniciar uma conversa em tempo real</li>
    </ul>

    <a href="https://www.exemplo.com/chat" class="button">Iniciar Chat</a>
</div>

<footer>
    <p>&copy; 2024 Empresa Exemplo | Todos os direitos reservados</p>
</footer>

</body>
</html>
