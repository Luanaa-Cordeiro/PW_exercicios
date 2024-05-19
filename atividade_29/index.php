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
                
                switch($n1){
                    case $n1 == "1":
                        echo "Janeiro";
                    case $n1 == "2":
                        echo "Fevereiro";
                    case $n1 == "3":
                        echo "Março";
                    case $n1 == "4":
                        echo "Abril";
                    case $n1 == "5":
                        echo "Maio";
                    case $n1 == "6":
                        echo "Junho";
                    case $n1 == "7":
                        echo "Julho";
                    case $n1 == "8":
                        echo "Agosto";
                    case $n1 == "9":
                        echo "Setembro";
                    case $n1 == "10":
                        echo "Outubro";
                    case $n1 == "11":
                        echo "Novembro";
                    case $n1 == "12":
                        echo "Dezembro";
                }
                
            }
        ?>
        </div>
    </div>
</body>
</html>