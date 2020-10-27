
<?php

echo 'Hello World <br> <br>';

//var: ( $nomevar = valor; )

    $nome='Nic'; //var nome tem valor igual a Nic
    $idade='17';
    echo $nome . '<br>'; //mostra na tela 'Nic'
    echo $idade . '<br><br>';

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

    echo 'var 5 igual á: ' . $var5. '<br> <br>';

//var: strings

    $nome = 'Nicole';
    $sobrenome = 'Silvestrini';
    echo $nome . ' ' . $sobrenome . '<br><br>';//Nicole Silvestrini

//concatenação = .
//aspas simples dão mais velocidade
    

//Condicionais:

    $var1 = 3;
    $var2 = 2;

    if($var1 + $var2 == 5){
            echo $var1 .' + '. $var2 .' é igual a 5 <br><br>';
    }   else{
            echo $var1 .' + '. $var2 .'é diferente de 5 <br>';
    }


//Se (if) var1 + var2 for 5 recebe a mensagem do 1º echo, senão (else) recebe a mensagem do 2º echo;


    $var = 5;
    if($var > 10){
        echo 'A var '. $var .' é maior que 10';
    } else if($var > 7){
        echo 'A var ' . $var . ' é maior que 7';
    }else if($var>=5){
        echo 'A var ' . $var . ' é maior ou igual a 5<br>'; //cód executado
    }else if($var>=3){
        echo 'A var ' .$var. ' é maior ou igual a 3'; //só uma condição pode ser executada, portanto essa mão vai funcionar
    }else{
        echo 'A var $var possui um valor diferente das condicionais anteriores';
    }


//menor ou diferente:
    $num=-5;

    if($num>0){
        echo 'A var ' . $num . ' é um número positivo';
    }else if($num<0){
        echo 'A var ' .$num. ' é um número negativo <br>'; //será executada
    }else if($num==0){
        echo 'A var '.$num.' é igual a 0';
    }else{
        echo 'A var '.$num. ' não é um número';
    }

    if($num!=5){
        echo 'A var '.$num.' é diferente de 5<br>';
    }else{
        echo 'A var '.$num.' é igual a 5 <br>';
    }

//multiplas condições
    $numero = 5;
    $nome = 'Nicole';

    if($numero>=3 && $numero<=7){
        echo 'A var '.$numero.' é maior ou igual a 3 e menor ou igual a 7<br>';
    }
        
    if($numero==5 || $numero==3){
        echo 'A var '.$numero.' é igual a 3 ou igual a 5<br>';
    }

    if($numero!=7 && $nome=='Nicole'){
        echo 'A var '.$numero.' é diferente de 7 e a var '.$nome.' é igual a Nicole<br>';
    }


//Condicionais: switch (realiza diversas comparações ao mesmo tempo, útil p/ deixar o cód mais limpo e escrever menos cód caso tenha mais condicionais)
    $numero=5;

    switch($numero){
        case 1:
            echo 'O valor de '.$numero.' é 1';
            break;
        case 2:
            echo 'O valor de '.$numero.' é 3 ou 4';
            break;
        case 3:
            echo 'O valor de '.$numero.' é 5<br>'; //será executada
            break;
        default:
            echo 'O valor de '.$numero.' não corresponde as condicionais anteriores<br>';
            break;

    }

//caso2
    $nome='Nicole';
    
    switch($nome){
        case 'Arthur':
            echo 'O valor de '.$nome.' é Arthur<br>';
            break;
        case 'Luis':
            echo 'O valor de '.$nome.' é Luis<br>';
            break;
        case 'Nicole':
            echo 'O valor de '.$nome.' é Nicole<br>';//SERÁ EXECUTADO
            break;
        case 'Carlos':
            echo 'O valor de '.$nome.' é Carlos<br>';
            break;
        case 'Henrique':
            echo 'O valor de '.$nome.' é Henrique<br>';
            break;
        default:
            echo 'O valor de '.$nome.' não corresponde aos condicionais anteriores<br>';
            break;
                        
    }
    echo '<br>';

//arrays: (formas de armazenar vários valores em uma só variável // útil quando precisamos armazenar listas ou algo que seja múltipla escolha);
//array por índice:

    $nomes =['Nicole<br>', 'Leticia', 'Eliane<br><br>'];
    echo $nomes[0]; //exibe Nicole
    echo $nomes[2]; //exibe Eliane


//Pode ser que você encontre arrays sendo declarados da seguinte forma:

    $nomes = array('Nicole', 'Leticia', 'Eliane');

//Os valores de um array em PHP podem ser de qualquer tipo, inclusive embora não seja recomendado, você pode misturar tipos:
    $nome='Nicole<br><br>';
    $array=[21, 'PHP', true, $nome];

    echo $array[0]; //exibe 21
    echo $array[1]; //exibe PHP
    echo $array[3]; //exibe Nicole

//também dá para alterar o valor de itens no array da mesma forma que altera uma variável:

    $nomes =['Nicole<br>', 'Leticia', 'Eliane'];
    echo $nomes[0]; //Nicole
    $nomes[0]='Batata'; //O valor da var nomes passa a ser ['batata', 'Leticia', 'Eliane']
    echo $nomes[0]; //exibe Batata
