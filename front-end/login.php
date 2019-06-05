<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IFSpace - Login</title>
</head>
<body>
    <form action="../back-end/login.php" method="POST">
        <label>Nome</label>
        <input type="text" name="r_username" id="nome" required>
        <label>Senha</label>
        <input type="password" name="r_password" id="senha" required>
        <input type="submit" value="login">
    </form>
</body>
</html>