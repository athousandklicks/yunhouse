@extends('cabal_layout')

@section('title', '| Debates')

@section('content')


<div class="blank">
<img class="img-responsive" src="{{asset('images/debates/'.$debates->image_link)}}" alt="" />
	<h2>TITLE: {{$debates->title}}</h2>
	<h4>SLUG: {{$debates->slug}}</h4>
	<h4>AUTHOR: {{$debates->author}}</h4>
	<h4>POSTED ON: {{$debates->created_at->toDayDateTimeString()}}</h4>

	<h4>STATUS: @if ($debates->active_debate == 1)
          <span class="label label-success">ACTIVE DEBATE TOPIC</span>  
          @else
          <span class="label label-danger">NOT ACTIVE TOPIC</span> 
          @endif

	<h4>TAGS:@foreach ($debates->tags as $tag)
			<span class="label label-default">{{ $tag->name }}</span>
			@endforeach
	
		<div class="blankpage-main">
			<p>
				{!!wordwrap($debates->body,1500,"<p style='page-break-before: always'>",TRUE)!!}
			</p>
		</div>

		<hr>
		<div>
			<table>
				<tr class="col-md-8">
					<td>
						<a href="{{route('debates.index')}}" class="btn btn-default btn-success text-center btn-lg btn-block"><i class="fa fa-eye" aria-hidden="true"></i> Show All</a>
					</td>
					<td>.</td>

					<td>
						<a href="{{route('debates.edit', $debates->id)}}" class="btn btn-default btn-primary text-center btn-lg btn-block"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
					</td>
					<td>.</td>

					<td>


						{!!Form::open(['route' => ['debates.destroy', $debates->id], 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()'])
						!!}

						{!! Form::hidden('id', $debates->id, ['class' => 'form-control']) !!}

						{!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', ['type' => 'submit', 'class' => 'btn btn-default btn-danger text-center btn-lg btn-block', ]) 
						!!}
						{!!Form::close()!!}



					</td>
				</tr>
				<tr class="col-md-4">

				</tr>


				<tr>

				</tr>
			</table>
		</div>

		<script type="text/javascript">
			@include('partials._cabalmodaljs')
		</script>


	</div>




	@endsection