<?php
header('Content-type: text/html; charset=utf-8');
?>
<html>
<head>
<title>
Калькулятор
</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script language="JavaScript">

function RadioColor(i)
{
if (i==0) document.bgColor="Red";
if (i==1) document.bgColor="Green";
if (i==2) document.bgColor="Pink";
if (i==3) document.bgColor="Blue";
if (i==4) document.bgColor="Yellow";

}
function calc()
{

var a=parseFloat(document.myform.a.value);
var b=parseFloat(document.myform.b.value);
var kilkist=parseFloat(document.myform.kilkist.value);

document.myform.result.value=document.myform.result.value+(a*b*kilkist*41/100);

if (document.myform.check1.checked)
alert("Самовывоз");
else
alert("Доставка на дом");
}

</script>
</head>
<body>
<form name=myform action="gr.php">
<P ALIGN="CENTER">
<INPUT TYPE="RADIO" ONCLICK="RadioColor(0);" NAME="cvet" value=" Red"><FONT SIZE="4">Красные</FONT><br>
<INPUT TYPE="RADIO" ONCLICK="RadioColor(1);" NAME="cvet" value=" Green"><FONT SIZE="4">Зеленые</FONT><br>
<INPUT TYPE="RADIO" ONCLICK="RadioColor(2);" NAME="cvet" value=" Pink"><FONT SIZE="4">Розовые</FONT><br>
<INPUT TYPE="RADIO" ONCLICK="RadioColor(3);" NAME="cvet" value=" Blue"><FONT SIZE="4">Синие</FONT><br>
<INPUT TYPE="RADIO" ONCLICK="RadioColor(4);" NAME="cvet" value=" Yellow"><FONT SIZE="4">Солнечные</FONT><br>
<br>
Самовывоз?
<input type="checkbox" name="check1"> <br><br>
Введите высоту: <br><input type=text name=b><br>

Введите ширину: <br><input type=text name=a><br>

Выберите вид:<br> <select name="Vid">
<option selected value=" gorizontalnye">Горизонтальные</option>
<option value=" vertikalnye">Вертикальные</option>
<select><br>
Выберите количество (от 1 до 7): <br><input type=text name="kilkist"><br>

<input type=button value="Стоимость" onClick="calc();"><br>
<input type=submit value="Показать результат"><br>
<textarea name="result">
</textarea></P>
</form>
</body> 
</html>
