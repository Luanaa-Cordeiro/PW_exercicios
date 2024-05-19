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
        <h1>Números</h1>
        <input name ="numb1" placeholder="Digite um número"><br><br>
        <input name ="numb2" placeholder="Digite um número"><br><br>
        <input type="submit" value="Calcular"><br><br>
    </form>

        <?php
            if(isset($_POST["numb1"]) && isset($_POST["numb2"])){
                $numb1 = $_POST['numb1'];
                $numb2 = $_POST['numb2'];

                if ($numb1 > $numb2){
                    echo $numb1 . ' é maior do que ' .$numb2;
                } elseif ($numb1 === $numb2){
                    echo $numb1 . ' é igual a ' .$numb2;
                } else{
                    echo $numb2 . ' é maior do que ' .$numb1;
                }

            }
            ?>
            </div>
        </div>
    </body>
    </html>
