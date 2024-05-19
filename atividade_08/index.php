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
        <h1>Converção</h1>
        <input name ="numb1" placeholder="Reais"><br><br>
        <input name ="numb2" placeholder="Cotação do dolar"><br><br>
        <input type="submit" value="Calcular"><br><br>
    </form>

        <?php
            if(isset($_POST["numb1"]) && isset($_POST["numb2"])){
                $real = $_POST['numb1'];
                $dolar = $_POST['numb2'];
                $result = $real / $dolar;

                echo 'Você tem '. $result. ' dolares';
            }
        ?>
        </div>
    </div>
</body>
</html>