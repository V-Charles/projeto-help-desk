<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Help Desk</title>
    <link rel="stylesheet" href="../global/style.css">
</head>
<body>
    <header>
        <img src="../assets/images/logo.png" alt="Logo App Help Desk">
        <h1>App Help Desk</h1>
    </header>
    <main>
        <section class="card-login">
            <h2>Login</h2>
            <form action="valida_login.php" method="post">
                <input type="email" name="email" id="" placeholder="E-mail" required>
                <input type="password" name="senha" id="" placeholder="Senha" required>
                <? if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
                    <div style="color: red;">
                        Usuário ou senha inválido
                    </div>
                <? } ?>
                <? if (isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>
                    <div style="color: red;">
                        Faça login antes de acessar as páginas protegidas
                    </div>
                <? } ?>
                <button type="submit">Entrar</button>
            </form>
        </section>
    </main>
</body>
</html>