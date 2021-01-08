<?php 
    $result = checkdate(13,31,2021);

    if($result){
        echo "รูปแบบวันถูกต้อง";
    }else{
        echo "รูปแบบวันไม่ถูกต้อง";
    }
?>