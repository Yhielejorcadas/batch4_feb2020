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