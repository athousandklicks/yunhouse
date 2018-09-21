@extends('cabal_layout')

@section('title', '| Edit Review')


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
      <h1>Edit Review</h1>
    </div>
  </div>
</div>

<div class="chit-chat-layer1">
  <div class="col-md-12 chit-chat-layer1-left">
   <div class="work-progres">

    <div class="table-responsive">
      {!!Form::model($reviews, ['route'=>['reviews.update', $reviews->id], 'method' => 'PUT', 'files' => true, 'onsubmit' => 'return ConfirmSave()'])!!}  

      {{csrf_field()}}

      {!! Form::hidden('id', $reviews->id, ['class' => 'form-control']) !!}

      {{ Form::label('reviewer', 'Edit Name of Reviewer:') }}
      {{ Form::text('reviewer', null, array('class'=>'form-control', 'required' => '', 'maxlength'=>'255')) }}

      {{ Form::label('title', 'Edit Title of Article:') }}
      {{ Form::text('title', null, array('class'=>'form-control', 'required' => '', 'maxlength'=>'255')) }}

      {{ Form::label('intro', 'Edit Information About Yunhouse:') }}
      {{ Form::textarea('intro', null, array('class'=>'form-control')) }}

      {{ Form::label('body', 'Edit Review:') }}
      {{ Form::textarea('body', null, array('class'=>'form-control')) }}

      <br>
      <hr>

      {{ Form::label('image_link','Upload Image (Optional)') }}
      {{ Form::file('image_link', array('class'=>'btn btn-success btn-sm')) }}

      <br>
      <hr>
      {{ Form::label('media','Upload Media') }}
      {{ Form::file('media', array('class'=>'btn btn-success btn-sm')) }}
      <br/>           

      <!-- reset buttons -->
      {{ Form::reset('Reset', array('id'=>'','class'=>'btn btn-success btn-sm')) }}
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