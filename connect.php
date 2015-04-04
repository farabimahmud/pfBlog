<?php
	$url = "localhost";
	$user = "farabi";
	$password = "farabi";
	$dbname = "blog";
	$strSQL ="select * from posts p, people ppl
	where p.author_id = ppl.id";
	
	$con = new mysqli($url,$user, $password, $dbname);
	if($con->connect_errno > 0){
		die('unable to connect to database ['.$con->connect_error.']');
	}
	$rs =  $con->query($strSQL);

?>