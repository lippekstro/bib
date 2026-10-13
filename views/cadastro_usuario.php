<?php
require_once __DIR__ . "/../templates/_cabecalho.php";
?>

<main class="container">
    <div class="d-flex justify-content-center">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-field">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>

            <div class="form-field">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-field">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha">
            </div>

            <div class="form-field">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto">
            </div>

            <div class="form-field mt-5">
                <button type="submit" class="btn">Cadastrar</button>
            </div>
        </form>
    </div>

</main>

<footer>

</footer>

</body>

</html>