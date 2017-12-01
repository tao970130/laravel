<!DOCTYPE html>
<html>
<head>
	<title>添加</title>
</head>
<body>
<center>
<form action="add" method="post">
	<table>
		<tr>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
			<td>标题：</td>
			<td>
				<input type="text" name="title">
			</td>
		</tr>
		<tr>
			<td>内容：</td>
			<td>
				<textarea name="content"></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="发表">
			</td>
		</tr>
	</table>
</form>
</center>
</body>
</html>