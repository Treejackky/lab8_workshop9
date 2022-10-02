<?php include "connect.php" ?>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>

    <?php
    $stmt = $pdo->prepare("SELECT * FROM member");
    $stmt->execute();

    while ($row = $stmt->fetch()) {
        echo "ชื่อ" . $row["name"] . "<br>";
        echo "ชื่อผู้ใช้งาน :" . $row["username"] . "<br>";
        echo "รหัสผ่าน :" . $row["password"] . "<br>";
        echo "ที่อยู่ : " . $row["address"] . "<br>";
        echo "มือถือ :" . $row["mobile"] . "<br>";
        echo "อีเมล :" . $row["email"] . "<br>";
        echo "<a href='editform.php?username=" . $row["username"] . "'>แก้ไข</a>" ;
        echo "<hr>\n";
    }
    ?>
</body>

</html>