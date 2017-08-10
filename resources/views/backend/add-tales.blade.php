@extends('cabal_layout')

@section('title', '| Add Tales')

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
		<h2>Create New Page </h2>
		
		<div class="col-md-12 compose-right">
			<div class="inbox-details-default">
				<div class="inbox-details-heading">
					
				</div>
				<div class="inbox-details-body">
					<div class="alert alert-info">
						Please all fields are required in order to add new page
					</div>

					{!! Form::open(array('route' => 'tales.store')) !!}

					{{csrf_field()}}

					{{ Form::label('title', 'Title:') }}
					{{ Form::text('title', null, array('class'=>'form-control', 'required' => '', 'maxlength'=>'255')) }}

					{{ Form::label('body', 'Tale:') }}
					{{ Form::textarea('body', null, array('class'=>'form-control')) }}

					<br>
					<hr>
					{{ Form::label('published', 'Do you want to Publish this Tale now?') }}
					
					{{ Form::select('published', 
					['0' => 'DO NOT PUBLISH', '1' => 'PUBLISH'], null,array('class'=>'form-control')) }}

					{{ Form::submit('Save Tale', array('class'=>'btn btn-success btn-lg', 'style' => 'margin-top: 20px;' )) }}
					{!! Form::close() !!}

				</div>
			</div>
		</div>
		
		<div class="clearfix"> </div>     
	</div>


	@endsection