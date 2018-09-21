@extends('cabal_layout')

@section('title', '| List of Dabates')



@section('content')
<div class="blank">
<div class="chit-chat-layer1">
  <div class="col-md-12 chit-chat-layer1-left">
   <div class="work-progres">
    <h1>List of Debates</h1>
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
            <th>Thumbnail</th>
            <th>Title</th>
            <th>Author</th>
            <th>Date Posted</th>
            <th>Topic</th>
            <th>ACTIVE</th>
            <th>Status</th>
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
         @foreach($debates as $debate) 
         <tr>
          <td>{{$debate->id}}</td>
          <td><img src="/images/debates/{{$debate->image_link}}" width="50" height="50" alt="image description"></td>

          <td>{{$debate->title}}</td> 
          <td>{{$debate->author}}</td>  
          <td>{{$debate->created_at->toDayDateTimeString()}}</td>                      
          <td>{{strip_tags(str_limit($debate->body, 100, '...'))}}</td>

           @if ($debate->active_debate == 0)
            <td><a class="btn btn-danger">NOT ACTIVE</a></td>
            @else
            <td><a class="btn btn-success">ACTIVE</a></td>
@endif

          @if ($debate->published == 1)
          <td> <a class = "btn btn-success">Published</td>  
          @else
          <td><a class = "btn btn-danger">Unpublished</td>  
          @endif

          <td>
            <a href="{{route('debates.show', $debate->id)}}" class="btn btn-default btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a>
          </td>
          <td>
            <a href="{{route('debates.edit', $debate->id)}}" class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
          </td>
          <td>
            {!!Form::open(['route' => ['debates.destroy', $debate->id], 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()'])
            !!}

            {!! Form::hidden('id', $debate->id, ['class' => 'form-control']) !!}

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
</div>
<div class="clearfix"> </div>


<script type="text/javascript">
  @include('partials._cabalmodaljs')
</script>


</div>

@endsection