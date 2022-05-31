<?php
header('Access-Control-Allow-Origin:*');
//初始化随机数生成器种子，这行代码也可以删除
$seed = time();
//获取随机数
$num = mt_rand(1,166);
//拼接图片地址
//$picpath = "https://fastly.jsdelivr.net/gh/haohanhaiyang/img@main/nature/".$num.".jpg";
$picpath = "https://haohanhaiyang.gitee.io/img/nature/".$num.".jpg";
//重定位到图片
die(header("Location: $picpath"))
?>
