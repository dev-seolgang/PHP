<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connect</title>
</head>
<body>
    <?php
        $host = 'localhost';
        $username = 'username';
        $password = 'password';
        $database = 'databasename';
        $conn = mysqli_connect($host, $username, $password, $database);
    ?>
</body>
</html>
