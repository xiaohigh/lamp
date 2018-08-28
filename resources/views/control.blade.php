<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>控制</title>
</head>
<body>
	<h2>流程控制</h2>
	@if($isVip)
		<span style="color:red">VIP</span> 
	@endif

	<h2>循环控制</h2>
	<h2>选择题</h2>
	LAMP 207 最帅气的男生
	<ul>
	@foreach($classmates as $v)
		<li>{{$v}} <input type="radio" name="boy"></li>
	@endforeach
	</ul>
</body>
</html>