@extends('pages-layout')

<?php $titleTag = htmlspecialchars($users->name); ?>

@section('title', "| $titleTag")

@section('content')

<div class="page-breadcrumbs">
	<h1 class="section-title"> Hello {!! $users->name !!}, Be kind to write a review.</h1>
</div>
<div class="section">

	<div class="row">
		<div class="col-sm-12">		

			<div class="comments-box">
						
				<div class="row">
					<div id="comment-form" class="col-md-8 col-md-offset-2" style="margin-top: 50px;">

						{{ Form::open(['route' => ['reviews.store', $users->id], 'method' => 'POST']) }}

						<div class="row">
							<div class="col-md-6">
								{{ Form::label('name', "Name:") }}
								{{ Form::text('name',  $users->name, ['class' => 'form-control', 'readonly']) }}
							</div>

							<div class="col-md-6">
								{{ Form::label('email', 'Email:') }}
								{{ Form::text('email', $users->email, ['class' => 'form-control', 'readonly']) }}
							</div>

							<div class="col-md-12">
								{{ Form::label('review', "Review:") }}
								{{ Form::textarea('review', null, ['class' => 'form-control', 'rows' => '5']) }}

								{{ Form::submit('Add your say', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px;']) }}
							</div>
						</div>

					</form>
				</div>
			</div>



		<div class="comments-wrapper">
<h3 class="comments-title"><span class="glyphicon glyphicon-comment"></span>  {{ $users->reviews()->count() }} Reviews</h3>

			<ul class="media-list">
			@foreach($users->reviews as $review)
				<li class="media">
					<div class="media-left">
						
						<img src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($reviews->email))) . "?s=50&d=mm" }}" class="media-object">
					</div>
					<div class="media-body">
						<h2>{{ $reviews->name }}</h2>
						<h3 class="date">{{$reviews->created_at->toFormattedDateString()}}</h3>
						<p>{{ $reviews->reviews }}</p>
						<a class="replay" href="#">Replay</a>
					</div>
				</li>
@endforeach

			</ul>


		</div>


	</div>
</div>
</div>

@endsection