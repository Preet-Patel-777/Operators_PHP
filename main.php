<?php
echo "<H1>OPERATORS:</H1>";

//Aritmetic Operators

echo "<h3>Arithmetic Operators</h3>";

$n1 = 10;
$n2 = 2;

echo "Number-1 : $n1<br>";
echo "Number-2 : $n2<br><br>";

$ans = $n1 + $n2; echo "Addition = $ans<br>";

$ans = $n1 - $n2; echo "Subtraction = $ans<br>";

$ans = $n1 * $n2;echo "Multiplication = $ans<br>";

$ans = $n1 / $n2;echo "Division = $ans<br>";

$ans = $n1 ** $n2; echo "Exponentiation = $ans<br>";

$ans = $n1 % $n2; echo "Modulus = $ans<br>";

//Comparison Operators

echo "<h3>Comparison Operators</h3>";

$n1 = 12;
$n2 = "12";

echo "Number-1 : $n1 as integer <br>";
echo "Number-2 : $n2 as string<br><br>";

$ans = ($n1 == $n2) ? 'True' : 'False';
echo "$n1 is equal to $n2 = $ans<br>";

$ans = ($n1 === $n2) ? 'True' : 'False';
echo "$n1 is equal to $n2 and are of same datatype = $ans<br>";

$ans = ($n1 != $n2) ? 'True' : 'False';
echo "$n1 is not equal to $n2 = $ans<br>";

$ans = ($n1 !== $n2) ? 'True' : 'False';
echo "$n1 is equal to $n2 and are not of same datatype = $ans<br>";

$ans = ($n1 > $n2) ? 'True' : 'False';
echo "$n1 is Greater than $n2 = $ans<br>";

$ans = ($n1 < $n2) ? 'True' : 'False';
echo "$n1 is Less than $n2 = $ans<br>";

$ans = ($n1 >= $n2) ? 'True' : 'False';
echo "$n1 is Greater than or equal to $n2 = $ans<br>";

$ans = ($n1 <= $n2) ? 'True' : 'False';
echo "$n1 is Less than or equal to $n2 = $ans<br>";

//Logical Operators

echo "<h3>Logical Operators</h3>";


$n1 = 10;
$n2 = 2;

echo "Number-1 : $n1<br>";
echo "Number-2 : $n2<br><br>";

$cond1 = $n1 == $n2;  
$cond2 = $n1 != $n2;  

echo "Condition-1 : $n1 == $n2 <br>";
echo "Condition-2 : $n1 != $n2 <br><br>";

$ans = ($cond1 and $cond2) ? 'True<br>' : 'False<br>';
echo "Both condition are true = $ans";

$ans = ($cond1 or $cond2) ? 'True<br>' : 'False<br>';
echo "Either one condition is true = $ans";

$ans = ($cond1 xor $cond2) ? 'True<br>' : 'False<br>';
echo "Exactly one condition is true = $ans";

$ans = (! $cond2) ? 'True<br>' : 'False<br>';
echo "Conditon 2 is true = $ans";

$ans = ($cond1 && $cond2) ? 'True<br>' : 'False<br>';
echo "Both condition are true = $ans";

$ans = ($cond1 || $cond2) ? 'True<br>' : 'False<br>';
echo "Either one condition is true = $ans";

?>
