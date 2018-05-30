<!DOCTYPE html>
<html>
<head>
	<title>guest-book</title>
</head>
<body bgcolor="grey">
<form action="action.php" method="post">
	<label><h1>Comment</h1></label>
	<textarea rows="4" cols="60" name="txtComment"></textarea><br>
	<button type="submit">Comment</button>
</form>
<!--comments -->
<div class="comments">
	<h2>recent comments</h2><br><br>
		<!--comments goes here -->
		<?php 
					require_once('connection.php');
					
					$query= "select * from comments order by id desc limit 10";
					$dataSet=mysqli_query($connection,$query);
					//$time=1.0;
					while($row=mysqli_fetch_assoc($dataSet)):
						
		?>
	<br>
<?php echo"".$row['comment'].""; ?>
<br>
<?php endwhile; ?>
</div>
</body>
</html></form>