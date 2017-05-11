<?php
// $a = "<p><script>alert('You won the Nigerian lottery!!!')</script></p>";
// $a = htmlentities($a);
// echo $a;
// $a = 'abc";--';
// $b = '12';
// $sql = sprintf('update users set password = "%s" where id = %s', $a, $b);

// echo $sql;
// 
// $input = 'bond@@@@example.com';
// $input = '192.168.1.1';

// $isEmail = filter_var($input, FILTER_VALIDATE_IP);

// var_dump($isEmail);
// 
// try{
// 	$pdo = new POD('mysql:host=127.0.0.1;dbname=jd_item;port=3306;charset=utf8','root','root');
// }catch(Exception $e){
// 	echo $e;
// }
try{
	if( 10 > 100){
		throw new Exception("no", 1);
	}

	if(10 < 100){
		throw new Exception("yes", 1);
	}
}catch(Exception $e){
	var_dump($e);
}finally{
	echo 'hello world!!!';
}
echo 111;

