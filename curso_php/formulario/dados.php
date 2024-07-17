<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <header>
        <h1>
            Resultado do processamento
        </h1>
        <main>
            <?php 
            $email = $_GET["input_usuario"];
            $senha = $_GET["input_senha"];
            echo " Usuario: $email <br> Senha: $senha" 
            ?>
        </main>
    </header>
</body>
</html>