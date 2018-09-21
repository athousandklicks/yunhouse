@extends('cabal_layout')

@section('title', '| Add Debate Topic')

@section('links')
{!! Html::style('css/select2.min.css') !!}
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
	tinymce.init({
		  selector: 'textarea',  // change this value according to your HTML

		  plugins: 'link autoresize hr spellchecker searchreplace advlist lists table textcolor textpattern wordcount textcolor colorpicker anchor insertdatetime media'
		});
	</script>
	@endsection

	@section('content')

	<div class="blank">
		<div class="inbox">
			<h2>Create New Debate Topic </h2>

			<div class="col-md-12 compose-right">
				<div class="inbox-details-default">
					<div class="inbox-details-heading">

					</div>
					<div class="inbox-details-body">
						<div class="alert alert-info">
							Please all fields are required in order to add new page
						</div>

						{!! Form::open(['route' => 'debates.store', 'method' => 'POST', 'files' => true]) !!}


						{{csrf_field()}}

						{{ Form::label('title', 'Title:') }}
						{{ Form::text('title', null, array('class'=>'form-control', 'required' => '', 'maxlength'=>'255')) }}

						{{ Form::label('sub_title', 'Sub Title:') }}
						{{ Form::text('sub_title', null, array('class'=>'form-control', 'maxlength'=>'2000')) }}

						{{ Form::label('author', 'Author:') }}
						{{ Form::text('author', null, array('class'=>'form-control')) }}

						{{ Form::label('tags', 'Tags:') }}
						<select class="form-control select2-multi" name="tags[]" multiple="multiple">
							@foreach($tags as $tag)
							<option value='{{ $tag->id }}'>{{ $tag->name }}</option>
							@endforeach
						</select>

						<br>
						<hr>

						{{ Form::label('body', 'Debate Topic:') }}
						{{ Form::textarea('body', null, array('class'=>'form-control')) }}


						<br>


						{{ Form::label('published', 'Do you want to Publish this Debate Topic now?') }}
						{{ Form::select('published', 
						['0' => 'DO NOT PUBLISH', '1' => 'PUBLISH'], null,array('class'=>'form-control')) }}

						<br>
						{{ Form::label('active_debate', 'Do you want to make  this the Active Debate Topic?') }}
						{{ Form::select('active_debate', 
						['0' => 'DO NOT MAKE ACTIVE', '1' => 'MAKE ACTIVE'], null,array('class'=>'form-control')) }}
						<br>
						{{ Form::label('referenced', 'Is this a referenced article?') }}
						{{ Form::select('referenced', 
						['0' => 'IT IS A PROPER DEBATE TOPIC', '1' => 'IT IS A REFERENCE ARTICLE'], null,array('class'=>'form-control')) }}


						<br/>
						{{ Form::label('image_link','Upload Debate Banner Image') }}
						{{ Form::file('image_link', array('class'=>'btn btn-success btn-sm')) }}
						<br/>		

						
						{{ Form::label('coming_soon','Upload Coming Soon Image') }}
						{{ Form::file('coming_soon', array('class'=>'btn btn-success btn-sm')) }}			  

						<!-- reset buttons -->
						{{ Form::reset('Reset', array('id'=>'','class'=>'btn btn-success btn-sm')) }}
						<br/>

						{{ Form::submit('Save Debate Topic', array('class'=>'btn btn-success btn-lg', 'style' => 'margin-top: 20px;' )) }}
						{!! Form::close() !!}

					</div>
				</div>
			</div>

			<div class="clearfix"> </div>     
		</div>
	</div>

	@endsection
	@section('scripts')

	{!! Html::script('js/select2.min.js') !!}

	<script type="text/javascript">
		$('.select2-multi').select2();
	</script>

	@endsection