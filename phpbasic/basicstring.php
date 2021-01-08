<?php 

$pass="hello55";

echo "รหัส = ".$pass."<br>";

$result=md5($pass);
echo "md5 = ".$result."<br>";

$result=sha1($pass);
echo "sha1 = ".$result."<br>";

$result=crypt($pass,"//dd");
echo "crypt = ".$result."<br>";


$encode=base64_encode($pass);
echo "encode = ".$encode."<br>";

$result=base64_decode($encode);
echo "decode = ".$result."<br>";
?>