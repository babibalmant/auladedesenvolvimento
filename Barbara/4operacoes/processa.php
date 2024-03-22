<?php
$numero_um = $_POST["numero_um"];
$numero_dois = $_POST["numero_dois"];
$soma = $numero_um + $numero_dois;
$divisao = $numero_um / $numero_dois;
$multiplicacao = $numero_um * $numero_dois;
$subtracao = $numero_um - $numero_dois;
echo "Você digitou o primeiro valor foi ".$numero_um.'<br>';
echo "Você digitou o segundo valor foi ".$numero_dois.'<br>';
echo "a soma é ". $soma.'<br>';
echo "a divisão é ". $divisao.'<br>';
echo "a multiplicacao é ". $multiplicacao.'<br>';
echo "a subtracao é ". $subtracao.'<br>';

if ($numero_um % 2== 0) {
echo "É um número par ".$numero_um.'<br>';

} else echo "É um número ímpar ".$numero_um.'<br>';

if ($numero_dois % 2== 0) {
echo "É um número par ".$numero_dois.'<br>';

} 

elseif ($numero_um == $numero_dois) {
echo "É verdadeiro";

}else echo "É um número ímpar ".$numero_dois.'<br>';



?>