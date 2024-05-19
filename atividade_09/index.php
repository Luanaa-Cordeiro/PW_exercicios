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
        <input name ="numb1" placeholder="Valor Depositado"><br><br>
        <input type="submit" value="Calcular"><br><br>
    </form>

        <?php
            if(isset($_POST["numb1"])){
                $valor = $_POST['numb1'];
                $result = ($valor * 0.70) /100;
                $result2 = $valor + $result;

                echo "Seu valor extra foi de: " . $result;
                echo '<br>';
                echo "O valor da sua polpança é: " . $result2;
                

            
            }
        ?>
        </div>
    </div>
</body>
</html>