<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert_member</title>
    <script src="script.js"></script>
</head>
<body>
<?php include 'header.php'; ?>
<?php include 'connect.php'; ?>
<?php
    $query = "SELECT max(custno) + 1 AS next_custno FROM member_tbl_02";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $next_custno = $row['next_custno'];
?>
    <h2>회원등록</h2>
    <form action="insert.php" method="POST">
        <table border=1>
            <tr>
                <th>회원정보 (자동생성)</th>
                <td><input name="custno" value="<?php echo htmlspecialchars($next_custno); ?>" size="40" readonly/></td>
            </tr>

            <tr>
                <th>회원성명</th>
                <td><input name="custname" size=40/></td>
            </tr>

            <tr>
                <th>회원전화</th>
                <td><input name="phone" size=40/></td>
            </tr>

            <tr>
                <th>회원주소</th>
                <td><input name="address" size=40/></td>
            </tr>

            <tr>
                <th>가입일자</th>
                <td><input name="joindate" size=40/></td>
            </tr>

            <tr>
                <th>고객등급 [A:VIP, B:일반, C:직원]</th>
                <td><input name="grade" size=40/></td>
            </tr>
            
            <tr>
                <th>도시코드</th>
                <td><input name="city" size=40/></td>
            </tr>
            
            <tr><td colspan=2>
                <input class="button" type="submit" value="등록" />
                <a href="member_select.php"><button>조회</button></a>
            </td></tr>
            
        </table>
    </form>
<?php include 'footer.php'; ?>
</body>
</html>