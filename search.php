




<?php
require_once('component.php');
require_once ('db.php');

?>
<?php
session_start();



if (isset($_POST['add'])){

    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        // print_r($_SESSION['cart']);
    }
}

?>




<!DOCTYPE html>
  <html>
  
  <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <meta name="viewport" content="width-device-width, initial-scale=1">
  
      <link rel="stylesheet" href="details.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
          crossorigin="anonymous"></script>
  
  
  
  
  
  
  
  </head>
  <body>

  
<?php
require_once('header.php');
if(isset($_POST["query1"]) and !empty($_POST["query1"])){
$query= $_POST['query1'];

$sql = "SELECT * FROM books where bookname like '%$query%' or authorname like '%$query%'";
 $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
			  while( $record = mysqli_fetch_assoc($resultset) ) {
				  
				  
			 productelement($record['bookname'],$record['authorname'],$record['price'],$record['bookimage'], $record['id'] , $record['description']);}
 
}
 

	   
	   
	


 ?>
 <?php
   
require_once('footer.php');
   
   ?>

</body>
</html>
