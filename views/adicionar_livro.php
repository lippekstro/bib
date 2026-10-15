<?php
require_once __DIR__ . "/../templates/_cabecalho.php";
?>

<main class="container py-5">

    <div class="mb-4">
        <h1 class="h3 mb-1">Adicionar Livro</h1>
        <p class="text-muted mb-0">
            Preencha os campos abaixo para cadastrar um novo livro.
        </p>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-header py-3">
            <h2 class="h5 mb-0">Dados do livro</h2>
        </div>

        <div class="card-body p-4">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="titulo" class="form-label">
                        Título do livro
                    </label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ex.: Dom Casmurro" maxlength="200" required>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="ano" class="form-label">
                            Ano de publicação
                        </label>
                        <input type="number" class="form-control" id="ano" name="ano" placeholder="Ex.: 1899" min="1" max="2100" required>
                    </div>

                    <div class="col-md-8 mb-3">
                        <label for="autor" class="form-label">
                            Autor
                        </label>
                        <input type="text" class="form-control" id="autor" name="autor" placeholder="Ex.: Machado de Assis" maxlength="150" required>
                    </div>

                </div>

                <div class="mb-3">
                    <label for="resumo" class="form-label">
                        Resumo
                    </label>
                    <textarea class="form-control" id="resumo" name="resumo" rows="5" placeholder="Digite um breve resumo do livro..." required></textarea>
                </div>

                <div class="mb-3">
                    <label for="categoria" class="form-label">
                        Categoria
                    </label>
                    <select class="form-select" id="categoria" name="categoria" required>
                        <option value="1">Romance</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="capa" class="form-label">
                        Capa do livro
                    </label>
                    <input type="file" class="form-control" id="capa" name="capa" accept="image/*" required>
                    <div class="form-text">
                        Selecione uma imagem para a capa do livro.
                    </div>
                </div>

                <hr class="my-4">

                <div class="d-flex justify-content-end gap-2">
                    <a href="/bib/views/gerenciar_livros.php" class="btn btn-outline-secondary">
                        <img src="/bib/imgs/arrow_back.png" alt="">
                        Cancelar
                    </a>

                    <button type="submit" class="btn btn-primary">
                        <img src="/bib/imgs/check.png" alt="">
                        Salvar livro
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