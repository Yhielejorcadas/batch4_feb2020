<html>
	<body>
		<head>
			<title>MyCalculator</title>
		</head>
		
		<form action = "calcu_process.php" method = "POST">
		<label>Select an Operation: </label>
		<select name = "dropdown">
			<option></option>
			<option value = "Addition">Addition</option>
			<option value = "Substraction">Substraction</option>
			<option value = "Multiplication">Multiplication</option>
			<option value = "Division">Division</option>
			</select><br></br>
			Enter the first number: <input type="text" name = "Firstnum" required/><br></br>
			Enter the Second number: <input type="text" name = "Secondnum" required/><br></br>
			<input type = "submit" value = "Enter"/>
</form>
	</body>
</html>
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
