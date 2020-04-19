<?php 
include('config.php');

?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="index.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
rel="stylesheet">
</head>
<title>

</title>
</head>



<body>
	<div class="pop">already exists</div>
<div class="navheader">
<h3 class="head">Currency <span >converter<i style="font-size: 35px;" class="ani material-icons">swap_horiz</i></span></h3>
<section class="rightnav">
<li class="nav-links">
<a class=" loginc links">Login
</a></li>
<li class="nav-links">
<a   class=" signup links">Signup
</a></li>
</section>
</div>
<div class="main  col-sm-8 container">
<div class="data">
<form class="convert" >
<section class="a"><label class="conversion">Amount</label>
<input type="text" id="no"></section>
<section class="b">	<label   class="conversion">from</label>
<button  type="button" id="usd"class="  btn-lg bg-dark">USD</button>	</section>
<section class="c">
<label  class="conversion">to</label>
<button  type="button" id="inr" class="btn-lg btn-dark">INR</button></section><br>
</form>
<br>
<i  id="swap" class="material-icons">swap_horizontal_circle</i>
</div>

<br><br>
<h3 class="container current"></h3>
</div>
<div class=" container outerParent">
<div class="login">
<form  action="" method="POST">
<label class="labels">UserNAme</label>
<input   required  id="username2" class="userinput" type="text"    name="username">

<label class="labels">password</label>
<input  required id="upass2" class="userinput"   type="password" name="userpassword2">
<label class="showpassword2"></label>
<br>	
<br><br><br>
<button   class="submit btn-lg mt-3   btn-success" 
name="submit1">Log In</button>
<button type="button" class=" cancel2  btn-dark btn-lg">Cancel</button>
</form>
</div></div>


<!-- register modal -->

<div class="outer">
<div class="register ">
<form action="" method="POST">
<label class="labels">UserNAme</label>	
<input  required  class="userinput"  id="username"  type="text"    name="username"  type="text">
<span id="unamealert" class="alert">Please enter a username</span>
<label class="labels">password</label>
<input   autocomplete="off" required id="userpass" class="userinput"    type="password"  name="userpassword">
<span id="upassalert" class="alert">minimum 8 characters are required</span>
<label class="showpassword"></label>

<button id="register"  type="submit" class="submit   btn-lg btn-success" name="submit2">Sign In</button>
<button type="button" class=" cancel  btn-dark btn-lg">Cancel</button>

</form>	
</div></div>




<?php
//login credential  validation


$pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
if(empty($pageWasRefreshed) &&  isset($_POST['submit1']))
{
loggedin($conn);
}



function loggedin($conn)
{
$newUserName=$_POST['username'];
$newUserPassword=$_POST['userpassword2'];

$query1="SELECT UserName ,userPassword FROM userdatabase  WHERE UserName='$newUserName' and userPassword ='$newUserPassword' ";
$result1=mysqli_query($conn,$query1);
$matchNo =mysqli_num_rows($result1);
echo $matchNo;	
if($matchNo >=1)
{
echo"<script>alert('loggedin')</script>";
}
else{
echo"<script>alert('user not exist')
$('.outerParent').addClass('retry')

</script>";


}


}



?>


<!-- register check-->

<?php
if( empty($pageWasRefreshed) &&  isset($_POST['submit2']))
{	 vali($conn);
}
function vali($conn)
{
$newUserName=$_POST['username'];
$newUserPassword=$_POST['userpassword'];

$query1="SELECT UserName FROM userdatabase  WHERE UserName='$newUserName'";
$result1=mysqli_query($conn,$query1);
$matchNo =mysqli_num_rows($result1);
echo $matchNo;
if($matchNo >=1)
{
echo"<script>alert('username already registered')
$('.outer').addClass('retry')</script>";
}
else{

$query2="INSERT INTO userdatabase VALUES ('','$newUserName','$newUserPassword')";
$result =mysqli_query($conn,$query2);
echo"<script>alert('registered')</script>";
}


}
?>


<script type="text/javascript" src="index.js"></script>

</body>
</html>