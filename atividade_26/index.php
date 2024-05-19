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
        <input name ="numb1" placeholder="Número"><br><br>
        <input type="submit" value="Calcular"><br><br>
    </form>

        <?php
            if(isset($_POST["numb1"])){
                $n1 = $_POST['numb1'];
                
                if($n1 == "1"){
                    echo "um";
                } elseif( $n1 == "2"){
                    echo "dois";
                } elseif($n1 == "3") {
                    echo "tres";
                } elseif($n1 == "4") {
                    echo "quatro";
                } elseif($n1 == "5") {
                    echo "cinco";
                } else{
                    echo "Número inválido";
                }
            }
        ?>
        </div>
    </div>
</body>
</html>