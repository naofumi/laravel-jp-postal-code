<html>
	<head>
		<title>@yield('title')</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

		<script type="module">
		  import hotwiredTurbo from 'https://cdn.skypack.dev/@hotwired/turbo';
		</script>
	</head>
	<body>
		<div class="container-md">
			<h1>@yield('title')</h1>
			<div>
				@yield('content')
			</div>
		</div>
	</body>
</html>
