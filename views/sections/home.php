<?php $this->layout('layouts/layout', [
  'mainTitle' => 'Home del proyecto',
]) ?>

<!-- <h1>Separando las vistas</h1> -->
<h1>Manuales</h1>

<p>
  <a href="/manuales/nuevo"></a>
</p>

<?php foreach($manuals as $manual): ?>

<div class="manual">
  <h2><?= $manual['title'] ?></h2>
  <p>
    <?= $manual['excerpt'] ?>
    <a href="/manuales/<?= $manual['slug'] ?>"">Acceder</a>
    <a href="/manuales/<?= $manual['slug'] ?>"">Acceder</a>
  </p>
</div>

<?php endforeach ?>

<!-- <p>Estamos haciendo la separación de las vistas.</p> -->

<!-- <?php //$this->insert('partials/some-markup', ['courseTitle' => 'El titulo']); ?> -->

<?php $this->start('footerLinks') ?>
  <p>
    <a href="/otra/carpeta">Otra ruta</a> |
    <a href="/producto/1">Producto 1</a> |
    <a href="/producto/2">Producto 2</a>
  </p>
<?php $this->stop() ?>

