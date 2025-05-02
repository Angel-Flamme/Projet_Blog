<?php
$titre      = "Article";
$css        = "article";
$isBanniere = false;

$id = $_GET['id'];
$article = file_get_contents("article/article_".$id.".txt");

include 'templates/article.view.php';
 ?>
