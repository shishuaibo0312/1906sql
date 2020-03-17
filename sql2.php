<?php

//连接数据库
	$link = mysqli_connect("127.0.0.1", "root", "root", "1906api");

	if (!$link) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}

	echo "Success: 连接数据库成功"."<br>";

	//$sql="select * from p_users";
	$user_name=$_GET['user_name'];
	echo "接受的数据：".$user_name."<br>";
	$user_name=addslashes($user_name);
	echo "处理后的数据:".$user_name."<br>";

	$sql="select * from p_users where user_name='{$user_name}'";
	$res=$link->query($sql);
	while ($row=$res->fetch_assoc()) {
		echo '<pre>';print_r($row);echo '<pre>';
	}