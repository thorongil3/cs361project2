<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link type="text/css" href="style/main.css" rel="stylesheet" media="screen" />
<title>No.1 :: CSS Template :: XTML 1.0 Transitional</title>

<!-- There is no log in screen at this point. Later we may create a login screen
in the index.php file and migrate all of this code to another page
-->

<?php
	session_start();
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div id="container">
	<div id="banner" >
		<h1>Personal History Archive</h1>
	</div>
	<div id="left">
		<a href="">Manage Photo Album</a></br></br>
		<a href="">Track Exercise</a></br></br>
		<a href="goals.php">Track Goals/Life Events</a></br></br>
		<a href="Journal.php">Journal</a></br></br>
		<a href="">Edit User Interface</a></br></br>
		<a href="">Infographic Options</a></br></br>
	</div>
	<div id="right">
		<?php
			$form = 	'<form id="logIn" action="logUserIn.php" method="post">'.
							'<h3>LOG IN</h3>'.
							'<p>'.
								'Username:'.
								'<input type="text" name="user_name"></input>'.
							'</p>'.
							'<p>'.
								'Password:'.
								'<input type="text" name="password"></input>'.
							'</p>'.
							'<input type="submit" value="Submit">'.
						'</form>';
			$logout =	'<a href="logout.php">logout</a>';
			if($_SESSION['user_name'] == null){
				echo($form);
			}
			else{
				echo($logout);
			}
		?>
	</div>	
	<div id="content">
	</div>
 	<div id="footer">
	</div>
</div>
</body>
