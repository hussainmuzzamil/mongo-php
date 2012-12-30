<?php

$m = new Mongo();
$grid = $m->selectDB('test')->getGridFS();

$file = $grid->findOne('Readme.png');

// set content-type
header("Content-type: image/png");
// send image
echo $file->getBytes();

?>