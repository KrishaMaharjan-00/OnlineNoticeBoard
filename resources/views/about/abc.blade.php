<!DOCTYPE html>
	<html>
		<head>
			<title>Krisha's Onsubmit</title>
			<script type="text/javascript">
				function Validator(theForm)
				{
					var r=/^([a-zA-Z0-9]){6,}$/;
					var name=theForm.name.value;
						if(r.test(name)==false)
						{
							alert("Username must be alphanumeric character");
							theForm.name.focus();
							return (false);
						}
				}
			</script>
		</head>
		<body>
			<form method="post" action="bgcolor.html" onsubmit="return Validator(this)" name="theForm">
				Name:<input type="text" name="name"/>
				<br/>
				<input type="submit" name="submit" value="submit"/>
			</form>
		</body>
	</html>
