<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Using string functions </title>
	</head>
	<body>
		<h1>Web Development Form – Lab 3 - task 2</h1>
		<?php 
		$str = $_POST['str'];
		 if (strcmp($str,strrev($str)) ==0){
			 echo"<p>this is a perfect palindrome</p>";
		 }
		 else
		 {
			 echo"<p>this is not a perfect palindrome</p>";
		 }
		?>
	</body>
</html>