<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <style>
        /* Estilos globais */
        body {
            font-family: Arial, sans-serif;
            background-color: #101728; /* Cor de fundo escura */
            color: white; /* Cor do texto */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            min-height: 100vh;
        }

        /* Cabeçalho */
        header {
            background-color: #9800ff; /* Cor roxa para o cabeçalho */
            width: 100%;
            padding: 20px 0;
            text-align: center;
            color: white;
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        /* Container do Carrinho */
        .cart-container {
            width: 90%;
            max-width: 1000px;
            padding: 20px;
            margin-top: 20px;
            background-color: #1e2a47; /* Cor de fundo mais clara para o conteúdo */
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .cart-container h2 {
            color: #9800ff; /* Cor roxa para o título */
            font-size: 2em;
            margin-bottom: 20px;
            text-align: center;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            padding: 15px;
            border-bottom: 1px solid #2f3c57; /* Linha de separação */
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .cart-item img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
        }

        .cart-item-details {
            flex-grow: 1;
            padding-left: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .cart-item-details h3 {
            margin: 0;
            font-size: 1.3em;
            color: white;
        }

        .cart-item-details p {
            margin: 5px 0;
            color: #b3b3b3; /* Cor mais suave para a descrição */
        }

        .cart-item-price {
            font-size: 1.5em;
            color: #fafafa; /* Cor amarela para o preço */
            font-weight: bold;
            align-self: center;
        }

        /* Estilo dos botões */
        .button {
            background-color: #9800ff; /* Cor roxa para os botões */
            color: white;
            padding: 12px 24px;
            font-size: 1.2em;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin: 20px 10px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #7a00c7; /* Cor roxa mais escura ao passar o mouse */
        }

        /* Resumo do carrinho */
        .cart-summary {
            display: flex;
            flex-direction: column;
            align-items: center; /* Centraliza o conteúdo horizontalmente */
            justify-content: center; /* Centraliza o conteúdo verticalmente */
            background-color: #1b2a45; /* Cor de fundo mais escura para o resumo */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            width: 95%; /* Faz a div ocupar 100% da largura */
            margin-top: 20px;
            text-align: center; /* Centraliza o texto */
        }

        .cart-summary p {
            font-size: 1.2em;
            margin: 5px 0;
            color: #b3b3b3; /* Cor suave para os textos do resumo */
        }

        .cart-summary .total {
            font-size: 1.5em;
            font-weight: bold;
            color: #fafafa; /* Cor amarela para o total */
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .cart-item {
                flex-direction: column;
                align-items: center;
            }

            .cart-item-details {
                align-items: center;
                text-align: center;
            }

            .cart-item-price {
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>Carrinho de Compras</h1>
</header>

<div class="cart-container">
    <h2>Itens no Carrinho</h2>
    
    <!-- Exemplo de item no carrinho -->
    <div class="cart-item">
        <img src="https://via.placeholder.com/100" alt="Produto 1">
        <div class="cart-item-details">
            <h3>Produto 1</h3>
            <p>Descrição breve do produto.</p>
        </div>
        <div class="cart-item-price">R$ 99,90</div>
    </div>

    <div class="cart-item">
        <img src="https://via.placeholder.com/100" alt="Produto 2">
        <div class="cart-item-details">
            <h3>Produto 2</h3>
            <p>Descrição breve do produto.</p>
        </div>
        <div class="cart-item-price">R$ 49,90</div>
    </div>

    <div class="cart-item">
        <img src="https://via.placeholder.com/100" alt="Produto 3">
        <div class="cart-item-details">
            <h3>Produto 3</h3>
            <p>Descrição breve do produto.</p>
        </div>
        <div class="cart-item-price">R$ 149,90</div>
    </div>

    <!-- Resumo do carrinho -->
    <div class="cart-summary">
        <p>Total de Itens: 3</p>
        <p>Total:</p>
        <p class="total">R$ 299,70</p>
        <a href="#" class="button">Continuar Comprando</a>
        <a href="#" class="button">Finalizar Compra</a>
    </div>
</div>

</body>
</html>
