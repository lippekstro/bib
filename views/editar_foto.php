<?php
require_once __DIR__ . "/../templates/_cabecalho.php";
?>

<main class="container py-5">

    <div class="mb-4 text-center">
        <h1 class="h3 mb-1">Editar foto de perfil</h1>
        <p class="text-muted mb-0">Atualize sua foto de perfil.</p>
    </div>

    <div class="card border-0 shadow-sm rounded-4 mx-auto" style="max-width: 500px;">
        <div class="card-header py-3">
            <h2 class="h5 mb-0">Foto do usuário</h2>
        </div>
        <div class="card-body p-4">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="text-center mb-4">
                    <img src="/bib/imgs/usuarios/generica_perfil.png" alt="Foto de perfil atual de João da Silva" class="rounded-circle img-thumbnail" width="140" height="140" style="object-fit: cover;">

                    <p class="text-muted small mt-2 mb-0">Foto atual</p>
                </div>

                <div class="mb-4">
                    <label for="foto" class="form-label">Selecionar nova foto</label>
                    <input type="file" class="form-control" id="foto" name="foto" accept="image/png, image/jpeg, image/webp" required>
                    <div class="form-text">
                        Formatos aceitos: JPG, PNG e WebP.
                    </div>
                </div>

                <hr class="my-4">

                <div class="d-flex justify-content-end gap-2">
                    <a href="/bib/views/perfil.php" class="btn btn-outline-secondary">
                        <img src="/bib/imgs/arrow_back.png" alt="" width="18" height="18" class="me-1">
                        Cancelar
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <img src="/bib/imgs/add_photo.png" alt="" width="18" height="18" class="me-1">
                        Atualizar foto
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