@extends('cabal_layout')

@section('title', '| List of Reviews')



@section('content')

<div class="chit-chat-layer1">
  <div class="col-md-12 chit-chat-layer1-left">
   <div class="work-progres">
    <h1>List of Reviews</h1>
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
            <th>Review</th>
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
         @foreach($reviews as $review) 
         <tr>
          <td>{{$review->id}}</td>
          <td>{{$review->name}}</td>                       
          <td>{{strip_tags(str_limit($review->body, 200, '...'))}}</td>


          <td>
            <a href="{{route('reviews.show', $review->id)}}" class="btn btn-default btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a>
          </td>
          <td>
            <a href="{{route('reviews.edit', $review->id)}}" class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
          </td>
          <td>
            {!!Form::open(['route' => ['reviews.destroy', $review->id], 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()'])
            !!}

            {!! Form::hidden('id', $review->id, ['class' => 'form-control']) !!}

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