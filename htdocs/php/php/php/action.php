<?php
include 'config.php';
include 'head.php';
if(isset($_POST['add'])){
    $login = $_POST['login'];
    $parol = $_POST['parol'];
    $rasm = $_FILES['rasm']['name'];
    $tmp = $_FILES['rasm']['tmp_name'];
    $dir = "../uploads";
    if (move_uploaded_file($tmp, "$dir/$rasm")) {
        $surov = "INSERT INTO `user`(`id`, `login`, `parol`, `rasm`) VALUES (null,'$login',md5('$parol'),'$rasm')";
        $base->query($surov) or die($base->error);
        header('Location: index.php');
    }
}
if (isset($_POST['del'])) {
    $id = $_POST['id'];
    $surov = "DELETE FROM `user` WHERE `id`='$id'";
    $base->query($surov) or die($base->error);
    header('Location: index.php');
}
?>
<?php

if (isset($_POST['edit-btn'])) {
    $id = $_POST['id'];
    $login = $_POST['login'];
    $parol = $_POST['parol'];
    $rasm = $_FILES['rasm']['name'];
    $tmp = $_FILES['rasm']['tmp_name'];
    $dir = "../uploads";
    if (move_uploaded_file($tmp, "$dir/$rasm")) {
        $surov = "UPDATE `user` SET `id`='$id',`login`='$login',`parol`=md5('$parol'),`rasm`='$rasm' WHERE `id`='$id'";
        $base->query($surov) or die($base->error);
        header('Location: index.php');
    }
}
if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $surov = "SELECT `id`, `login`, `parol`, `rasm` FROM `user` WHERE `id`='$id'";
    $natija = $base->query($surov) or die($base->error);
    $row = $natija->fetch_object();
?>    
    <form action="action.php" method="post" class="add-form" enctype="multipart/form-data">
        <div>
            <input type="text" value="<?=$row->login?>" name="login">
            <input type="hidden" value="<?=$row->id?>" name="id">
            <input type="password" name="parol">
            <input type="file" name="rasm">
        </div>
        <img src="../uploads/<?=$row->rasm?>" width="80%">
        <button type="submit" name="edit-btn">EDIT</button>
    </form>
<?php
}
include 'foot.php';
?>