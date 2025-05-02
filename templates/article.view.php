<?php include 'layout/head.php'; ?>
      <h1>Article</h1>
      <form id="form" class="cache" action="#" method="post">
        <label for="">Entrez votre modification de texte ci-dessous:</label>
        <textarea id="article" name="article" rows="8" cols="80"></textarea>
        <p id="erreur"></p>
        <a class="center button col-4" href="#" onclick="validerModif(<?= $id?>);">Valider la modification</a>
      </form>
      <p id="texte"><?= $article?></p>
    <a id="boutton" class="center button col-4" href="#" onclick="initialiserModif();">Modifier l'article</a>
    <a class="center button col-4" href="/index.php?action=blog">Retour Page Blog</a>
    <?php include 'layout/footer.php'; ?>
        </div>
  </body>
  <footer>
    <script src="JS/article.js" charset="utf-8"></script>
  </footer>
</html>
