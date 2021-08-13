<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width-device-width, initial-scale=1">

    <link rel="stylesheet" href="header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>







</head>



<body>



<div>
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                <a class="navbar-brand navbar-brand1" data-text="booksStudio" href="#">booksStudio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item nav-item1">
                            <a class="nav-link nav-link1 active" aria-current="page" href="index.php"><i class="fa fa-home"></i>
                                Home

                            </a>
                        </li>
                        <li class="nav-item nav-item1">
                            <a class="nav-link nav-link1" href="login1.php">sign in</a>
                        </li>
                        <li class="nav-item nav-item1">
                            <a class="nav-link nav-link1" href="logout.php">Logout</a>
                        </li>
                        <li class="nav-item nav-item1">
                            <a class="nav-link nav-link1" href="cart.php"> <i class="fa fa-shopping-cart"></i> Cart
                                 
                                <?php

                                if (isset($_SESSION['cart'])){
                                    $count = count($_SESSION['cart']);
                                    echo "<span id=\"cart_count\" >$count</span>";
                                }else{
                                    echo "<span id=\"cart_count\" >0</span>";
                                }
        
                                ?>   
                            
                            </a>
                        </li>

                    </ul>
                    <form action="search.php" method="post" class="d-flex">
                        <input class="form-control me-2 mysearch" type="text" placeholder="Search by book name or author" name="query1" aria-label="Search">
    <button class="btn btn-outline-light"  value="" type="submit" name="submit"> <i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </nav>

    </div>
	
	</body>
	</html>

