<?php 
// var_dump($_POST);
// if (isset($_POST["name"]) && !empty($_POST["name"])) {
//    echo  $_POST["name"];
//   } else {
//    echo"please enter your name";
//     }
  
   //  if (isset($_POST["email"]) && !empty($_POST["email"])) {
   //      echo  $_POST["email"];
   //     } else {
   //      echo"please enter your email";
   //       }
         ?>
         <?php

$host="localhost";
$user="root";
$password="";
$db="demo";
$conn= mysqli_connect( $host, $user, $password, $db);
if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging error #: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
      exit;
     
   } 
   echo "Success: A proper connection to MySQL was made! The <span style='color:red'> $db</span>database is great.<br>" . PHP_EOL;
   echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;
   mysqli_close($conn);
?>
<?php
$host="localhost";
$user="root";
$password="";
$db="demo";
$conn= mysqli_connect( $host, $user, $password, $db);
if(! $conn ) {
   die('Could not connect: ' . mysqli_error($conn));
}

echo 'Connected successfully<br>';

$query = 'SELECT id, name, email FROM userform';
$result = mysqli_query($conn,$query );
while($row = mysqli_fetch_assoc($result)) {
   echo "id:" .$row['id'] ." <br/> ";
   echo "NAME:" .$row['name'] ." <br/> ";
   echo" email:" .$row['email'] ." <br/> "; }
   mysqli_free_result($result);
       mysqli_close($conn);?>





    <?php  $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $db ='demo';
   $conn = mysqli_connect($host, $user, $password,$db);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error($conn));
   }
   
   echo 'Connected successfully<br>';
   
 

   //create table
   $sql = "INSERT INTO userform(id,name, email) 
   VALUES ( 11, 'omar','omar@gmail.com' ,m
     )";

if(mysqli_query($conn,$query)) {
   echo 'saved ';}
   else{
      echo$query;
    echo mysqli_error($conn);}
    echo mysqli_close($conn);
?>

     
 


<!DOCTYPE html>
<html>
<head>
	<title> Login Form </title>
	
</head>
<body>
	<div class="container">

      <form method="post" action="process.php">
  <label for="name">name:</label>
  <input type="text" id="name" name="name"><br>
  <label for="email">email:</label>
  <input type="text" id="email" name="email"><br>
  <label for="gender">gender</label>
  <input type="radio" name="gender"  value="male"/>male
  <input type="radio" name="gender"  value="female"/>female
  <br>
  <input type="checkbox" id="receive emails" name="receive emails" value="yes">
  <label for="receive emails"> receive emails</label><br>

  <input type="submit" value="Submit">


		</form>
	</div>
</body>
</html>
<style>
body{
	margin: 0 auto;

	background-size: 100% 720px;
}

.container{
	width: 500px;
	height: 450px;
	text-align: center;
	margin: 0 auto;

	margin-top: 160px;
}



input[type="text"]{
	margin-top: 30px;
	height: 45px;
	width: 300px;
	font-size: 18px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 40px;
}






</style>
