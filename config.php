<?php

$host="db.mis.kuas.edu.tw";
$user="s1105137145";
$password="O100513113";
$Link = mysql_connect('$host', '$user', '$password');
if (!$Link) {
    　die(' 連線失敗，輸出錯誤訊息 : ' . mysql_error());
    }
    echo ' 連線成功 ';
    mysql_close($Link);
?>