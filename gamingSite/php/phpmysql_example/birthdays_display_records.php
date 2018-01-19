<html>
<head><title>(Display Database)</title></head>
<body>
<?php
include("dbinfo.inc.php");
$comm=@mysql_connect(localhost,$username,$password);
$rs=@mysql_select_db($database) or die( "Unable to select database"); 

$sql="SELECT * FROM birthdays";
$result = mysql_query($sql) or die("SELECT Error: ".mysql_error());
$num_rows = mysql_num_rows($result);
print "Displaying Birthdays in the Database</br>";
print "There are $num_rows records.<P>";
print "<table width=200 border=1>\n";
while ($get_info = mysql_fetch_row($result)){ 
print "<tr>\n";
foreach ($get_info as $field) 
print "\t<td><font face=arial size=1/>$field</font></td>\n";
print "</tr>\n";
}
print "</table>\n";
mysql_close();
?>
<form method="POST" action="birthdays_dbase_interface.php">

<input type="submit" value="Main Menu">
</form>
</body>
</html> 

