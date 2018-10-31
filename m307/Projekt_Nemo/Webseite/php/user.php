<?php
if(isset($_POST['username'])){
	$string = " narcisa admin dbuser Barbara Claudio Peter Fritz Hans Oliver Kurt";
	$un = htmlspecialchars($_POST['username']);
	if(stripos($string,$un)==true) echo trim("false");
		else echo trim("true");
}
else die
?>
