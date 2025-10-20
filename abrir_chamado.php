<?php 
    session_start();

    if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
        header('Location: index.php?login=erro2');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Help Desk - Abertura de Chamado</title>
    <link rel="stylesheet" href="global/style.css">
</head>
<body>
    <header>
        <img src="assets/images/logo.png" alt="Logo App Help Desk">
        <h1>App Help Desk</h1>
    </header>
    <main>
        <section class="card-abrir-chamado">
            <div class="card">
                <h2 class="card-header">Abertura de Chamado</h2>
                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <label for="titulo">Título</label>
                            <input type="text" id="titulo" placeholder="Título" required>
                        </div>
                        <div class="form-group">
                            <label for="categoria">Categoria</label>
                            <select name="" id="categoria" required>
                                <option value="">Criação Usuário</option>
                                <option value="">Impressora</option>
                                <option value="">Hardware</option>
                                <option value="">Software</option>
                                <option value="">Rede</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <textarea name="" id="descricao" rows="3" placeholder="Descreva o problema..." required></textarea>
                        </div>
                        <div class="form-actions">
                            <button class="btn btn-warning" type="button">Voltar</button>
                            <button class="btn btn-info" type="submit">Abrir</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>
</html>