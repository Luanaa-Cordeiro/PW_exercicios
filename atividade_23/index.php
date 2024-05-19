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
        <input name ="numb1" placeholder="Primeiro Número"><br><br>
        <input type="submit" value="Calcular"><br><br>
    </form>

        <?php
            if(isset($_POST["numb1"])){
                $n1 = $_POST['numb1'];
                
                if($n1 > 80){
                    echo "Este número é maior do que 80";
                } elseif( $n1 < 80){
                    echo "Este número é menor do que 80 e mairo do que 25";
                } elseif ($n1 < 25){
                    echo "Este número é menor do que 25";
                } elseif( $n1 == 40){
                    echo "Este número é igual a 40";
                }
            }
        ?>
        </div>
    </div>
</body>
</html>