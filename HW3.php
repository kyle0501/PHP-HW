﻿<?php

$姓=$_GET["姓"];
$名=$_GET["名"];
$生日=$_GET["生日"];
$性別=$_GET["性別"];
$電話=$_GET["電話"];
$信箱=$_GET["信箱"];
$衣服尺寸=$_GET["衣服尺寸"];
$衣服顏色=$_GET["衣服顏色"];

echo "姓:".$姓."<br/>";
echo "名:".$名."<br/>";
echo "你的性別是:".$性別."<br/>";
if($性別=="男"){
	echo "<body bgcolor='#33CCFF'>";
}else{
	echo "<body bgcolor='pink'>";
}
echo "生日:".$生日."<br/>";
echo "電話:".$電話."<br/>";
echo "信箱:".$信箱."<br/>";
echo "衣服尺寸:".$衣服尺寸."<br/>";
echo "衣服顏色:".$衣服顏色."<br/>";

echo "謝謝你的參與，祝你有個愉快的一天";

?>