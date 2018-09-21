<!DOCTYPE html>
<html lang="en">

<head>
	@include('partials.head')
	@yield('stylesheet')
</head>


<body>
	<div id="main-wrapper-home" class="homepage-two">
@include('partials.topbar')

@include('partials.palaver-nav')

		<div class="container">
			@yield('content')
		</div>

		@include('partials.palaver-footer')
	</div><!--/#main-wrapper-->    


	@include('partials.javascripts')

	@yield('scripts')

</body>
</html>