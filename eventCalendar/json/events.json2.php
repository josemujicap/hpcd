<?php
header('Content-type: text/json');
$initTime = (intval(microtime(true))*1000) + (86400000 * ($i-($days/2)));

$arr[0] = array('date' => "$initTime", 'type' => 'meeting', 'title' => 'Project', 'description' => 'Lorem Ipsum dolor set', 'url' => 'detailevent.php?id=1');
$arr[1] = array('date' => '1365090707000', 'type' => 'meeting', 'title' => 'Project', 'description' => 'Lorem Ipsum dolor set', 'url' => 'detailevent.php?id=1');
echo json_encode($arr);
?>