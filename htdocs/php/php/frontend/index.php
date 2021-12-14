<?php $base = new mysqli('localhost', 'root', '', 'yusufcik');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front End</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <main>
        <?php
        $surov = "SELECT * FROM `user`";
        $natija = $base->query($surov);
        while($row = $natija->fetch_object()):
        ?>
        <div>
            <div>
                <img src="../uploads/<?=$row->rasm?>">
            </div>
            <h1 class="user-name">
                <?=$row->login?>
            </h1>
            <h1 class="user-password"><?=$row->parol?></h1>
        </div>
        <?php endwhile;?>
    </main>
</body>
</html>