<html>
  <head><title>My Uploader</title></head>
  <body>

<?php

if( $_FILES["f"] ) {
  $m = new Mongo();
  $m = new Mongo("localhost");
  $m->selectDB( "test" )->getGridFS()->storeUpload( "f" );
 
  $m->selectDB( "test" )->getGridFS()->storeUpload( "f" );
  echo "Saved " . $_FILES["f"]["name"] . "\n";
}
?>

    <form method="POST" enctype="multipart/form-data">
       Filename: <input type="file" name="f"><br />
       <input type="submit" value="upload" />
    </form>

  </body>
</html>