
<?php 


	include("db.php");
	


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$title=$_POST['title'];
        $author=$_POST['author'];
        $ISBN=$_POST['ISBN'];
        $name=$_POST['name'];
        $contact=$_POST['contact'];
		$email=$_POST['email'];

		
		

			//save to database
			
			$query = "insert into requested(title,author,ISBN,name,contact,email) values ('$title','$author','$ISBN','$name','$contact','$email')";

			mysqli_query($conn, $query);

			header("Location: index.php");
			die;
		
	}
?>







<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width-device-width, initial-scale=1">
    
        <link rel="stylesheet" href="requested.css">
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
            <h1>REQUEST A BOOK</h1>  
         <form action="requested.php" method="POST">
        <div> <label class="labels">Title</label>
         <input class="inputname"  type="text"  name="title" required>
        </div>
       <div>  <label class="labels">Author</label> 


         <input class="inputname"   type="text"  name="author" required>
         </div>
         <div> <label class="labels">ISBN</label>
            <input class="inputname"  type="text"  name="ISBN" >
           </div>
           <div> <label class="labels">Name</label>
            <input class="inputname"  type="text"  name="name" required>
           </div>

           <div> <label class="labels">Contact</label>
            <input class="inputname"  type="number"  name="contact" >
           </div>
           <div> <label class="labels">E-mail</label>
            <input class="inputname"  type="email"  name="email" >
           </div>
         <div> <input class="rbtn"  type="submit" name="request" value="Request"></div>
         </form>

        </div>
     </div>
</div>


<?php 
	  
	  require_once ('footer.php');
	  ?>

    </body>
</html>