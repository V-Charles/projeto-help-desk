<? require_once "validador_acesso.php" ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Help Desk - Consulta de Chamado</title>
    <link rel="stylesheet" href="global/style.css">
</head>
<body>
    <header>
        <img src="assets/images/logo.png" alt="Logo App Help Desk">
        <h1>App Help Desk</h1>
    </header>
    <main>
        <section class="card-consultar-chamado">
            <div class="card">
                <h2 class="card-header">Consulta de Chamado</h2>
                <div class="card-body">
                    <article class="chamado-card">
                        <h3 class="chamado-title">Título do chamado</h3>
                        <h4 class="chamado-category">Categoria</h4>
                        <p class="chamado-description">Descrição do chamado</p>
                    </article>
                    <article class="chamado-card">
                        <h3 class="chamado-title">Título do chamado</h3>
                        <h4 class="chamado-category">Categoria</h4>
                        <p class="chamado-description">Descrição do chamado</p>
                    </article>
                    <article class="chamado-card">
                        <h3 class="chamado-title">Título do chamado</h3>
                        <h4 class="chamado-category">Categoria</h4>
                        <p class="chamado-description">Descrição do chamado</p>
                    </article>
                    <div class="form-actions">
                        <button class="btn btn-warning" type="button">Voltar</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>