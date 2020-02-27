<body>
 <h1> PHP- MY CALCULATOR</h1>
<form action="laiii.php" method="post">
    <input type="text" name="n" value="" placeholder="First number"><br>
	<input type="text" name="n2" value="" placeholder="Second number"><br>
	<input type="submit" name="a" value="  ADDITION ( + ) ">
	<input type="submit" name="s" value="  SUBTRACTION ( - )">
	<input type="submit" name="m" value="   MULTIPLICATION ( * ) ">
	<input type="submit" name="d" value="   DIVISION ( / ) ">	
</form>
<?php
if(isset($_POST['a'])) 
{
    $n = $_POST['n']; 
	$n2 = $_POST['n2']; 
	$add = $n+$n2; 
	echo "The Result Is: ".$add; 
}

if(isset($_POST['s']))
{
    $n = $_POST['n']; 
	$n2 = $_POST['n2']; 
	$s = $n-$n2; 
	echo "The Result Is: ".$s; 
}

if(isset($_POST['m'])) 
{
    $n = $_POST['n']; 
	$n2 = $_POST['n2']; 
	$m = $n*$n2; 
	echo "The Result Is: ".$m; 
}

if(isset($_POST['d'])) 
{
    $n = $_POST['n']; 
	$n2 = $_POST['n2']; 
	$d = $n/$n2; 
	echo "The Result Is: ".$d; 

}
?>
