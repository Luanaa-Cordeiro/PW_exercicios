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
        <input name ="nome" placeholder="Digite seu Nome"><br><br>
        <input name ="numb1" placeholder="Digite sua Idade"><br><br>
        <input name ="numb2" placeholder="Digite seu Risco"><br><br>
        <input type="submit" value="Calcular"><br><br>
    </form>

        <?php
            if(isset($_POST["numb1"]) && isset($_POST["numb2"]) && (isset($_POST["nome"]))){
                $n1 = $_POST['numb1'];
                $n2 = $_POST['numb2'];
                $nome = $_POST['nome'];
                
                if($n1 >= 17 && $n1 <= 20 && $n2 = 1){
                    echo "Nome: " . $nome;
                    echo "<br>";
                    echo "idade: " . $n1;
                    echo "<br>";
                    echo "Grupo baixo";

                } elseif($n1 >= 17 && $n1 <= 20 && $n2 = 2){
                    echo "Nome: " . $nome;
                    echo "<br>";
                    echo "idade: " . $n1;
                    echo "<br>";
                    echo "Grupo Médio";
                } elseif($n1 >= 17 && $n1 <= 20 && $n2 = 3){
                    echo "Nome: " . $nome;
                    echo "<br>";
                    echo "idade: " . $n1;
                    echo "<br>";
                    echo "Grupo Alto";
                } elseif($n1 >= 21 && $n1 <= 24 && $n2 = 2){
                    echo "Nome: " . $nome;
                    echo "<br>";
                    echo "idade: " . $n1;
                    echo "<br>";
                    echo "Grupo Baixo";
                } elseif($n1 >= 21 && $n1 <= 24 && $n2 = 3){
                    echo "Nome: " . $nome;
                    echo "<br>";
                    echo "idade: " . $n1;
                    echo "<br>";
                    echo "Grupo Médio";
                } elseif($n1 >= 21 && $n1 <= 24 && $n2 = 4){
                    echo "Nome: " . $nome;
                    echo "<br>";
                    echo "idade: " . $n1;
                    echo "<br>";
                    echo "Grupo Alto";
                } elseif($n1 >= 25 && $n1 <= 34 && $n2 = 3){
                    echo "Nome: " . $nome;
                    echo "<br>";
                    echo "idade: " . $n1;
                    echo "<br>";
                    echo "Grupo Baixo";
                } elseif($n1 >= 25 && $n1 <= 34 && $n2 = 4){
                    echo "Nome: " . $nome;
                    echo "<br>";
                    echo "idade: " . $n1;
                    echo "<br>";
                    echo "Grupo Médio";
                } elseif($n1 >= 25 && $n1 <= 34 && $n2 = 5){
                    echo "Nome: " . $nome;
                    echo "<br>";
                    echo "idade: " . $n1;
                    echo "<br>";
                    echo "Grupo Alto";
                } elseif($n1 >= 35 && $n1 <= 64 && $n2 = 4){
                    echo "Nome: " . $nome;
                    echo "<br>";
                    echo "idade: " . $n1;
                    echo "<br>";
                    echo "Grupo Baixo";
                } elseif($n1 >= 35 && $n1 <= 64 && $n2 = 5){
                    echo "Nome: " . $nome;
                    echo "<br>";
                    echo "idade: " . $n1;
                    echo "<br>";
                    echo "Grupo Médio";
                } elseif($n1 >= 35 && $n1 <= 64 && $n2 = 6){
                    echo "Nome: " . $nome;
                    echo "<br>";
                    echo "idade: " . $n1;
                    echo "<br>";
                    echo "Grupo Alto";
                } elseif($n1 >= 65 && $n1 <= 70 && $n2 = 7){
                    echo "Nome: " . $nome;
                    echo "<br>";
                    echo "idade: " . $n1;
                    echo "<br>";
                    echo "Grupo Baixo";
                } elseif($n1 >= 65 && $n1 <= 70 && $n2 = 8){
                    echo "Nome: " . $nome;
                    echo "<br>";
                    echo "idade: " . $n1;
                    echo "<br>";
                    echo "Grupo Médio";
                } elseif($n1 >= 65 && $n1 <= 70 && $n2 = 9){
                    echo "Nome: " . $nome;
                    echo "<br>";
                    echo "idade: " . $n1;
                    echo "<br>";
                    echo "Grupo Alto";
                } else{
                    echo "Idade fora da tabela";
                }
            }
        ?>
        </div>
    </div>
</body>
</html>