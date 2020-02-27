<?php

$first_num = $_POST['fnum'];
$second_num = $_POST['lnum'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($first_num) && is_numeric($second_num)) {
    switch ($operator) {
        case "+":
          echo $result = $first_num + $second_num;  
            break;
        case "-":
          echo $result = $first_num - $second_num;
            break;
        case "*":
           echo $result = $first_num * $second_num;
            break;
        case "/":
           echo $result = $first_num / $second_num;
    }
}
 
?>
