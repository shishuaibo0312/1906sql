<?php

//pdo的添加预处理

//连接数据库
	$dsn = 'mysql:dbname=1906api;host=127.0.0.1';
	$user = 'root';
	$password = 'root';
	$dbh = new PDO($dsn, $user, $password);
	if(!$dbh){
		echo "连接数据库失败";die;
	}
	echo "Success: 连接数据库成功"."<br>";
	
	//$sql="select * from p_users";
	$sql="insert into p_users (user_name,email,pass) values(?,?,?)";
	$user_name='jj';
	$pass=123;
	$email='123@qq.com';
	$res=$dbh->prepare($sql);
	$res->bindParam(1,$user_name);
	$res->bindParam(2,$email);
	$res->bindParam(3,$pass);
	$res->execute();
	$id=$dbh->lastInsertId();
	echo "自增ID:".$id;