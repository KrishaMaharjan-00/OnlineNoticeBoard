<!doctype html>
<html>
<head>
<script language="javascript" type="text/javascript">
function cal(operator)
{
var a,b,c,opr;
a=document.getElementById("num1").value;
b=document.getElementById("num2").value;
opr=operator;
switch(opr)
{
case "+":
c=parseInt(a)+parseInt(b);
break;
case "-":
c=parseInt(a)-parseInt(b);
break;
case "*":
c=parseInt(a)*parseInt(b);
break;
case "/":
c=parseInt(a)/parseInt(b);
break;
case "%":
c=parseInt(a)%parseInt(b);
break;
}
document.getElementById("answer").innerHTML=c;
}
</script>
<title>Krisha's Calculator</title>
</head>
<body>
<table border="2">
<form>
<tr>
<td>1st Number</td>
<td><input type="number" name="1no" id="num1"></td>
</tr>
<tr>
<td>2nd Number</td>
<td><input type="number" name="2no" id="num2"></td>
</tr>
<tr>
<td>Operator:</td>
<td><select name="operator">
<option value="+">+</option>
<option value="-">-</option>
<option value="*" selected="selected">*</option>
<option value="/">/</option>
<option value="%">%</option>
</select>
</td>
</tr>
<tr>
<td colspan="2">Answer is <font color="black" size="20.2" id="answer"></font></td>
</tr>
<tr><td colspan="2" ><input type="button" value="Calculate" onclick="cal(operator.value)"></td></tr>
</form>
</table>
</body
</html>