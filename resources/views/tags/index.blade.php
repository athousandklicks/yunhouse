@extends('cabal_layout')

@section('title', '| List of Tags')



@section('content')
<div class="blank">
<div class="chit-chat-layer1">
	<div class="col-md-12 chit-chat-layer1-left">
		<div class="work-progres">
		<h1>List of Tags</h1>
		</div>
	</div>
</div>

<div class="chit-chat-layer1">
	<div class="col-md-12 chit-chat-layer1-left">
		<div class="work-progres">

			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Show</th>
							<th>Edit</th>
						</tr>
					</thead>
					<tbody>
					@foreach($tags as $tag) 
						<tr>
							<td>{{$tag->id}}</td>
							<td>{{$tag->name}}</td>                       
							<td>
							<a href="{{route('tags.show', $tag->id)}}" class="btn btn-default btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a>
							</td>

							<td>
							<a href="{{route('tags.edit', $tag->id)}}" class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
							</td>
						</tr>
						@endforeach()
					</tbody>
				</table>
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