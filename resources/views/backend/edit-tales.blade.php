@extends('cabal_layout')

@section('title', '| Edit Tale')


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
      <h1>Edit Tales</h1>
    </div>
  </div>
</div>

<div class="chit-chat-layer1">
  <div class="col-md-12 chit-chat-layer1-left">
   <div class="work-progres">

    <div class="table-responsive">
      {!!Form::model($tales, ['route'=>['tales.update', $tales->id], 'method' => 'PUT', 'files' => true, 'onsubmit' => 'return ConfirmSave()'])!!}  

      {{csrf_field()}}

      {!! Form::hidden('id', $tales->id, ['class' => 'form-control']) !!}


      {{ Form::label('title', 'Edit Title:') }}
      {{ Form::text('title', null, array('class'=>'form-control', 'required' => '', 'maxlength'=>'255')) }}

      {{ Form::label('body', 'Edit Tale:') }}
      {{ Form::textarea('body', null, array('class'=>'form-control')) }}

      <br>
      <hr>
      {{ Form::label('published', 'Do you want to Edit Publish status?') }}

      {{ Form::select('published', 
      ['0' => 'UNPUBLISH THIS TALE', '1' => 'PUBLISH THIS TALE'], null,array('class'=>'form-control')) }}

      <br>
      <hr>
      {{ Form::label('featured_tale', 'MAKE FEATURED TALE') }}
      {{ Form::select('featured_tale', 
      ['0' => 'DO NOT FEATURE', '1' => 'FEATURE'], null,array('class'=>'form-control')) }}

      <br/>
      {{ Form::label('image_link','Upload Tale Banner Image') }}
      {{ Form::file('image_link', array('class'=>'btn btn-success btn-sm')) }}
      <br/>  

      {{ Form::label('coming_soon','Upload Coming Soon Image') }}
      {{ Form::file('coming_soon', array('class'=>'btn btn-success btn-sm')) }}     
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