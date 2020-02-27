


<form action="Calc2process.php"  method="post">
   <table style="background:#395796;width:320px;color:#FFF;padding:10px;">
        <tr>
            <td>Enter First Number</td>
            <td colspan="1"><input name="firstnumber" type="number" /></td>
        </tr>
        <tr>
            <td>Select Operator</td>
            <td>
                <select name="operator" style="width: 100px">
                    <option>+</option>
                    <option>-</option>
                    <option>*</option>
                    <option>/</option>
                </select>
             </td>
        </tr>
        <tr>
            <td>Enter Second Number</td>
            <td><input name="secondnumber" type="number" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="calculate" value="Calculate" /></td>
        </tr>
        
    </table>
</form>