<html><head><title></title></head>
<body>
<?php
include("dbinfo.inc.php");
$comm=@mysql_connect(localhost,$username,$password);
$rs=@mysql_select_db($database) or die( "Unable to select database"); 
$id=$_POST['id'];

$sql="SELECT * FROM birthdays WHERE id='$id'";

//mysql_connect(localhost,$_POST['username'],$_POST['pass']);

$result=mysql_query($sql);
$num=mysql_num_rows($result);

$i=0;
while ($i < $num) {
$name=mysql_result($result,$i,"name");
$birthday=mysql_result($result,$i,"birthday");
?>
<table width="300" cellpadding="10" cellspacing="0" border="2">
<tr align="center" valign="top">
<td align="center" colspan="1" rowspan="1" bgcolor="#ffcc99">
<h3>Edit and Submit</h3>
<form action="birthdays_change_record.php" method="post">
<input type="hidden" name="ud_id" value="<?php echo "$id" ?>">
Name:    <input type="text" name="ud_name" value="<?php print "$name"?>"><br>
Birthday:    <input type="text" name="ud_birthday" value="<?php echo "$birthday"?>"><br>
<input type="Submit" value="Update">
</form>
</td></tr></table>

<?php
++$i;
}
?>
</body>
</html>
