<script>
  function confirma(){
    if(!confirm("Deseja excluir?")){
      return false
    }
    return true;
  }
</script>


<?php if (! empty($news) && is_array($news)) : ?>


<div class="album py-5 bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php foreach ($news as $news_item): ?>

            <div class="col">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title><?= esc($news_item['title']) ?></title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"><?= esc($news_item['title']) ?></text></svg>

                    <div class="card-body">
                    <p class="card-text"><?= esc($news_item['description']) ?></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <a href="/news/view/<?= esc($news_item['id'], 'url') ?>" type="button" class="btn btn-sm btn-outline-secondary">Visualizar</a>
                        <a href="/news/edit/<?= esc($news_item['id'], 'url') ?>" type="button" class="btn btn-sm btn-outline-secondary">Editar</a>
                        <a href="/news/delete/<?= esc($news_item['id'], 'url') ?>" onclick="return confirma()" type="button" class="btn btn-sm btn-outline-danger">Excluir</a>
                        </div>
                        <small class="text-muted"><?= esc($news_item['ptime']) ?> minutos</small>
                    </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
    
        <?php else : ?>

            <div class="col mt-5 text-center">
                <p>Nenhuma receita encontrada :(</p>
            </div>

        <?php endif ?>
        </div>
    </div>
</div>

