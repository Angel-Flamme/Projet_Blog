<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php if (isset($titre)) { ?>
      <?= $titre?>
    <?php } ?></title>
    <link rel="stylesheet" href="/css/global.css">
    <?php if (isset($css)): ?>
    <link rel="stylesheet" href="/css/<?= $css?>.css">
  <?php endif; ?>
  </head>
  <body>
    <img id="fond" src="/media/fond.jpg" alt="fond nature">
    <?php if ($isBanniere): ?>
    <img id="banniere" src="/media/banniere.jpg" alt="banniere_nature">
  <?php endif; ?>
    <div id="navbar" class="col-12">
        <a href="/index.php?action=accueil">Accueil</a>
        <a href="/index.php?action=blog">Blog</a>
        <a href="/index.php?action=contact">Contact</a>
    </div>
    <div class="col-ml-1 col-mr-1 col-10">
