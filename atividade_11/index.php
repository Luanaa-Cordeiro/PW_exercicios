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
        <h1>Valor do Produto</h1>
        <input name ="numb1" placeholder="Preço do produto"><br><br>
        <input name ="numb2" placeholder="Acrésimo"><br><br>
        <input type="submit" value="Calcular"><br><br>
    </form>

        <?php
            if(isset($_POST["numb1"]) && isset($_POST["numb2"])){
                $preço = $_POST['numb1'];
                $acresc = $_POST['numb2'];
                $result = $preço * $acresc/100;
                $result_final = $preço + $result;

                echo "O valor inicial do seu produto foi: " . $preço . " reais";
                echo '<br>';
                echo 'O acréscimo foi de ' . $acresc . "%";
                echo '<br>';
                echo "O valor do acréscimo foi: " . $result . " reais";
                echo '<br>';
                echo "O valor final do produto será: " . $result_final . " reais";

            }
        ?>
        </div>
    </div>
</body>
</html>