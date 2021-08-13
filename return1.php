<?php
session_start();

require_once('component.php');
require_once ('db.php');


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
    
        <link rel="stylesheet" href="returns.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
            crossorigin="anonymous"></script>   
    </head>
    <body class="bodyy">
     <?php 
	  
	  require_once ('header.php');
	  ?>
	  <div class="main">
      <div class="about1">
       <h2>Terms and conditions</h2>
       <p>
        <ol>
            <li>
                Please do not accept if the parcel is unsealed or damaged.
            </li>
            <li>
                Customers are not allowed to open the parcel before handing over payment unless it is prepaid.
            </li>
            <li>
                In case of any defects or complaints regarding the parcel, please contact customer service within 24 hours.
            </li>
            <li>
                Please note that after 24 hours of delivery no complaint will be entertained.


            </li>
            <li>
                The product must be unused with the price tag attached.Once our team has reviewed and is satisfied,exchange or refund will be initiated.
            </li>
        </ol>
       </p>
      </div>
<div>
  
 <?php
   
require_once('footer.php');
   
   ?>

    </body>
</html>