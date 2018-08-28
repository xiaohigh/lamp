<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
</head>
<body>
	<header style="height:100px;background: #eee"></header>
	@section('content')
	<section style="height:400px;background: #908"></section>
	@show
	<footer style="height:100px;background: #ea0"></footer>
</body>
</html>