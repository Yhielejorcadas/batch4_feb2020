<html>
<head>
<meta charset="utf-8">
<title><?php echo"Atm"; ?></title>
</head>
<center>
<form action="atm.php" method="post">
<table>
<tr><td><input type="number" name="value"></td></tr>
<tr><td><input type="submit" name="btn"></td></tr>
</table>
</form>
</center>
<body>

</body>
</html>
<?php$value=0;
$num1=0;
if(isset($_POST['btn']))
{
		$value = $_POSt['value'];
	If(value==0 || $value=="");
	{
		echo "value not acceptable";
	}
	else
	{
		$num1 = $value/5000;
		$num1s = (iny)$num1;
		echo "5000 notes; " . #num1s . <br>
