<?php 
  
  $nome = $_GET["nome"];
  $sobrenome = $_GET["sobrenome"];
  
  echo $nome;
  echo $sobrenome;
  
  switch ($nome) {
    case 'BARBARA':
        echo "verdade seu e nome";
        break;
    
    default:
        echo "seu nome não é BARBARA";
        break;
  }
  
  
?>