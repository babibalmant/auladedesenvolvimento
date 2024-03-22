<?php
$numero_um = $_POST["numero_um"];
$numero_dois = $_POST ["numero_dois"];
$teste=10;


for ($i=0;  $teste<$i; $i++) { 
    

}

for ($i=0; $i < $teste ; $i++) { 
    $multiplicacao = $numero_dois * $i;
    echo  $i; echo "x"; echo $numero_dois.'<br>';  
  
    echo $multiplicacao;
}

// for ($i=0; $i < $teste ; $i++) { 
//     $divisao = $numero_dois / $i;

//     echo $divisao;
// }

for ($i=0; $i < $teste ; $i++) { 
    $soma = $numero_dois + $i;
    echo $numero_dois; echo "+"; echo $i.'<br>';
    echo $soma;
}

for ($i=0; $i < $teste ; $i++) { 
    $subtracao = $numero_dois - $i;
    echo $numero_dois; echo "-"; echo $i.'<br>';
    echo $subtracao; 
}


?>