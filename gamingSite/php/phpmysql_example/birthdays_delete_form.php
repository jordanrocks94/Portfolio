<html><head><title>Birthdays Delete Form</title></head>
<body>
<?php
include("dbinfo.inc.php");
$comm=@mysql_connect(localhost,$username,$password);
$rs=@mysql_select_db($database) or die( "Unable to select database"); 

$sql = "SELECT * FROM birthdays" ;

$result = mysql_query( $sql )or die("SELECT Error: ".mysql_error());
$num_rows = mysql_num_rows($result);
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
<br>
<form method="POST" action="birthdays_delete_record.php">
<pre>
Enter Line Number to Delete: <input type="text" name="id" size="5">
<input type="submit" value="Submit"><input type="reset">
</pre>
</form>
</body>
</html>
