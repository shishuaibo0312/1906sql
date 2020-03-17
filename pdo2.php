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
	//添加一条记录
	$sql="insert into p_users (user_name,email,pass) values('yao','yao@qq.com','123')";
	$res=$dbh->exec($sql);
	//print_r($res);
	$id=$dbh->lastInsertId();    //返回自增ID
	echo "自增ID：".$id;