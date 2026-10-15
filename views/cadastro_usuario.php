<?php
require_once __DIR__ . "/../templates/_cabecalho.php";
?>

<main class="container py-5">

    <div class="mb-4 text-center">
        <h1 class="h3 mb-1">Cadastro de Usuário</h1>
        <p class="text-muted mb-0">
            Preencha os campos abaixo para criar sua conta.
        </p>
    </div>

    <div class="card border-0 shadow-sm rounded-4 mx-auto" style="max-width: 550px;">
        <div class="card-header py-3">
            <h2 class="h5 mb-0">Dados do usuário</h2>
        </div>

        <div class="card-body p-4">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nome" class="form-label">
                        Nome completo
                    </label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome completo" maxlength="150" autocomplete="name" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">
                        E-mail
                    </label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="exemplo@email.com" maxlength="254" autocomplete="email" required>
                </div>

                <div class="mb-3">
                    <label for="senha" class="form-label">
                        Senha
                    </label>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Crie uma senha" autocomplete="new-password" minlength="8" required>
                    <div class="form-text">
                        Utilize pelo menos 8 caracteres.
                    </div>
                </div>

                <div class="mb-4">
                    <label for="foto" class="form-label">
                        Foto de perfil
                    </label>
                    <input type="file" class="form-control" id="foto" name="foto" accept="image/png, image/jpeg, image/webp">
                    <div class="form-text">
                        Formatos aceitos: JPG, PNG e WebP. Opcional.
                    </div>
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="/bib/index.php" class="btn btn-outline-secondary">
                        Cancelar
                    </a>
                    <button type="submit" class="btn btn-primary">
                        Cadastrar
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>

<footer>

</footer>

</body>

</html>