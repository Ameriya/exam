<html>
<head>
<title>TExam test</title>
</head>
<body>
<?php
$connect = mysqli_connect('localhost','root','','ebanking');
if (mysqli_connect_error($connect)){
	echo 'Failed to connect';

$objDB = mysql_select_db("ebanking");
$strSQL = "INSERT INTO member ";
$strSQL .="(id_acc,number_acc,name_acc) ";
$strSQL .="VALUES ";
$strSQL .="('".$_POST["id_acc"]."','".$_POST["num_acc"]."','".$_POST["name_acc"]."' ";
$objQuery = mysql_query($strSQL);
if($objQuery)
{
	echo "Save Done.";
}
else
{
	echo "Error Save [".$strSQL."]";
}
mysql_close($objConnect);
?>
</body>
</html>