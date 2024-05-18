<?php
include 'connect.php';

$custno = mysqli_real_escape_string($conn, $_POST['custno']);
$custname = mysqli_real_escape_string($conn, $_POST['custname']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$joindate = mysqli_real_escape_string($conn, $_POST['joindate']);
$grade = mysqli_real_escape_string($conn, $_POST['grade']);
$city = mysqli_real_escape_string($conn, $_POST['city']);

$query = "UPDATE member_tbl_02 
          SET custname = '$custname', 
              phone = '$phone', 
              address = '$address', 
              joindate = '$joindate', 
              grade = '$grade', 
              city = '$city' 
          WHERE custno = '$custno'";

if (mysqli_query($conn, $query)) {
    echo "<script>alert('회원 정보가 성공적으로 업데이트되었습니다.'); window.location.href='select_member.php';</script>";
    exit();
} else {
    echo "에러났는데 알빠노";
}   

mysqli_close($conn);
?>
