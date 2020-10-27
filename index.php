
<?php

echo 'Hello World <br>';


//var: ( $nomevar = valor; )

    $nome='Nic'; //var nome tem valor igual a Nic
    $idade='17';
    echo $nome . '<br>'; //mostra na tela 'Nic'
    echo $idade . '<br>';

//var: Números

    $var1 = 1.5;
    $var2 = 3+2;
    $var3 = $var1 - $var2;
    $var4 = $var3*5;
    $var5 = 10/2;

    echo 'var 1 igual á: ' . $var1 . '<br>';

    echo 'var 2 igual á: ' . $var2. '<br>';

    echo 'var 3 igual á: ' . $var3. '<br>';

    echo 'var 4 igual á: ' . $var4. '<br>';

    echo 'var 5 igual á: ' . $var5. '<br>';

//var: strings

    $nome = 'Nicole';
    $sobrenome = 'Silvestrini';
    echo $nome . ' ' . $sobrenome . '<br>';//Nicole Silvestrini

//concatenação = .
//aspas simples dão mais velocidade

//Condicionais:

    $var1 = 3;
    $var2 = 2;

    if($var1 + $var == 5){
            echo $var1 .' + '. $var2 .' é igual a 5';
    }   else{
            echo $var1 .' + '. $var2 .'é diferente de 5';
    }


//Se (if) var1 + var2 for 5 recebe a mensagem do 1º echo, senão (else) recebe a mensagem do 2º echo;


    $var = 5;
    if($var > 10){
        echo 'A var '. $var .' é maior que 10';
    } else if($var > 7){
        echo 'A var ' . $var . ' é maior que 7';
    }else if($var>=5){
        echo 'A var ' . $var . ' é maior ou igual a 5'; //cód executado
    }else if($var>=3){
        echo 'A var ' .$var. ' é maior ou igual a 3';
    }else{
        echo 'A var $var possui um valor diferente das condicionais anteriores';
    }



