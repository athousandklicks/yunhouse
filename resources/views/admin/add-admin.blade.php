@extends('cabal_layout')

@section('title', '| Add Admin')

@section('links')

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

<script>
	tinymce.init({
		  selector: 'textarea',  // change this value according to your HTML

		  plugins: 'link autoresize hr spellchecker searchreplace advlist lists table textcolor textpattern wordcount textcolor colorpicker anchor insertdatetime media'
		});
	</script>

	@endsection

	@section('content')

	
	<div class="inbox">
		<h2>Add an Admin </h2>
		
		<div class="col-md-12 compose-right">
			<div class="inbox-details-default">
				<div class="inbox-details-heading">
					
				</div>
				<div class="inbox-details-body">
					<div class="alert alert-info">
						Please all fields are required in order to add new Admin
					</div>

					{!! Form::open(['route' => 'admins.store', 'method' => 'POST']) !!}

					{{csrf_field()}}

					{{ Form::label('name', 'Name of Admin:') }}
					{{ Form::text('name', null, array('class'=>'form-control', 'required' => '', 'maxlength'=>'255')) }}

					{{ Form::label('email', 'Enter Email:') }}
					{{ Form::text('email', null, array('class'=>'form-control')) }}

					{{ Form::label('password', 'Enter Password:') }}
					{{ Form::password('password', array('class' => 'form-control')) }}

					<br>

					{{ Form::submit('Save Admin', array('class'=>'btn btn-success btn-lg', 'style' => 'margin-top: 20px;' )) }}
					{!! Form::close() !!}

				</div>
			</div>
		</div>
		
		<div class="clearfix"> </div>     
	</div>


	@endsection