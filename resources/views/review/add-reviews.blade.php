@extends('cabal_layout')

@section('title', '| Add Review')

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
		<h2>Add a Review </h2>
		
		<div class="col-md-12 compose-right">
			<div class="inbox-details-default">
				<div class="inbox-details-heading">
					
				</div>
				<div class="inbox-details-body">
					<div class="alert alert-info">
						Please all fields are required in order to add new review
					</div>

						{!! Form::open(['route' => 'reviews.store', 'method' => 'POST', 'files' => true]) !!}


					{{csrf_field()}}

					{{ Form::label('reviewer', 'Name of Reviewer:') }}
					{{ Form::text('reviewer', null, array('class'=>'form-control', 'required' => '', 'maxlength'=>'255')) }}

					{{ Form::label('title', 'Title of Article:') }}
					{{ Form::text('title', null, array('class'=>'form-control', 'required' => '', 'maxlength'=>'255')) }}

					{{ Form::label('intro', 'Information About Yunhouse:') }}
					{{ Form::textarea('intro', null, array('class'=>'form-control')) }}

					{{ Form::label('body', 'Review:') }}
					{{ Form::textarea('body', null, array('class'=>'form-control')) }}

					<br>
					<hr>

					{{ Form::label('image_link','Upload Image (Optional)') }}
					{{ Form::file('image_link', array('class'=>'btn btn-success btn-sm')) }}
					
					<br/>
					<hr>
					{{ Form::label('media','Upload Audio File') }}
					{{ Form::file('media', array('class'=>'btn btn-success btn-sm')) }}
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


	@endsection