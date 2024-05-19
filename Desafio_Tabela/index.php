<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

    table, th, td {
        border:1px solid black;
    }

    .tabela{
        display:flex;
        align-items: center;
        justify-content:center;
        height:100vh;
    }
</style>
</head>
<div class="tabela">
<table>
    <tr>
        <td>Nome</td>
        <td>Aniversário</td>
        <td>Documento</td>
    </tr>
<?php
    $pessoas = array(
        array(
            "nome" => "Luana",
            "aniversario" => "19-06-2007",
            "document" => "123-456-789",
        ),
        array(
            "nome" => "Fernanda",
            "aniversario" => "21-05-2008",
            "document" => "156-412-513",
        ),
        array(
            "nome" => "Marina",
            "aniversario" => "12-06-2008",
            "document" => "621-631-756",
        )
        );
        
        foreach($pessoas as $pessoa){
            //echo "<tr>". "<td>". $pessoa["nome"] . "</td>". "</tr>";
            //echo "<tr>". "<td>". $pessoa["aniversario"] . "</td>". "</tr>";
            //echo "<tr>". "<td>". $pessoa["document"] . "</td>". "</tr>";
            echo "<tr>";
            echo "<td>" . $pessoa["nome"] . "</td>";
            echo "<td>" . $pessoa["aniversario"] . "</td>";
            echo "<td>" . $pessoa["document"] . "</td>";
            echo "</tr>";
        }
        ?>
        </table>
        </div>
</html>

