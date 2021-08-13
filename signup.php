<!DOCTYPE html>


<?php 

session_start();
include("db.php");
	


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username=$_POST['username'];
	
        $password=$_POST['password'];
        $email=$_POST['email'];
		
        $mobilenum=$_POST['mobilenum'];
		
        $address=$_POST['address'];
		
		// if(!empty($username) && !empty($password) && !is_numeric($username))
		// {

			//save to database
			
			$query = "insert into registered(username,password,email,mobilenum,address) values ('$username','$password','$email','$mobilenum','$address')";

			mysqli_query($conn, $query);

			header("Location: cart.php");
			die;
		// }else
		// {
			// echo "Please enter some valid information!";
		// }
	}
?>







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
		 <h1>SIGN UP</h1> 
         <form action="signup.php" method="POST" onsubmit=" return validation()">
        <div> <label class="labels">USERNAME</label>
         <input class="inputname"  type="text" placeholder="Enter your username" name="username"  id="user" >
		 <span class="text-danger font-weight-bold" id="username"></span>
        </div>
       <div>  <label class="labels">PASSWORD</label> 


         <input class="inputname"   type="password" placeholder="Enter your password" name="password" id="password">
		 <span class="text-danger font-weight-bold"  id="userpassword"></span>
         </div>
		 <div>  <label class="labels"> Confirm PASSWORD</label> 


         <input class="inputname"   type="password" placeholder="Enter your password" name="password" id="confirm">
		 <span class="text-danger font-weight-bold"  id="cpassword"></span>
         </div>
         <div> <label class="labels">EMAIL ADDRESS</label>
            <input class="inputname"  type="email" placeholder="Enter your email" name="email" id="email">
			<span class="text-danger font-weight-bold"  id="uemail"></span>
           </div>
           <div> <label class="labels">MOBILE NUMBER</label>
            <input class="inputname"  type="number" placeholder="Enter your number" name="mobilenum" id="num">
			<span class="text-danger font-weight-bold" id="unum"></span>
           </div>
           <div> <label class="labels">HOME ADDRESS</label>
            <input class="inputname"  type="text" placeholder="Enter your address" name="address" maxlength="30" id="address">
			<span class="text-danger font-weight-bold"  id="uaddress"></span>
           </div>
         <div> 
		 <a href="login1.php" class="signlink"> Now Login!</a>
		 <input class="rbtn" input type="submit" name="login" value="SIGN UP"></div>
		 
         </form>

        
     </div>
	 </div>
	 </div>
	  <script>
	 function validation(){
		var user=document.getElementById('user').value;
		var password=document.getElementById('password').value;
		var confirm=document.getElementById('confirm').value;
		var email=document.getElementById('email').value;
		var num=document.getElementById('num').value;
		var address=document.getElementById('address').value;
		
		if(user==""){
		document.getElementById('username').innerHTML=" ** please fill username ";
		return false;
		
		}
		
		if(password==""){
		document.getElementById('userpassword').innerHTML=" ** please fill password";
		return false;
		
		}
		if(confirm==""){
		document.getElementById('cpassword').innerHTML=" ** please rewrite the password";
		return false;
		
		}
		if(email==""){
		document.getElementById('uemail').innerHTML=" ** please fill email";
		return false;
		
		}
		if(num==""){
		document.getElementById('unum').innerHTML=" ** please fill number";
		return false;
		} 
		
		if(num.length !=11){
		document.getElementById('unum').innerHTML=" ** please fill right number";
		return false;
		
		}
		if(address==""){
		document.getElementById('uaddress').innerHTML=" ** please fill your address";
		return false;
		
		}
		if(password != confirm){
		document.getElementById('cpassword').innerHTML=" ** password does not match";
		return false;
		
		}
		if((user.length <=2  ) || (user.length >20 )){
		document.getElementById('username').innerHTML=" *enter between 2 to 20 character";
		return false;
		
		}
		if(!isNaN(user)){
		document.getElementById('username').innerHTML=" *enter only charaters";
		return false;
		
		}
		
		
	 }
	 </script>
	 

<?php
   
require_once('footer.php');
   
   ?>




    
	 </body>
	 </html>
	 