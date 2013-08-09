<?php

error_reporting(E_ALL); 
ini_set('display_errors', '1');

session_start();

$dbhost = 'localhost';
$dbname = '697292';
$dbuser = '697292';
$dbpass = 'kramed';

$mysql_handle = mysql_connect($dbhost, $dbuser, $dbpass)
  			or die("Error connecting to database server");
mysql_select_db($dbname, $mysql_handle)
	or die("Error selecting database: $dbname");

if ($_POST['user_name'] != null && $_POST['password'] !=null){
	$query = mysql_query("SELECT * FROM users WHERE user_name = '".$_POST['user_name']."' AND password = '".$_POST['password']."'");
	$result = mysql_fetch_array($query);
	if($result['user_name'] != null){
		$_SESSION['user_name'] = $result['user_name'];
		echo('<META http-equiv="refresh" content="1;index.php">');
	}
	else{
		echo('invalid user name or password');
	}
}
?>
