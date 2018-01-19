<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd"> 

<html>
	<div class="containerDiv">
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="app.css" />
		<link rel="shortcut icon" href="favicon.ico">
			
	</head>
	<body>
		<div class="menuDiv">
				
			<a href="advisorLogin.php">Continue</a>
				
		</div>

	<div class="contentDiv">
		<?php
			include("databaseInfo.php");
			$comm=@mysql_connect(localhost,$username,$password);
			$rs=@mysql_select_db($database) or die( "Unable to select database"); 

			$advisorID=$_POST['advisorID'];
			$Password=$_POST['Password'];


			$Password = md5($Password);
			$sql="INSERT INTO advisor_login VALUES ('$advisorID','$Password')";
			$result=mysql_query($sql)or die("Insert Error:");
			mysql_close();
			print "Record added\n";
		?>
		<footer> </footer>
	</div>
	</div>

			
	
	</body>
</html>