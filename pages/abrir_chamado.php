<? require_once "validador_acesso.php" ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Help Desk - Abertura de Chamado</title>
    <link rel="stylesheet" href="../global/style.css">
</head>
<body>
    <header>
        <img src="../assets/images/logo.png" alt="Logo App Help Desk">
        <h1>App Help Desk</h1>
        <nav>
            <a href="logoff.php">Sair</a>
        </nav>
    </header>
    <main>
        <section class="card-abrir-chamado">
            <div class="card">
                <h2 class="card-header">Abertura de Chamado</h2>
                <div class="card-body">
                    <form action="registra_chamado.php" method="post">
                        <div class="form-group">
                            <label for="titulo">Título</label>
                            <input type="text" name="titulo" id="titulo" placeholder="Título" required>
                        </div>
                        <div class="form-group">
                            <label for="categoria">Categoria</label>
                            <select name="categoria" id="categoria" required>
                                <option value="">Selecione</option>
                                <option value="impressora">Impressora</option>
                                <option value="hardware">Hardware</option>
                                <option value="software">Software</option>
                                <option value="rede">Rede</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <textarea name="descricao" id="descricao" rows="3" placeholder="Descreva o problema..." required></textarea>
                        </div>
                        <div class="form-actions">
                            <a href="home.php" class="btn btn-warning" type="button">Voltar</a>
                            <button class="btn btn-info" type="submit">Abrir</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>
</html>