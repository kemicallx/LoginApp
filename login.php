<?php 
session_start();
	include("connection.php");
	include("functions.php");
	
	$user_data = check_login($con);
	$_SESSION;
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Login</title>
 </head>
 <body>
 	<!--<style type="text/css"></style>-->
 	<div id="box">
 		<form method="post">
 			<div style="font-size: 20px;margin: 10px; color: blueviolet;">Login</div>
	 			<input id="text" type="text" name="user name"><br><br>
	 			<input id="text" type="password" name="password"><br><br>

	 			<input id="button" type="submit" value="Login"><br><br>
	 			<div>
	 				Not yet a member?
	 			   <a href="signup.php">Signup!</a><br><br>
	 			</div>
 		</form>
 	</div>
 </body>
 </html>