<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device=width, initial-scale=1.0">

        <title>Login</title>

        <link rel="stylesheet" href="./css/1.css">
        <link rel="stylesheet" href="./css/index_a.css">

    </head>
    <body>
        <a href="index.html">Voltar</a>
        <div class="login">
            <h1>Área do Atleta</h1>
            <form action="testlogin.php" method="POST">
            <input type="text" name="usuario" placeholder="Usuario">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            </form>
            <br>
            <h5>Não é aluno?<br><a href="cadastro.php">Cadastro</a></h5>
        </div>
    </body>
</html>