<?php
// Connect DB
$condb = mysqli_connect("ec2-15-165-144-1.ap-northeast-2.compute.amazonaws.com", "root", "wlstjsdl0!@", "contact");

// Connect DB Error
if(!$condb) {
	echo "<script>alert('DB에 연결할 수 없습니다." . mysqli_error() . "');</script>";
	exit;
}

// Select DB Error
if(!mysqli_select_db($condb, "contact")) {
	echo "<script>alert('DB를 변경할 수 없습니다.'" . mysqli_error() . ");</script>";
	exit;
}
?>