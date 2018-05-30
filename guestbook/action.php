<?php 
require_once('connection.php');
function sanitize($dirtyString){
return htmlentities($dirtyString,ENT_QUOTES,"UTF-8");
}
$comment=sanitize($_POST["txtComment"]);
if(isset($comment)){
	$query="insert into comments (comment) values ('$comment') ";
	$result=mysqli_query($connection,$query);
	if($result>=0){
		echo "Comment success ...!";
		header('Location:index.php');
	}
	else{
		echo"Data base error";
	}

}
 ?>