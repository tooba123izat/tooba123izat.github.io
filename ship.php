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
    
        <link rel="stylesheet" href="shipping.css">
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
      <div class="about1 ">
       <h3>Shipping and Handling</h3>
       <p>
        Our aim is to deliver the parcel to our valued customer at our earliest. You are requested to be available on the provided contact number so our team can reach you for order verification. Orders will be processed after verification from the customer. For Cash on Delivery (COD) please pay the rider before opening the package.Sometimes there may be problems delivering to the address which you have provided. If this happens, kindly contact us at 0123-34567899 or email us at booksstudio@gmail.com.
       </p>
       <h3>Local orders</h3>
       <p>
        Standard Delivery Timelines:
        <ul>
            <li>
                Our Standard Delivery Timeline For Karachi Is 2 To 3 Business Days.
            </li>
            <li>
                Our Standard Delivery Timeline For Rest Of Pakistan Is 3 To 4 Business Days.
            </li>
        </ul>
       </p>
       <h3>Delivery charges</h3>
       <p>
        Free shipping Nationwide on all orders above PKR 1999. Charges of below PKR 1999 orders are calculated based on the destination and the weight of your shipment.
       </p>
      </div>
</div>
   <?php
   
require_once('footer.php');
   
   ?>


    </body>
</html>