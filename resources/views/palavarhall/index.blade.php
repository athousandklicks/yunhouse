@extends('pages-layout')

<?php $titleTag = htmlspecialchars($tale->title); ?>

@section('title', "| $titleTag")

@section('content')

<div class="page-breadcrumbs">
	<h1 class="section-title"> Hello {!! $user->name !!}, welcome to the dicussion on {!! $tale->title !!}</h1>
</div>
<div class="section">

	<div class="row">
		<div class="col-sm-12">		

			<div class="comments-box">
				<h1 class="section-title title">Have your say</h1>


				
				<div class="row">
					<div id="comment-form" class="col-md-8 col-md-offset-2" style="margin-top: 50px;">

						{{ Form::open(['route' => ['comments.store', $tale->id], 'method' => 'POST']) }}

						<div class="row">
							<div class="col-md-6">
								{{ Form::label('name', "Name:") }}
								{{ Form::text('name',  $user->name, ['class' => 'form-control', 'readonly']) }}
							</div>

							<div class="col-md-6">
								{{ Form::label('email', 'Email:') }}
								{{ Form::text('email', $user->email, ['class' => 'form-control', 'readonly']) }}
							</div>

							<div class="col-md-12">
								{{ Form::label('comment', "Comment:") }}
								{{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) }}

								{{ Form::submit('Add your say', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px;']) }}
							</div>
						</div>

					</form>
				</div>
			</div>



		<div class="comments-wrapper">
<h3 class="comments-title"><span class="glyphicon glyphicon-comment"></span>  {{ $tale->comments()->count() }} Comments</h3>

			<ul class="media-list">
			@foreach($tale->comments as $comment)
				<li class="media">
					<div class="media-left">
						
						<img src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?s=50&d=mm" }}" class="media-object">
					</div>
					<div class="media-body">
						<h2>{{ $comment->name }}</h2>
						<h3 class="date">{{$comment->created_at->toFormattedDateString()}}</h3>
						<p>{{ $comment->comment }}</p>
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