<!DOCTYPE html>
<html lang="en">

<head>
	@include('partials.head')
</head>
@yield('stylesheet')

<body>
	<div id="main-wrapper" class="homepage-two">



		<div class="container">
			@yield('content')
		</div>

		@include('partials.footer')
	</div><!--/#main-wrapper-->    


	@include('partials.javascripts')

	@yield('scripts')

</body>
</html>