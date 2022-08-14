<?php

session_start();


if(!$_SESSION['id']){
    header('location:../login.php');

}

    include('db.php');

$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM `grade` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['g_name'];
$gid=$row['gid'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$cartArray = array(
	$code=>array(
	'g_name'=>$name,
	'code'=>$code,
	'gid'=>$gid,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Course is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Course is already added to your cart!</div>";
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Course is added to your cart!</div>";
	}

	}
}
?>
<html>
<head>
<title></title>
<link rel='stylesheet' href='child_pay.css' type='text/css' media='all' />
</head>
<body>
<div style="width:700px; margin:50 auto;">
<!-- <div class="logo">
                <img src="images/logo.jpg" align="right" width="60px" height="60px">
            </div> -->
<h1>Subscribe</h1>

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php"><img src="cart-icon.png" /> Cart<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}

$result = mysqli_query($con,"SELECT * FROM `grade`");
while($row = mysqli_fetch_assoc($result)){
		echo "<div class='product_wrapper'>
			  <form method='post' action=''>
			  <input type='hidden' name='code' value=".$row['code']." />
			  <div class='image'><img src='".$row['image']."' height='100px' width='100px' /></div>
			  <div class='name'>".$row['g_name']."</div>
		   	  <div class='price'>Rs. ".$row['price']."</div>
			  <button type='submit' class='buy'>Subscribe</button>
			  </form>
		   	  </div>";
        }
mysqli_close($con);
?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

<br /><br />

</div>
<div class="subnav2">
<p class="final_bar">
About 
<br>
<p class="sub-con">
  
  Teachers <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
  <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>  <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
  Students
 

</p>
</p>
<p class="final_bar1">
Contact Us
<br>
<p class="sub-con1">
  
  011-2 445 445  <br> 
  
 

</p>
</p>


  <div class="footer-main">
   
    <div class="footer">
		<br>	<br>	<br>
      <div class="logo"><img src="logo.jpg" height="100px" width="100px">
        <!-- <img src="images/name.png" class="name"> -->
      </div>
      <br><br>
    <footer>&copy; 2021    ALL RIGHTS RESERVED BY 361°</footer>
    </div> 
    </div> 
  </a>
 

</div>

</body>
</html>
