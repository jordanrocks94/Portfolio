<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<?php
	session_start();
	if(!session_is_registered(myusername)){
	header("location:loginpage.php");
} 
?> 
<html><link rel="shortcut icon" href="../favicon.ico"/>
	<div class="containerDiv" style="width:auto">
		<head>
			<?php
						 // Echo session variables that were set on previous page
						echo "Welcome user " . $_SESSION["username"] . ".<br>";
			?> 
			<title>Add client </title>
			<link rel="stylesheet" type="text/css" href="app.css" />
			
			<h1>Add client</h1>
			<div class="menuDiv"><a href="http://at-web2.comp.glam.ac.uk/students/13025902/BookingApp/index.php">Main Menu</a>
            <a href="adminHome.php">go back</a>
            </div>
		</head>
		<body>



			<div class="contentDiv">

			<h2> please insert a client  </h2>

			<form method="POST" action="insertClientInfo.php"><div id = "dataEntry"> 

			<table class="tableDataEntry">
				<tr>
					<td>Enter ID:</td>   
					<td><input type=int name=clientID size=4 class="input"></td>
				</tr> 
				<tr>
					<td>Enter First name:</td>
					<td><input type=text name=firstName size=25 class="input"></td>
				</tr>
				<tr>
					<td>Enter last Name:</td>
					<td><input type=text name=surname size=45 class="input"><br></td>
				</tr>
				
				<tr>
					<td>Enter DOB:</td>
					<td><input type=date name=dateOfBirth class="input"><br></td>
				</tr>
				<tr>
					<td>Enter Address:</td>
					<td><input type=text name=address size=45 class="input"><br></td>
				</tr>
				<tr>
					<td>Enter telephone number:</td>
					<td><input type=text name=telephone size=11 class="input"><br></td>
				</tr>
				<tr>
					<td>Enter mobile number:</td>
					<td><input type=text name=mobile size=11 class="input"><br></td>
				</tr>
				<tr>
					<td>Enter email:</td>
					<td><input type=text name=emailAddress size=45 class="input"><br></td>
				</tr>

	
			</table>
			<br>
			<input type="reset" value="Reset" class="button">
			<input type="submit" value="Submit" class="button">
			</form>
		</div>
		</div>
		<!-- ************************ END OF MAIN CONTENT ************************ --> 

		<footer style="width:inherit">appointment Booking system 2016 LTD ©</footer> 
		
	</body>
</html>