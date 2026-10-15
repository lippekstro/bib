<?php
require_once __DIR__ . "/../templates/_cabecalho.php";
?>

<main class="container py-5">
    <div class="row justify-content-center">
        <div class="col-11 col-sm-8 col-md-6 col-lg-4">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <div class="position-relative d-inline-block">
                            <img src="https://i.pravatar.cc/300" alt="Foto do usuário" class="rounded-circle img-thumbnail" width="100" height="100" style="object-fit: cover;">

                            <a href="/bib/views/editar_foto.php" class="btn btn-primary btn-sm rounded-circle position-absolute bottom-0 end-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; cursor: pointer;" title="Editar foto">
                                <img src="/bib/imgs/add_photo.png" alt="">
                            </a>

                        </div>
                        <h4 class="fw-bold mb-1">
                            João da Silva
                        </h4>
                    </div>

                    <hr>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0 py-3">
                            <strong>E-mail:</strong>
                            <span class="text-secondary">
                                joao@email.com
                            </span>
                        </li>
                    </ul>

                    <div class="d-grid gap-2 mt-4">
                        <a href="" class="btn btn-primary">
                            Editar perfil
                        </a>

                        <a href="/bib/views/gerenciar_categorias.php" class="btn btn-primary">
                            Gerenciar Categorias
                        </a>

                        <a href="/bib/views/gerenciar_livros.php" class="btn btn-primary">
                            Gerenciar Livros
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<footer>

</footer>

</body>

</html>