<?php

    $file_path = "img/";

    $file_path = $file_path.basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file( $_FILES['uploaded_file']['tmp_name'], $file_path ) ) {
        echo "success";
    } else {
        echo "fail";
    }
//
//$file_path = "";
//$file_path = $file_path . basename( $_FILES['uploaded_file']['name']);
//$file_path = "var/www/html/img/".$_FILES['uploaded_file']['name'];
//
//if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path)) {
//	// 동일한 파일명이면 덮어쓰기를 한다.
//	$result = array( "result" => "success" );
//} else{
//	$result = array( "result" => "error" );
//}
//echo json_encode($result);
?>


