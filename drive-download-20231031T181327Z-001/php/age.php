<?php
if(isset($_POST['Submit'])){
$age = $_POST['age'];
if ($age >= 18){

	echo "<br>You are Eligible to vote";
}
else
{
	echo "<br>You are not Eligible to vote";
}
}

?>