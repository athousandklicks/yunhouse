@extends('main')

@section('title', "| Characters - Palavar Hall")


@section('content')

<div id="all">

	<div id="content">
		<div class="container">

			<div class="col-md-3">
                @include('partials.characters_menu')
                <!-- /.col-md-3 -->
            </div>

            <div class="col-sm-9" id="blog-post">


            <div class="box">
                  <h1>Palavar Hall</h1>
                  <div id="post-content">
                     <p>Here, discussion on any subject can be slated – as long as it is about Africa.</p>
                 </div>
                 <!-- /#post-content -->
             </div>
             <!-- /.box -->
         </div>

            </div>
            <!-- /.container -->

        </div>
    </div>
    <!-- /#content -->

    @endsection