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
    <title>App Help Desk - Home</title>
    <link rel="stylesheet" href="global/style.css">
</head>
<body>
    <header>
        <img src="assets/images/logo.png" alt="Logo App Help Desk">
        <h1>App Help Desk</h1>
    </header>
    <main>
        <section class="card-home">
            <div class="card">
                <h2 class="card-header">Menu</h2>
                <div class="card-body">
                    <div class="menu-icons">
                        <div class="menu-item">
                            <img src="assets/images/formulario_abrir_chamado.png" alt="Abirir Chamado">
                        </div>
                        <div class="menu-item">
                            <img src="assets/images/formulario_consultar_chamado.png" alt="Consultar Chamado">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>