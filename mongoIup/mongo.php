
<?php
try {
  // open connection to MongoDB server
  $conn = new Mongo('localhost');
  

  // access database
  //$db = $conn->muzzdb;
  $db = $conn->test;
  

  // access collection
  $collection = $db->zips;

  // execute query
  // retrieve all documents
  $cursor = $collection->find();

  // iterate through the result set
  // print each document
 
  // disconnect from server
  $conn->close();
} catch (MongoConnectionException $e) {
  die('Error connecting to MongoDB server');
} catch (MongoException $e) {
  die('Error: ' . $e->getMessage());
}
?>