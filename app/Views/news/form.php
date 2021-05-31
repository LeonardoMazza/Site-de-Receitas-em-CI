<div class="album py-5 bg-light">
  <div class="container">

  <h2><?php echo isset($id) ? "Editando Receita" : "Nova Receita" ?></h2>
  <?php echo \Config\Services::validation()->listErrors(); ?>

  <form action="/news/store" method="post">

    <div class="form-group">
      <label for="title">Título</label>
      <input type="text" class="form-control" name="title" required id="title" value="<?= isset($title) ? $title : '' ?>">
    </div>

    <div class="form-group">
      <label for="body">Receita</label>
      <textarea name="body" id="body" class="form-control" required cols="30" rows="10"><?= isset($body) ? $body : '' ?></textarea>
    </div>

    <div class="form-group">
      <label for="description">Descrição</label>
      <input type="text" class="form-control" required name="description" id="description" value="<?= isset($description) ? $description : '' ?>">
    </div>

    <div class="form-group">
      <label for="ptime">Tempo de Preparo</label>
      <input type="text" class="form-control" required name="ptime" id="ptime" value="<?= isset($ptime) ? $ptime : '' ?>">
    </div>

    <input type="hidden" name="id" value="<?=isset($id) ? $id : ''?>">

    <div class="form-group mt-3">
      <input type="submit" value="Salvar" class="btn btn-primary">
    </div>

  </form>
  <div>
</div>