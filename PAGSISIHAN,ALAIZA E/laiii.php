<?php
if(isset($_POST['a'])) 
{
    $n = $_POST['n']; 
	$n2 = $_POST['n2']; 
	$add = $n+$n2; 
	echo "".$add; 
}

if(isset($_POST['s']))
{
    $n = $_POST['n']; 
	$n2 = $_POST['n2']; 
	$s = $n-$n2; 
	echo " ".$s; 
}

if(isset($_POST['m'])) 
{
    $n = $_POST['n']; 
	$n2 = $_POST['n2']; 
	$m = $n*$n2; 
	echo " ".$m; 
}

if(isset($_POST['d'])) 
{
    $n = $_POST['n']; 
	$n2 = $_POST['n2']; 
	$d = $n/$n2; 
	echo " ".$d; 

}
?>