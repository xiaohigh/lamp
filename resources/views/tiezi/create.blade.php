<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="/tiezi" method="POST">
		<input type="text" name="abc">
		{{csrf_field()}}
		<button>提交</button>
	</form>
</body>
</html>