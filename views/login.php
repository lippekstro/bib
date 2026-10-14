<?php
require_once __DIR__ . "/../templates/_cabecalho.php";
?>

<main class="container">
    <div class="d-flex justify-content-center">
        <form action="" method="post">
            <div class="form-field m-5">
                <label class="form-control form-adorn form-adorn-end">
                    <div class="form-adorn-icon" aria-hidden="true">
                        <img src="/bib/imgs/envelope.png" alt="" width="16px" height="16px">
                    </div>
                    <input type="email" class="form-ghost" placeholder="you@example.com">
                </label>
            </div>

            <div class="form-field m-5">
                <label class="form-control form-adorn form-adorn-end">
                    <div class="form-adorn-icon" aria-hidden="true">
                        <img src="/bib/imgs/password.png" alt="" width="16px" height="16px">
                    </div>
                    <input type="password" class="form-ghost" placeholder="********">
                </label>
            </div>

            <div class="form-field mt-5">
                <button type="submit" class="btn">Entrar</button>
            </div>
        </form>
    </div>
</main>

<footer>

</footer>

</body>

</html>