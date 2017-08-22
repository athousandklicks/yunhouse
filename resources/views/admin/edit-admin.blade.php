@extends('cabal_layout')

@section('title', '| Edit Admin')


@section('links')

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

<script>
  tinymce.init({
      selector: 'textarea',  // change this value according to your HTML

      plugins: 'link autoresize hr spellchecker searchreplace advlist lists table textcolor textpattern wordcount textcolor colorpicker anchor insertdatetime media'
    });
  </script>

  @endsection


  @section('content')

  <div class="chit-chat-layer1">
    <div class="col-md-12 chit-chat-layer1-left">
     <div class="work-progres">
      <h1>Edit Admin {{$admins->name}} </h1>
    </div>
  </div>
</div>

<div class="chit-chat-layer1">
  <div class="col-md-12 chit-chat-layer1-left">
   <div class="work-progres">

    <div class="table-responsive">
      {!!Form::model($admins, ['route'=>['admins.update', $admins->id], 'method' => 'PATCH', 'onsubmit' => 'return ConfirmSave()'])!!}  


      {{csrf_field()}}

      {!! Form::hidden('id', $admins->id, ['class' => 'form-control']) !!}

      {{ Form::label('name', 'Edit Name of admin:') }}
      {{ Form::text('name', null, array('class'=>'form-control', 'required' => '', 'maxlength'=>'255')) }}

      {{ Form::label('email', 'Edit admin email:') }}
      {{ Form::text('email', null, array('class'=>'form-control')) }}

      {{ Form::label('password', 'Edit Password:') }}
          {{ Form::password('password', array('class' => 'form-control')) }}

      <br/>


      {{ Form::submit('Save Changes', array('class'=>'btn btn-success btn-lg', 'style' => 'margin-top: 20px;' )) }}
      {!! Form::close() !!}
    </div>
  </div>
</div>

<div class="clearfix"> </div>


<script type="text/javascript">
  @include('partials._cabalmodaljs')
</script>


</div>

@endsection