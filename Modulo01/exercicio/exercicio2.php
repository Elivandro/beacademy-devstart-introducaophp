<html>
    <head>
        <title>Exercicio 2 - tabela HTML com PHP</title>
        <style>
            body{
                margin: 0px;
                padding: 0px;
                display: flex;
                justify-content: center;
                align-items: flex-start;
            }
            table{
                text-align: center;
                border: 2px solid #808080;
            }
            table caption{
                margin-top: 10px;
                margin-bottom: 20px;
            }
        </style>
    </head>
<body>
    <?php

        $produto1 = [
            "nome" => "Smartphone Oneplus 10Pro",
            "marca" => "Oneplus",
            "Qtd" => 15,
            "preco" => "4789,90"];

        $produto2 = [
            "nome" => "Smartphone Samsung Galaxy A12",
            "marca" => "Samsung",
            "Qtd" => 8,
            "preco" => "6789,90"];

        $produto3 = [
            "nome" => "Smartphone Motorola G60",
            "marca" => "Motorola",
            "Qtd" => 23,
            "preco" => "1629,90"];

        $produto4 = [
            "nome" => "Smartphone Lenovo Legion",
            "marca" => "Lenovo",
            "Qtd" => 4,
            "preco" => "5129,99"];

        $produto5 = [
            "nome" => "Smartphone Asus Zenfone",
            "marca" => "Motorola",
            "Qtd" => 44,
            "preco" => "1519,20"];

        $produtos = [$produto1, $produto2, $produto3, $produto4, $produto5];
    ?>
<table cellspacing="20">
    <caption>
        <h2>Tabela de produtos - Smartphones</h2>
    </caption>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Marca</th>
            <th>qtd.</th>
            <th>Preço</th>
        </tr>
    </thead> 
    <tbody>
        <?php
            foreach($produtos as $produto){
                echo "<tr>
                        <td>". $produto['nome'] ."</td>
                        <td>". $produto['marca'] ."</td>
                        <td>". $produto['Qtd'] ."</td>
                        <td>". $produto['preco'] ." Reais</td>
                    </tr>";
            }
        ?>
    </tbody>
</table>
</body>
</html>