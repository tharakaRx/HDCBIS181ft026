<?php
//configuring the data base
	$username="root";
	$host="localhost";
	$password="";
	$connection=mysqli_connect($host,$username,$password);
	$dataBase=mysqli_select_db($connection,"comment");
?> 