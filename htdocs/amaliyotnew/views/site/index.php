<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<?php
$db = new mysqli("localhost","root","","amaliyotreal");
$query = $db->query("SELECT * FROM `yangliklar`");
while($row = $query->fetch_object()):
?>
<div class="blok">
 <h1 style="text-align: center; color: red;">Yangiliklar</h1>

<h1 style="text-align: center;"><?=$row->sarlavhe?></h1>
<p><?=$row->matn?></p>

</div>
<?php endwhile; ?>
<style type="text/css">
    body{
        background:#FCD2D1;
    }
    .blok {
        width: 300px;
       
        border:1px solid black;
        margin: 15px 15px;
        background-color: #FE8F8F;
        padding: 0px 5px;
        display: inline-block;

       
    }
    
</style>
