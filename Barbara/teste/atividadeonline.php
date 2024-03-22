<?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifica se os campos estão definidos e não vazios
        if (isset($_POST['txtNome']) && isset($_POST['txtSobrenome']) && isset($_POST['txtEmail']) && isset($_POST['txtFormacao']) && isset($_POST['txtEmprego']) &&
            !empty($_POST['txtNome']) && !empty($_POST['txtSobrenome']) && !empty($_POST['txtEmail']) && !empty($_POST['txtFormacao']) && !empty($_POST['txtEmprego'])) {
            // Aqui você pode inserir a lógica de armazenamento dos dados em um banco de dados ou qualquer outra ação necessária

            // Exibe a mensagem de sucesso
            echo '<div class="w3-panel w3-green"><p>Cadastro realizado com sucesso!</p></div>';
        } else {
            // Exibe uma mensagem de erro caso algum campo esteja vazio
            echo '<div class="w3-panel w3-red"><p>Preencha todos os campos do formulário!</p></div>';
        }
    }
    ?>