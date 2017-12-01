<!DOCTYPE html>
<html>
<head>
	<title>添加日程</title>
	<meta charset="utf-8">
</head>
<body>
<center>
<form action="add" method="post">
	<table>
		<tr>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
			<td>提醒时间：</td>
			<td>
				<input type="text" name="remindTime" id="calen2">
			</td>
		</tr>
		<tr>
			<td>提醒内容：</td>
			<td>
				<textarea name="remindContent"></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="添加">
			</td>
		</tr>
	</table>
</form>
</center>
</body>
</html>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/GooCalendar.css')}}"/>
<script  type="text/javascript" src="{{ asset('/js/codebase/jquery-1.3.2.min.js')}}"></script>
<script  type="text/javascript" src="{{ asset('/js/codebase/GooFunc.js')}}"></script>
<script  type="text/javascript" src="{{ asset('/js/codebase/GooCalendar.js')}}"></script>
<script type="text/javascript">
$(document).ready(function(){
	var property2={
	divId:"demo2",//日历控件最外层DIV的ID
	needTime:true,//是否需要显示精确到秒的时间选择器，即输出时间中是否需要精确到小时：分：秒 默认为FALSE可不填
	yearRange:[1970,2030],//可选年份的范围,数组第一个为开始年份，第二个为结束年份,如[1970,2030],可不填
	week:['日','一','二','三','四','五','六'],//数组，设定了周日至周六的显示格式,可不填
	month:['一月','二月','三月','四月','五月','六月','七月','八月','九月','十月','十一月','十二月'],//数组，设定了12个月份的显示格式,可不填
	format:"yyyy-MM-dd hh:mm:ss"
	/*设定日期的输出格式,可不填*/
};
//	canva1=$.createGooCalendar("calen",property);
	canva2=$.createGooCalendar("calen2",property2);
	//canva2.setDate({year:2008,month:11,day:22,hour:14,minute:52,second:45});
});
</script>