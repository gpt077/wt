<!doctype html>
<?php
setcookie("Auction_item","Luxury car",time()+2*24*60*60);
?>
<html>
<body>
<?php
 setcookie("Auction_item","",time()-60);
?>
<?php
 echo "cookie is deleted"
?>
<p> 
	<strong>Note: </strong>
	You might have to reload the page to see the value of the cookie.
</p>
</body>
</html>	