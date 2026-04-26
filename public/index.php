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
// Aula 5.52 - Parâmetros e Argumentos


// Argumento com default value
function somar($numA = 20, $numB = 30){
    echo $numA + $numB . "<br />";
}

somar();                            // 50
somar(null);                        // 30
somar(null, null);                  // 0
somar(null, null, null);            // 0
somar(null, null, null, null);      // 0

/* 
// Tipagem
function somar(int $numA, int $numB = 30){
    echo $numA + $numB . "<br />";
}

somar("oi");

 */

/* 
// Named Arguments
function somar($numA, $numB = 30){
    echo $numA + $numB . "<br />";
}

somar(
    numB: 40,
    numA: 80 
);

 */
/* 
// Argumento com default value
function somar($numA = 20, $numB = 30){
    echo $numA + $numB . "<br />";
}

somar(40);                          // 70
somar();                            // 50
somar(null);                        // 30
somar(null, null);                  // 0
somar(null, null, null);            // 0
somar(null, null, null, null);      // 0
 */



/* // Argumento por referência
$a = 50;

function somar(&$numA, $numB){
    $numA += $numB;
    echo $numA . "<br />";
}

somar($a, 2);
echo "Valor de a: $a";

 */
/* 
// Function simples

$a = 50;

function somar($numA, $numB){
    $numA += $numB;
    echo $numA . "<br />";
}

somar($a, 2);

echo "Valor de a: $a";
 */

?>
</body>
</html>
