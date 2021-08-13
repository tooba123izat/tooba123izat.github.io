<?php 

session_start();

include("db.php");
	
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){	
$query="select * from registered where username = '{$_SESSION['username']}' limit 1";
              $resultset = mysqli_query($conn, $query) or die("database error:". mysqli_error($conn));			
			  while( $record = mysqli_fetch_assoc($resultset) ) {
			
			  
			 $name=$record['username'];
			}
}
			
				
	
?>


	
	
	

	
	
	
	
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width-device-width, initial-scale=1">
    
        <link rel="stylesheet" href="bill.css">
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
	
     <div class="maindiv">

       


        <div class="main">  
        <div class="formdiv">
		
          <h1>APKA APNA BILL</h1>
		  
		  
          
          <div> <h2>DELIVERY INFORMATION</h2> 
        <div> 
            <p>NAME:<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			echo $name;} ?> </p>
							   
							   
							   
            <p>E-MAIL:<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			echo $_SESSION['email'] ;} ?></p>
            <p>MOBILE NUMBER:<?php 
			
			if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			echo $_SESSION['mnum'];} ?> </p>
            <p>ADDRESS:<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			echo $_SESSION['address'];} ?></p>
        </div>
        <hr />
        <div> 
            <p>TOTAL PRODUCTS:<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			echo $_SESSION['count'];} ?> </p>
            <p>TOTAL PRICE:<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){echo $_SESSION['total']; }?></p>
            <p>DELIVERY CHARGES:200 </p>
            <p>TOTAL BILL:<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){echo $_SESSION['total'] + 200;} ?></p>
            <p>PAYMENT: PAYMENT ON DELIVERY OF ORDER</p>
        </div>
        <h3>ORDER WILL BE DILIVERED IN 5-6 WORKING DAYS</h3>
        </div>

         
        </div>
     </div>
</div>

<?php
   
require_once('footer.php');
   
   ?>

    </body>
</html>
	
	</body>
	
	</html>