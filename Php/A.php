<?php
 $servername="localhost";
$username="root";
$password="";
$dbname="lyon";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['submit'])){

$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['email'];
$gender=$_POST['gender'];

    	
    			$sql= "INSERT INTO form(firstname,lastname,email,gender) VALUES('$fname','$lname','$email','$gender');";
                  if(mysqli_query($conn,$sql)){
      echo "in";
      header("Location: A.php");
      exit();
    }else{
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      header("Location: A.php");
      exit();
    
}}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
		form{
    width: 45%;
    margin: 50px auto;
    text-align: left;
    padding: 20px;
    border:1px solid #bbbbbb;
}
.input-group{
    margin: 10px 0px 10px 0px;
}
.input-group input{
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 14px;
    border-radius: 5px;
    border:1px solid gray;
}

.btn{
    padding: 10px;
    font-size: 20px;
    color: white;
    background:lightblue;
    border:none;
    margin: 2px;

}
.btn:hover{
    background:blue;
}
.h{
  text-align: center;
}

	</style>
</head>
<body>
  <h1><center>REGISTRATION</center></h1>
<form action="A.php" method="post">
First name:<br>
<input type="text" name="firstname">
<br>
Last name:<br>
<input type="text" name="lastname">
<br>
Email:<br>
<input type="text" name="email">
<br>
<input type="radio" name="gender" value="male"> Male <br>
<input type="radio" name="gender" value="female"> Female <br>
<input type="submit" name="submit" value="submit">

</form>
</body>
</html>
