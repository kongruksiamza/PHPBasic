<?php
date_default_timezone_set("Asia/Bangkok");

$result=checkdate(2,29,2021);

if($result){
    echo "รูปแบบวันถูกต้อง";
}else{
    echo "รูปแบบวันไม่ถูกต้อง";
}
?>