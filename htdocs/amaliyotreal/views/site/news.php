<?php
$db = new mysqli("localhost","root","","amaliyotreal");
$query = $db->query("SELECT * FROM `yangliklar`");
while($row= $query->fetch_object()):

?>
<h1><?=$row->sarlavha?></h1>
<?php endwhile; ?>