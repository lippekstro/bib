<?php
require_once __DIR__ . "/../templates/_cabecalho.php";
?>

<main class="container py-5">

    <div class="mb-4 text-center">
        <h1 class="h3 mb-1">Entrar</h1>
        <p class="text-muted mb-0">Acesse sua conta da biblioteca.</p>
    </div>

    <div class="card border-0 shadow-sm rounded-4 mx-auto" style="max-width: 450px;">
        <div class="card-header py-3">
            <h2 class="h5 mb-0">Login</h2>
        </div>
        <div class="card-body p-4">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <img src="/bib/imgs/envelope.png" alt="" width="16" height="16">
                        </span>
                        <input type="email" class="form-control" id="email" name="email" placeholder="voce@exemplo.com" autocomplete="email" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="senha" class="form-label">Senha</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <img src="/bib/imgs/password.png" alt="" width="16" height="16">
                        </span>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" autocomplete="current-password" required>
                    </div>
                </div>

                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </div>

                <div class="text-center">
                    <span class="text-muted small">Ainda não tem uma conta?</span>
                    <a href="/bib/views/cadastro_usuario.php" class="small text-decoration-none">Cadastre-se</a>
                </div>
            </form>
        </div>
    </div>
</main>

<footer>

</footer>

</body>

</html>