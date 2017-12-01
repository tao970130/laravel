<!DOCTYPE html>
<html>
<head>
	<title>登录</title>
	<meta charset="utf-8">
</head>
<body>
<center>
<form action="login" method="post">
	<table>
	<input type="hidden" name="_token" value="{{csrf_token()}}">
		<tr>
			<td>用户名：</td>
			<td>
				<input type="text" name="username">
			</td>
		</tr>
		<tr>
			<td>密码：</td>
			<td>
				<input type="password" name="password">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="登录">
			</td>
		</tr>
	</table>
</form>
</center>
</body>
</html>