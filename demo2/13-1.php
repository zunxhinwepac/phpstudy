<?php
header("Content-type: text/html; charset=utf-8");
$tid = $_GET['tid'];
$fh = fopen('msg.txt', 'r');
$i = 1;
while( ($row = fgetcsv($fh) ) != false ) {
if($tid == $i) {
echo '<h1>' . $row[0] . '</h1><br >';
echo '<p>' . $row[1] . '</p>';
}
$i = $i+1;
}
echo '<a href="13.php">首页</a><br >';
echo '<a href="11.html">发表留言</a><br >';