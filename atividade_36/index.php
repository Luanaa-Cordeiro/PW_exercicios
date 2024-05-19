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
        <h1>Calcule seu salário</h1>
        <input name ="numb1" placeholder="Sua localização"><br><br>
        <input name ="numb2" placeholder="Gasto por dia (horas)"><br><br>
        <input type="submit" value="Calcular"><br><br>
    </form>

        <?php
            if(isset($_POST["numb1"]) && isset($_POST["numb2"])){
                $n1 = $_POST['numb1'];
                $n2 = $_POST['numb2'];
                
                if($n1 == 'residencia'){
                    $result1 = (0.60*$n2) * 30;
                    echo "Sua conta de luz é: " . $result1;
                } elseif($n1 == 'comercio'){
                    $result2 = (0.48*$n2) * 30;
                    echo "Sua conta de luz é: " . $result2;
                }elseif($n1 == 'industria'){
                    $result3 = (1.29*$n2) * 30;
                    echo "Sua conta de luz é: " . $result3;
                }
            }
        ?>
        </div>
    </div>
</body>
</html>