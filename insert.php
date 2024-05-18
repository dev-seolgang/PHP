<?php

include 'connect.php';

$custno = mysqli_real_escape_string($conn, $_POST['custno']);
$custname = mysqli_real_escape_string($conn, $_POST['custname']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$joindate = mysqli_real_escape_string($conn, $_POST['joindate']);
$grade = mysqli_real_escape_string($conn, $_POST['grade']);
$city = mysqli_real_escape_string($conn, $_POST['city']);

$query = "INSERT INTO member_tbl_02 (custno, custname, phone, address, joindate, grade, city)
          VALUES ('$custno', '$custname', '$phone', '$address', '$joindate', '$grade', '$city')";
if (mysqli_query($conn, $query)) {
    echo "<script>alert('새 회원이 성공적으로 등록되었습니다.'); window.location.href='select_member.php';</script>";
    exit();
} else {
    echo "에러났는데 알빠노";
}

mysqli_close($conn);
?>
