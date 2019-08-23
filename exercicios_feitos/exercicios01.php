<?php
    /*
    1.	Escreva um programa que declare uma variável inteira e atribua o valor 10 a mesma. 
    Declare uma variável real e atribua para a mesma o valor 20.3. Como saída o programa deverá 
    imprimir, usando as variáveis declaradas, o seguinte resultado:
    a.	O valor inteiro é 10.
    b.	O valor real é 20.3.
*/

    $inteiro = 10;
    $real = 20.3;

    echo "valor inteiro {$inteiro} e o valor real {$real}";

    echo '<br><br><hr><br><br>';


    /*
        2.	Escreva um programa que declare 6 variáveis do tipo caractere e atribua a elas as 
        letras a, l, u, n, o, s. O programa deverá imprimir, usando todas as variáveis declaradas, 
        o seguinte resultado: alunos.
    */

    $a = "a";
    $l = "l";
    $u = "u";
    $n = "n";
    $o = "o";
    $s = "s";

    echo "$a$l$u$n$o$s";

    echo '<br><br><hr><br><br>';

    /*
    3.	Uma conta telefônica é composta dos seguintes custos:
    Assinatura: R$ 32,00
    Impulsos: R$ 0,09 por impulso que exceder a 90
    Chamadas p/ celular: R$0,35 por impulso 

    Escreva um programa que monte a fórmula para calcular o valor da conta para 254 impulsos e 23 
    chamadas para celular imprimindo o resultado obtido.
    */

    $assinatura = 32;
    $impulso = 0.09;
    $celular = 0.35;
    
    $excedido = 254 - 90;
    
    $fatura = $assinatura + ($excedido * $impulso) + ($celular * 23);

    echo $fatura;


    echo '<br><br><hr><br><br>';
    


    /* 
        4.	Fazer um programa que imprima a média dos números 11, 19 e 7.
    */

    $a = 11;
    $b = 19;
    $c = 7;

    $media = ($a + $b + $c) /2;

    echo $media;


    echo '<br><br><hr><br><br>';


    /* 
    5.	Um professor atribui pesos de 1 a 4 para as notas de quatro avaliações. A nota é calculada por meio da média ponderada (N1*1 + N2*2 + N3*3 + N4*4) / (1+2+3+4), onde N1 é a nota da primeira avaliação, N2 a da segunda, etc. Um aluno tirou as seguintes notas: 8, 7.5, 10, 9. Faça um programa que calcula e escreva a média deste aluno.
    */






    /* 6.	Escreva um programa que obtêm dois valores inteiros (variáveis A e B) e apresente as operações de adição, subtração, multiplicação e divisão de A por B. */



    
    $x = 10;

    
    $x = $x * 5;
    $x *= 5;
    echo $x;

    echo "<br><br><hr><br><br>";

    
    $y = 10;
    $y /= 5;
    echo $y;

    echo "<br><br><hr><br><br>";
    
    $z += 5;
    
    echo $z;

    echo "<br><br><hr><br><br>";

   