<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>select_member</title>
</head>
<body>
<?php include 'header.php'; ?>
<?php include 'connect.php'; ?>
<h2>회원정보조회/수정</h2>
<?php
    $query = "SELECT * FROM member_tbl_02";
    $result = mysqli_query($conn, $query);
    
    if ($result) {
        ?>
        <table border=1>
            <tr>
                <th>회원번호</th>
                <th>회원성명</th>
                <th>회원전화</th>
                <th>주소</th>
                <th>가입일자</th>
                <th>고객등급</th>
                <th>가입일자</th>
            </tr>

    <?php
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
            <td><a href="update_member.php?custno=<?php echo $row['custno']; ?>"><?php echo $row['custno']; ?></a></td>
            <td><?php echo $row['custname']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['joindate']; ?></td>
            <td><?php
                    $grade = $row['grade'];
                    if ($grade === 'A') {
                        echo 'VIP';
                    } elseif ($grade === 'B') {
                        echo '일반';
                    } elseif ($grade === 'C') {
                        echo '직원';
                    } else {
                        echo '이게 뜨면 조진거임 ㅅㄱ';
                    }
                ?>
            </td>
            <td><?php echo $row['city']; ?></td>
        </tr>
    <?php
        }
    } else {
        echo "에러났는데 알빠노";
    }
    ?>
    </table>
    <?php mysqli_close($conn); ?>
    <?php include 'footer.php'; ?>
</body>
</html>