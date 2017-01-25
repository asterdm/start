<?php
require __DIR__.'/model/new-post.php';
if (!TablefromPost()) header("Location: /index.php");
var_dump(TablefromPost());
 ?>
