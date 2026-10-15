<?php
require_once __DIR__ . "/templates/_cabecalho.php";
?>

<main class="container py-5">
    <div class="mb-4">
        <h1 class="h3 mb-1">Biblioteca</h1>
        <p class="text-muted mb-0">
            Explore os livros disponíveis no catálogo.
        </p>
    </div>

    <div class="row g-4">
        <div class="col-12 sm:col-6 md:col-4 lg:col-2">
            <a href="/bib/views/detalhes.php?id=1"
                class="text-decoration-none text-reset">
                <article class="card h-100 border-0 shadow-sm">
                    <img src="https://picsum.photos/seed/livro1/200/400" class="card-img-top" alt="Capa ilustrativa de Dom Casmurro" loading="lazy" style="aspect-ratio: 2 / 3; object-fit: cover;">

                    <div class="card-body">
                        <h2 class="h6 card-title mb-2">
                            Dom Casmurro
                        </h2>
                        <p class="card-text text-muted small mb-0">
                            Machado de Assis
                        </p>
                    </div>
                </article>
            </a>
        </div>
    </div>
</main>

<footer>

</footer>

</body>

</html>