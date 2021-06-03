<?php
header("Content-type: text/html; charset=utf-8");
//字符串长度函数
echo "字符串函数"."<br>";
$str="发撒了地方撒地方";
echo strlen($str)."<br>"; //计算字符长
echo mb_strlen($str,'utf-8')."<br>"; //计算字符长
echo"<hr>";//查找字符串位置函数
$str1="abcdef Abcdef";
echo strpos($str1,'A')."<br>"; //查找 search  在 $str  中的第一次位置从 int  开始
echo stripos($str1,'A')."<br>";// 函数返回字符串在另一个字符串中第一次出现的位置。该函数对大小写不敏感
echo strrpos($str1,'f')."<br>";// 查找 search  在 $str  中的最后一次出现的位置从 int
echo"<hr>";//字符串替换函数
echo str_replace('f','',$str1)."<br>";// 子字符串替换
echo str_ireplace('a','A',$str1)."<br>";// 子字符串替换,对大小写敏感
echo strtr("Hilla Warld","ia","eo")."<br>";//: 这个函数中 replace  不能为 ""
echo substr_replace("Hello","world",0)."<br>";//替换字符串
echo strtr(' 男人 , 女人 , 男孩 , 女孩 ',array('男'=>'女','女'=>'男'));// 这个是将字符串看成一个整体 , 不会出现乱码
echo"<hr>";//截取子字符函数
echo substr($str1,5)."<br>";//截取子字符
echo strstr($str1,'A')."<br>";//从第二个字符串开始截取同strchr
echo stristr($str1,'A')."<br>";//功能同 strstr ，只是不区分大小写。
echo strrchr($str1,'A')."<br>";//在字符串中的位置，并返回从该位置到字符串结尾的所有字符
echo"<hr>";//分割 , 连接 , 反转函数
$str2="abcdefg";
print_r(str_split($str2,2)[0]."<br>"); //把 $str  按 len  长度进行分割返回数组
echo explode(' ',$str1)[0]."<br>";//使用一个字符串分割另一个字符串
$array = array('lastname', 'email', 'phone');
$comma_separated = implode(",", $array); //将数组用特定的分割符转变为字符串
echo $comma_separated."<br>"; // lastname,email,phone
echo "<hr>";// <---空白处理函数--->
$str2=" abcdef abcdef ";
echo strlen($str2).'<br>';
echo strlen(trim($str2,' ')).'<br>';//移除字符串两端的空白字符或其他字符。
echo strlen(ltrim($str2,' ')).'<br>';//移除字符串左侧的空白字符或其他字符。
echo strlen(rtrim($str2,' ')).'<br>';//移除字符串右侧的空白字符或其他字符。
echo chunk_split($str2,1,'.').'<br>';//把字符串分割为一连串更小的部分。
echo str_pad($str2,20,'.').'<br>';// 对字符串进行两侧的补白。
echo "<hr>";// <---字符转义函数--->
echo addslashes('What does "yolo" mean?').'<br>';//添加反斜杠
echo stripslashes("Who\'s Peter Griffin?").'<br>';//删除反斜杠
//get_magic_quotes_gpc();// — 获取当前 magic_quotes_gpc 的配置选项设置,常用于表单提交
echo htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES).'<br>';//将字符串中一些字符转换为 HTML  实体
echo htmlspecialchars_decode("This is some &lt;b&gt;bold&lt;/b&gt; text.").'<br>';// 将 HTML  实体转换为字符
echo htmlentities("Jane & 'Tarzan'", ENT_COMPAT)."<br>";//将字符串中所有可转换字符转换为 HTML  实体
echo html_entity_decode("&lt;&copy; W3CS&ccedil;h&deg;&deg;&brvbar;&sect;&gt;").'<br>';// 将 HTML  实体转换为字符
echo "<hr>";// <---字符串比较函数--->
echo strcmp("Hello world!","hello world!")."<br>";//比较两个字符串（区分大小写）$str1>$str2
echo strcasecmp("Hello world!","Hello world!")."<br>";//比较两个字符串（不区分大小写）$str1=$str2