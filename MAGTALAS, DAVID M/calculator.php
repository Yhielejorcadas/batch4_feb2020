<!DOCTYPE html>

<html>
	<head>
		<title>Calculator</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	 
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		
		<div class="container" style="margin-top: 50px">
		
		<?php
		
		
		if(isset($_POST['submit']))
		{
		
		if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
		{
		
		if($_POST['operation'] == 'plus')
		{
		$total = $_POST['number1'] + $_POST['number2'];	
		}
		if($_POST['operation'] == 'minus')
		{
		$total = $_POST['number1'] - $_POST['number2'];	
		}
		if($_POST['operation'] == 'multiply')
		{
		$total = $_POST['number1'] * $_POST['number2'];	
		}
		if($_POST['operation'] == 'divided by'){
		$total = $_POST['number1'] / $_POST['number2'];	
		}
		if($_POST['operation'] == 'modulos'){
		$total = $_POST['number1'] % $_POST['number2'];	
		}
		
		echo "<h1>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} equals {$total}</h1>";
		
		} else {
		
		
		echo 'Numeric values are required';
		
		}
		}
		
		?>
	    
	  
	    <form method="post" action="calculator.php">
	        <input name="number1" type="text" class="form-control" style="width: 150px; display: inline" />
	        <select name="operation">
	        	<option value="plus">+</option>
	            <option value="minus">-</option>
	            <option value="multiply">*</option>
	            <option value="divided by">/</option>
				  <option value="divided by">%</option>
	        </select>
	        <input name="number2" type="text" class="form-control" style="width: 150px; display: inline" />
	        <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
	    </form>
	    
		</div>
	
	</body>
</html>