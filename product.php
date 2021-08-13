




<?php
require_once('component.php');
require_once ('db.php');
?>



<!DOCTYPE html>
  <html>
  
  <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <meta name="viewport" content="width-device-width, initial-scale=1">
  
      <link rel="stylesheet" href="product.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
          crossorigin="anonymous"></script>
  
  
  
  
  
  
  
  </head>
  <body>
<div>
 <?php
              $sql = "SELECT bookname,authorname,price,bookimage,id,description FROM books";
              $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
			  while( $record = mysqli_fetch_assoc($resultset) ) {
			  productelement($record['bookname'],$record['authorname'],$record['price'],$record['bookimage'], $record['id'] , $record['description']);}
			  
			?>
                
</div>
</body>
</html>