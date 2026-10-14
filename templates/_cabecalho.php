<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>

    <link rel="stylesheet" href="/bib/css/bootstrap.css">
    <script src="/bib/js/bootstrap.js" defer></script>
</head>

<body>

    <head>
        <nav class="navbar sm:navbar-expand bg-1 fg-2">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">#</a>
                <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" aria-hidden="true"></span>
                </button>
                <dialog class="drawer drawer-end" tabindex="-1" id="navbarNav" aria-labelledby="navbarNavLabel">
                    <div class="drawer-header">
                        <h5 class="drawer-title" id="navbarNavLabel">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="drawer" aria-label="Close"></button>
                    </div>
                    <div class="drawer-body">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/bib/index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/bib/views/cadastro_usuario.php">Cadastre-se</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/bib/views/login.php">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/bib/views/perfil.php">Perfil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Sair</a>
                            </li>
                        </ul>
                    </div>
                </dialog>
            </div>
        </nav>
    </head>