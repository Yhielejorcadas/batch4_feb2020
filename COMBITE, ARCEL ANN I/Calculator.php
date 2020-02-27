<?php    
ini_set('display_errors',0);                  
    if( isset( $_POST['calculate'] ))
    {
        $operator=$_POST['operator'];
        if($operator=="+")
        {
            $var1 = $_POST['input1'];
            $var2 = $_POST['input2'];
            $result= $var1+$var2;
        }
        if($operator=="-")
        {
            $var1 = $_POST['input1'];
            $var2 = $_POST['input2'];
            $result= $var1-$var2;
        }
		if($operator=="*")
		{
			$var1 = $_POST['input1'];
            $var2 = $_POST['input2'];
            $result= $var1*$var2;
		}
		if($operator=="/")
		{
			$var1 = $_POST['input1'];
            $var2 = $_POST['input2'];
            $result= $var1/$var2;
		}
		if($operator=="%")
		{
			$var1 = $_POST['input1'];
            $var2 = $_POST['input2'];
            $result= $var1%$var2;
		}
       
        if($_POST['input1']==NULL || $_REQUEST['input2']==NULL)
        {
           echo "<script language=javascript> alert(\"Some of the fields are empty.\");</script>";
        }
    }
?>
<form method="post">
   <table style="background:#395796;width:320px;color:#FFF;padding:10px;">
        <tr>
            <td>Enter First Number</td>
            <td colspan="1"><input name="input1" type="number" /></td>
        </tr>
        <tr>
            <td>Select Operator</td>
            <td>
                <select name="operator" style="width: 100px">
                    <option>+</option>
                    <option>-</option>
                    <option>*</option>
                    <option>/</option>
					<option>%</option>
                </select>
             </td>
        </tr>
        <tr>
            <td>Enter Second Number</td>
            <td><input name="input2" type="number" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="calculate" value="Calculate" /></td>
        </tr>
        <tr>
            <td>Answer = </td>
            <td ><?php echo $result;?></td>
            
        </tr>
    </table>
</form>