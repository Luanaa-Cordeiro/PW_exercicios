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
        <input name ="numb1" placeholder="Nível do Professor"><br><br>
        <input name ="numb2" placeholder="Número de Aulas"><br><br>
        <input type="submit" value="Calcular"><br><br>
    </form>

        <?php
            if(isset($_POST["numb1"]) && isset($_POST["numb2"])){
                $n1 = $_POST['numb1'];
                $n2 = $_POST['numb2'];
                
                if($n1 == 1){
                    $result1 = (12*$n2) * 30;
                    echo "Seu salário final é: " . $result1;
                } elseif($n1 == 2){
                    $result2 = (17*$n2) * 30;
                    echo "Seu salário final é: " . $result2;
                }elseif($n1 == 3){
                    $result3 = (25*$n2) * 30;
                    echo "Seu salário final é: " . $result3;
                }
            }
        ?>
        </div>
    </div>
</body>
</html>