<!DOCTYPE html>
<html>
<body>
    <h2>Sum of n terms using recursion</h2>
    <form action="" method="POST">
        <label>Enter a number</label>
        <input type="number" value="" name="num"><br>
        <input type="submit">
    </form>
    <?php
    $n = $_POST["num"];
    function sum($num)
    {
        if($num < 1)
            return 0;
        else
            return($num+sum($num-1));
    }
    echo "Sum of first ".$n." natural numbers is : " . sum($n);
    ?>
</body>
</html>