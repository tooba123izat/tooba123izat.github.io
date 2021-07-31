

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
        print_r($_SESSION['cart']);
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
    <body>
      <?php 
	  
	  require_once ('header.php');
	  ?>
	  <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">

                        <li class="nav-item dropdown">
                            <a class="nav-link nav-link2  dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Fiction
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">fiction & literature</a></li>
                                <li><a class="dropdown-item" href="#">classic</a></li>
                                <li><a class="dropdown-item" href="#">young adults</a></li>
                                <li><a class="dropdown-item" href="#">comics & graphic novels</a></li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link nav-link2 dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Non-fiction
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">innovation & techonology</a></li>
                                <li><a class="dropdown-item" href="#">Biographies</a></li>
                                <li><a class="dropdown-item" href="#">Business & Management</a></li>
                                <li><a class="dropdown-item" href="#">Religion & Spirituality</a></li>
                                <li><a class="dropdown-item" href="#">Cooking,Food & Drink</a></li>
                                <li><a class="dropdown-item" href="#">Sports & Entertainment</a></li>
                                <li><a class="dropdown-item" href="#">self-care</a></li>
                                <li><a class="dropdown-item" href="#">comedy</a></li>
                            </ul>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link nav-link2 dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Childern Books
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">0-3 years</a></li>
                                <li><a class="dropdown-item" href="#">3-6 years(toddlers)</a></li>
                                <li><a class="dropdown-item" href="#">6-9 years(pre-school)</a></li>
                                <li><a class="dropdown-item" href="#">9-12 years</a></li>

                            </ul>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link nav-link2 dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Urdu Books
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">urdu Adab</a></li>
                                <li><a class="dropdown-item" href="#">regional poetry</a></li>
                                <li><a class="dropdown-item" href="#">short stories</a></li>
                                <li><a class="dropdown-item" href="#">biographies</a></li>
                                <li><a class="dropdown-item" href="#">literature</a></li>
                                <li><a class="dropdown-item" href="#">afsane</a></li>
                                <li><a class="dropdown-item" href="#">current affairs</a></li>
                                <li><a class="dropdown-item" href="#">islamic studies</a></li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link nav-link2 " href="#">Digital marketing</a>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>

    </div>



    <div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img height=300px src="pic9.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img height=300px src="pic2.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img height=300px src="pic8.jpeg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>







    <div class="div5">
        <div>
            <p>FREE SHIPPING </p><i class="fa fa-truck" aria-hidden="true"></i>
        </div>
        <div>
            <p>FAST DELIVERY</p><i class="fa fa-fighter-jet" aria-hidden="true"></i>

        </div>
        <div>
            <p>ORIGNAL BOOKS</p><i class="fa fa-book" aria-hidden="true"></i>

        </div>
        <div>
            <P>20+ CATEGORIES</P><i class="fa fa-check" aria-hidden="true"></i>

        </div>
    </div>
      <div class="  container" >
	
        <div class=" maincard row text-center py-5">
	  
	 <?php
              $sql = "SELECT bookname,authorname,price,bookimage,id FROM books";
              $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
			  while( $record = mysqli_fetch_assoc($resultset) ) {
			  component($record['bookname'],$record['authorname'],$record['price'],$record['bookimage'], $record['id'] );}
			  
	
         


			?>
                
            
			</div>
			
			
      </div>

  <div class="div6">
        <div class="childiv6">
            <p>CAN'T FIND WHAT YOU'RE LOOKING FOR?</p>
        </div>
        <div id="div62"><button class="childdiv62"><a class="childdiv62" href="requested.php">REQUEST A BOOK </a></button></div>
        <div class="childiv6">
            <p>Subscribe and stay updated on the<br /> latest books, promotions and events </p>

       
		
		
		 </div>
		
		
        <div>
            <form class="div63" action="" method="post">
                <input id="subscribe" type="text" placeholder="write your email" name="email" />
                <input id="subscribebtn" type="submit" name="subscribe" value="subscribe" />

            </form>
			
			
			<?php
		
		include("db.php");
	


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted

        $email=$_POST['email'];
        

		if(!empty($email))
		{

			//save to database
			
			$query = "insert into subscribe(email) values ('$email')";

			mysqli_query($conn, $query);

			
			
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>
        </div>

    </div>



   <?php
   
require_once('footer.php');
   
   ?>



    </body>
</html>