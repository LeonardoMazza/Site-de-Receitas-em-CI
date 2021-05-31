<div class="album py-5 bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-1 g-1">
            <div class="col">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title><?= esc($news['title']) ?></title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"><?= esc($news['title']) ?></text></svg>

                    <div class="card-body">
                    <p class="card-text"><textarea cols="30" rows="10"><?= esc($news['body']) ?></textarea></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <a href="/news/edit/<?= esc($news['id'], 'url') ?>" type="button" class="btn btn-sm btn-outline-secondary">Editar</a>
                        <a href="/news/delete/<?= esc($news['id'], 'url') ?>" onclick="return confirma()" type="button" class="btn btn-sm btn-outline-danger">Excluir</a>
                        </div>
                        <small class="text-muted"><?= esc($news['ptime']) ?> minutos</small>
                    </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
