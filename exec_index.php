<?php

include './common/comm.php';


$id = $_POST['id'];
$pw = md5($_POST['pw']); 

$SQL = "SELECT * FROM `user_info` WHERE `pw` = '{$pw}'";
$user_info = mysqli_query($condb, $SQL);
$ROW = mysqli_fetch_assoc($user_info);

$name = $ROW['last_name'] . $ROW['first_name'];

if(mysqli_num_rows($user_info) == 0) {
    echo "<script>alert('아이디 또는 비밀번호를 확인해주세요.'); history.back();</script>";
}
else {
    $_SESSION['user'] = array();

    foreach($ROW AS $key => $value) {
        $_SESSION['user'][$key] = $value;
    }   
    
    echo "<meta http-equiv='refresh' content='0;url=./main.php'>";
}

?>