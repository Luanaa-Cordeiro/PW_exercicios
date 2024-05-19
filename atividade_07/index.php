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
        <h1>Celcius</h1>
        <input name ="numb1" placeholder="Celcius"><br><br>
        <input type="submit" value="Calcular"><br><br>
    </form>

        <?php
            if(isset($_POST["numb1"])){
                $c = $_POST['numb1'];
                $F = ($c * 9/5) + 32;

                echo 'A temperatura é: ' . $F .'°F';
            }
        ?>
        </div>
    </div>
</body>
</html>