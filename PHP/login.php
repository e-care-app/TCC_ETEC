<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>
    <div>
        <form method="POST" action="">
            <div>
                <label for="username">Usuário:</label>
                <input type="text" id="user" name="user">
            </div>
            <div>
                <label for="password">Senha:</label>
                <input type="password" id="senha" name="senha">

            </div>
            <div>
                <button type="submit" name="entrar">Entrar</button>
            </div>
            <div>
                <a href="recuperar.php" target=""><input type="button" value="Esqueci o usuário"></a>
                <a href="recuperar.php" target=""><input type="button" value="Esqueci a senha"></a>
            </div>
            <p>
                Não é cadastrado? <a href="cadastro.php">Cadastrar</a>
            </p>
        </form>
    </div>

    <?php
        

    ?>

</body>

</html>