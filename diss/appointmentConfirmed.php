<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<!-- prevents unauthorised access --!> 
<?php
	// set timeout period in seconds
	$inactive = 60;
	// check to see if $_SESSION['timeout'] is set
	if(isset($_SESSION['timeout']) ) {
	$session_life = time() - $_SESSION['start'];
	if($session_life > $inactive)
        { session_destroy(); header("Location: loginpage.php"); }
}
$_SESSION['timeout'] = time();
	session_start();
	
	if(!session_is_registered(myusername)){
	header("location:index.php");
	} 
?>
	<html><link rel="shortcut icon" href="favicon.ico"/>
	<head>
		<title>Change customer</title>
		<link rel="stylesheet" type="text/css" href="app.css" />
	</head>
	<body>
		<div id="container" class="containerDiv">
			<div class="headerDiv"><h1>Change customer</h1></div>
			<div class="menuDiv">
				<a href="clientHome.php">Main menu</a>&nbsp&nbsp
				<a href="clientCreateAppointment.php">make Another Apoointment</a>
			</div>

			<!-- *********************** START OF MAIN CONTENT *********************** --> 

			<div class="contentDiv">
				<?php
					include("databaseInfo.php");
					$comm=@mysql_connect(localhost,$username,$password);
					$rs=@mysql_select_db($database) or die( "Unable to select database"); 
					$appointmentID=$_POST['appointmentID'];
					$clientID=$_POST['clientID'];
					$sql="UPDATE appointment SET clientID='$clientID'  WHERE appointmentID='$appointmentID'";
					if(mysql_query($sql)){
echo "updated";}
else{
echo "fail";} /* http://www.phpsuperblog.com/php/update-a-mysql-database-field-data-with-html-form-and-php/ */ 
					mysql_close();
				?> 
			</div>

			<!-- ************************ END OF MAIN CONTENT ************************ --> 

			<footer>appointments booking system</footer>
		</div>
	</body>
</html>
