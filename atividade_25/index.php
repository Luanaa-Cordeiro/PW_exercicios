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
        <input name ="numb1" placeholder="Número 1"><br><br>
        <input name ="numb2" placeholder="Número 2"><br><br>
        <input type="submit" value="Calcular"><br><br>
    </form>

        <?php
            if(isset($_POST["numb1"]) && isset($_POST["numb2"])){
                $n1 = $_POST['numb1'];
                $n2 = $_POST['numb2'];
                
                if($n1 > $n2){
                    echo "Eles são diferentes";
                    echo "O primeiro número é maior do que o segundo";
                } elseif( $n1 < $n2){
                    echo "Eles são diferentes";
                    echo "O segundo número é maior do que o primeiro";
                } else {
                    echo "Os números são iguais";
                }
            }
        ?>
        </div>
    </div>
</body>
</html>