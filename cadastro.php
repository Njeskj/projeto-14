<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Sexo: ' . $_POST['genero']);
        // print_r('<br>');
        // print_r('Data de Nascimento: ' . $_POST['nascimento']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['endereco']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('País: ' . $_POST['pais']);

        include_once('./inc/config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $nascimento = $_POST['nascimento'];
        $endereco = $_POST['endereco'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $pais = $_POST['pais'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,telefone,sexo,nascimento,endereco,cidade,estado,pais) VALUES ('$nome', '$email', '$senha', '$telefone', '$sexo', '$nascimento', '$endereco', '$cidade', '$estado', '$pais')");
    }

    header('Location login.php')

?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device=width, initial-scale=1.0">
        <title>Cadastro</title>
        <link rel="stylesheet" href="./css/2.css">
        <link rel="stylesheet" href="./css/index_a.css">
    </head>
    <body>
        <a href="index.html">Voltar</a>
        <div class="box">
            <form action="cadastro.php" method="POST">
                <fieldset>
                    <legend><b>Cadastro de Atletas</b></legend>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="nome" id="nome" class="inputUser" required>
                        <label for="nome" class="labelinput">Nome Completo</label>
                    </div>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="email" id="email" class="inputUser" required>
                        <label for="email" class="labelinput">Email</label>
                    </div>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="usuario" id="usuario" class="inputUser" required>
                        <label for="usuario" class="labelinput">Usuário</label>
                    </div>
                    <br>
                    <div class="inputBox">
                        <input type="password" name="senha" id="senha" class="inputUser" required>
                        <label for="senha" class="labelinput">Senha</label>
                    </div>
                    <br>
                    <div class="inputBox">
                        <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                        <label for="telefone" class="labelinput">Telefone</label>
                    </div>
                    <br>
                    <p><b>Sexo</b></p>
                    <input type="radio" id="feminino" name="genero" value="Feminino" required>
                    <label for="feminino">Feminino</label>
                    <br>
                    <input type="radio" id="masculino" name="genero" value="Masculino" required>
                    <label for="masculino">Masculino</label>
                    <br>
                    <input type="radio" id="outro" name="genero" value="Outro" required>
                    <label for="outro">Outro</label>
                    <br>
                    <br>
                        <label for="nascimento"><b>Data de Nascimento</b></label>
                        <input type="date" name="nascimento" id="nascimento" required>
                    <br>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="endereco" id="endereco" class="inputUser" required>
                        <label for="endereco" class="labelinput">Endereço</label>
                    </div>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="cidade" id="cidade" class="inputUser" required>
                        <label for="cidade" class="labelinput">Cidade</label>
                    </div>
                    <br>
                    <div class="inputBox">
                        <input type="tel" name="estado" id="estado" class="inputUser" required>
                        <label for="estado" class="labelinput">Estado</label>
                    </div>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="pais" id="pais" class="inputUser" required>
                        <label for="pais" class="labelinput">País</label>
                    </div>
                    <br>
                    <br>
                    <input type="submit" name="submit" id="submit">
                </fieldset>
        </div>
    </body>
</html>