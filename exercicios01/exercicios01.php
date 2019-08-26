<?php

echo "<br><br><hr><br><br>";
echo "1) "; 
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

    echo "2) "; 
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

    echo "3) "; 
    $assinatura = 32;
    $impulso = 0.09;
    $celular = 0.35;
    
    $excedido = 254 - 90;
    
    $fatura = $assinatura + ($excedido * $impulso) + ($celular * 23);

    echo "O valor da fatura é " .$fatura;


    echo '<br><br><hr><br><br>';
    


    /* 
        4.	Fazer um programa que imprima a média dos números 11, 19 e 7.
    */

    echo "4) "; 

    $a = 11;
    $b = 19;
    $c = 7;

    $media = ($a + $b + $c) /2;

    echo "A média entre os números 11, 19 e 7 é " .$media;


    echo '<br><br><hr><br><br>';


    /* 
    5.	Um professor atribui pesos de 1 a 4 para as notas de quatro avaliações. A nota é calculada por meio da média ponderada (N1*1 + N2*2 + N3*3 + N4*4) / (1+2+3+4), onde N1 é a nota da primeira avaliação, N2 a da segunda, etc. Um aluno tirou as seguintes notas: 8, 7.5, 10, 9. Faça um programa que calcula e escreva a média deste aluno.
    */


    echo "5) "; 

        $n1 = 8;
        $n2 = 7.5;
        $n3 = 10;
        $n4 = 9;
        $media = ($n1 + $n2 + $n3 + $n4) / 4;


        echo "A média é $media";

        echo '<br><br><hr><br><br>';


    /* 6.	Escreva um programa que obtêm dois valores inteiros (variáveis A e B) e apresente as operações de adição, subtração, multiplicação e divisão de A por B. */



    echo "6) "; 
    #multiplicação
    $a = 10;
    $b = 10;
    

    $a *= $b;
    
    echo "a multiplicação é " .$a;

    echo "<br><br><br><br>";


    #subtração
    $a = 10;
    $b = 10; 

    $a -= $b;
    
    echo "a subtração é " .$a;

    echo "<br><br><br><br>";

    #soma
    $a = 10;
    $b = 10; 

    $a += $b;
    
    echo "a soma é " .$a;

    echo "<br><br><br><br>";

    #divisão
    $a = 10;
    $b = 10;
 
    $a /= $b;

    echo "a divisão é " .$a;

    echo "<br><br><hr><br><br>";

    /*7.	Efetuar a leitura de um número inteiro e apresentar o resultado do quadrado deste número. */

    echo "7) "; 
        $valor1 = 10;
    
        $dobro = $valor1 * 2;

        echo "a dobro do valor $valor1 é igual a " .$dobro;

        echo "<br><br><hr><br><br>";


        /* 8.	Efetuar a leitura de um número inteiro e apresentar o resultado do cubo deste número.*/

        echo "8) "; 
        $valor2 = 10;
    
        $cubo = $valor2 * 3;

        echo "a dobro do valor $valor2 é igual a " .$cubo;

        echo "<br><br><hr><br><br>";

        /* 
            10.	Efetuar a leitura de um número inteiro e imprimir o resto da divisão (%) deste número por 2.
        */
        echo "10) ";    

        $a = 11;

        $divisao = $a %2;
        

        echo "o resto da divisão é " .$divisao;

        echo "<br><br><hr><br><br>";


        /* 
            11.	Ler um número inteiro e imprimir seu sucessor e seu antecessor.
        */

        echo "11) "; 
        

        $valor1 = 10;

        $antecessor = $valor1 - 1;
        $sucessor = $valor1 + 1;

        echo "o antecessor é " .$antecessor;
        echo " <br> o sucessor é " .$sucessor;

        

        echo "<br><br><hr><br><br>";



        /* 
            12.	Escreva um programa que calcule e mostre o valor da conversão em dólar de um valor lido em real. O programa deverá ler o valor da cotação do dólar e a quantidade de reais.
        */
        echo "12) "; 

        $dolar = 4.12;
        $real = 50;

        $cotacao = $dolar * $real; 

        echo "o valor do dolar é $dolar e a cotação é " .$cotacao;

        echo "<br><br><hr><br><br>";



        /* 
            13.	Ler um valor e imprimir esse valor com reajuste de 10%.
        */


        echo "13) "; 

        $valor1 = 10; 


        $reajuste = $valor1 + ($valor1 * 0.1);

        echo "o reajuste de 10% é " .$reajuste;


        echo "<br><br><hr><br><br>";