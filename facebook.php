<html>
<?php  include('db.php');

session_start();

  ?>
<head>


<link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>
<div class="header">
<div class="contaner">
<div class="logo"></div>
<div class="nav">

<form method="POST" action="">
<input type="name" placeholder="" class="name" name="email"></input>
<input type="password" placeholder="" class="password" name="password"></input>
<input type="submit" value="login" class="log" name="submit"></input>
</form>
<div class="ab">

<a href="#" class="email">Email or Phone</a>

<a href="#" class="pass">Password</a>
</div><!...ab>


<input type="checkbox" class="box" id="w"></input>
<label for="w" class="ww">keep me loged in</label>


<a href="#" class="forgot">Forgot your password?</a>





</div><!...submit>






</div><!...nav>
</div><!...contaner>
</div><!....header>










<div class="contant1">

<div class="contaner">



<div class="submanu">


<div class="sign">Sign Up</div>
<div class="free">It's free and always will be.</div>

<form method="POST" action="" enctype="multipart/form-data">

<input type="text" placeholder="First name" class="first" name="firstname"></input>
<input type="text" placeholder="Last name" class="last" name="lastname"></input>
<input type="email" placeholder="Email or mobile number" class="mob" name="email"></input>

<input type="email" placeholder="Re-enter email or mobile number" class="num" name="re-email"></input>


<input type="password" placeholder="Password" class="ps" name="password"></input>

<input type="file" name="user_image">




<h3 class="bd">Birthday</h3>


<select class="select">

<option>Month</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>

</select>


<select class="day">

<option>Day</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>

</select>



<select class="day">

<option>Year</option>
<option value="1991">1</option>
<option value="1992">2</option>
<option value="1993">3</option>
<option value="1994">4</option>
<option value="1995">5</option>
<option value="1996">6</option>

</select>



<a href="#" class="pro">Why do I need to provide my birthday?</a>

<div class="rr">
<input type="radio" id="w" class="leb" name="dd">
<label for="w" class="leb">Male</label>



<input type="radio" id="e" class="fe" name="dd">

<label for="e" class="fe">Female</label>
</div>

<p class="click">By clicking Sign Up, you agree to our <span class="span">Terms</span> and that you have <br>read our <span class="span">Data Policy,</span> including our <span class="span">Cookie Use.</span></p>





<input type="submit" name="signup" class="sign1">

</form>



</div><!....submanu>


<div class="connect">

<h1 class="h1">Connect with friends and the
world around you on Facebook.</h1>

<div class="photo">

<span class="color">See photos and updates </span>
<span class="back">from friends in News Feed. </span>


</div><!...PHOTO>

<div class="share">

<span class="share1">Share what's new </span>

<span class="share2">in your life on your Timeline. </span>

</div><!..share>


<div class="white">


<span class="share1">Find more </span>
<span class="share2">of what you're looking for with Graph Search. </span>


</div><!...white>

</div><!...connect>


</div><!...contaner>

</div><!....contant>



<?php


if(isset($_POST['signup'])){


$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$reemail=$_POST['re-email'];
$password=$_POST['password'];
$tmp_img=$_FILES['user_image']['name'];

$tmp_img1=$_FILES['user_image']['tmp_name'];



move_uploaded_file($tmp_img1,"images/$tmp_img");

$check="insert into Data(FirstName,LastName,Email,ReEmail,Password
	,Image)values('$firstname','$lastname','$email','$reemail',
'$password','$tmp_img'
	)";

$run=mysqli_query($con,$check);


}

?>

<?php

if(isset($_POST['submit'])){

$email=$_POST['email'];
$password=$_POST['password'];

$var="select * from data where Email='$email' and Password='$password'";

$run=mysqli_query($con,$var);
$row=mysqli_num_rows($run);

if($row){

$_SESSION['email']=$email;



echo "<script>window.open('home.php','_self')</script>";

}
else{

	echo "<script>window.open('facebook.php','_self')</script>";
}


}



?>






</body>


</html>