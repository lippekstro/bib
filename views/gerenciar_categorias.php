<?php
require_once __DIR__ . "/../templates/_cabecalho.php";
?>

<main class="container py-5">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">

        <div>
            <h1 class="h3 mb-1">Gerenciamento de Categorias</h1>
            <p class="text-muted mb-0">
                Gerencie as categorias cadastradas no sistema.
            </p>
        </div>

        <a href="/bib/views/adicionar_categoria.php" class="btn btn-primary">
            <img src="/bib/imgs/add_box.png" alt="">
            Adicionar categoria
        </a>

    </div>

    <div class="card border-0 shadow-sm">

        <div class="card-header py-3">
            <h2 class="h5 mb-0">Categorias cadastradas</h2>
        </div>

        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-4">#</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="ps-4">1</td>
                            <td class="fw-semibold">Eletrônicos</td>
                            <td>Celulares, computadores e acessórios.</td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center gap-2">

                                    <a href="/bib/views/editar_categoria.php"
                                        class="btn btn-sm btn-outline-primary"
                                        title="Editar">
                                        <img src="/bib/imgs/edit.png" alt="">
                                        Editar
                                    </a>

                                    <form action="" method="POST" onsubmit="return confirm('Voce tem certeza que quer deletar o registro?')">
                                        <input type="hidden" name="id" value="1">

                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            <img src="/bib/imgs/delete.png" alt="">
                                            Excluir
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <div class="card-footer py-3">
            <small class="text-muted">
                Total de 1 categorias
            </small>
        </div>

    </div>

</main>

<footer>

</footer>

</body>

</html>