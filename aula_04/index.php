<?php
//COMO CRIAR FUNCOES PROPRIAS

function mostrarNome($nome,$idade){
echo '<h2>Nome é: </h2>'.$nome;
echo '<hr>';
echo "Idade: $idade";
}

function calculadora($num1 = 10, $num2 = 5){
echo ($num1 + $num2);
}
//calculadora(20, 10);

function verdade(){
    return true;
}

function retornarNome(){
    return 'Joao';
}
echo  retornarNome();



$variavel = verdade();

?>