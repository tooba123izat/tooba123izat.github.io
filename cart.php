
<?php

session_start();

require_once ("db.php");
require_once ("component.php");


if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Product has been Removed...!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}


?>












<!DOCTYPE html>
<html>
  
	
	<head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width-device-width, initial-scale=1">
    
        <link rel="stylesheet" href="page1.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
            crossorigin="anonymous"></script>   
    </head>
    <body class="bg-light">

<?php
    require_once ('header.php');
?>

<div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">
                <h6>My Cart</h6>
                <hr>

                <?php
                 $total=0;
               $_SESSION['total']=$total;
			 
                    if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'product_id');

                        $sql = "SELECT bookname,authorname,price,bookimage,id FROM books";
              $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
			  while( $record = mysqli_fetch_assoc($resultset) ){
                            foreach ($product_id as $id){
                                if ($record['id'] == $id){
                                    cartElement($record['bookimage'], $record['bookname'], $record['price'],$record['authorname'], $record['id']);
                                   $_SESSION['total']  = $_SESSION['total'] + (int)$record['price'];
								if(isset($_POST['add'])){	
								 
								$_SESSION['total'] = $_SESSION['total'] + (int)$record['price'];}
							
								
							
                            }
							}
			  }
			  
                        
                    
					}
					
					
					
					else{
                        echo "<h5>Cart is Empty</h5>";
                    }	
		
					
					
					
					
					
				
							
							
								
							
					
			 ?>

            </div>
        </div>
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

            <div class="pt-4">
                <h6>PRICE DETAILS</h6>
                <hr>
                <div class="row price-details">
                    <div class="col-md-6">
                        <?php
                            if (isset($_SESSION['cart'])){
                                $count  = count($_SESSION['cart']);
								 $_SESSION['count']=$count;
                                echo "<h6>Price ($count items)</h6>";
                            }else{
                                echo "<h6>Price (0 items)</h6>";
                            }
                        ?>
                        <h6>Delivery Charges</h6>
                        <hr>
                        <h6>Amount Payable</h6>
                    </div>
                    <div class="col-md-6">
                        <h6>$<?php echo $_SESSION['total']; ?></h6>
                        <h6 class="text-success">200</h6>
                        <hr>
                        <h6>$<?php
                            echo $_SESSION['total']=$_SESSION['total']+200;
                            ?></h6>
                    </div>
                </div>
            </div>

        </div>
    </div>
	
	<div>
	<a href="bill.php" type="submit" class="btn  rebtn btn-danger mx-2 mt-5" name="checkout">checkout</a>
	</div>
</div>
<?php

require_once('footer.php');
?>
</body>
</html>