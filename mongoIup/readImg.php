<?php

//$m = new Mongo();
 $m = new Mongo("localhost");

$grid = $m->selectDB('test')->getGridFS();

//$file = $grid->findOne('Readme.png');
$file2 = $grid->findOne('abc.jpg');


// set content-type
header("Content-type: image/jpeg");

// send image
//echo $file->getBytes();
echo "<br>";
echo $file2->getBytes();

?>


<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php echo $file->getBytes(); ?></td>
  </tr>
</table>
<h1> hello</h1>
<p>&nbsp;</p>
