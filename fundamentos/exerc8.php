<?php
//RECEBER AS VARIÁVEIS:
$name = $_GET["nome"];
$telefone = $_GET["tel"];
$email = $_GET["email"];
$nascimento = $_GET["nascimento"];
$endereco = $_GET["endereco"];
//APRESENTAR OS DADOS:
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprsentação de Dados</title>
</head>
<body>
    <h1>Aprsentação dos Dados</h1>
    <p>Nome: <?php echo $name;?></p>
    <p>Telefone: <?php echo $telefone; ?></p>
    <p>E-mail: <?php echo $email;?></p>
    <p>Nascimento: <?php echo $nascimento;?></p>

</body>
</html>