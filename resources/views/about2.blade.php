<!DOCTYPE html>
<html>
<head>
	<title>Krisha's ONMOUSE</title>
<script type="text/javascript">
function over()
{
document.bgColor="pink";
}
function out()
{
document.bgColor="grey";
}
</script>
</head>
<body>
<p>
Bring your mouse inside the division to see the result:
</p>
<div onmouseover="over()" onmouseout="out()">
<h2>This is inside the division</h2> 
</div>
</body>
</html>