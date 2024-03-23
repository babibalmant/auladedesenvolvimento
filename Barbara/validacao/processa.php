<?php

session_start();
$nome = $_POST["nome"];
$sobrenome = $_POST ["sobrenome"];
$idade = $_POST ["idade"];

// if (isset($nome)) {
//     echo "A variável nome existe";
// }

// elseif (isset($sobrenome)) {
//     echo "A variável sobrenome existe";
// }

// elseif (isset($idade)) {
//    echo "A variável idade existe";
// }

if (empty($nome)) {
    $_SESSION['erronome']="Por favor preencha o seu nome";
    header("Location: form.php");
    echo "Por favor preencha o campo nome";
    
}

// elseif (empty($sobrenome)) {
//     echo "Por favor preencha o campo sobrenome";
// }

// elseif (empty($idade)) {
//     echo "Por favor preencha o campo idade";
// }


// else echo "Cadastro realizado com sucesso!"







?>