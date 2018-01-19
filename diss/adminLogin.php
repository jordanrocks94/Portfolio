<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd"> 


<html>
	<div class="containerDiv">

	<header>
		<title>Admin Login</title>
		<link rel="stylesheet" type="text/css" href="app.css" />
		<link rel="shortcut icon" href="../favicon.ico">
	
		<h1>Admin login</h1>
		<div class="menuDiv">
        
        <a href="index.php"> Home</a>
        
        </div>
	
		
	</header>




	<table width="500" border="0" align="left" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
		<tr>
		<form name="form1" method="post" action="checkloginAdmin.php">
		<td>
	<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#297ACC">
	<tr>
		<td colspan="10"><strong>Admin login </strong></td>
	</tr>
	<tr>
		<td width="58">username</td>
		<td width="15">:</td>
		<td width="500"><input name="myusername" type="int" id="username"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td>:</td>
		<td width ="500"><input name="mypassword" type="password" id="password"></td>
		</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><input type="submit" name="Submit" value="Login"></td>
        <td><input type="button" value="create account" onClick="passWord()"></td>
		</form>
		
		
	
	    <!-- http://www.wikihow.com/Password-Protect-a-Web-Page --!>
		<SCRIPT> 
				function passWord() {
				var testV = 1;
				var pass1 = prompt('Please Enter Your Password',' ');
				while (testV < 3) {
				if (!pass1)
				history.go(-1);
				if (pass1.toLowerCase() == "123") {
				alert('You Got it Right!');
				window.open('createLogin.php');
				break;
				}
				testV+=1;
				var pass1 =
				prompt('Access Denied - Password Incorrect, Please Try Again.','Password');
				}
				if (pass1.toLowerCase()!="password" & testV ==3)
				history.go(-1);
				return "WRONG ";
				
				
				}
	</SCRIPT>
	

		</tr>
	</table>
		<td>

		</tr>
	</table>
</div>
		<footer> electricity company 2015 LTD</footer> 
</div> 
</html> 