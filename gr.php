<?php
$cvet=$_REQUEST['cvet'];
echo "cvet=$cvet <br>";
$Vid=$_REQUEST['Vid'];
echo "Vid=$Vid <br>";
$kilkist=$_REQUEST['kilkist'];
echo "kilkist=$kilkist <br>";

echo "result=$result <br>";
$fp=fopen("res.txt","a");
fputs($fp,"$cvet\t$Vid\$kilkist\t$result\t");
fclose($fp);
?>
