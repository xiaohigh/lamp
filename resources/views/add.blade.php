<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="/user/insert" method="post">
		<input type="text" name="username">
		{{csrf_field()}}
		<button>提交</button>
	</form>
</body>
</html>