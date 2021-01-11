<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/pweb1/site_cardapio/css/carrinho.css" media="screen">
    <title>Meu carrinho</title>
</head>
<body>
    <form action="/pweb1/site_cardapio/func/func.php" method="POST">
        <div id="cabecalho">
            <div class="c1">
                <img src="/pweb1/site_cardapio/midia/imagem/logo_empresa.png" alt="Meu Lanche delivery">
                <h1>O melhor site de FASTFOOD do Brasil</h1>
            </div>
        </div>

        <div id="menu">
            <div class="um">
                <a href="../index.php" id="m1">Inicio</a>
                <a href="#" id="m2">Favoritos</a>
                <a href="#" id="m3">Minha Conta</a>
            </div>
        </div>
        
        <div class="layout">
            <h1>CARRINHO</h1><br>
            <label for="um">Nome do produto: </label>
            <input type="text" name="nome" id="um" value="Suco Kapo" readonly>
            <label for="descricao">Descrição: </label>
            <textarea name="descricao" id="um" readonly>- Suco sabor de morango
- 1 canudo</textarea><br>
            <label for="dois">Preço: </label>
            <input type="number" name="preco" id="dois" value="2.00" readonly>
            <label for="tres">Quantidade: </label>
            <input type="number" name="qtd" id="tres" min="0" step="1" value="0"><br>
            <label for="pagamento">Escolha um metodo de pagamento: </label><br>
            <input type="radio" name="pg" id="pg1">
            <label for="credito" id="um">Cartão de Crédito</label><br>
            <input type="radio" name="pg" id="pg2">
            <label for="debito" id="um">Cartão de Débito</label><br><br>
            <label for="endereco">Informe seu endereço: </label><br>
            <label for="endereco" id="quatro">Rua: </label>
            <input type="text" name="rua" id="quatro">
            <label for="endereco" id="cinco">Bairro: </label>
            <input type="text" name="bairro" id="cinco">
            <label for="endereco" id="seis">Número: </label>
            <input type="text" name="numero" id="seis">
            <button type="submit" value="Enviar">Fechar Pedido</button>
        </div>
    </form>
</body>
</html>