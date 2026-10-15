<?php
require_once __DIR__ . "/../templates/_cabecalho.php";
?>

<main class="container py-5">

    <div class="mb-4 text-center">
        <h1 class="h3 mb-1">Meu perfil</h1>
        <p class="text-muted mb-0">Visualize seus dados e gerencie sua biblioteca.</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-7 col-lg-5 col-xl-4">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <div class="position-relative d-inline-block mb-3">
                            <img src="https://i.pravatar.cc/300" alt="Foto de perfil de João da Silva" class="rounded-circle img-thumbnail" width="120" height="120" style="object-fit: cover;">

                            <a href="/bib/views/editar_foto.php" class="btn btn-primary btn-sm rounded-circle position-absolute bottom-0 end-0 d-flex align-items-center justify-content-center" style="width: 34px; height: 34px;" title="Alterar foto de perfil" aria-label="Alterar foto de perfil">
                                <img src="/bib/imgs/add_photo.png" alt="" width="18" height="18">
                            </a>
                        </div>
                        <h2 class="h4 fw-bold mb-1">João da Silva</h2>
                        <p class="text-secondary mb-0">joao@email.com</p>
                    </div>

                    <hr class="my-4">

                    <!-- <h3 class="h6 fw-bold mb-3">Dados da conta</h3>

                    <div class="d-flex align-items-start gap-3 mb-3">
                        <div class="text-secondary">
                            <img src="/bib/imgs/person.png" alt="" width="20" height="20">
                        </div>
                        <div>
                            <p class="text-muted small mb-1">Nome completo</p>
                            <p class="mb-0 fw-medium">João da Silva</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start gap-3 mb-4">
                        <div class="text-secondary">
                            <img src="/bib/imgs/envelope.png" alt="" width="20" height="20">
                        </div>
                        <div>
                            <p class="text-muted small mb-1">E-mail</p>
                            <p class="mb-0 text-break">joao@email.com</p>
                        </div>
                    </div> -->

                    <div class="d-grid mb-4">
                        <a href="/bib/views/editar_perfil.php" class="btn btn-primary">
                            Editar perfil
                        </a>
                    </div>

                    <div class="border rounded-3 p-3">
                        <h3 class="h6 fw-bold mb-3">Administração</h3>

                        <div class="d-grid gap-2">
                            <a href="/bib/views/gerenciar_categorias.php" class="btn btn-outline-primary text-start">
                                <img src="/bib/imgs/category.png" alt="" width="20" height="20" class="me-2">
                                Gerenciar categorias
                            </a>

                            <a href="/bib/views/gerenciar_livros.php" class="btn btn-outline-primary text-start">
                                <img src="/bib/imgs/book.png" alt="" width="20" height="20" class="me-2">
                                Gerenciar livros
                            </a>
                        </div>
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