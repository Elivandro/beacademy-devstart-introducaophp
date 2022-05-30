<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 6 - array</title>
        <meta name="author" content="Elivandro Silva"/>
        <meta name="keywords" content="php, array, vetores"/>
        <meta name="description" content="tabela em html e php com array exibindo mais de uma coluna."/>
    </head>
<body>
    <?php
        $bandas = [
                    ["Capital Inicial", 14,],
                    ["Legião Urbana",  11,],
                    ["Evanescence", 9,],
                    ["Charlie Brown Jr.", 10,]
                ];

                    $bandas[2] = ["Skank", 7];

                echo "Nome: <strong>{$bandas[0][0]}</strong> Albuns: <strong>{$bandas[0][1]}</strong>";
                echo "<br/><br/>";
                echo "Nome: <strong>{$bandas[1][0]}</strong> Albuns: <strong>{$bandas[1][1]}</strong>";
                echo "<br/><br/>";
                echo "Nome: <strong>{$bandas[2][0]}</strong> Albuns: <strong>{$bandas[2][1]}</strong>";
                echo "<br/><br/>";
                echo "Nome: <strong>{$bandas[3][0]}</strong> Albuns: <strong>{$bandas[3][1]}</strong>";

    ?>
</body>
</html>