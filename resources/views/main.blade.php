<!DOCTYPE html>
<html lang="en">

<head>
	@include('partials.head')
</head>


<body>

	<!-- *** TOPBAR *** -->
	@include('partials.topbar')
	<!-- *** TOP BAR END *** -->


	<!-- *** NAVBAR *** -->
	@include('partials.nav')
	<!-- *** NAVBAR END *** -->


	<!-- *** BODY CONTENT *** -->
	<div id="all">
		@yield('content')

		@include('partials.footer')
	</div>
	<!-- /#all -->    
	<!-- *** BODY CONTENT END *** -->

	@include('partials.javascripts')

	@yield('scripts')

</body>
</html>