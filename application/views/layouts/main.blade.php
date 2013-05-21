<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Sulit BackOffice</title>
		{{ Asset::styles() }}
        {{ Asset::scripts() }}
	</head>
	<body>
		<div class="navbar">
			<div class="navbar-inner">
				<a class="brand" href="#">Dashboard</a>
				<ul class="nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="{{ URL::to('admin/roles') }}">Roles</a></li>
						</ul>
					</li>
					<li><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
				</ul>
			</div>
		</div>

		<div class="container">
            @yield('content')
            <hr>
            <footer>
            <p>&copy; Instapics 2012</p>
            </footer>
        </div>
	</body>
</html>