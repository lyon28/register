<?php
 $servername="localhost";
$username="root";
$password=" ";
$dbname="lyon";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['submit'])){

$fname=mysql_real_escape_string($_POST['fname']);
$lname=mysql_real_escape_string($_POST['lname']);
$email=mysql_real_escape_string($_POST['gender']);
$gender=mysql_real_escape_string($_POST['txtarea']);

    	
    			$sql= "INSERT INTO form(fname,lname,email,gender) VALUES('$fname','$lname','$email','$gender');";
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
.input-group textarea{
    height: 200px;
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
    background:lightgreen;
    border:none;
    margin: 2px;

}
.btn:hover{
    background:green;
}
.h{
  text-align: center;
}

	</style>
</head>
<body>

<form action="j.php" method="post">
	<h2 class="h">Registration form</h2>
	<div class="input-group">
Fname: <input type="text" name="fname" placeholder="first name .....">	
</div>
<div class="input-group">
Lname: <input type="text" name="lname" placeholder="last name .....">
</div>

Gender: Male<input type="radio" name="gender" value="male"> Female<input type="radio" name="gender" value="female">
<div class="input-group">
Your Story : <textarea name="txtarea" placeholder="write your Story"></textarea>
</div>
<button type="submit" name="submit" class="btn"><span> Submit</button>


</form>
</body>
</html>