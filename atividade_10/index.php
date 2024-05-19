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
        <h1>Número de Prestações</h1>
        <input name ="numb1" placeholder="Valor"><br><br>
        <input name ="numb2" placeholder="Prestação"><br><br>
        <input type="submit" value="Calcular"><br><br>
    </form>

        <?php
            if(isset($_POST["numb1"]) && isset($_POST["numb2"])){
                $valor = $_POST['numb1'];
                $prest= $_POST['numb2'];
                $result =  $valor / $prest;

                echo "O valor a ser pago será: " . $result . " por mês";
               

                

            }
        ?>
        </div>
    </div>
</body>
</html>