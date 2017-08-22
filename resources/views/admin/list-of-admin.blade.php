@extends('cabal_layout')

@section('title', '| List of Admins')



@section('content')

<div class="chit-chat-layer1">
  <div class="col-md-12 chit-chat-layer1-left">
   <div class="work-progres">
    <h1>List of Admins</h1>
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
            <th>Name of Admin</th>
            <th>Email </th>
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
         @foreach($admins as $admin) 
         <tr>
          <td>{{$admin->id}}</td>
          <td>{{$admin->name}}</td>                       
          <td>{{$admin->email}}</td>


          <td>
            <a href="{{route('admins.show', $admin->id)}}" class="btn btn-default btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a>
          </td>
          <td>
            <a href="{{route('admins.edit', $admin->id)}}" class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
          </td>
          <td>
            {!!Form::open(['route' => ['admins.destroy', $admin->id], 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()'])
            !!}

            {!! Form::hidden('id', $admin->id, ['class' => 'form-control']) !!}

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