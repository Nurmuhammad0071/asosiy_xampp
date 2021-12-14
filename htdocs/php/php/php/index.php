<?php include 'config.php'; include 'head.php';?>
<form action="action.php" method="post" class="add-form" enctype="multipart/form-data">
    <div>
        <input type="text" placeholder="Login" name="login">
        <input type="password" placeholder="Parol" name="parol">
        <input type="file" name="rasm">
    </div>
    <button type="submit" name="add">ADD</button>
</form>



<!-- Databasedan olib ko'rsatish -->
<table>
    <tr>
        <th class="table-sarlavha">ID</th>
        <th class="table-sarlavha">Login</th>
        <th class="table-sarlavha">Parol</th>
        <th class="table-sarlavha">Rasm</th>
        <th class="table-sarlavha">Actions</th>
    </tr>
    <?php
    $surov = "SELECT * FROM `user`";
    $natija = $base->query($surov);
    while($row = $natija->fetch_object()):
    ?>
    <tr>
        <th><?=$row->id?></th>
        <th><?=$row->login?></th>
        <th><?=$row->parol?></th>
        <th><img src="../uploads/<?=$row->rasm?>" alt="" width="100px"></th>
        <th class="action">
            <div class="del">
                <form action="action.php" method="post" class="del-form">
                    <input type="hidden" value="<?=$row->id?>" name="id">
                    <button type="submit" name="del">Delete</button>
                </form>
            </div>
            <div class="edit">
                <form action="action.php" method="post" class="edit-form">
                    <input type="hidden" value="<?=$row->id?>" name="id">
                    <button type="submit" name="edit">Edit</button>
                </form>
            </div>
        </th>
    </tr>
    <?php endwhile;?>
</table>