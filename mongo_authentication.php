<?php
//Connection creation with mongodb using Authentication 

$mongo = new Mongo(“mongodb://{$username}:{$password}@{$host}”);
$db = $mongo->selectDB(“test”);
?>