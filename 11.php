<?php
header('Content-type: text/html; charset=utf-8');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
    $stroka=fscanf($fp,"%s\t%s\t%s\t%d\n");
    list($cvet,$Vid,$kilkist,$result)=$stroka;
echo "<TR><td>$cvet</td> <td>$Vid</td> <td>$kilkist</td> <td>$result</td> </TR>";
}
fclose($fp);
}
?>
</body>
</html>
