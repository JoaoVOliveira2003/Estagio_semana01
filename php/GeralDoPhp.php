<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Declaração de Variáveis</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <?php


        $a = 2;
        $b = 3;
        $c = 1;
        echo '<p>Aqui estão os valores INT de A - ' . $a . ', B - ' . $b . ' e C - ' . $c . '</p>';

        $cn = 1.234;
        echo '<p>Aqui está um FLOAT - ' . $cn . '</p>';

        $teste = 'CAUÃ';
        echo '<p>Aqui está uma STRING - ' . $teste . '</p>';

        $SIM = true;
        echo '<p>Aqui está um BOOLEAN - ' . ($SIM ? 'TRUE' : 'FALSE') . '</p>';

        $cor[0] = "laranja";
        $cor[1] = "vermelho";
        $cor[2] = "azul";
        $cor[2] = "roxo"; // Sobrescreve o valor anterior

        $frutas = array(1 => "mamão", 0 => "abacate", 3 => "melancia", 2 => "limão");

        echo '<p>É possível fazer e demonstrar vetores/listas</p>';
        foreach ($frutas as $key => $value) {
            echo "Índice: $key - Valor: $value<br>";
        }
        ?>

        <p>Um objeto pode ser inicializado utilizando o comando <code>new</code> para instanciar uma classe para uma variável.<br>
            <hr>
        </p>

        <h3>Coerção</h3>
        <p>O PHP não tem que declarar variáveis, mas elas existem como pode ser visto no capítulo anterior. Então, para fazer cálculos, o PHP faz conversões por si mesmo.</p>
        <p>A ordem de conversão é: se um dos operandos for float, o outro será convertido para float; senão, se um deles for integer, o outro será convertido para integer.</p>

        <p>
            $cn = "1"; // $cn é a string "1"<br>
            $cn = $cn + 1; // $cn é o integer 2<br>
            $cn = $cn + 3.7; // $cn é o double 5.7<br>
            $cn = 1 + 1.5; // $cn é o double 2.5<br><br>
            Nota-se, o PHP converte string para integer ou double mantendo o valor.
        </p>

        <h4>Transformação explícita de tipos</h4>
        <p>Dá para fazer essa conversão "pela mão", aí nós temos que colocar as seguintes coisas:</p>

        <p>Os tipos de cast permitidos são:<br>
            (int), (integer) -> muda para integer;<br>
            (real), (double), (float) -> muda para float;<br>
            (string) -> muda para string;<br>
            (array) -> muda para array;<br>
            (object) -> muda para objeto<br><br>
        </p>

        <p>A sintaxe do typecast de PHP é semelhante ao C: basta escrever o tipo entre parênteses antes do valor<br>
            $cn = 15; // $cn é integer (15)<br>
            $cn = (double) $cn; // $cn é double (15.0)<br>
            $cn = 3.9; // $cn é double (3.9)<br>
            $cn = (int) $cn; // $cn é integer (3)
        </p>

        <p>A função <code>settype</code> converte uma variável para o tipo especificado, que pode ser “integer”, “double”, “string”, “array” ou “object”. <br>
            Exemplo:<br>
            $cn = 15; // $cn é integer<br>
            settype($cn, "double"); // $cn é double<br>
        </p>

        <hr>

        <h4>Comparação de maneira diferente</h4>

        <p>(expressao1) ? (expressao2) : ( expressao3)</p><br>
        <p>Basicamente é o seguinte: SE expressao1 for TRUE,<br>
            ela retorna o valor da expressao2. Se não, retorna expressao3!!!</p>

        <p>Exemplo 01:<br>
            $a = 2;<br>
            (a == 2) ? ($b = true) : ($b = false);<br>
            Aqui vai sair TRUE!</p>

        <p>Para $a = 2, a expressão é TRUE</p>

        <p>Para $a = 4, a expressão é FALSE</p>
        <hr>

        <h5>Operadores de Atribuição</h5>

        <p>
            <code>=</code> atribuição simples<br>
            <code>+=</code> atribuição com adição<br>
            <code>-=</code> atribuição com subtração<br>
            <code>*=</code> atribuição com multiplicação<br>
            <code>/=</code> atribuição com divisão<br>
            <code>%=</code> atribuição com módulo<br>
            <code>.=</code> atribuição com concatenação<br>
        </p>
        <p>
            <strong>Exemplo:</strong><br>
            <code>
                $a = 7;<br>
                $a += 2; // $a passa a conter o valor 9<br>
            </code>
        </p>
        <hr>

        <h5>Operadores Aritméticos/String</h5>

        <p>
            Só podem ser utilizados quando os operandos são números (integer ou float). Se forem de outro tipo, terão seus valores convertidos antes da realização da operação.<br>
            <code>+</code> adição<br>
            <code>-</code> subtração<br>
            <code>*</code> multiplicação<br>
            <code>/</code> divisão<br>
            <code>%</code> módulo<br>
            <br>
            Só há um operador exclusivo para strings:<br>
            <code>.</code> concatenação
        </p>
        <hr>

        <h5>Bit a Bit - Lógico</h5>

        <p>
            Comparam dois números bit a bit.<br>
            <code>&</code> “e” lógico<br>
            <code>|</code> “ou” lógico<br>
            <code>^</code> ou exclusivo<br>
            <code>~</code> não (inversão)<br>
            <code>&lt;&lt;</code> shift left<br>
            <code>&gt;&gt;</code> shift right
        </p>

        <p>
            Utilizados para inteiros representando valores booleanos<br>
            <code>and</code> “e” lógico<br>
            <code>or</code> “ou” lógico<br>
            <code>xor</code> ou exclusivo<br>
            <code>!</code> não (inversão)<br>
            <code>&&amp;</code> “e” lógico<br>
            <code>||</code> “ou” lógico
        </p>

        <p>
            Existem dois operadores para “e” e para “ou” porque eles têm diferentes posições na ordem de precedência.
        </p>
        <hr>

        <h5>Incremento e Decremento</h5>

        <p>
            <code>++</code> incremento<br>
            <code>--</code> decremento<br>
        </p>

        <p>
            Podem ser utilizados de duas formas: antes ou depois da variável.<br>
            Quando utilizado antes, retorna o valor da variável antes de incrementá-la ou decrementá-la.<br>
            Quando utilizado depois, retorna o valor da variável já incrementado ou decrementado.<br>
        </p>

        <p>
            Exemplos:<br>
            <code>$a = $b = 10;</code> // $a e $b recebem o valor 10<br>
            <code>$c = $a++;</code> // $c recebe 10 e $a passa a ter 11<br>
            <code>$d = ++$b;</code> // $d recebe 11, valor de $b já incrementado<br>
        </p>
        <hr>


        <code>$a = 1; /*escopo global */
            Function Test () {
            echo $a; /* referencia a variavel local */
            }</code>







        <h5>Escopo e Visibilidade de Variáveis</h5>

        <p>
            - O escopo é onde a variável está definida, podendo ser Local ou Global.<br>
            - Global é quando ela é definida fora de uma função, local quando está dentro de uma função.<br><br>

            <code>$a = 1;</code> /* escopo global */ <br>
            <code>Function Test () { </code><br>
            <code>echo $a;</code> /* referencia a variável local */ <br>
            <code>}</code><br>

            A saída disso será NULL. Isso acontece porque não é possível acessar variáveis globais diretamente dentro de uma função local.<br><br>

            Deve-se fazer algo da seguinte maneira:<br>
            <code>$a = 1;</code><br>
            <code>$b = 2;</code><br>
            <code>Function Sum () {</code><br>
            <code>global $a, $b;</code><br>
            <code>$b = $a + $b;</code><br>
            <code>}</code><br>
            <code>Sum ();</code><br>
            <code>echo $b;</code><br>
            Será impresso o valor “3”. Aqui, a função utiliza a palavra-chave <code>global</code> para acessar variáveis globais dentro da função local.<br><br>

            Outra maneira de fazer isso é utilizando o array <code>$GLOBALS</code> do PHP:<br> <br>
            <code>$a = 1;</code><br>
            <code>$b = 2;</code><br>
            <code>Function Sum () {</code><br>
            <code>$GLOBALS["b"] = $GLOBALS["a"] + $GLOBALS["b"];</code><br>
            <code>}</code><br>
            <code>Sum ();</code><br>
            <code>echo $b;</code><br>
            Isso também funcionará com vetores.<br><br>

            Variável Static: Quando uma função é chamada e não tem nada, as variáveis são zeradas. Quando são definidas como static, elas mantêm seu valor entre chamadas.<br><br>

            Exemplos das funções Test1 e Test2:<br><br>

            <code>Function Test () {</code><br>
            <code>static $b = 0;</code><br>
            <code>echo $b;</code><br>
            <code>$b++;</code><br>
            <code>}</code><br>
            Após ser executada 5 vezes, a função Test() resultará em <code>0</code>. Isso ocorre porque a variável estática mantém seu valor entre chamadas.<br><br>
            <br>
            <code>Function Test2 () {</code><br>
            <code>$a = 0;</code><br>
            <code>echo $a;</code><br>
            <code>$a++;</code><br>
            <code>}</code><br>
            Após ser executada 5 vezes, a função Test2() resultará em <code>4</code>. Aqui, a variável <code>$a</code> é local e é inicializada a cada chamada da função.<br><br>

            - Variáveis Variáveis: O PHP permite usar variáveis cujos nomes também são variáveis, utilizando o duplo cifrão ($$).<br><br>

            <code>$a = “Nome”;</code><br>
            <code>$$a = “Hiromi”;</code><br>
            O exemplo acima é equivalente a:<br>
            <code>$a = “teste”;</code><br>
            <code>$teste = “Hiromi”;</code><br><br>

            Além disso, é possível pegar variáveis passadas pelo navegador.
        </p>
        <hr>

        <h4>URLencode</h4>

        <p>
            URL encoding é um método utilizado para transformar informações em URLs em um formato seguro e legível para a transmissão na internet. Quando você navega na web, URLs frequentemente contêm caracteres especiais (como espaços, símbolos, letras acentuadas, entre outros).
        </p>

        <p>
            Por exemplo: o texto “Testando 1 2 3 !!” em urlencode fica "<code>Testando+1+2+3+%21%21</code>".
        </p>

        <p>
            O PHP possui duas funções para tratar com texto em urlencode. Seguem suas sintaxes:
        </p>

        <ul>
            <li><code>string urlencode(string texto);</code></li>
            <li><code>string urldecode(string texto);</code></li>
        </ul>

        <p>
            Essas funções servem respectivamente para codificar ou decodificar um texto passado como argumento.
        </p>
        <hr>
        <h4>Utilizando Arrays</h4>

        <p>
            Cada elemento de um formulário HTML submetido a um script PHP cria no ambiente do mesmo uma variável cujo
            nome é o mesmo nome do elemento.
            <br><br>
            Por exemplo, um campo definido como:
            <br>
            <code>&lt;input type=”text” name=”endereco”&gt;</code>
            <br><br>
            Ao ser submetido a um script PHP fará com que seja criada uma variável com o nome <code>$endereco</code>.
        </p>

        <p>
            Para um conjunto de checkboxes, por exemplo, podemos utilizar a seguinte notação:
            <br>
            <code>&lt;input type="checkbox" name="teste[]" value="valor1"&gt; opcao1</code>
            <br>
            <code>&lt;input type="checkbox" name="teste[]" value="valor2"&gt; opcao2</code>
            <br>
            <code>&lt;input type="checkbox" name="teste[]" value="valor3"&gt; opcao3</code>
            <br>
            <code>&lt;input type="checkbox" name="teste[]" value="valor4"&gt; opcao4</code>
            <br>
            <code>&lt;input type="checkbox" name="teste[]" value="valor5"&gt; opcao5</code>
            <br><br>
            Assim, se forem marcadas as opções 2, 3 e 5, poderemos fazer as seguintes afirmações:
            <br>
            <code>$teste == array(“valor2”, “valor3”, valor5”);</code>
            <br>
            <code>$teste[0] == “valor2”;</code>
            <br>
            <code>$teste[1] == “valor3”;</code>
            <br>
            <code>$teste[2] == “valor5”;</code>
        </p>

        <hr>

        <h4>Variáveis de ambiente</h4>

        <p>Como em outras variaveis,tem algumas coisa que vc n pode declarar como uma variavel </p>
        <hr>
        <h4>Destruindo uma variável</h4>
        <p>Voce pode simplesmente destruir uma variavel,através da função <b><i>unset</i></b></p>
        <p><i>int unset(mixed var);</i></p>
        <p>A função destrói a variável, ou seja, libera a memória ocupada por ela .</p>
        <p>Se mais na frente for feita uma chamada á variável, será
            criada uma nova variável de mesmo nome e de conteúdo
            vazio.
        </p>

        <br>
        <p>
            $a = "Olá, mundo!"; <br>
            echo $a; // Saída: Olá, mundo!<br>
            unset($a); // Destrói a variável $a<br>
            echo $a; // Aviso: Undefined variable: a, pois $a não existe mais

        </p>
        <hr>

        <h4>Verificando se uma variável possui um valor</h4>
        <p>com a função isset e com a função empty.</p>
        <p>retorna true se a variável estiver setada (ainda que com
            uma string vazia ou o valor zero), e false em caso contrário</p>

        <p>isset($a) <br> empty($a)</p>
        <hr>
        <h4> PhpInfo()</h4>
        <p> É possivel identidicar todas as informações do seu PHP utilizando <b>phpinfo()</b> </p>

        <hr>

        <h4>Constantes pré-definidas</h4>
        <p> É possivel identidicar as constantes do seu PHP utilizando phpinfo() </p>
        <p>Porém é possviel tambem definir suas propias constantes utilizando <b>define()</b></p>
        <p>da sequinte maneira :</p>
        <p>define(NomeDaVariavel,ValorDaVariavel)</p><br>
        <code>
            define ("pi", 3.1415926536);<br>
            $circunf = 2*pi*$raio
        </code>
        <hr>
        <h4>Verificando o tipo de uma variável</h4>
        <p>
            <b>$type = gettype($a);</b> // Obtendo o tipo da variável $a após unset <br>
            <b>echo "Tipo de \$a após unset: $type";</b> // Saída: Tipo de $a após unset: INT <br>
        </p>

        <p>
            Funções que testam o tipo da variável, são as funções:<br>is_int <br>
            is_integer,<br> is_real,<br> is_long,<br> is_float,<br> is_string, <br>is_array<br>
            is_object.<br> <br>Todas têm o mesmo formato, seguindo modelo da
            assinatura a seguir:<br>

            <code>is_int($a)</code><br>
            Todas essas funções retornam true se a variável for daquele
            tipo, e false em caso contrário.
        </p>
        <hr>
        <h2>Estruturas de Controle </h2>

        <ul>
            <li>If else</li>
            <li>Elseif</li>
            <li>Switch</li>
            <li>While</li>
            <li>do ... while</li>
            <li>for</li>
            <li>Break</li>
            <li>Continue</li>
        </ul>

        <h4>If else </h4>
        <pre><code>
$a = 5;
if ($a > 3) {
    echo "$a é maior que 3"; // Saída: 5 é maior que 3
}
</code></pre>

        <h4>Elseif</h4>
        <pre><code>
$a = 5;
$b = 10;
if ($a > $b) {
    echo "$a é maior que $b";
} elseif ($a < $b) {
    echo "$a é menor que $b"; // Saída: 5 é menor que 10
} else {
    echo "$a é igual a $b";
}
</code></pre>

        <h4>Switch</h4>
        <pre><code>
$c = 2;
switch ($c) {
    case 1:
        echo "c é igual a 1";
        break;
    case 2:
        echo "c é igual a 2"; // Saída: c é igual a 2
        break;
    case 3:
        echo "c é igual a 3";
        break;
    default:
        echo "c não é 1, 2 ou 3";
}
</code></pre>

        <h4>While</h4>
        <pre><code>
$a = 0;
while ($a < 5) {
    echo $a . " "; // Saída: 0 1 2 3 4
    $a++;
}
</code></pre>

        <h4>do...while</h4>
        <pre><code>
$a = 0;
do {
    echo $a . " "; // Saída: 0 1 2 3 4
    $a++;
} while ($a < 5);
</code></pre>

        <h4>For</h4>
        <pre><code>
for ($a = 0; $a < 5; $a++) {
    echo $a . " "; // Saída: 0 1 2 3 4
}
</code></pre>

        <h4>Break</h4>
        <pre><code>
for ($a = 0; $a < 10; $a++) {
    if ($a == 5) {
        break;
    }
    echo $a . " "; // Saída: 0 1 2 3 4
}
</code></pre>

        <h4>Continue</h4>
        <pre><code>
for ($a = 0; $a < 10; $a++) {
    if ($a % 2 == 0) {
        continue;
    }
    echo $a . " "; // Saída: 1 3 5 7 9
}
</code></pre>
        <hr>
        <h4>Função</h4>


        <pre><code>
function soma($a, $b, $c) {
    return $a + $b + $c;
}

$resultado = soma(1, 2, 3);
echo $resultado; // Saída: 6
</pre></code>

        <p> <b>Valor de Retorno</b> <br>

            Toda função pode opcionalmente retornar um valor, ou
            simplesmente executar os comandos e não retornar valor
            algum. <br>
            Não é possível que uma função retorne mais de um valor,
            mas é permitido fazer com que uma função retorne um valor
            composto, como listas ou arrays
        </p>

        <p> <b>Argumentos</b> <br>

            É possível passar argumentos para uma função. <br>
            Eles devem ser declarados logo após o nome da função,
            entre parênteses, e tornam-se variáveis pertencentes ao
            escopo local da função.
        </p> <br>

        <p><b>passagem de parâmetros em PHP por valor e por referência.</b> <br>

        <p>Passagem por Valor - Não altera os dados por fora.</p>
        <pre><code>function mais5($numero) {
    $numero += 5;
}

$a = 3;
mais5($a); 
echo $a; // Saída: 3
</pre></code>

        <p>Passagem por Valor - altera o dados que foi enviado. <br>
            o que fez isso mudar o valor simplesmente é o &</p>
        <pre><code>function mais5(&$numero) {
    $numero += 5;
}

$a = 3;
mais5($a); 
echo $a; // Saída: 8</pre></code>

        <p><b>Argumentos com valores pré-definidos (default)</b> <br>
        <p> Em PHP é possível ter valores default para argumentos de
            funções, ou seja, SE NÃO MANDAR NADA JÁ TEM VALORES PRÉ ESTABELECIDOS.</p>

        <pre><code>function saudacao($nome = "Visitante", $saudacao = "Olá") {
    echo "$saudacao, $nome!";
}

// Chamada da função sem argumentos. Usará os valores padrão.
saudacao(); <br>// Saída: Olá, Visitante!

// Chamada da função com um argumento. Usará o valor padrão para o segundo argumento.
saudacao("João"); <br>// Saída: Olá, João!

// Chamada da função com dois argumentos. Não usará os valores padrão.
saudacao("Maria", "Bem-vinda");<br> // Saída: Bem-vinda, Maria!</code></pre>
        <hr>
        <h3>Acessando Banco de Dados</h3>

        <p>
            Para acessar bases de dados num servidor, é necessário antes estabelecer uma conexão.
            <br><br>
            Para isso, deve ser utilizado o comando,<b>odbc_connect</b>ou <b>odbc_pconnect </b>. A diferença entre os dois comandos é
            que o <i>odbc_pconnect</i> estabelece uma conexão
            permanente, ou seja, que não é encerrada ao final da
            execução do script.
            <br><br>
            As assinaturas dos dois comandos são semelhantes.
            <br><br>
        <pre><code>
int odbc_connect(string dsn, string user, string password,<br> int [cursor_type]);
<br>
$dsn = "meu_banco_dsn";
$user = "usuario";
$password = "senha";

$conn = odbc_connect($dsn, $user, $password);

if ($conn) {
    echo "Conexão estabelecida com sucesso!";
} else {
    echo "Erro ao conectar ao banco de dados.";
}

<p>---------------------------</p>
int odbc_pconnect(string dsn, string user, string
password, int [cursor_type]);

$dsn = "meu_banco_dsn";
$user = "usuario";
$password = "senha";

$conn = odbc_pconnect($dsn, $user, $password);

if ($conn) {
    echo "Conexão persistente estabelecida com sucesso!";
} else {
    echo "Erro ao conectar ao banco de dados.";
}


</code></pre>
        <b>ODBC (Open Database Connectivity) </b>
        <p>
            O valor de retorno é um inteiro que identifica a conexão, ou
            falso se a conexão falhar
        </p>

        <p>int odbc_connect(string dsn, string user, string password, int
            [cursor_type]); <br>
            • Retorna um identificador ODBC de conexão ou 0 em caso
            de erro. <br>
            • O identificador retornado por esta função é necessário o em
            outras funções ODBC. <br>
            • Pode-se ter muitas conexões abertas ao mesmo tempo. <br>
            • O quarto parâmetro é opcional. Não é necessário, mas pode
            ser útil para solucionar problemas com alguns drivers. <br>
            • Alguns Drivers ODBC que executam um stored procedure
            complexo, pode falhar com uma mensagem como: "Cannot
            open a cursor on a stored procedure that has anything other
            than a single select statement in it" <br>
            • Utilizando SQL_CUR_USE_ODBC pode-se evitar este erro.
            Também alguns drivers não suportam o parâmetro
            row_number no comando odbc_fetch_row.
            SQL_CUR_USE_ODBC pode ajudar neste caso.<br>
        </p><br><br>

        <p>Para poder se fechar essa concção se utiliza o seguinte comando</p>
        <pre><code>void odbc_close(int id_Conecão);//fechar expecifica
void odbc_close_all(void); //fechar tudo <br>
<p>IMPORTANTE: o comando odbc_close não encerra conexões <br>
estabelecidas com o comando odbc_pconnect.</p></code></pre>
        <br>
        <p>Executa uma declaração preparada com odbc_prepare.
            Retorna Verdadeiro se a execução for bem sucedido ou
            falso en caso contrário</p>
        <b>int odbc_execute(int result_id, array [parameters_array]);</b>
        <p>Prepara um comando para execução. Retorna falso em caso
            de erro </p>
        <b>int odbc_prepare(int connection_id, string query_string);</b>
        <br>
        <pre><code>Codigo que esta no PDF <br>
$conn = odbc_connect("hiromi", "", "");
$stmt ="UPDATE nome SET nome = 'CAIO' WHERE
CODIGO = 2";
$prepare=odbc_prepare($conn,$stmt);
$resp = odbc_execute($prepare);
if ($resp)
echo (“Atualizado com sucesso”);
else
echo (“Falha na operação”);
odbc_close($com);
</code></pre>
        <br>

        <code>
            <pre>int odbc_exec(int connection_id, string query_string);</pre>
        </code>
        <p>
            Prepara e executa um comando SQL. <br>
            • Retorna FALSO quando ocorre um erro ou retorna um
            identificador ODBC se o comando SQL é executado com
            sucesso. <br>
            • odbc_exec manda um comando SQL para o Servidor de
            Banco de Dados, especificado por connection_id. Este
            parametro deve ser um identificador válido que é
            determinado por odbc_connect <br>
        </p>

        <code>
            <pre>
$conn = odbc_connect("hiromi", "", "");
$stmt ="UPDATE nome SET nome = 'CAIO' WHERE
CODIGO = 2";<br>
//aqui vc exacuta o comando $stmt no baco $conn, <br>essa coisa de $resp é simplesmente para saber =
se o comando deu certo(1,true) ou errado(0,false). <br>
$resp=odbc_exec($conn,$stmt); 
        </pre>
        </code>


        <h3>Recuperando Informações</h3>

        <pre><code>odbc_fetch_into($result_id, 1, $resultado_array);
//Basicamente ele cria uma array para armazenar os valores<br> que  foram pegos de um banco 

</code></pre>
        <p>• O retorna o número de colunas do resultado ou false em
            caso de erro.
            <br> • O vetor conterá valores que
            começam com índice 0
        </p>

        <pre><code>int odbc_fetch_row(int result_id, int [row_number]);
//função odbc_fetch_row é usada para mover o ponteiro do<br> conjunto de
resultados para uma linha específica em uma consulta ODBC.<br> Aqui está a descrição da função:</code></pre>

        <code>
            <pre><b>string odbc_result(int result_id, mixed field);</b> <br>
if (odbc_fetch_row($resultado)) {
  // Acessar os dados da coluna 'nome' e 'data_nascimento'
  $nome = odbc_result($resultado, "nome");
  $data_nascimento=odbc_result($resultado,"data_nascimento");
  echo"Nome:".$nome.",Data de Nascimento:".$data_nascimento;
}

Basicamente insere um dado da consulta numa variavel;
</pre>
        </code>


        <pre><code>
//Cria conecção com um banco com os CAFES_DO_ABC 
$con = odbc_connect("CAFES_DO_ABC ", "", "");


//para nos sabermos aonde tem que pegar,parte confusa
$p_unidade = 1;

//Setando de uma query.
$sql="SELECT*FROM UNIDADE WHERE UNIDADEID=".$p_unidade;

//Executando a quero em questão,$sql é o comendo, $con é aond
$rescid = odbc_exec($con, $sql);

$fetcid = odbc_fetch_row($rescid);

if ($fetcid) {
    //Pegando os dados,os setando em variaveis, <br>e depois mostrando na tela.
    $cidade = odbc_result($rescid, 2);
    $ud_cep = odbc_result($rescid, 4);
    $ud_end = odbc_result($rescid, 3);

    
echo "Cidade: " . $cidade . ", CEP: " . $ud_cep . <br>", Endereço: " . $ud_end;
} else {
    echo "Nenhum resultado encontrado para UNIDADEID =<br> " . $p_unidade;
}

odbc_close($con);</code></pre>

        <p>
            <code>
                <pre>int odbc_result_all(int result_id, string [format]);</pre>
            </code>
            •Retorna o número de linhas do resultado ou falso se ocorrer
            um erro.<br>

            • O resultado será impresso em uma tabela HTML. O
            argumento format pode ser definido para definir parâmetros
            adicionais da tabela HTML.<br>

        </p>


        <pre><code>$con = odbc_connect("CAFESODBC"); <br>
$rescid = odbc_exec($con,"SELECT * FROM UNIDADE where 
UNIDADEID =".$p_unidade);<br>
$fetcid = odbc_fetch_row($rescid );<br>
$cidade = odbc_result_all($rescid);<br>
odbc_close($con );</code></pre>


        <pre><code>string odbc_fieldname(int result_id, int field_number);</code></pre>
        <p>
            • odbc_field_name retorna o nome do campo ocupado por
            pela coluna definida em field_number no cursor da consulta
            ODBC.<br>
            • Os números dos campos começam com 1. Retorna falso em
            caso de erro..<br>
        </p>
        <pre><code>string odbc_field_type(int result_id, int field_number);</code></pre>
        <p>
            • odbc_field_type retornará um tipo de campo SQL
            referenciado pelo número dado pelo identificador ODBC..<br>
        </p>
        <pre><code>int odbc_field_len(int result_id, int field_number);</code></pre>
        •odbc_field_len retornará o tamanho do campo
        referenciado pelo número dado pelo identificador ODBC

        <hr>

        <h2>Classe</h2>
        <p>---------------------------------------------------------------------------------------------------------</p>

        <p>
            • Uma classe é um conjunto de variáveis e funções
            relacionadas a essas variáveis. <br><br>
            • Uma vantagem da utilização de programação orientada a
            objetos é poder usufruir do recurso de encapsulamento de
            informação.<br><br>
            • Com o encapsulamento o usuário de uma classe não precisa
            saber como ela é implementada, bastando para a utilização
            conhecer a interface, ou seja, as funções disponíveis.<br><br>
            • Uma classe é um tipo, e portanto não pode ser atribuída a
            uma variável.

        <pre><$variavel>//Corpo de uma classe

class Nome_da_classe {

var $variavel1; 
var $variavel2;

function funcao1 ($parametro) {
    //corpo da função
    }
}
</pre></code>
        <p>---------------------------------------------------------------------------------------------------------</p>

        <h4>Objeto</h4>
        <p>
            • Objeto é basicamente o nome da variavel da classe . <br>
            • Variáveis do tipo de uma classe são chamadas de objetos, e
            devem ser criadas utilizando o operador <b>new</b>, seguindo o
            exemplo abaixo:
        </p>
        <code>
            <pre>$variavel = new $nome_da_classe;</pre>
        </code>

        <p>• Para utilizar as funções definidas na classe, deve serutilizado o operador <br>
            “->”, como no exemplo:</p>
        <pre><code>$variavel->funcao1(parametro);</code></pre>
        <p>---------------------------------------------------------------------------------------------------------</p>

        <h4>$this</h4>
        <p>
            Basicamente vc esta apontando para algo que esta dentro de um objeto <br>
            "OLHA O SALDO DO Fulano01" <br>
            Se Não usar vai mecher no saldo geral e vai dar B.O
        </p>
        <code>
            <pre><b>Com o $this</b>
$class conta {
   
var $saldo;

    //APONTA PARA O SALDO.
    function saldo() {
        return $this->saldo;
    }

    //APONTA PARA O SALDO, E FAZ A CONTA 
    function credito($valor) {
        $this->saldo += $valor;
    }
}


$minhaconta = new conta; 
$minhaconta->saldo(); // a variavel interna não foi


$minhaconta->credito(50);
$minhaconta->saldo(); // retorna 50</pre>
        </code>
        <p>---------------------------------------------------------------------------------------------------------</p>
        <code>
            <pre>
<b>Sem o $this</b>
class conta {
    var $saldo;

    function saldo() {
        return $this->saldo;
    }

    function credito($valor) {
        // Sem $this, não podemos acessar $saldo diretamente
        // Em vez disso, precisaríamos usar  
        //a variável global ou estática

        global $saldo; // Variável global, não recomendado
        $saldo += $valor;
    }
}

// Instância da classe conta
$minhaconta = new conta;

// Chamadas de métodos
$minhaconta->saldo(); // Erro, pois $this não está definido

$minhaconta->credito(50);
$minhaconta->saldo(); // Erro, pois $this não está definido
</pre>
        </code>
        <p>---------------------------------------------------------------------------------------------------------</p>
        <h4>Sub classes</h4>
        <p>
            Uma classe pode ser uma extensão de outra. <br><br>
            Isso significa que:<br>
            - ela herdará todas as variáveis e funções da outra classe + suas propias.<br><br>
            Porém uma classe filha só tem 1 pai, uma extenção, não podendo ter varios pais<br><br>
            Para criar uma
            classe extendida, ou derivada de outra, deve ser utilizada a
            palavra reservada <b>extends</b>.Como pode ser visto no exemplo
            seguinte:
        </p>

        <pre><code>
class novaconta <b>extends</b> conta {
    var $num;

    function numero() {
        return $this->num;
    }
}
/*
A classe acima é derivada da classe conta, tendo as mesmas 
funções e variáveis, com a adição da variável $numero e a 
função numero()
*/
</code></pre>
        <p>---------------------------------------------------------------------------------------------------------</p>
        <h4>Construtores</h4>

        <p>O construtor é uma função que é chamada automaticamente quando a classe é instanciada, através de um NEW</p>
        <p>
            Para ser um construtor ele deve:
            -Ter o mesmo nome da classe, mas em um nome.
            -ter um corpo que faça algo
        </p>
        <pre><code>
class conta {

  var $saldo;

    //Aqui é o construtor,toda vez que se fazer um  <br>"<i>$minhaconta = new conta; </i>"<br>
    //Essa função vai ser executada. <br>
    function conta () {
        $this.saldo = 0;
    }

    function saldo() {
        return $this->saldo;
    }

    function credito($valor) {
        $this->saldo += $valor;
    }

}
</code></pre>

        <p>---------------------------------------------------------------------------------------------------------</p>
        <h4>Cookies</h4>
        <p>
            • Cookies são <b>variáveis</b> gravadas no cliente(browser) por um
            site. <br><br>
            • Somente o site que gravou o cookie pode ler a informação
            contida nele.<br><br>
            • Este recurso é muito útil para que determinadas informações
            sejam fornecidas pelo usuário apenas uma vez.<br><br>
            • Exemplos de utilização de cookies são sites que informam a
            quantidade de vezes que você já visitou, ou alguma
            informação fornecida numa visita anterior.<br><br>
            • Existem <i>cookies persistentes</i> e <i>cookies de sessão</i>.<br><br>
            • Os Cookie persistentes são aqueles gravados em arquivo, e que
            permanecem após o browser ser fechado, e possuem data e
            hora de expiração<br><br>
            • Os Cookie sessão são são apagados quando se apaga<br><br>
            • Existe um maximo de Cookies aceitavel: <br>
            - 300 cookies no total<br>
            – 4 kilobytes por cookie.<br>
            – 20 cookies por servidor ou domínio.
            <br><br>
        <p>------------------------------------------------</p>
        <h5>Gravando cookies</h5>
        <p>Para se gravar um cookie,se usa a função <b>setcookie</b></p>
        <pre><code>int setcookie(string nome, string valor, int exp, string path<br>,string dominio, int secure);</code></pre>
        <b>nome:</b> Nome do cookie. <br>
        <b>valor:</b> Valor armazenado no cookie.<br>
        <b>exp:</b> Data de expiração do cookie (opcional), no formato Unix. Se não for definida, o cookie será de sessão.<br>
        <b>path: </b>Path do script que gravou o cookie.<br>
        <b>dominio:</b> Domínio responsável pelo cookie.<br>
        <b>secure:</b> Se tiver valor 1, indica que o cookie só pode ser transmitido por uma conexão segura (https).
        </p>

        <pre><code>setcookie("teste", 1);
$aux = getdate();
$datahoje = $aux["mday"]."/".$aux["mon"]."/".$aux["year"];
$datahoje .= " - ".$aux["hours"].":".$aux["minutes"].<br>":".$aux["seconds"];
$UltimoAcesso = $acesso;
setcookie("acesso",$datahoje);
echo $UltimoAcesso;
</code></pre>
        <p>---------------------------------------------------------------------------------------------------------</p>
        <h4>Funções relacionadas a HTML</h4>

        <code>
            <pre>string htmlspecialchars(string str);</pre>
        </code>
        <p>
            Retorna a string fornecida, substituindo os seguintes caracteres: <br> <br>
            (Rs:Esta normalmente não existe esse _ ,eu tive que colocar ele para que seja possivel colocar na tela, e o pc não pensar que é uma variavel)<br><br>
            • & para '&_amp;'<br>
            • " para '&_quot;'<br>
            • < para '&_lt;' <br>
                • > para ‘&_gt;’<br>
        </p>
        <p>------------------------------------------------</p>

        <code>
            <pre>string htmlentities(string str);</pre>
        </code>
        <p>
            Funciona de maneira semelhante ao comando anterior, mas
            de maneira mais completa, pois converte todos os caracteres
            da string que possuem uma representação especial em html. <br>
            (Rs:Esta normalmente não existe esse _ ,eu tive que colocar ele para que seja possivel colocar na tela, e o pc não pensar que é uma variavel)<br><br>

            como por exemplo:<br>
            • º para '&_ordm;'<br>
            • ª para '&_ordf;'<br>
            • á para '&_aacute;'<br>
            • ç para ‘&_ccedil;'<br>

        </p>
        <p>------------------------------------------------</p>

        <code>
            <pre> string nl2br(string str);</pre>
        </code>
        <p>
            Retorna a string fornecida substituindo todas as quebras de
            linha (“\n”) por quebras de linhas em html ("br")
        </p>
        <code>
            <pre>
echo nl2br(“Caio\nNakashima\n”);
Imprime:
Caio "br" Nakashima " br ".
</pre>
        </code>
        <p>------------------------------------------------</p>

        <pre><code>string strip_tags(string str);</code></pre>
        <p>Retorna a string fornecida, retirando todas as tags html e/ou
            PHP encontradas.</p>

        <code>
            <pre>
strip_tags('<a href="teste1.php3">testando</a><br>'); <br>
//Retorna a string “testando”
</pre>
        </code>
        <p>------------------------------------------------</p>
        <pre><code>array get_meta_tags(string arquivo);</code></pre>
        <p>Abre um arquivo html e percorre o cabeçalho em busca de
            “meta” tags, retornando num array todos os valores
            encontrados</p>
        <p>------------------------------------------------</p>
        <pre><code>string urlencode(string str);</code></pre>
        <p>Retorna a string fornecida, convertida para o formato
            urlencode. Esta função é útil para passar variáveis para uma
            próxima página.</p>

        <pre><code>string urldecode(string str);</code></pre>

        <p>Funciona de maneira inversa a urlencode, desta vez
            decodificando a string fornecida do formato urlencode para
            texto normal</p>
        <p>---------------------------------------------------------------------------------------------------------</p>
        <h4>Funções relacionadas a arrays</h4>
        <p>------------------------------------------------</p>

        <pre><code>string implode(string separador, array partes);
string join(string separador, array partes);</code></pre>
        As duas funções são idênticas. Retornam uma string
        contendo todos os elementos do array fornecido separados
        pela string também fornecida.
        <p></p>
        <pre><code>$partes = array("a", "casa número", 13, "é azul");
$inteiro = join(" ",$partes);

//$inteiro passa a conter a string: 
// Saida vai ser - “a casa número 13 é azul</code></pre>
        <p>------------------------------------------------</p>
        <pre><code>array split(string padrao, string str, int [limite]);</code></pre>
        <p>Retorna um array contendo partes da string fornecida
            separadas pelo padrão fornecido, podendo limitar o número
            de elementos do array.</p>
        <pre><code>$data = “11/14/1975”;
$data_array = split(“/”,$data); <br>
– O código acima faz com que a variável $data_array <br>receba o valor:
– array(11,14,1975); 
</code></pre>
        <p>------------------------------------------------</p>
        <pre><code>array explode(string padrao, string str);</code></pre>
        <p>Funciona de maneira bastante semelhante à função split,
            com a diferença que não é possível estabelecer um limite
            para o número de elementos do array</p>
        <p>------------------------------------------------</p>
        <pre><code>int similar_text(string str1, string str2, <br>double [porcentagem]);</code></pre>
        <p>Compara as duas strings fornecidas e retorna o número de
            caracteres identicos. (caseSensitive,é algo importante)</p>
        <pre><code>$num = similar_text("teste", "testando",&$porc);

//As variáveis passam a ter os seguintes valores: <br>
$num == 4; 
$porc == 61.538461538462</code></pre>
        <p>------------------------------------------------</p>
        <pre><code>int strcmp(string str1, string str2);</code></pre>
        <p>Compara as duas strings e retorna 0 (zero) se forem iguais,
            um valor maior que zero se str1 > str2, e um valor menor
            que zero se str1 < str2. Esta função é case insensitive, ou seja, maiúsculas e minúsculas são tratadas como iguais. </p>
                <p>------------------------------------------------</p>
                <pre><code>int strcasecmp(string str1, string str2);</code></pre>
                <p>Funciona de maneira semelhante à função strcasecmp, com
                    a diferença que esta é case sensitive, ou seja, maiúsculas e
                    minúsculas são tratadas como diferentes</p>
                <p>------------------------------------------------</p>
                <pre><code>string strstr(string str1, string str2);
string strchr(string str1, string str2);</code></pre>
                <p>As duas funções são idênticas. Procura a primeira ocorrência
                    de str2 em str1. Se não encontrar, retorna uma string vazia,
                    e se encontrar retorna todos os caracteres de str1 a partir
                    desse ponto.</p>
                <pre><code>strstr(”Caio Nakashima", ”Naka"); // retorna “Nakashima”</code></pre>


                <p>------------------------------------------------</p>
                <pre><code>string strstr(string str1, string str2);</code></pre>
                <p>Funciona de maneira semelhante à função strstr, com a
                    diferença que esta é case insensitive, ou seja, maiúsculas e
                    minúsculas são tratadas como iguais</p>
                <p>------------------------------------------------</p>
                <pre><code>int strpos(string str1, string str2, int [offset] );</code></pre>
                <p> Retorna a posição da primeira ocorrência de str2 em str1, ou
                    zero se não houver. O parâmetro opcional offset determina a
                    partir de qual caracter de str1 será efetuada a busca. Mesmo
                    utilizando o offset, o valor de retorno é referente ao início de
                    str1.</p>
                <p>------------------------------------------------</p>
                <pre><code>int strrpos(string haystack, char needle);</code></pre>
                <p>Retorna a posição da última ocorrência de str2 em str1, ou
                    zero se não houver.</p>





                <p>---------------------------------------------------------------------------------------------------------</p>
                <h4>Funções para edição de strings</h4>
                <p>------------------------------------------------</p>
                <pre><code>string chop(string str);</code></pre>
                <p>Retira espaços e linhas em branco do final da string fornecida.</p>
                <pre><code>chop(“ Teste \n \n “); // retorna “ Teste”</code></pre>
                <p>------------------------------------------------</p>
                <pre><code>string ltrim(string str);</code></pre>
                <p>Retira espaços e linhas em branco no início da string
                    fornecida</p>
                <pre><code>ltrim(“ Teste \n \n “); // retorna “Teste \n \n</code></pre>

                <p>------------------------------------------------</p>
                <pre><code>string strrev(string str);</code></pre>
                <p>Retorna a string fornecida invertida.
                </p>
                <pre><code></code>strrev(“Teste”); // retorna “etseT”
</pre>


                <p>------------------------------------------------</p>
                <pre><code>string strtolower(string str);</code></pre>
                <p>Retorna a string fornecida com todas as letras minúsculas.</p>
                <pre><code>strtolower(“Teste”); // retorna “teste”</code></pre>

                <p>------------------------------------------------</p>
                <pre><code>string strtoupper(string str);</code></pre>
                <p>Retorna a string fornecida com todas as letras maiúsculas.</p>
                <pre><code>strtolower(“Teste”); // retorna “TESTE</code></pre>

                <p>------------------------------------------------</p>
                <pre><code>string ucfirst(string str);</code></pre>
                <p> Retorna a string fornecida com o primeiro caracter
                    convertido para letra maiúscula.</p>
                <pre><code>ucfirst(“teste de funcao”); // retorna “Teste de funcao”
</code></pre>
                <p>------------------------------------------------</p>
                <pre><code>string ucwords(string str);
</code></pre>
                <p> Retorna a string fornecida com todas as palavras iniciadas
                    por letras maiúsculas.</p>
                <pre><code>ucwords(“teste de funcao”); // retorna “Teste De Funcao”
</code></pre>
                <p>------------------------------------------------</p>
                <pre><code>string str_replace(string str1, string str2, string str3);
</code></pre>
                <p>Altera todas as ocorrências de str1 em str3 pela string str2.</p>

                <p>------------------------------------------------</p>
                <pre><code>string chr(int ascii);
</code></pre>
                <p>Retorna o caracter correspondente ao código ASCII
                    fornecido.</p>

                <p>------------------------------------------------</p>
                <pre><code>int ord(string string);</code></pre>
                <p>Retorna o código ASCII correspontente ao caracter fornecido</p>

                <p>------------------------------------------------</p>
                <pre><code>echo(string arg1, string [argn]... );
</code></pre>
                <p>Imprime os argumentos fornecidos </p>

                <p>------------------------------------------------</p>
                <pre><code>print(string arg);
</code></pre>
                <p> Imprime o argumento fornecido.
                </p>

                <p>------------------------------------------------</p>
                <pre><code> int strlen(string str);</code></pre>
                <p>Retorna o tamanho da string fornecida </p>

                <p>------------------------------------------------</p>
                <pre><code> array array(...); </code></pre>
                <p>É a função que cria um array a partir dos parâmetros
                    forncidos. <br>É possível fornecer o índice de cada elemento.<br>
                    Esse índice pode ser um valor de qualquer tipo, e não
                    apenas de inteiro.<br> Se o índice não for fornecido o PHP atribui
                    um valor inteiro sequencial, a partir do 0 ou do último índice
                    inteiro explicitado.<br> Vejamos alguns exemplos:</p>
                <pre><code>$teste = array("um","dois","tr"=>"tres",5=>"quatro","cinco");</code></pre>

                <p>
                    Temos o seguinte mapeamento: <br>
                    0 => “um” (0 é o primeiro índice, se não houver um explicito)<br>
                    1 => “dois” (o inteiro seguinte)<br>
                    tr => “tres”<br>
                    5 => “quatro” (valor explicitado)<br>
                    6 => “cinco” (o inteiro seguinte ao último atribuído, e não o próximo
                    valor, que seria 2)
                </p>

                <pre><code>$teste = array("um",6=>"dois","tr"=>"tres",5=>"quatro","cinco");</code></pre>
                <p>
                    Temos o seguinte mapeamento:<br>
                    0 => “um”<br>
                    6 => “dois”<br>
                    tr => tres<br>
                    5 => “quatro” (seria 7, se não fosse explicitado)<br>
                    7 => “cinco” (seria 6, se não estivesse ocupado)
                </p>

                <p>------------------------------------------------</p>
                <pre><code> array range(int minimo, int maximo);</code></pre>
                <p> A função range cria um array cujos elementos são os inteiros
                    pertencentes ao intervalo fornecido, inclusive. Se o valor do
                    primeiro parâmetro for maior do que o do segundo, a função
                    retorna false (valor vazio).</p>

                <p>------------------------------------------------</p>
                <pre><code>void shuffle(array &arr); </code></pre>
                <p> Esta função “embaralha” o array, ou seja, troca as posições
                    dos elementos aleatoriamente e não retorna valor algum.</p>

                <p>------------------------------------------------</p>
                <pre><code>int sizeof(array arr); </code></pre>
                <p>Retorna um valor inteiro contendo o número de elementos
                    de um array. Se for utilizada com uma variável cujo valor
                    não é do tipo array, retorna 1. Se a variável não estiver
                    setada ou for um array vazio, retorna 0.
                </p>
                <p>---------------------------------------------------------------------------------------------------------</p>
                <h4>Funções de “navegação”</h4>
                <p>
                    • Toda variável do tipo array possui um ponteiro interno
                    indicando o próximo elemento a ser acessado no caso de
                    não ser especificado um índice. <br>
                    • As funções seguintes servem para modificar esse ponteiro,
                    permitindo assim percorrer um array para verificar seu
                    conteúdo (chaves e elementos).
                </p>
                <p>------------------------------------------------</p>
                <pre><code>mixed reset(array arr);</code></pre>
                <p> Seta o ponteiro interno para o primeiro elemento do array, e
                    retorna o conteúdo desse elemento.
                </p>

                <p>------------------------------------------------</p>
                <pre><code>mixed end(array arr); </code></pre>
                <p> Seta o ponteiro interno para o último elemento do array, e
                    retorna o conteúdo desse elemento.
                </p>

                <p>------------------------------------------------</p>
                <pre><code> mixed next(array arr);
</code></pre>
                <p>Seta o ponteiro interno para o próximo elemento do array, e
                    retorna o conteúdo desse elemento. <br>
                    Obs.: esta não é uma boa função para determinar se um
                    elemento é o último do array, pois pode retornar false tanto
                    no final do array como no caso de haver um elemento vazio. </p>

                <p>------------------------------------------------</p>
                <pre><code> mixed prev(array arr);
</code></pre>
                <p> Seta o ponteiro interno para o elemento anterior do array, e
                    retorna o conteúdo desse elemento. Funciona de maneira
                    inversa a next.</p>

                <p>------------------------------------------------</p>
                <pre><code> mixed pos(array arr);
</code></pre>
                <p> Retorna o conteúdo do elemento atual do array, indicado
                    pelo ponteiro interno</p>

                <p>------------------------------------------------</p>
                <pre><code>mixed key(array arr);
</code></pre>
                <p>Funciona de maneira bastante semelhante a pos, mas ao
                    invés de retornar o elemento atual indicado pelo ponteiro
                    interno do array, retorna seu índice </p>

                <p>------------------------------------------------</p>
                <pre><code> array each(array arr);</code></pre>
                <p> Retorna um array contendo o índice e o elemento atual
                    indicao pelo ponteiro interno do array. o valor de retorno é
                    um array de quatro elementos, cujos índices são 0, 1, “key”
                    e “value”. Os elementos de índices 0 e “key” armazenam o
                    índice do valor atual, e os elementos de índices 1 e “value”
                    contém o valor do elemento atual indicado pelo ponteiro. <br><br>
                    Esta função pode ser utilizada para percorrer todos os
                    elementos de um array e determinar se já foi encontrado o
                    último elemento, pois no caso de haver um elemento vazio,
                    a função não retornará o valor false. A função each só
                    retorna false depois q o último elemento do array foi
                    encontrado</p>
                <pre><code>Exemplo:
/função que percorre todos os elementos de um array e imprime<br>seus 
índices e valores */ <br>
function imprime_array($arr) {
    reset($arr);

    while (list($chave,$valor) = each($arr))
        echo “Chave: $chave. Valor: $valor”;
}
</code></pre>
                <p>---------------------------------------------------------------------------------------------------------</p>
                <h4>Funções de ordenação</h4>
                <p>São funções que servem para arrumar os elementos de um
                    array de acordo com determinados critérios. <br>
                    Estes critérios são: manutenção ou não da associação entre
                    índices e elementos; ordenação por elementos ou por
                    índices; função de comparação entre dois elementos.
                </p>
                <p>------------------------------------------------</p>
                <pre><code>void sort(array &arr);
</code></pre>
                <p> A função mais simples de ordenação de arrays. Ordena os
                    elementos de um array em ordem crescente, sem manter os
                    relacionamentos com os índices.</p>

                <p>------------------------------------------------</p>
                <pre><code> void rsort(array &arr);
</code></pre>
                <p>Funciona de maneir ainversa à função sort. Ordena os
                    elementos de um array em ordem decrescente, sem manter
                    os relacionamentos com os índices </p>

                <p>------------------------------------------------</p>
                <pre><code>void asort(array &arr);
</code>Tem o funcionamento bastante semelhante à função sort. 
Ordena os elementos de um array em ordem crescente, 
porém mantém os relacionamentos com os índices.
</pre>
                <p> </p>

                <p>------------------------------------------------</p>
                <pre><code>void arsort(array &arr); </code></pre>
                <p> Funciona de maneira inversa à função asort. Ordena os
                    elementos de um array em ordem decrescente e mantém os
                    relacionamentos dos elementos com os índices.
                </p>

                <p>------------------------------------------------</p>
                <pre><code>void ksort(array &arr);
</code></pre>
                <p> Função de ordenação baseada nos índices. Ordena os
                    elementos de um array de acordo com seus índices, em
                    ordem crescente, mantendo os relacionamentos.</p>

                <p>------------------------------------------------</p>
                <pre><code>void usort(array &arr, function compara);</code></pre>
                <p>Esta é uma função que utiliza outra função como parâmetro.
                    Ordena os elementos de um array sem manter os
                    relacionamentos com os índices, e utiliza para efeito de
                    comparação uma função definida pelo usuário, que deve
                    comparar dois elementos do array e retornar 0, 1 ou –1, de
                    acordo com qualquer critério estabelecido pelo usuário.</p>

                <p>------------------------------------------------</p>
                <pre><code>void uasort(array &arr, function compara);</code></pre>
                <p>Esta função também utiliza outra função como parâmetro.
                    Ordena os elementos de um array e mantém os
                    relacionamentos com os índices, utilizando para efeito de
                    comparação uma função definida pelo usuário, que deve
                    comparar dois elementos do array e retornar 0, 1 ou –1, de
                    acordo com qualquer critério estabelecido pelo usuário.
                </p>

                <p>------------------------------------------------</p>
                <pre><code>void uksort(array &arr, function compara);</code></pre>
                <p>Esta função ordena o array através dos índices, mantendo
                    os relacionamentos com os elementos., e utiliza para efeito
                    de comparação uma função definida pelo usuário, que deve
                    comparar dois índices do array e retornar 0, 1 ou –1, de
                    acordo com qualquer critério estabelecido pelo usuário.
                </p>




    </section>
    <script src="script.js"></script>
</body>

</html>