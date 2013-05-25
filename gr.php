<?php
$cvet=$_REQUEST['cvet'];
echo "Цвет =$cvet <br>";
$Vid=$_REQUEST['Vid'];
echo "Вид =$Vid <br>";
$kilkist=$_REQUEST['kilkist'];
echo "Количество =$kilkist <br>";
$result=$_REQUEST['result'];
echo "$result <br>";
$fp=fopen("res.txt","a");
fputs($fp,"$cvet\t$Vid\t$kilkist\t$result\n");
fclose($fp);
?>
<br><a href="11.php"> Перегляд замовлення</a>

