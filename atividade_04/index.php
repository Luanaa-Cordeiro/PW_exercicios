<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
<div class="main">
    <div class="form">
    <form  method="POST" action="">
        <h1>Seu salário</h1>
        <input name ="nome" placeholder="Nome"><br><br>
        <input name ="numb1" placeholder="Salário Fixo"><br><br>
        <input name ="venda" placeholder="Vendas"><br><br>
        <input type="submit" value="Calcular"><br><br>
    </form>

        <?php
            if(isset($_POST["numb1"]) && isset($_POST["venda"]) && isset($_POST["nome"]) ){
                $salarioFixo = $_POST['numb1'];
                $venda = $_POST['venda'];
                $nome = $_POST['nome'];

                $result = 0.15 * $venda;
                $soma = $salarioFixo + $result;

                echo "Funcionário: " . $nome;
                echo "<br>";
                echo "Salário Fixo: " . $salarioFixo;
                echo "<br>";
                echo "Salário Final: " . $soma;

            }
        ?>
        </div>
    </div>
</body>
</html>