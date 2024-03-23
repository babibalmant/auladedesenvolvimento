<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nome = $_POST['txtNome'];
    $Sobrenome = $_POST['txtSobrenome'];
    $Email = $_POST['txtEmail'];
    $Formacao = $_POST['txtFormacao'];
    $DescricaoUltimoEmprego = $_POST['txtEmprego'];

    if (!empty($Nome) && !empty($Sobrenome) && !empty($Email) && !empty($Formacao) && !empty($DescricaoUltimoEmprego)) {
        include 'resposta.php';
    } else {
        echo "<div class='container'><h2>Preencha todos os campos do formulário!</h2></div>";
    }
}
?>
