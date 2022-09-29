<!DOCTYPE html>
<html lang="en">
<?php include "connect.php" ?>    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FindingWorkshop5</title>
</head>
<body>
    <?php
        $ken = $pdo->prepare("SELECT * from member WHERE username=?");
        $ken->bindparam(1,$_GET["username"]);
        $ken->execute();
        $row = $ken->fetch();
    ?>

    <div style="display:flex">
        <img src="imgMember/<?=$row["username"]?>.jpg" width="200px">
        <div style="padding:15px">
            ชื่อสมาชิก: <?=$row["name"]?><br>
            ที่อยู่: <?=$row["address"]?><br>
            Email: <?=$row["email"]?><br>
        </div>
    </div>

    
</body>
</html>