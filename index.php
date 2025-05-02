<?php
if (isset($_GET['action'])) {
  include 'action/'.$_GET['action'].'.php';
} else {
  include 'action/accueil.php';
}
?>
