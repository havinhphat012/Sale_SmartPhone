<?php
	$link = mysql_connect("localhost","root","") or die ("Không thể kết nối đến Trang chủ");
	mysql_select_db("dienthoai",$link) or die("Không thể kết nối tới Cơ sở dữ liệu");
	mysql_query("SET NAMES 'UTF8'");
?>
