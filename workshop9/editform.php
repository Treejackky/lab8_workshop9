<?php include "connect.php" ?>
<?php

$stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
$stmt->bindParam(1, $_GET["username"]);
$stmt->execute();
$row = $stmt->fetch();
?>

<html>

<head>
    <meta charset="UTF-8">
</head>

<body>                                                 

    <form action="editmember.php" method="post">
        
        username : <input type="text" name="username" value="<?=$row["username"]?>" READONLY/><br>

        pasword : <input type="password" name="password"  value="<?=$row["password"]?>"><br>

        ชื่อ : <input type="text"  name="name" value="<?=$row["name"]?>"><br>

        ที่อยู่: <br>
        <textarea name="address"  value="<?=$row["address"]?>" rows="3" cols="40"></textarea><br>

        มือถือ: <input type="phone" value="<?=$row["mobile"]?>" name="mobile"><br>

        อีเมล: <input type="text" name="email" value="<?=$row["email"]?>"><br><br>

        <input type="submit" value="แก้ไขสมาชิก ">
    </form>
</body>

</html>