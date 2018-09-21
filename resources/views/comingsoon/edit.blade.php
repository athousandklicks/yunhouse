@extends('cabal_layout')

@section('title', '| Add an Image')


@section('content')


<div class="inbox">
	<h2>List of Coming Soon Images </h2>
	<div class="row">

		<div class="col-md-6 compose-right">
			<div class="inbox-details-default">
				<div class="inbox-details-heading">

				</div>
				<div class="inbox-details-body">
					<div class="alert alert-info">
						Please choose an Image to add
					</div>

					{!!Form::model($coming_soons, ['route'=>['comingsoon.update', $coming_soons->id], 'method' => 'PUT', 'files' => true, 'onsubmit' => 'return ConfirmSave()'])!!}  

					{{csrf_field()}}

					{{ Form::label('image_link','Upload an Image') }}
					{{ Form::file('image_link', array('class'=>'btn btn-success btn-sm')) }}
					<br/>

					<br>
					{{ Form::label('status', 'NEXT COMING SOON IMAGE?') }}
					{{ Form::select('status', 
					['0' => 'DEACTIVATE AS COMING SOON', '1' => 'ACTIVATE AS COMING SOON'], null,array('class'=>'form-control')) }}
					<br>
					<!-- reset buttons -->
					{{ Form::reset('Reset', array('id'=>'','class'=>'btn btn-success btn-sm')) }}
					<br/>
					{{ Form::submit('Save Image', array('class'=>'btn btn-success btn-lg', 'style' => 'margin-top: 20px;' )) }}
					{!! Form::close() !!}

				</div>
			</div>
		</div>

				<div class="col-md-6 compose-right">
			<div class="inbox-details-default">
				<div class="inbox-details-heading">

				</div>
				
			</div>
		</div>

		<div class="clearfix"> </div>  
		<script type="text/javascript">
			@include('partials._cabalmodaljs')
		</script>   
	</div>
</div>


@endsection