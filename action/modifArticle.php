<?php
$article = fopen("article/article_".$_GET['id'].".txt", "w");
fwrite($article, $_GET['texte']);
fclose($article);

echo "succes"
?>
