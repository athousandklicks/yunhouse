@extends('cabal_layout')

@section('title', '| Edit Downloadable File')


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
      <h1>Edit Downloads</h1>
    </div>
  </div>
</div>

<div class="chit-chat-layer1">
  <div class="col-md-12 chit-chat-layer1-left">
   <div class="work-progres">

    <div class="table-responsive">
    {!!Form::model($downloads, ['route'=>['downloads.update', $downloads->id], 'method' => 'PUT', 'files' => true, 'onsubmit' => 'return ConfirmSave()'])!!}  

     {{csrf_field()}}

     {!! Form::hidden('id', $downloads->id, ['class' => 'form-control']) !!}

     {{ Form::label('filename', 'Edit File:') }}
     {{ Form::text('filename', null, array('class'=>'form-control', 'required' => '', 'maxlength'=>'255')) }}

          <br/>
          {{ Form::label('control','Upload File') }}
          {{ Form::file('control', array('class'=>'btn btn-success btn-sm')) }}
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