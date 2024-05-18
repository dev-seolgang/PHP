<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update_member</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<?php include 'header.php'; ?>
<?php include 'connect.php'; ?>
<?php
    $custno = $_GET['custno'];
    $query = "SELECT * FROM member_tbl_02 WHERE custno = '$custno'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
?>
<h2>회원 정보 수정</h2>
<form action="update.php" method="POST">
    <table border="1">
        <tr>
            <th>회원번호</th>
            <td><input name="custno" value="<?php echo htmlspecialchars($row['custno']); ?>" size=40 readonly/></td>
        </tr>
        <tr>
            <th>회원성명</th>
            <td><input name="custname" value="<?php echo htmlspecialchars($row['custname']); ?>" size="40"/></td>
        </tr>
        <tr>
            <th>회원전화</th>
            <td><input name="phone" value="<?php echo htmlspecialchars($row['phone']); ?>" size="40"/></td>
        </tr>
        <tr>
            <th>회원주소</th>
            <td><input name="address" value="<?php echo htmlspecialchars($row['address']); ?>" size="40"/></td>
        </tr>
        <tr>
            <th>가입일자</th>
            <td><input name="joindate" value="<?php echo htmlspecialchars($row['joindate']); ?>" size="40"/></td>
        </tr>
        <tr>
            <th>고객등급</th>
            <td><input name="grade" value="<?php echo htmlspecialchars($row['grade']); ?>" size="40"/></td>
        </tr>
        <tr>
            <th>도시코드</th>
            <td><input name="city" value="<?php echo htmlspecialchars($row['city']); ?>" size="40"/></td>
        </tr>
        <tr>
            <td colspan=2>
                <input class="button" type="submit" value="수정" />
                <a href="member_select.php"><button>조회</button></a>
            </td>
        </tr>
    </table>
</form>
<?php
mysqli_close($conn);
?>
<?php include 'footer.php'; ?>
</body>
</html>
