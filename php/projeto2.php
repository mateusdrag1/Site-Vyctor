<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>.:: Painel de Login ::.</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="area">
        <form action="validar.php" method="POST" id="formulario" autocomplete="off">
            <h2>LOGIN</h2>
            <label>Usuário:</label><input type="text" name="usuario" id="usuario" placeholder="Usuário"><br>
            <label>Senha:</label><input type="password" name="senha" id="senha" placeholder="Senha"><br>
            <input type="submit" value="Enviar" id="submit"><br>
            <label><a href="cadastro.php">Novo usuário</a><br></label>
            <label><a href="redefinirsenha.php">Esqueceu sua senha?</a></label>
        </form>
    </div>
</body>
</html>