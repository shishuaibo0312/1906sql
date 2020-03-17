<?php

//连接数据库
	$dsn = 'mysql:dbname=1906api;host=127.0.0.1';
	$user = 'root';
	$password = 'root';
	$dbh = new PDO($dsn, $user, $password);
	if(!$dbh){
		echo "连接数据库失败";die;
	}
	echo "Success: 连接数据库成功"."<br>";
	$id=$_GET['id'];
	echo "接受的原来数据:".$id."<br>";
	$id=intval($id);
	echo "处理后的数据:".$id."<br>";
	//$sql="select * from p_users";
	$sql="select * from p_users where id=".$id;
	$res=$dbh->query($sql);
	//遍历数据
	while ($row=$res->fetch(PDO::FETCH_ASSOC)) {
		echo '<pre>';print_r($row);echo '<pre>';
	}
	