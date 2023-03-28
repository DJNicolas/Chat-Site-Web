<?
$dbhost = 'sql8.freemysqlhosting.net';
$dbuser = 'sql8609038';
$dbpass = 'TraCdny9lj';
 
$conn = mysql_connect($dbhost, $dbuser, $dbpass) 
or die ('Error connecting to mysql');
 
$dbname = 'sql8609038';
 
mysql_select_db($dbname);
 
$message = $_POST['message'];
 
if($message != "")
{
 $sql = "INSERT INTO `chat` VALUES('','$message')";
 mysql_query($sql);
}
 
$sql = "SELECT `Text` FROM `chat` ORDER BY `Id` DESC";
$result = mysql_query($sql);
 
while($row = mysql_fetch_array($result))
 echo $row['Text']."\n";
 
 
?>