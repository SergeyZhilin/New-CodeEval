<?php 

    require_once 'libs/db.php';

	$sql = $conn->prepare("SELECT * FROM user WHERE `username`='".$_POST['loginname']."' AND `password`='".md5($_POST['loginpassword'])."'");
	$data = mysql_fetch_assoc($sql);
	
	if($data) {
		echo "Ok";
	} else echo "No people";

?>