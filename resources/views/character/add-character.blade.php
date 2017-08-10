@extends('cabal_layout')

@section('title', '| Add Characters')

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
		<h2>Create New Character </h2>
		
		<div class="col-md-12 compose-right">
			<div class="inbox-details-default">
				<div class="inbox-details-heading">
					
				</div>
				<div class="inbox-details-body">
					<div class="alert alert-info">
						Please all fields are required in order to add new Character
					</div>

					
					{!! Form::open(['route' => 'characters.store', 'method' => 'POST', 'files' => true]) !!}

					{{csrf_field()}}

					{{ Form::label('name', 'Name:') }}
					{{ Form::text('name', null, array('class'=>'form-control', 'required' => '', 'maxlength'=>'1000')) }}

					{{ Form::label('body', 'About Character:') }}
					{{ Form::textarea('body', null, array('class'=>'form-control')) }}
					<br/>
					{{ Form::label('img','Upload Banner Image') }}
					{{ Form::file('img', array('class'=>'btn btn-success btn-sm')) }}
					<br/>					  

					<!-- reset buttons -->
					{{ Form::reset('Reset', array('id'=>'','class'=>'btn btn-success btn-sm')) }}
					<br/>

					{{ Form::submit('Save Character', array('class'=>'btn btn-success btn-lg', 'style' => 'margin-top: 20px;' )) }}
					{!! Form::close() !!}

				</div>
			</div>
		</div>
		
		<div class="clearfix"> </div>     
	</div>


	@endsection