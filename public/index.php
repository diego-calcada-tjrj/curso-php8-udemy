<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <style type="text/css">
    </style>
    <script type="text/javascript">

    </script>
</head>
<body>


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
