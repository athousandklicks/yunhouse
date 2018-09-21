@extends('cabal_layout')

@section('title', '| Admin Area')

@section('content')

<div class="blank">
<!--market updates updates-->
<div class="market-updates">
	<div class="col-md-4 market-update-gd">
		<div class="market-update-block clr-block-1">
			<div class="col-md-8 market-update-left">
				<h4>1. NUMBER OF USERS</h4>
				<h3>{{$users->count()}}</h3>
			</div>
			<div class="col-md-4 market-update-right">
				<i class="fa fa-file-text-o"> </i>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="col-md-4 market-update-gd">
		<div class="market-update-block clr-block-2">
			<div class="col-md-8 market-update-left">
				<h4>2. NUMBER OF TALES</h4>
				<h3>{{$tales->count()}}</h3>
			</div>
			<div class="col-md-4 market-update-right">
				<i class="fa fa-photo"> </i>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="col-md-4 market-update-gd">
		<div class="market-update-block clr-block-1">
			<div class="col-md-8 market-update-left">
				<h4>3. NUMBER OF REVIEWS</h4>
				<h3>{{$reviews->count()}}</h3>
			</div>
			<div class="col-md-4 market-update-right">
				<i class="fa fa-photo"> </i>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	

	<div class="clearfix"> </div>
</div>
<!--market updates end here-->
<div class="cleartop"> </div>
<p>.</p>

<!--market updates updates-->
<div class="market-updates">

	<div class="col-md-4 market-update-gd">
		<div class="market-update-block clr-block-2">
			<div class="col-md-8 market-update-left">
				<h4>4. NUMBER OF COMMENTS</h4>
				<h3>{{$comments->count()}}</h3>
			</div>
			<div class="col-md-4 market-update-right">
				<i class="fa fa-calendar"> </i>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="col-md-4 market-update-gd">
		<div class="market-update-block clr-block-1">
			<div class="col-md-8 market-update-left">
				<h4>5. NUMBER OF DOWNLOADS</h4>
				<h3>{{--$users->count()--}}</h3>
			</div>
			<div class="col-md-4 market-update-right">
				<i class="fa fa-calendar"> </i>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="col-md-4 market-update-gd">
		<div class="market-update-block clr-block-2">
			<div class="col-md-8 market-update-left">
				<h4>6. NUMBER OF ADMINS</h4>
				<h3>{{$admins->count()}}</h3>
			</div>
			<div class="col-md-4 market-update-right">
				<i class="fa fa-calendar"> </i>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>


	<div class="clearfix"> </div>
</div>
<!--market updates end here-->
<div class="cleartop"> </div>
<p>.</p>

<!--market updates updates-->
<div class="market-updates">

	<div class="col-md-4 market-update-gd">
		<div class="market-update-block clr-block-2">
			<div class="col-md-8 market-update-left">
				<h4>7. NUMBER OF DEBATES</h4>
				<h3>{{$debates->count()}}</h3>
			</div>
			<div class="col-md-4 market-update-right">
				<i class="fa fa-calendar"> </i>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="col-md-4 market-update-gd">
		<div class="market-update-block clr-block-1">
			<div class="col-md-8 market-update-left">
				<h4>8. NUMBER OF TAGS</h4>
				<h3>{{$tags->count()}}</h3>
			</div>
			<div class="col-md-4 market-update-right">
				<i class="fa fa-calendar"> </i>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>



	<div class="clearfix"> </div>
</div>
<!--market updates end here-->

<div class="cleartop"> </div>
<p>.</p>



<div class="cleartop"> </div>
<p>.</p>

<script type="text/javascript">
	@include('partials._cabalmodaljs')
</script>


</div>




@endsection