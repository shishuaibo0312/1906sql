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
	$id=$_GET['id'];
	echo "接受的原来数据:".$id."<br>";
	$id=intval($id);			//将接收到的数据转化为整型
	echo "处理后的数据:".$id."<br>";
	echo "<hr>";
	$sql="select * from p_users where id=".$id;
	$res=$link->query($sql);
	//遍历数据
	while ($row=$res->fetch_assoc()) {
		echo '<pre>';print_r($row);echo '<pre>';
	}
	
