<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>MY CALCULATOR</title>
</head>

<body>
<form>
 <body text="blue">
     <input type="text"   name="num1" style="background-color:pink" placeholder="1st Number">
	 <br>
	 <input type="text"  name="num2" style="background-color:pink"   placeholder="2nd Number">
	 <select name="operator">
	     <option>None</option>
	     <option>Addition</option>
		 <option>Subtract</option>
		 <option>Multiply</option>
		 <option>Divide</option>
		 <option>Modulos</option>	 
	</select>	
	<br>
	<button type="submit"  name="submit" value="submit">Calculate</button>
</form>
<p>The Right Answer:</p>
<?php   

	 if (isset($_GET['submit'])) {
		 $result1 = $_GET['num1'];
		 $result2 = $_GET['num2'];
	 $operator = $_GET['operator'];
	 switch ($operator) { 
			 case "None":
			     echo "You need to select a method!";
			  break;
			 case "Addition":
			     echo $result1 + $result2;
			  break;
			 case "Subtract":
			     echo $result1 - $result2;
			  break;	
			 case "Multiply":
			     echo $result1 * $result2;
			  break;
			 case "Divide":
			     echo $result1 / $result2;
			  break;			  
			 case "Modulos":
			     echo $result1 % $result2;
			  
				 	 	 	 	 
	     }
	 }

?>

</body>

</html>