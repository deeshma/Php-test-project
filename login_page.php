

<?php
   include("config.php");
   session_start();
 
   
	$user=$_POST['username'];
	$pass=$_POST['password'];
	
	$sel="select * from  user where username='$user' and password='$pass'";
	//echo $sel;exit;
	$q=mysql_query($sel);
	$r=mysql_fetch_array($q);
	
	if($r[0]!=NULL){	 
	$_SESSION["username"] = $user;
	$_SESSION["password"] = $pass;	
	header("location: welcome.php");
	}
	else{
	echo "<script>alert('Invalid Username or Password');</script>";
	echo "<script> window.location.href='index.html'</script>";
	}

?>
