<!doctype html>
<?php
setcookie("Auction_item","Luxury car",time()+2*24*60*60);
?>
<html>
<body>
<?php
 if(isset($_COOKIE["Auction_item"]))
 {
	echo "Auction item is a ".$_COOKIE["Auction_item"];
 }
 else{
	echo "No items for auction";
 }
?>
<p> 
	<strong>Note: </strong>
	You might have to reload the page to see the value of the cookie.
</p>
</body>
</html>	