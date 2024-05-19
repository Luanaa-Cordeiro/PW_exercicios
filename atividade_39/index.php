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
        <h1>Seu salário</h1>
        <input name ="num" placeholder="Aluno"><br><br>
        <input name ="nome" placeholder="Número da chamada"><br><br>
        <input name ="numb1" placeholder="Prova 1"><br><br>
        <input name ="numb2" placeholder="Prova 2"><br><br>
        <input name ="numb3" placeholder="Prova 3"><br><br>
        <input type="submit" value="Calcular"><br><br>
    </form>

        <?php
            if(isset($_POST["numb1"]) && isset($_POST["numb2"]) && isset($_POST["numb3"]) && isset($_POST["nome"]) && isset($_POST["num"])){
                $prova1 = $_POST['numb1'];
                $prova2 = $_POST['numb2'];
                $prova3 = $_POST['numb3'];
                $nome = $_POST['nome'];
                $num = $_POST['num'];
                $result = ($prova1 + $prova2 + $prova3) / 3;

                echo "Aluno: " . $nome;
                echo "<br>";
                echo "Chamada: " . $num;
                echo "<br>";
                echo "Média: " . $result;
                echo "<br>";

                if($result > 8 && $result <= 10){
                    echo "Aluno nota A";
                } elseif($result > 7 && $result <= 8){
                    echo "Aluno nota B";
                } elseif($result > 6 && $result <= 7){
                    echo "Aluno nota C";
                } elseif($result > 5 && $result <= 6){
                    echo "Aluno nota D";
                } elseif($result > 0 && $result <= 5){
                    echo "Aluno nota R";
            }
        }
        ?>
        </div>
    </div>
</body>
</html>