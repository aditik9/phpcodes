<?php
    $a = "hello world";
    echo "Length of string ".$a." is = ".strlen($a);

    $b = "Hello Good Morning";
    echo "<br>STRING : ".$b;

    $output = explode(" ", $b);
    echo "<br><br>String after explode function  : ";
    print_r($output);
    echo "<br><br>";

    $subject = array("science", "maths", "english"); 
    echo "ARRAY : ";
    print_r($subject);

    $output1 = implode(" ", $subject);
    echo "<br><br>After using implode function  : ".$output1;

    $c = strpos($b, "name");
    echo "<br>".$c;

    echo "<br>".str_repeat($a,2);

    echo "<br>".strrev($a);
?>
