@extends('cabal_layout')

@section('title', "| Edit Tag")

@section('content')

<div class="blank">
	
	<div>

		{{ Form::model($tags, ['route' => ['tags.update', $tags->id], 'method' => "PUT", 'onsubmit' => 'return ConfirmSave()']) }}

		{{ Form::label('name', "Title:") }}
		{{ Form::text('name', null, ['class' => 'form-control']) }}

		{{ Form::submit('Save Changes', ['class' => 'btn btn-success', 'style' => 'margin-top:20px;']) }}
		{{ Form::close() }}

	</div>
	<script type="text/javascript">
		@include('partials._cabalmodaljs')
	</script>
</div>
@endsection