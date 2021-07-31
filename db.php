<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="mydb3";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
	//echo"connection successfull";
}




// $conn->close();

    
//  Create database
// $sql = "CREATE DATABASE myDB3";
// if ($conn->query($sql) === TRUE) {
 // echo "Database created successfully";
// } else {
  // echo "Error creating database: " . $conn->error;
// }
 // $sql = "CREATE TABLE registered (
  // id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   // username VARCHAR(50) NOT NULL,
 // password VARCHAR(50) NOT NULL,
  // email VARCHAR(50),
  // mobilenum  bigint(10) ,
  // address VARCHAR(100)
  // )";
   // if ($conn->query($sql) === TRUE) {
    // echo "Table MyGuests created successfully";
// } else {
     // echo "Error creating table: " . $conn->error;
  // }


 // $sql = "CREATE TABLE requested (
   // id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   // title  VARCHAR(50) NOT NULL,
  // author VARCHAR(50) NOT NULL,
  // ISBN   VARCHAR(50) NOT NULL,
  // name   VARCHAR(50) NOT NULL,
  // contact bigint(10) NOT NULL,
  // email VARCHAR(50) NOT NULL
  
  
   // )";
   // if ($conn->query($sql) === TRUE) {
     // echo "Table MyGuests created successfully";
// } else {
     // echo "Error creating table: " . $conn->error;
  // }
  
  
 // $sql = "CREATE TABLE subscribe (
  
 
  // email VARCHAR(50) NOT NULL
  
  
    // )";
    // if ($conn->query($sql) === TRUE) {
      // echo "Table MyGuests created successfully";
 // } else {
      // echo "Error creating table: " . $conn->error;
   // } 
  
  

// $sql = "INSERT INTO books (bookname, authorname, price, bookimage)
// VALUES ('Game of Thrones', 'r.r martin', '1000','pic1.jpg')";
// if ($conn->query($sql) === TRUE) {
  // echo "New record created successfully";
// } else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
// }

//get data from database




?>