<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>select_sales</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
    <?php include 'header.php'; ?>
        <h2>회원 매출 조회</h2>
        <table border="1">
            <tr>
                <th>회원번호</th>
                <th>회원성명</th>
                <th>고객등급</th>
                <th>매출</th>
            </tr>
        <?php
        include 'connect.php';
        if ($conn->connect_error) {
            die("연결 실패: " . $conn->connect_error);
        }

        $sql = "SELECT 
                    m1.custno, 
                    m1.custname, 
                    m1.grade, 
                    SUM(m2.price)
                AS 
                    total
                FROM 
                    member_tbl_02 m1
                JOIN 
                    money_tbl_02 m2
                ON 
                    m1.custno = m2.custno
                GROUP BY 
                    m1.custno, m1.custname, m1.grade 
                ORDER BY 
                    total DESC;";
        $result = $conn->query($sql);

        // 결과 출력
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // 고객 등급 변환
                switch ($row["grade"]) {
                    case "A":
                        $grade = "VIP";
                        break;
                    case "B":
                        $grade = "일반";
                        break;
                    case "C":
                        $grade = "직원";
                        break;
                    default:
                        $grade = "";
                }
                echo "<tr>";
                echo "<td>" . $row["custno"] . "</td>";
                echo "<td>" . $row["custname"] . "</td>";
                echo "<td>" . $grade . "</td>";
                echo "<td>" . $row["total"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "매출이 있는 회원이 없음 ㅅㄱ ㅋㅋ 사실상 에러난거임 ㅋ";
        }

        $conn->close();
        ?>
    </table>
    <?php include 'footer.php'; ?>
</body>
</html>
