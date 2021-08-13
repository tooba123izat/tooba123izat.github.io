<?php 

session_start();

	include("db.php");
	


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];
		

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//read from database
			$query = "select * from registerform where username = '$username' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
						
                        
						 $_SESSION['loggedin'] = true;
						$_SESSION['username']=$username;
						$_SESSION['password']=$password;
						$_SESSION['email']=$user_data['email'];
						$_SESSION['address']=$user_data['address'];
						$_SESSION['mnum']=$user_data['mobilenum'];
						
						
						
						
						header("Location:calligraphy.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width-device-width, initial-scale=1">
    
        <link rel="stylesheet" href="login1.css">
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
            
          <h1>LOGIN</h1>      
         <form action="" method="POST">
        <div> <label class="labels">USERNAME</label>
         <input class="inputname"  type="text" placeholder="Enter your username" name="username" maxlength="30">
        </div>
       <div>  <label class="labels">PASSWORD</label> 


         <input class="inputname"   type="password" placeholder="Enter your password" name="password" maxlength="30">
         </div>
         <div> 
		 <a href="signup.php" class="signlink"> sign up if not a user!</a>
		 <input class="rbtn" input type="submit" name="login" value="LOGIN"></div>
         </form>

        </div>
     </div>
</div>
<?php
   
require_once('footer.php');
   
   ?>



    </body>
</html>