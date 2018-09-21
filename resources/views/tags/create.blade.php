@extends('cabal_layout')

@section('title', '| Add Tags')


@section('content')

<div class="blank">
<div class="inbox">
<h2>Create New Tag </h2>

	<div class="col-md-12 compose-right">
		<div class="inbox-details-default">
			<div class="inbox-details-heading">

			</div>
			<div class="inbox-details-body">
				<div class="alert alert-info">
					Please all fields are required in order to add new page
				</div>

				{!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}


				{{csrf_field()}}

				{{ Form::label('name', 'Tag Name:') }}
				{{ Form::text('name', null, array('class'=>'form-control', 'required' => '', 'maxlength'=>'255')) }}

				{{ Form::submit('Create Tag', array('class'=>'btn btn-success btn-lg', 'style' => 'margin-top: 20px;' )) }}
				{!! Form::close() !!}

			</div>
		</div>
	</div>

	<div class="clearfix"> </div>     
</div>
</div>

@endsection