<?php 
  
  $nome = $_POST["nome"];
  $sobrenome = $_POST["sobrenome"];
  $numero=1000

  for ($i=0; $i <$numero ; $i++) { 
    echo $i;
  }

//   if (($nome == "barbara") and ($sobrenome=="balmant") ) {
//     echo "seu nome é verdadeiro".$nome .$sobrenome;
//   }
//  else echo"seu nome não barbara ".$nome;

if (($nome == "barbara") and ($sobrenome=="balmant") ) {
  echo "seu nome é verdadeira".$nome .$sobrenome;
}
else echo"seu nome não é barbara" .$nome;



  // if ($sobrenome == "balmant") {
  //   echo "seu sobrenome é verdadeiro".$sobrenome;

  // } else 
  // echo "seu sobrenome não é balmant";
  

  
  // echo $nome;
  // echo $sobrenome;
  
  // switch ($nome) {
  //   case 'BARBARA':
  //       echo "verdade seu e nome";
  //       break;
    
  //   default:
  //       echo "seu nome não é BARBARA";
  //       break;
  // }
  
  
?>