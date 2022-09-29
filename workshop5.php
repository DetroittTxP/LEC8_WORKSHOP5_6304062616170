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
    <div style="display:flex">
        <?php
            $stmt = $pdo->prepare("SELECT * FROM member");
            $stmt->execute();
        ?>

        <?php while($row = $stmt->fetch()):?>
            <div style="padding:15px; text-align:center">
                <a href="workshop5detail.php?username=<?=$row["username"]?>">
                    <img src="imgMember/<?=$row["username"]?>.jpg" width='100'>
                </a><br>
                ข้อมูลของ: <?=$row["name"]?><br>
            </div>
        <?php endwhile;?>
    </div>
   
</body>
</html>