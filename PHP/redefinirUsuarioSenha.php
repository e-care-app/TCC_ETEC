<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Redefinir</title>
</head>

<body>
    <div>
        <form method="POST" action="">
            <div>
                <h2>Preencha os campos:</h2>
            </div>
            <div>
                <label for="user">Usuário:</label>
                <input type="text" id="user" name="user">
            </div>
            <div>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha">
            </div>
            <div>
                <label for="confirmsenha">Digite a senha novamente:</label>
                <input type="password" id="confirmsenha" name="confirmsenha">
            </div>
            <div>
                <button type="submit" name="redefinir">Redefinir</button>
                <button type="reset" name="limpar">Limpar</button>
            </div>
        </form>
    </div>
</body>

</html>