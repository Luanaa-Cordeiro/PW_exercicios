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
        <h1>Escolha 2 Números</h1>
        <input name ="numb1" placeholder="Digite sua Idade"><br><br>
        <input type="submit" value="Calcular"><br><br>
    </form>

        <?php
            if(isset($_POST["numb1"])){
                $n1 = $_POST['numb1'];
                
                if($n1 >= 5 && $n1 <= 7){
                    echo "Nadador infantil A";
                } elseif($n1 >= 8 && $n1 <= 10){
                    echo "Nadador infantil B";
                } elseif($n1 >= 11 && $n1 <= 13){
                    echo "Nadador juvenil A";
                } elseif($n1 >= 14 && $n1 <= 17){
                    echo "Nadador juvenil B";
                } elseif($n1 >= 18 && $n1 <= 25){
                    echo "Nadador Sênior";
                } else{
                    echo "Idade fora da faixa etária";
                }
            }
        ?>
        </div>
    </div>
</body>
</html>