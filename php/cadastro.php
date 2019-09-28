<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>.:: Cadastro ::.</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="area">
    <form action="projeto2.php" method="POST" id="formulario" autocomplete="off">
        <h2>CADASTRO</h2>
        <label>Usuário:</label><br>
        <input type="text" name="usuario" id="usuario" placeholder="Usuário" required><br>
        <label>Senha:</label><br>
        <input type="password" name="senha" id="senha" placeholder="Senha" required><br>
        <label>Confirme a Senha:</label><br>
        <input type="password" name="senhac" id="senhac" placeholder="Confirme a Senha" required><br>
        <td><button onclick="button" id="submit">Enviar</button><td>
        <p>
        Você já e registrado? <a href="projeto2.php">Logar</a>
        </p>
    </form>
    </div>
<script>
    var senha = document.getElementById("senha")
    , confirme = document.getElementById("senhac")
    function validarsenha(){
        if(senha.value != senhac.value){
            senhac.setCustomValidity("Senhas não são iguais! Tente novamente");
        } else {
            senhac.setCustomValidity('');
        }
    }
    senha.onchange = validarsenha;
    senhac.onkeyup = validarsenha;
</script>
</body>
</html>