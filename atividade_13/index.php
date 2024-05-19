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
        <input type="submit" value="Calcular"><br><br>
    </form>

        <?php
            if(isset($_POST["numb1"])){
                $numb = $_POST['numb1'];

                if ($numb > 10){
                    echo "Este número é maior do que 10!";
                } elseif ($numb == 10){
                    echo "Ei! Este número é 10";
                } else{
                    echo "Este número é menor do que 10!";
                }

               
               

                

            }
        ?>
        </div>
    </div>
</body>
</html>