<?php
if($_POST){
	include('./config.php');
	$uname = $_POST['sy_username'];
	$upass = $_POST['sy_userpass'];
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql = "SELECT * FROM users WHERE uname='{$uname}' and upass='{$upass}' limit 0,1";
	$result = $conn->query($sql);
	$conn->close();
	
	if ($result->num_rows > 0) {
		echo "登录成功";
	} else {
		echo "登录失败";
	}
}



?>