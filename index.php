<?php

//Criando uma variavel que contenha um array.
$alunos = array("Brian", "Camila", "Ana", "Douglas");

// Mostrando os valores do array conforme o valor do indice.
echo $alunos[0]; //mostrará Brian
echo "br />"; //apenas para quebrar a linha 
echo $alunos[2]; //mostrara Ana

//Adicionando um item ao array:
$alunos[] = "Elisa";

//Novo: função var_dump para descobrir o que há dentro de uma variável:
echo "<hr />"; //apenas para criar uma linha separando os dados de cima.

var_dump($alunos);

echo "<hr />"; //apenas para criar uma linha separando os dados de cima.

$logins = array( array("aluno", "123"), //0
                 array("tiago", "etec"), //1
                 array("user", "pass") //2
                 );

//var_dump($logins);

echo $logins[2][0]; // mostra user