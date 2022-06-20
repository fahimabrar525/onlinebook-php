<!DOCTYPE html>
<html lang="en">
<head>


<?php
session_start();
$conn = mysqli_connect("localhost","root","","reg");


if(isset($_POST['submit']))
{
	$nam=$_POST['nam'];
	$em=$_POST['em'];
	$ph=$_POST['ph'];
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$cpass=$_POST['cpass'];
	
	 
	 $query = "INSERT INTO user(Name,Email,Phone,Password,Username)VALUES('$nam','$em','$ph','$pass','$uname')";
     $run = mysqli_query($conn,$query);	 
    
	if($run)
	{
		echo"data insert successfully";
		header('Location: index.php');
	}
	else
	{
		echo"error".mysqli_error($conn);
	}
	
}
?>












<meta charset="UTF-8">

    
   
    <title>Online Book reading</title>
<link rel="stylesheet" type="text/css" href="header.css">
 <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>


</head>

<body>
<header>
<h1> Online<img src ="bok.jpg" height ='100'>reading</h1>
</header> 


<div class='diva'></div>
<ul>

<li><a  href='index.php'>Forums</a></li>
<li><a href='member'>Membership</a></li>
<li><a href='help'>Help</a></li>
<li><a href='login.php'>Login</a></li>
<li><a href='reg.php'>SignUp</a></li>
<li><a href='about'>AboutUs</a></li>
</ul>
<div class='divs'></div><br>

<nav>
<form action= "" method="POST">
<table>
<tr>
<td>
<label for ="nam">Name:</label>
</td>
<tr>
<td>
<input type ="text" name="nam" placeholder="name" required maxlength ="15">
</td>
</tr>
<tr>
<td>
<label for ="em">Email:</label>
</td>
</tr>
<td>
<input type ="text" name="em" placeholder="email" required maxlength ="30">
</td>
</tr>
<tr>
<td>
<label for ="Ph">Phone Number:</label>
</td>
</tr>
<tr>
<td>
<input type ="text" name="ph" maxlength ="15" placeholder="+8801###..." required maxlength ="15">
</td>
</tr>
<tr>
<td>
<label for ="nam">UserName:</label>
</td>
<tr>
<td>
<input type ="text" name="uname" placeholder="username" required maxlength ="15">
</td>
</tr>
<tr>
<td>
<label for ="pass">Password:</label>
</td>
</tr>
<td>
<input type ="password" name="pass" maxlength ="32" placeholder="enter_password" required maxlength="32">
</td>
</tr>
<tr>
<td>
<label for ="cpass">Confirm Password:</label>
</td>
</tr>
<td>
<input type ="password" name="cpass" maxlength ="32" placeholder="re-enter_password" required maxlength="32">
</td>
</tr>

<tr>
<td style= "text-algin:center"><br>
<input type = "submit" name = "submit"  value = "submit">
</table>
</form>  
</nav>
</body>
</html>


