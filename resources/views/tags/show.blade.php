@extends('cabal_layout')

@section('title', "| $tags->name Tag")

@section('content')


<div class="blank">
	
	<div>
		<table>
			<tr class="col-md-8">
				<div class="col-md-8">
					<h1>Tag Name:{{ $tags->name }}  </br></br>Used in: {{ $tags->debates()->count() }} Debate(s)</h1>
				</div>
				<div class="col-md-2">
					<a href="{{ route('tags.edit', $tags->id) }}" class="btn btn-primary pull-right btn-block" style="margin-top:20px;">Edit</a>
				</div>
				<div class="col-md-2">
					{{ Form::open(['route' => ['tags.destroy', $tags->id], 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()']) }}
				{{ Form::submit('Delete', ['class' => 'btn btn-danger btn-block', 'style' => 'margin-top:20px;']) }}
			{{ Form::close() }}
				</div>
			</tr>
		</table>
	</div>

	<script type="text/javascript">
		@include('partials._cabalmodaljs')
	</script>


</div>




@endsection