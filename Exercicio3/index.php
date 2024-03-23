<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Promoção de Aniversário</title>
</head>
<body>
    <div class="container">
        <h2>Cadastro</h2>

        <form method="post" action="processa_formulario.php">
            <label for="txtNome">Nome do Cliente</label><br>
            <input type="text" id="txtNome" name="txtNome"><br>

            <label for="txtValorCompra">Valor da Compra</label><br>
            <input type="text" id="txtValorCompra" name="txtValorCompra"><br>

            <label for="txtFormaPagamento">Forma de Pagamento</label><br>
            <select id="txtFormaPagamento" name="txtFormaPagamento">
                <option value="Boleto">Boleto</option>
                <option value="Depósito">Depósito</option>
                <option value="Cartão de Crédito">Cartão de Crédito</option>
            </select><br>

            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>
