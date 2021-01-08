<?php 

// global
$x = 500;
$y = 10;

function showNumber(){
    global $x;
    $GLOBALS ["z"] = 50000;
    // local
    print("ตัวแปร x = ".$x."<br>");
}
showNumber();
print("ค่า x = ".$x."<br>");
print("ค่า z = ".$z."<br>");
?>