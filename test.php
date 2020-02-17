<?php

$hash = (random_bytes(128));
echo $hash;
echo "<br>";
$random3 = base64_encode(md5($hash));
echo $random3;
echo "<br>";
$hash = bin2hex($hash);
echo $hash;
echo "<br>";
$hash = hex2bin($hash);
echo $hash;
echo "<br>";
$new = base64_encode(md5($hash));
echo $new;

?>