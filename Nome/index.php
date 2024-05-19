<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="form">
    <form action="" method="GET">
        <h1>Formulário</h1>
        <input name="nome" placeholder="Nome"><br><br>
        <input name="sobrenome" placeholder="Sobrenome"><br><br>
        <input type="submit" value="Enviar" id="botao"><br><br>
    </form>

    <?php
        if(isset($_GET["nome"]) && isset($_GET["sobrenome"])){
            $nome = $_GET["nome"];
            $sobrenome = $_GET["sobrenome"];
            $nomecompleto =  $nome." ".$sobrenome;

            if(!empty($_GET["nome"]) && !empty($_GET["sobrenome"])){
                echo "<p>Seu nome é: $nome $sobrenome</p>";
            } else{
                echo "Preencha todos os campos para proseguir!";
            }

        }
                
            
        
    ?>
        </div>
    </div>
</body>
</html>