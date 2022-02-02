<?php
function started($str)
{
    echo $str."<br>";
}
function ended($str)
{
    echo $str."<br>";
}
function display($a, $b)
{
    $a("hello");
    $b("thanks");
}
display("started","ended");
?>
