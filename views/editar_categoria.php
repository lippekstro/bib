<?php
require_once __DIR__ . "/../templates/_cabecalho.php";
?>

<main class="container py-5">

    <div class="mb-4">
        <h1 class="h3 mb-1">Editar Categoria</h1>
        <p class="text-muted mb-0">
            Altere os campos que deseja atualizar nesta categoria.
        </p>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-header py-3">
            <h2 class="h5 mb-0">Dados da categoria</h2>
        </div>

        <div class="card-body p-4">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="nome" class="form-label">
                        Nome da categoria
                    </label>

                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex.: Romance" maxlength="100" required>
                </div>

                <div class="mb-3">
                    <label for="descricao" class="form-label">
                        Descrição
                    </label>

                    <textarea class="form-control" id="descricao" name="descricao" rows="4" maxlength="500" placeholder="Descreva a categoria..."></textarea>
                </div>

                <hr class="my-4">

                <div class="d-flex justify-content-end gap-2">

                    <a href="/bib/views/gerenciar_categorias.php" class="btn btn-outline-secondary">
                        <img src="/bib/imgs/arrow_back.png" alt="">
                        Cancelar
                    </a>

                    <button type="submit" class="btn btn-primary">
                        <img src="/bib/imgs/check.png" alt="">
                        Atualizar categoria
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