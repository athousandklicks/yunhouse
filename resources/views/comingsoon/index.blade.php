@extends('cabal_layout')

@section('title', '| Add an Image')


@section('content')


<div class="inbox">
	<h2>List of Coming Soon Images </h2>
	<div class="row">
		<div class="col-md-8 compose-right">
			<div class="inbox-details-default">
				<div class="inbox-details-heading">

				</div>
				<div class="inbox-details-body">
					<div class="alert alert-info">
						List of Coming Soon Images 
					</div>

					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Thumbnail</th>
								<th>Name</th>
								<th>Active</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
						</thead>

						<tbody>
							@foreach ($coming_soons as $coming_soon)
							<tr>
								<th>{{ $coming_soon->id }}</th>
								<th><img src="/images/comingsoon/{{$coming_soon->image_link}}" width="50" height="50" alt="image description"></th>
								<td>{{ $coming_soon->image_link }}</td>

								@if ($coming_soon->status == 0)
								<td><a class="btn btn-danger">NOT ACTIVE</a></td>
								@else
								<td><a class="btn btn-success">ACTIVE</a></td>
								@endif

								<td><a href="{{route('comingsoon.edit', $coming_soon->id)}}" class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>

								<td>
								{!!Form::open(['route' => ['comingsoon.destroy', $coming_soon->id], 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()'])
									!!}

									{!! Form::hidden('id', $coming_soon->id, ['class' => 'form-control']) !!}

									{!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', ['type' => 'submit', 'class' => 'btn btn-default btn-sm btn-danger']) 
									!!}

									{!!Form::close()!!}



								</td>
								
							</tr>
							@endforeach
						</tbody>
					</table>

				</div>
			</div>
		</div>

		<div class="col-md-4 compose-right">
			<div class="inbox-details-default">
				<div class="inbox-details-heading">

				</div>
				<div class="inbox-details-body">
					<div class="alert alert-info">
						Please choose an Image to add
					</div>

					{!! Form::open(['route' => 'comingsoon.store', 'method' => 'POST', 'files' => true]) !!}
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

		<div class="clearfix"> </div>  
			<script type="text/javascript">
  @include('partials._cabalmodaljs')
</script>   
	</div>

</div>


@endsection