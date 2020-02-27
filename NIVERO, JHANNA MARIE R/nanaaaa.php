<html>
	<head>
		<title>Calcute</title>
		
	 <form action="process1.php" method="post">
		
	</head>
	<body>	
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
		if($_POST['operation'] == 'divided by')
		{
		$total = $_POST['number1'] / $_POST['number2'];	
		}
		
		
		echo "<li>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} = {$total}</li>";
		
		} else {
		
		echo 'Numeric values are required';
		
		}
		}
		
		?>
	    
	    
	     <form action="process1" method="post">
	        <input name="number1" type="text" class="form-control" s                    tyle="width: 150px; display: inline" />
	        <select name="operation">
	        	<option value="+">addition</option>
	            <option value="-">subtraction</option>
	            <option value="*">Multiplication</option>
	            <option value="/">Division</option>
	        </select>
	        <input name="number2" type="text" class="form-control" style="width: 150px; display: inline" />
	        <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
	    </form>
	    
		</div>
	
	</body>
</html>