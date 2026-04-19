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
?>

</body>
</html>
