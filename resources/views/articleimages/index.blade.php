@extends('cabal_layout')

@section('title', '| Add Review')


@section('content')


<div class="inbox">
	<h2>Add a Review </h2>
	<div class="row">
		<div class="col-md-8 compose-right">
			<div class="inbox-details-default">
				<div class="inbox-details-heading">

				</div>
				<div class="inbox-details-body">
					<div class="alert alert-info">
						Please choose an Image to add
					</div>

					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Thumbnail</th>
								<th>Name</th>
							</tr>
						</thead>

						<tbody>
							@foreach ($article_images as $article_image)
							<tr>
								<th>{{ $article_image->id }}</th>
								<th><img src="/images/articles/{{$article_image->image_link}}" width="50" height="50" alt="image description"></th>
								<td>{{ $article_image->image_link }}</td>
							</tr>
							@endforeach
						</tbody>
					</table>

				</div>
			</div>
		</div>

		<div class="col-md-4 compose-right">
			<div class="inbox-details-default">
				<div class="inbox-details-heading">

				</div>
				<div class="inbox-details-body">
					<div class="alert alert-info">
						Please all fields are required in order to add new review
					</div>

					{!! Form::open(['route' => 'articleimages.store', 'method' => 'POST', 'files' => true]) !!}
					{{csrf_field()}}

					{{ Form::label('image_link','Upload an Image') }}
					{{ Form::file('image_link', array('class'=>'btn btn-success btn-sm')) }}
					<br/>
					<!-- reset buttons -->
					{{ Form::reset('Reset', array('id'=>'','class'=>'btn btn-success btn-sm')) }}
					<br/>
					{{ Form::submit('Save Review', array('class'=>'btn btn-success btn-lg', 'style' => 'margin-top: 20px;' )) }}
					{!! Form::close() !!}

				</div>
			</div>
		</div>

		<div class="clearfix"> </div>     
	</div>
</div>


@endsection