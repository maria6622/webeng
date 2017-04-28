<!DOCTYPE html>

<?php
session_start();
if(!isset($_SESSION['email'])){

	echo "<script>window.open('facebook.php','_self');</script>";
}
else{
	?>
<html>
<?php include('db.php');


 ?>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>



<div class="header">
	

<div class="contaner">
	

<div class="logo"></div>


<input type="text" placeholder="search" class="se">
<input type="submit" value="search" class="se1">



<?php 


if(isset($_SESSION['email'])){


$email=$_SESSION['email'];

$check="select * from data where Email='$email'";
$run=mysqli_query($con,$check);
while($fetch=mysqli_fetch_array($run)){

$email=$fetch['FirstName'];
$img=$fetch['Image'];

echo "



<h3 class='p1'>$email</h3>
<div class='p2'><img src='images/$img' width='37px' height='33px'></div>

";


?>

<a href="logout.php" class="logout">Logout</a>
</div><!..contaner>

</div><!..header>

<div class="timeline">
	
<div class="contaner">
	

<div class="profile"><?php echo "<img src='images/$img' width='139px' 
height='139px'

>";?></div>

</div>

</div>

<?php

}

}
?>
<?php
}

?>
</body>
</html>