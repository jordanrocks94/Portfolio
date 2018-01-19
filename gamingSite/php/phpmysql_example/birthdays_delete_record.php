<html><head><title>Birthdays Delete Record</title></head>
<body>
<?php
include("dbinfo.inc.php");
$comm=@mysql_connect(localhost,$username,$password);
$rs=@mysql_select_db($database) or die( "Unable to select database"); 
$id=$_POST['id'];
$sql="DELETE FROM  birthdays where id=$id";

mysql_query($sql)or die("Delete Error: ".mysql_error());
mysql_close();

print "Record Removed.\n";
?>
<br><br>
<form method="POST" action="birthdays_delete_form.php">

<input type="submit" value="Delete Another">
</form><br>
<form method="POST" action="birthdays_dbase_interface.php">

<input type="submit" value="Main Menu">
</form>
</body>
</html>
