<?php
header("Content-type: text/html; charset=utf-8");
// $tid = $_GET['tid'];
// echo ' 你先看第 ' . $tid . ' 行的留言 ';
// 先打开记事本
$fh = fopen('./msg.txt' , 'r');
//逐行读取
// print_r(fgetcsv($fh));
// print_r(fgetcsv($fh));
// print_r(fgetcsv($fh));
// 全部输出
// while(($row = fgetcsv($fh)) != false) {
// print_r($row);
// }

// 获取指定行内容
// $i = 1;// 从第一行开始读取
// while(($row = fgetcsv($fh)) != false) {
// if($i == $tid) {
// print_r($row);
// }
// $i = $i+1;
// }

// $fh = fopen('./msg.txt' , 'r');
$i = 1;
while(($row = fgetcsv($fh)) != false) {
echo '<a href="' . '13-1.php?tid=' . $i . '">' . $row[0]. '</a><br >';
$i = $i+1;
}