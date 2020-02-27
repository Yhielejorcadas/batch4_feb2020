<?php

function compute()
{
	$num1 = $_POST['Firstnum'];
	$num2 = $_POST['Secondnum'];
	
	switch($_POST['dropdown'])
	{
		case "Addition";
			$sum = $num1 + $num2;
			return $sum;
			break;
			
			case "Substraction";
			$diff = $num1 - $num2;
			return $diff;
			break;
			
			case "Multiplication";
			$prod = $num1 * $num2;
			return $prod;
			break;
			
			case "Division";
			$quo = $num1 / $num2;
			return $quo;
			break;
		default:
			echo "Invalid Operation";			
	}	
}

		echo "The Result is: " . compute();	
?>
<br>
<a href = "calcu.php">Back</a>
