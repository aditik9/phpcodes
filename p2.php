<?php
$sumOfOdd=0;
$sumOfSqr=0;
for($i=1 ; $i<=6 ; $i++)
{
    if($i % 2 != 0)
    {
        $sqr = $i * $i ;
        $sumOfSqr = $sumOfSqr + $sqr;
        $sumOfOdd = $sumOfOdd + $i;
        echo "<br>Square of ".$i. " is " .$sqr;
    }
}
echo "<br>Sum of odd numbers is " . $sumOfOdd;
echo "<br>Sum of square odd numbers is " . $sumOfSqr;
?>
