<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nome = $_POST['txtNome'];
    $ValorCompra = $_POST['txtValorCompra'];
    $FormaPagamento = $_POST['txtFormaPagamento'];

    // Calcula o desconto com base na forma de pagamento
    $Desconto = 0;
    if ($FormaPagamento == "Depósito") {
        $Desconto = $ValorCompra * 0.10; // 10% de desconto para depósito
    } elseif ($FormaPagamento == "Boleto") {
        $Desconto = $ValorCompra * 0.08; // 8% de desconto para boleto
    }

    // Calcula o valor total com desconto
    $ValorTotal = $ValorCompra - $Desconto;

    // Exibe a mensagem ao usuário
    echo "<!DOCTYPE html>
    <html lang=\"pt-BR\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <link rel=\"stylesheet\" href=\"style.css\">
        <title>Resposta do Cadastro</title>
    </head>
    <body>
        <div class=\"container\">
            <h2>PROMOÇÃO DE MÊS DE ANIVERSÁRIO!</h2>
            <p>Nome: $Nome</p>
            <p>Valor da Compra sem Desconto: R$ $ValorCompra</p>
            <p>Desconto: R$ $Desconto</p>
            <p>Você economizou: R$ $Desconto</p>
        </div>
    </body>
    </html>";
}
?>
