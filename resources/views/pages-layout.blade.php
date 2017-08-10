<!DOCTYPE html>
<html lang="en">

<head>
	@include('partials.head')
	@yield('stylesheet')
</head>


<body>
@include('partials.topbar')
	<div id="main-wrapper" class="page">
@include('partials.navigation')


		<div class="container">
			@yield('content')
		</div>

		@include('partials.footer')
	</div><!--/#main-wrapper-->    


	@include('partials.javascripts')

	@yield('scripts')

</body>
</html>