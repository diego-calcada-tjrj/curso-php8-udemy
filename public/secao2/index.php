<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Seção 2</title>
    <style type="text/css">
    </style>
    <script type="text/javascript">

    </script>
</head>
<body>

<?php
// Aula 2.18 - Escopo de variáveis

// Escopo Global
$global = "exemplo de global";


// Binding global variable

function renderizar(){
    global $global;
    echo $global;
}

// Escopo Local

function bind(){
    global $g2;
    $g2 = "exemplo de global para FORA ";
}

// Inclusão de Arquivos
// include "arquivo.php";

echo "Global simples <br/>";
var_dump($global);
echo "<br />";

echo "Global bind para DENTRO de function <br/>";
renderizar();
echo "<br />";

echo "Global bind para FORA de function <br/>";
bind();
echo $g2;
echo "<br />";
?>



<!-- <?php
// Aula 2.17 - Referências

// Atribuição por referência
$a = 50;
$b = &$a;
$c = $a;


var_dump($a);
var_dump($b);
var_dump($c);

$a = 250;

var_dump($a);
var_dump($b);
var_dump($c);

// Passagem de parâmetro por referência
// Próx. aulas


// Retorno por referência
// Próx. aulas

?>
 -->
<!-- 
<?php
// Aula 2.16 - Tipos de Dados

/* 
// Tipos Escalares
bool
int
float
string 

// Tipos Compostos
array
object
callable
iterable

// Tipos Especiais
resource
NULL

// Tipos Pseudos
mixed
void
*/

$ehOuNao = false;
echo gettype($ehOuNao) . " ";
var_dump(get_debug_type($ehOuNao));
echo "<br/>";


$inteiro = 3;
echo gettype($inteiro) . " ";
var_dump(get_debug_type($inteiro));
echo "<br/>";

$flutuante = 2.5;
echo gettype($flutuante) . " ";
var_dump(get_debug_type($flutuante));
echo "<br/>";

$corrente = "exemplo";
echo gettype($corrente) . " ";
var_dump(get_debug_type($corrente));
echo "<br/>";


$conversao = "3";
echo gettype($conversao) . " ";
$conversao = (int) $conversao;
var_dump(get_debug_type($conversao));
echo "<br/>";


$definicao = "5.5";
echo gettype($definicao) . " ";
settype($definicao, "float");
var_dump(get_debug_type($definicao));
echo "<br/>";



?>
 -->

<!-- <?php
// Aula 2.15 - Constantes

    define("CURSO", "PHP 8 na Udemy");
    echo "Curso: " . CURSO;
    echo "<br />";

    class Exemplo
    {
        const EXEMPLO_DE_CONSTANTE = "Exemplo de constante de classe";
        // define("CONSTANTE_DENTRO", "Constante declarada dentro");

        public static function getConstValue()
        {
            return self::EXEMPLO_DE_CONSTANTE;
        }

        /* public static function getDefineValue()
        {
            return self::CONSTANTE_DENTRO;
        } */
    }

    echo "Isso funciona: " . CURSO;
    echo "<br />";
    // echo "Isso NÃO funciona: " . Exemplo::CONSTANTE_DENTRO;
    echo "Isso funciona: " . Exemplo::getConstValue();
    // echo "Isso NÃO funciona: " . Exemplo::CONSTANTE_DENTRO;
?> -->

</body>
</html>
