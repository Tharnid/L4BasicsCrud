<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">

	<style>
		table form {
			margin-bottom: 0;
		}

		form ul {
			margin-left: 0;
			list-style: none;
		}

		.error { color:red; font-style: itatic; }

		<body { padding-top: 20px; }

	</style>
</head>
<body>
	<div class="container">
		
		@if (Session::has('message'))
			<div class="flash alert">
				<p>{{ Session::get('message') }}</p>
			</div>	
		@endif
		@yield('content')
	</div>
</body>
</html>


