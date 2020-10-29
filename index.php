
<?php

echo 'Hello World <br> <br>';

//var: ( $nomevar = valor; )

    $nome='Nic'; //var nome tem valor igual a Nic
    $idade='17';
    echo $nome . '<br>'; //mostra na tela 'Nic'
    echo $idade . '<br><br>';

//var: Números
//mod 
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
    $nomes[0]='Batata<br><br>'; //O valor da var nomes passa a ser ['batata', 'Leticia', 'Eliane']
    echo $nomes[0]; //exibe Batata

//Arrays: Chave-Valor (Com o array chave-valor você pode usar palavras-chave ao invés de índices para armazenas valores)  

    $array=[
        'nome'=>'Nicole ',
        'sobrenome'=>'Silvestrini<br>'
    ];//  => serve p/ acessar propriedades ou métodos de um objeto

    echo $array['nome'];//exibe Nicole
    echo $array['sobrenome'];//exibe Silvestrini

//podemos alterar o valor de uma chava da mesma forma   

    $array['sobrenome']='pereira<br><br>';

//O array passa a ser 'nome'=>'Nicole', 'Sobrenome'=>'Pereira'   

    echo $array['sobrenome']; //exibe pereira



//Arrays: Multidimensional (são arrays que possuem outros arrays dentro)
    
    $array=[[5,3,7], [2,9,6]];
    echo $array[0][2]; //exibe 7
    echo $array[1][0]; //exibe 2


//Podemos fazer a mesma coisa com o array chave-valor

    $array=[
            ['nome'=>'<br><br>Nicole<br>', 'sobrenome'=>'Silvestrini'],
            ['nome'=>'Leticia', 'sobrenome'=>'Garrio<br><br>']
    ];

    echo $array[0]['nome'];//exibe Nicole
    echo $array[1]['sobrenome'];//exibe Garrio





//incluir ainda mais arrays dentro de arrays
    
    $array=[
            [
                [4,6,0], [3,7,2]
            ],
            //índice1
            [
                //índice0
                [2,8,5], [1,9,3]
            ]
    ];

    echo $array[1][0][2]; //exibe 5



//Funções (modo de dar nome a um bloco de código e chamá-lo quantas vezes quiser, mudando o valor de apenas algumas coisas ou nenhuma)

    function soma($num1, $num2){
        return $num1 + $num2;
    }

    echo soma(2, 3);//exibe 5




//é comum ter um return vazio dentro de condicionais em funções que não retornam valor

/*    function teste($nome){
        if($nome=='Nicole'){
            echo $nome.' =Nicole';
            return;
        }
        echo'A função continua se o $nome não for igual a Nicole'
    }

    teste('Nicole'); //exibe o 1º echo
    teste('Leticia'); //exibe o 2º echo (erro)*/

//se não tivesse o return na função anterior o teste('Nicole'), exibiria as duas mensagens!!!




//Também não é obrigatório as funções terem argumentos, ela pode ser usada apenas para evitar repetição de cód

    function teste(){
            echo '<br><br>mensagem 1<br>';
            echo 'mensagem 2<br>';
            echo 'mensagem 3<br><br>';
    }

    teste();
    teste();
    teste(); 
//O cód acima exibe 9 mensagens, (é chamda 3 vezes

// Funções globais: (funções que o próprio PHP disponibiza para você)

//Retornar números de itens em um array: (??)

    $array1=[5,9,7,5,3,8,9];
    $array2=['Nicole', 'Leticia', 'Eliane'];

    echo count($array1);//exibe 7
    echo count($array2);//exibe 3

//Verificar se determinada string possui outra:

    $frase = 'php é uma linguagem de programação';
    if(strpos($frase, 'linguagem')!==false){
        echo '<br><br>A var $frase possui a palavra "linguagem"';
    }

//Mudar uma parte de uma string por outra:

    $frase='<br><br>PHP é uma linguagem de programação<br>';
    echo str_replace('PHP', 'JS', $frase); //exibe Js é uma ...

//Ordernar um array:

    $array=[5,9,7,3,8];

    sort($array);
//valor de $array passa a ser [3,5,7,8,9] 


//Comandos de repetição:

    for($i=0; $i<10; $i++){
        echo '<br>' . $i . ' ';
    } //No final é p/ exibir: 0 1 2 3 4 5 6 7 8 9


//Uma das principais características do ´for´ é ter meio que um contador embutido, podemos aproveitar o contador para fazer condicionais:

    for($i=1; $i<=5; $i++){
        if($i == 3){
            echo '<br><br>$i = 3';
        }
        if($i==5){
            echo '<br>$i = 5<br><br>';
        }
    }


//dá para usá-lo quando for percorrer arrays usando a função global 

    $nomes=['Nicole', 'Eliane', 'Leticia', 'Silvia', 'Cleber'];

    for($i = 0; $i<count($nomes); $i++){
        echo $nomes[$i].', ';
    } //será exibido [Nicole, Eliane, Leticia, Silvia, Cleber,]


//While:

    $i=0;

    while($i<10){
        echo '<br>' . $i . ' ';
        $i++;
    }//No final é p/ exibir: 0 1 2 3 4 5 6 7 8 9



//Do ... While (Condição vem no final, garantindo que o cód seja executado ao menos uma vez)

    $i=0;

    do{
        echo '<br><br>' . $i . ' ';

        $i++ ;
    }while($i>10); //exibe 0


    $nome = 'Nicole';

    do{
        echo $nome;
    }while($nome!='Nicole');


//foreach (você pode percorrer arrays comuns e chave-valor de maneira fácil sem precisar de um contador)

    $array=[1,3,5,4,6,8];

    foreach($array as $item){
        echo '<br>' . $item . ' ';
    } //exibe 1 3 5  4 6 8

//No exemplo acima, o foreach repete a mesma quantidade de itens do array c/ a var $item possuindo o valor do item referente aquela repetição




    $nomes=['<br><br>Nicole', 'Leticia', 'Eliane'];

    foreach($nomes as $nome){
        echo $nome . ', ';
    }   //exibe Nicole, Letica, Eliane,



//arrays chave-valor c/ foreach:

    $dados=['nome'=>'Nicole', 'sobrenome'=>'Silvestrini', 'idade'=>17];

    foreach($dados as $chave=>$valor){
        echo '<br>'.$chave . ': ' . $valor ;
    } //Nome: nicole sobrenome: silvestrini idade: 17
    
    
    
    
//Comandos de repetição: continue e break:

    for($i=0; $i<10; $i++){
        if($i==4 || $i==6){continue;}
        if($i==8){break;}
        echo '<br><br>'.$i . ' ';
    }
    echo 'Final';



//função global include (dicionar todo o código de um arquivo PHP em outro)


/*
     <?php
    // arquivo index.php

    $dados = [
    'nome' => 'Alefe',
    'sobrenome' => 'Souza', 'idade' => 21 ];

    include('views/index.php');

    //Agora o código do arquivo index.php dentro da pasta views

    <!-- views/index.php -->
    <p><b>Nome:</b> <?= $dados['nome']; ?></p>
    <p><b>Sobrenome:</b> <?= $dados['sobrenome']; ?></p>
    <p><b>Idade:</b> <?= $dados['idade']; ?> anos</p>
     
    //Ao abrir o arquivo index.php, o código enviado para o navegador será:

    <p><b>Nome:</b> Alefe</p>
    <p><b>Sobrenome:</b> Souza</p>
    <p><b>Idade:</b> 21 anos</p>    
    
    //Que exibirá o seguinte no navegador:
    
    Nome: Alefe

    Sobrenome: Souza

    Idade: 21 anos
*/


//Banco de dados

    //praticamente tudo o que você faz em um site ou aplicativo online vai para um banco de dados, como seu cadastro em algum site, algo que você posta no Facebook ou Twitter, o post em um blog, fica tudo armazenado no banco de dados das respectivas empresas.

    //phpMyAdmin (é um painel escrito em PHP para você checar os dados de bancos de dados MySQL existentes e criar novos dados)
    //A_I, auto increment: significa que não precisamos preenchê-lo manualmente, pois a cada novo registro ele aumentará em 1 automaticamente;
    //VARCHAR (aceita qualquer caractere)
    //CRUD (Create, Read, Update, Delete)

//PDO

    //Para conectar no banco de dados do XAMPP, usaremos o seguinte código:

    $db_host='localhost';
    $db_nome='php_tutorial';
    $db_user='root';
    $db_senha='';

    $conexao=new PDO("mysql:host=$db_host;dbname=$db_nome;charset=utf8", $db_user, $db_senha);

//fazer um CRUD utilizando o PDO :

//Create

    $conexao=new PDO('mysql:host=localhost;dbname=php_tutorial;charset=utf8', 'root', '');

    $query=$conexao->prepare('INSERT INTO tabela_teste (nome, sobrenome, idade) VALUES (:nome, :sobrenome, :idade)');

    $query->bindValue(':nome', 'Leticia');
    $query->bindValue('sobrenome', 'Silvestrini');
    $query->bindValue(':idade', 9);

    $query->execute();

    //criamos nossa conexão com o banco de dados, então declaramos uma variável $query onde colocaremos nossa instrução SQL que queremos executar no banco de dados, no caso é um INSERT na tabela tabela_teste que criamos no phpMyAdmin, note que a query possui os parâmetros :nome, :sobrenome e :idade, esses valores serão substituídos pelos bindValue no código logo em seguida.


    //Com o método bindValue podemos substituir parâmetros na nossa query SQL, no próximo parágrafo eu explico o por quê disso, no primeiro argumento colocando qual parâmetro queremos substituir, e em seguida o seu valor, então usamos o comando $query->execute() para executar nossa query, que no final executará o seguinte comando no banco de dados:

    //INSERT INTO tabela_teste VALUES (nome, sobrenome, idade) VALUES ('Leticia', 'Silvestrini', 9);




