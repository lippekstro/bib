<?php
require_once __DIR__ . "/../templates/_cabecalho.php";
?>

<main class="container py-5">

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">

        <div>
            <h1 class="h3 mb-1">Gerenciamento de Livros</h1>
            <p class="text-muted mb-0">
                Gerencie os livros cadastrados no sistema.
            </p>
        </div>

        <a href="/bib/views/adicionar_livro.php" class="btn btn-primary">
            <img src="/bib/imgs/add_box.png" alt="">
            Adicionar livro
        </a>

    </div>

    <div class="card border-0 shadow-sm">

        <div class="card-header py-3">
            <h2 class="h5 mb-0">Livros cadastrados</h2>
        </div>

        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-4">#</th>
                            <th>Capa</th>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Ano</th>
                            <th>Categoria</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="ps-4">1</td>
                            <td>
                                <img src="https://picsum.photos/200" alt="Capa do livro Dom Casmurro" width="45" height="60" class="rounded shadow-sm" style="object-fit: cover;">
                            </td>
                            <td class="fw-semibold">Dom Casmurro</td>
                            <td>Machado de Assis</td>
                            <td>1899</td>
                            <td>Romance</td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="editar.php?id=1" class="btn btn-sm btn-outline-primary" title="Editar">
                                        <img src="/bib/imgs/edit.png" alt="">
                                        Editar
                                    </a>

                                    <form action="excluir.php" method="POST">
                                        <input type="hidden" name="id" value="1">
                                        <button type="submit"
                                            class="btn btn-sm btn-outline-danger">
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
                Total de 1 livros
            </small>
        </div>

    </div>

</main>

<footer>

</footer>

</body>

</html>