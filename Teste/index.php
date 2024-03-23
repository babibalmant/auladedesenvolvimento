<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <h2>Cadastro</h2>

        <form method="post" action="processa_formulario.php">
            <label for="txtNome">Nome</label><br>
            <input type="text" id="txtNome" name="txtNome"><br>

            <label for="txtSobrenome">Sobrenome</label><br>
            <input type="text" id="txtSobrenome" name="txtSobrenome"><br>

            <label for="txtEmail">Email</label><br>
            <input type="text" id="txtEmail" name="txtEmail"><br>

            <label for="txtFormacao">Formação</label><br>
            <input type="text" id="txtFormacao" name="txtFormacao"><br>

            <label for="txtEmprego">Descrição Último Emprego</label><br>
            <input type="text" id="txtEmprego" name="txtEmprego"><br>

            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>
