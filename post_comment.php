<?php
$conn = mysqli_connect("localhost","root","","a_database");
if ($conn -> connect_errno) 
	{
 		echo "Failed to connect to MySQL: " . $conn -> connect_error;
  		exit();
  	}
    $username=$_POST['username'];
    $email=$_POST['email'];
    $comment=$_POST['comment'];
    $comment_post_id=$_POST['comment_post_id'];
	$sql="INSERT INTO comments (username,email,comment,comment_post_id) VALUES('$username','$email','$comment','$comment_post_id')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo"<h1>comment posted.</h1>";
    } 
    else{
        echo"<h1>comment not posted. $result</h1>";
    }
?>