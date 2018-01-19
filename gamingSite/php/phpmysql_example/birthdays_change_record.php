<html><head><title></title></head>
<body>
<?php
include("dbinfo.inc.php");
$comm=@mysql_connect(localhost,$username,$password);
$rs=@mysql_select_db($database) or die( "Unable to select database"); 

//$user=$_POST['username'];
//$password=$_POST['password'];
$ud_id=$_POST['ud_id'];
$ud_name=$_POST['ud_name'];
$ud_birthday=$_POST['ud_birthday'];
$sql="UPDATE birthdays  SET name='$ud_name' ,birthday='$ud_birthday' WHERE id='$ud_id'";
 
//$link = mysql_connect("localhost",$_POST['username'],$_POST['password']);

mysql_query($sql);
echo "Record Updated";
mysql_close();
?> 
<form method="POST" action="birthdays_update_form.php">
<input type="submit" value="Change Another">
</form><br>

<form method="POST" action="birthdays_dbase_interface.php">
<input type="submit" value="Main Menu">
</form>

</body>
</html>
