@extends('cabal_layout')

@section('title', '| List of Tales')



@section('content')

<div class="chit-chat-layer1">
  <div class="col-md-12 chit-chat-layer1-left">
   <div class="work-progres">
    <h1>List of Tales</h1>
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

            <th>Title</th>
            <th>Tale</th>
            <th>TOTM</th>
            <th>Status</th>
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
         @foreach($tales as $tale) 
         <tr>
          <td>{{$tale->id}}</td>
          <td>{{$tale->title}}</td>                       
          <td>{{strip_tags(str_limit($tale->body, 100, '...'))}}</td>


 <td>

 @if ($tale->featured_tale == 0)
            <a href="{{route('tales.totm', $tale->id)}}" class="btn btn-danger">Make TOTM</a>
            @else
            <a class="btn btn-success">CURRENT TOTM</a>
          </td>
@endif

          @if ($tale->published == 1)
          <td> <a class = "btn btn-success">Published</td>  
          @else
          <td><a class = "btn btn-default">Unpublished</td>  
          @endif

          <td>
            <a href="{{route('tales.show', $tale->id)}}" class="btn btn-default btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a>
          </td>
          <td>
            <a href="{{route('tales.edit', $tale->id)}}" class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
          </td>
          <td>
            {!!Form::open(['route' => ['tales.destroy', $tale->id], 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()'])
            !!}

            {!! Form::hidden('id', $tale->id, ['class' => 'form-control']) !!}

            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', ['type' => 'submit', 'class' => 'btn btn-default btn-sm btn-danger']) 
            !!}

            {!!Form::close()!!}



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

@endsection