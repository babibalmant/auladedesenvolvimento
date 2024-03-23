<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Resposta do Cadastro</title>
</head>
<body>
    <div class="container">
        <h2>Cadastro realizado com sucesso!</h2>

        <?php
        echo "<p><strong>Nome:</strong> $Nome</p>";
        echo "<p><strong>Sobrenome:</strong> $Sobrenome</p>";
        echo "<p><strong>Email:</strong> $Email</p>";
        echo "<p><strong>Formação:</strong> $Formacao</p>";
        echo "<p><strong>Descrição Último Emprego:</strong> $DescricaoUltimoEmprego</p>";
