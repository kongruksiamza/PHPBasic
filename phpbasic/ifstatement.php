<?php
/*
คะแนน (score)

มากกว่า 80 => A
มากกว่า 70 => B
มากกว่า 60 => C
มากกว่า 50 => D
อื่นๆ => F
*/
$score=20;
$grade = "";

if($score>=80){
    $grade="A";
}
else if($score>=70){
    $grade="B";
}
else if($score>=60){
    $grade="C";
}
else if($score>=50){
    $grade="D";
}
else{
    $grade="F";
}

echo "คะแนนของคุณ คือ ".$score." เกรดที่ได้  = ".$grade;

?>