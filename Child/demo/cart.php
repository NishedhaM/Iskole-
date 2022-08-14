<?php

session_start();

$status="";

if(!$_SESSION['id']){
    header('location:../login.php');

}

    include('db.php');
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color:red;'>
		Course is removed from your cart!</div>";
		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}

}
?>
<html>
<head>

<link rel='stylesheet' href='child_pay.css' type='text/css' media='all' />
</head>
<body>
<div style="width:700px; margin:50 auto;">

<h2>Shopping Cart</h2>

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php">
<img src="cart-icon.png" /> Cart
<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>

<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>
<table class="table">
<tbody>
<tr>
<td></td>
<td><b>ITEM NAME</b></td>
<td><b>QUANTITY</b></td>
<td><b>UNIT PRICE</b></td>
<td><b>ITEMS TOTAL</b></td>
</tr>
<?php
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<!-- <td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td> -->
<td><?php echo $product["g_name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onchange="this.form.submit()">
<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>

</select>
</form>
</td>
<td><?php echo "Rs. ".$product["price"]; ?></td>
<td><?php echo "Rs. ".$product["price"]*$product["quantity"]; ?></td>
</tr>
<?php
$total_price += ($product["price"]*$product["quantity"]);
}
?>
<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "Rs. ".$total_price; ?></strong>
</td>
</tr>
</tbody>
</table>
  <?php
}else{
	echo "<h3>Your cart is empty!</h3>";
	}
?>
</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

<a href="payment.php"> <button class="btn2" height="80px" width="60px"> Confirm Payment</button></a>
<a href="../child_payment.php"> <button class="btn4" height="80px" width="60px"> Cancel</button></a>
           
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
    <br><br>  <br><br>
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
