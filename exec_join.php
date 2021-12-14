<?php
    include './common/comm.php';

    $id = $_POST['id'];
    $pw = md5($_POST['pw']);
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $phone_number = $_POST['phone_number'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $email = $_POST['email'];
    $memo = $_POST['memo'];

    $upload = "/var/www/html/contact/upload/";
    $image_name = $_FILES['add_image']['name'];
    $image_path = $image_name ? $upload . $image_name : "";
    $user_image = $image_path ? base64_encode($image_path . date('YmdHis')) : "";

    // 업로드 이미지 파일 있을 경우
    if($image_name) {
        if($_FILES['add_image']['error'] != 0) {
            echo "<script>alert('ERROR: ". $_FILES['add_image']['error'] ."');</script>";
            exit;
        }
        else {
            if(!move_uploaded_file($_FILES['add_image']['tmp_name'], $image_path)) {
                echo "<script>alert('이미지 파일 업로드에 실패하였습니다.'); history.back();</script>";
                exit;
            }
        }
    }

    $SQL = "INSERT INTO `user_info` (
                id, 
                pw, 
                last_name, 
                first_name, 
                phone_number,
                user_image,
                address1, 
                address2, 
                email, 
                memo, 
                regist_date)
            VALUES (
                '".$id."', 
                '".$pw."', 
                '".$last_name."', 
                '".$first_name."', 
                '".$phone_number."', 
                '".$user_image."', 
                '".$address1."', 
                '".$address2."', 
                '".$email."', 
                '".$memo."', 
                NOW())
    "; //echo $SQL; exit;
    $ROW = mysqli_query($condb, $SQL); 

    if(!$ROW) {
		echo "<script>alert('연락처를 추가하는데 실패했습니다.'); history.back();</script>"; 
	}
	else {
        echo "<script>alert('회원가입이 정상적으로 처리되었습니다.');</script>"; 
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	}
  
?>