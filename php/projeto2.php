<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>.:: Sistema de Login ::.</title>
    <link rel="stylesheet" href="projeto2.css">
</head>
<body>
    <div class="container">
        <nav>
            <ul class="menu">
                <li>Cadastro</li>
                <li>Login</li>
            </ul>
        </nav>
        <section>
            <h1>Cadastro de Usuários</h1>
            <hr><br><br>

            <form method="post" action="processa.php">
                <input type="submit" value="Salvar" class="btn">
                <input type="reset" value="Limpar" class="btn">
                <br><br>

                Usuário<br>
                <input type="text" name="usuario" class="campo" maxlength="40" required autofocus><br>
                Senha<br>
                <input type="password" name="senha" class="campo" required><br>

            </form>
        </section>
    </div>
</body>
</html>