<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php if(\Session::has('error')):  ?>
	<div class="alert alert-danger" id="abc" role="alert">
		<?php echo \Session::get('error')  ?>
	</div>
	<?php  endif;  ?>
	<form action="/user-2" method="post">
		<input type="text" name="username" value="{{old('username')}}">
		<input type="text" name="password" value="{{old('password')}}">
		{{csrf_field()}}
		<button>提交</button>
	</form>
	<script>

	</script>
</body>
</html>