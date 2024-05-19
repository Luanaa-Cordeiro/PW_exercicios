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
        <h1>Custo do Carro</h1>
        <input name ="numb1" placeholder="Preço do carro"><br><br>
        <input type="submit" value="Calcular"><br><br>
    </form>

        <?php
            if(isset($_POST["numb1"])){
                $preço = $_POST['numb1'];
                $result1 = $preço * 0.28;
                $result2 = $result1 * 0.45;
                $acresc = $result2 + $result1;
                $result_final = $preço + $result1 + $result2;

                echo "O valor inicial do seu produto foi: " . $preço . " reais";
                echo '<br>';
                echo 'O valor do acréscimo foi de ' . $acresc . "reais";
                echo '<br>';
                echo "O valor final do produto será: " . $result_final . " reais";

            }
        ?>
        </div>
    </div>
</body>
</html>