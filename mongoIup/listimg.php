<?php

 //connects to the database at live
 $m = new Mongo("localhost");
 

$cursor = $m->selectDB( "test" )->getGridFS()->find();
foreach ($cursor as $filename=>$file) {
    echo htmlentities($filename).": ".$file->getSize() . "<br/>";
}
echo "<br>";
?>