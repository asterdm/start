<?php
require __DIR__.'/model/new-post.php';
if (!TablefromPost()) header("Location: /index.php");
$table=TablefromPost();
TabletoBD($table);
 ?>
