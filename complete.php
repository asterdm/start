<?php
require __DIR__.'/model/new-post.php';
if (!TablefromPost()) {
  header("Location: /index.php");
  die;
}
$table=TablefromPost();
TabletoBD($table);
header("Location: /index.php");
 ?>
