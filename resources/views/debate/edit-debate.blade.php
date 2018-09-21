@extends('cabal_layout')

@section('title', '| Edit Debate')


@section('links')
{!! Html::style('css/select2.min.css') !!}

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

<script>
  tinymce.init({
      selector: 'textarea', // change this value according to your HTML

      plugins: 'link autoresize hr spellchecker searchreplace advlist lists table textcolor textpattern wordcount textcolor colorpicker anchor insertdatetime media'
    });
  </script>

  @endsection


  @section('content')

  <div class="chit-chat-layer1">
    <div class="col-md-12 chit-chat-layer1-left">
     <div class="work-progres">
      <h1>Edit Debate</h1>
    </div>
  </div>
</div>

<div class="chit-chat-layer1">
  <div class="col-md-12 chit-chat-layer1-left">
   <div class="work-progres">

    <div class="table-responsive">
      {!!Form::model($debates, ['route'=>['debates.update', $debates->id], 'method' => 'PUT', 'files' => true, 'onsubmit' => 'return ConfirmSave()'])!!}  

      {{csrf_field()}}

      {!! Form::hidden('id', $debates->id, ['class' => 'form-control']) !!}

      {{ Form::label('title', 'Edit Title:') }}
      {{ Form::text('title', null, array('class'=>'form-control', 'required' => '', 'maxlength'=>'255')) }}

      {{ Form::label('sub_title', 'Edit Sub Title:') }}
      {{ Form::text('sub_title', null, array('class'=>'form-control', 'maxlength'=>'2000')) }}

      {{ Form::label('author', 'Author:') }}
      {{ Form::text('author', null, array('class'=>'form-control')) }}

      {{ Form::label('tags', 'Tags:', ['class' => 'form-spacing-top']) }}
      {{ Form::select('tags[]', $tags, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }}

      {{ Form::label('body', 'Edit Debate:') }}
      {{ Form::textarea('body', null, array('class'=>'form-control')) }}

      <br>
      <hr>
      {{ Form::label('published', 'Do you want to Edit Publish status?') }}

      {{ Form::select('published', 
      ['0' => 'UNPUBLISH THIS DEBATE', '1' => 'PUBLISH THIS DEBATE'], null,array('class'=>'form-control')) }}
      <br>
      {{ Form::label('active_debate', 'Do you want to make  this the Active Debate Topic?') }}
      {{ Form::select('active_debate', 
      ['0' => 'DO NOT MAKE ACTIVE', '1' => 'MAKE ACTIVE'], null,array('class'=>'form-control')) }}
      <br>
      {{ Form::label('referenced', 'Is this a referenced article?') }}
      {{ Form::select('referenced', 
      ['0' => 'IT IS A PROPER DEBATE TOPIC', '1' => 'IT IS A REFERENCE ARTICLE'], null,array('class'=>'form-control')) }}

      <br/>
      {{ Form::label('image_link','Upload Debate Banner Image') }}
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

@section('scripts')

{!! Html::script('js/select2.min.js') !!}

<script type="text/javascript">
  $('.select2-multi').select2();
</script>

@endsection