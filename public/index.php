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
// Aula 3.31 - Operadores de Arrays

// Operador de União +
$a = ["Gol", "Latam", "Azul"];
$b = ["Delta", "Qatar"];

var_dump($a + $b);
echo "<br/>";
var_dump($b + $a);
echo "<br/>";


$c = [1,2,3];
$d = [2 => 3, 1 => 2,0 => 1];

var_dump($c == $d);
var_dump($c === $d);
?>

<!-- 
<?php
// Aula 3.28 - Operadores de Execução

// Operador de crase
$output = `ls -al`;
echo "<pre>$output</pre>";


?>
 -->
</body>
</html>
