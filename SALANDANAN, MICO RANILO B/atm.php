<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ATM MACHINE</title>
</head>

<body>
<center>
<form action="atm.php" method="post">
<table>
<tr><td><input type="number" name="value"></td></tr>
<tr><td><input type="submit" name="btn"></td></tr>
</table>
</form>
</center>
</body>
</html>
<?php
$value = 0;
$num1 = 0;
if(isset($_POST['btn']))
{
	$value = $_POST['value'];
	if($value==0 || $value=="")
	{
		echo "value not acceptable";
		
	}
	else
	{
		$num1 = $value/1000;
		$num1s = (int)$num1;
		echo "1000 notes : " . $num1s . "<br>";
		$value = $value - ($num1s * 1000);
		$num2 = $value/500;
		$num2s = (int)$num2;
		echo "500 notes : " . $num2s . "<br>";
		$value = $value - ($num2s * 500);
		$num3 = $value/200;
		$num3s = (int)$num3;
		echo "200 notes : " . $num3s . "<br>";
		$value = $value - ($num3s * 200);
		$num4 = $value/100;
		$num4s = (int)$num4;
		echo "100 notes : " . $num4s . "<br>";
		$value = $value - ($num4s * 100);
		
	}
}
?>