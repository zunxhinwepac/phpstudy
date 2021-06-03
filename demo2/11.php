<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2017-08-24 00:19:24
 * @version $Id$
 */

// print_r($_POST);
$fh = fopen('./msg.txt' , 'a');//打开资源
// 拼接写入的内容
$str = $_POST['title'] . ',' . $_POST['content'] . "\n";
fwrite($fh , $str);//写入资源
 fclose($fh);//关闭资源
echo 'ok';