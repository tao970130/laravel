<!DOCTYPE html>
<html>
<head>
	<title>列表</title>
	<meta charset="utf-8">
</head>
<body>
<center>
<table border="1">
	<tr>
		<td>标题</td>
		<td>内容</td>
		<td>操作</td>
	</tr>
	@foreach($data as $k)
	<tr>
		<td>{{$k['title']}}</td>
		<td>{{$k['content']}}</td>
		<td>
			<a href="del?id={{$k['m_id']}}">删除</a>|
			<a href="update?id={{$k['m_id']}}">修改</a>
		</td>
	</tr>
	@endforeach
</table>
</center>
</body>
</html>