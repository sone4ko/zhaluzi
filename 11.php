<html>
<head>
</head>
<body>
<H1>Калькулятор обчислення вартості жалюзі</H1>
<table border=2>
<tr> <td>cvet</td> <td>Vid</td> <td>kilkist</td> <td>result</td> </tr>
<?php
$fp=fopen("res.txt","r");
if ($fp)
   {
   while(!feof($fp))
   {
    $stroka=fscanf($fp,"%s\t %s\t %d\t %d\n");
       list($cvet,$Vid,$kilkist,$result)=$stroka;
echo "<TR><td>$cvet</td> <td>$Vid</td> <td>$kilkist</td> <td>$result</td> </TR>";
}
fclose($fp);
}
?>
</body>
</html>
