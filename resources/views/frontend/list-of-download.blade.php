@extends('main')

@section('title', '| DOWNLOAD YUNHOUSE: Assorted London Tales about the Africa')

@section('content')

<div class="signup-page">
    <div class="container">
        <div class="row">
            <!-- user-login -->         
            <div class="col-sm-10 col-sm-offset-1">


<table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Tale</th>
        <th>File</th>
        <th>Download</th>
      </tr>
    </thead>
    <tbody>
    @foreach($downloads as $download) 
      <tr>
        <td>{{$download->id}}</td>
        <td>{{$download->filename}}</td>
        <td>{{$download->control}}</td>
        <td class="btn btn-primary"> <i class="fa fa-download" aria-hidden="true"></i> {!! Html::link('download/'.$download->control, $download->filename) !!}</td>
      </tr>
      @endforeach()
    </tbody>
  </table>
</div>




</div><!-- user-login -->           
</div><!-- row -->  
</div><!-- container -->
</div><!-- signup-page -->

@endsection


@section('scripts')
<script src="{{ asset('js/app.js') }}"></script>
@endsection