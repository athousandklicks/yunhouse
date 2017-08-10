@extends('pages-layout')

<?php $titleTag = htmlspecialchars($characters->name); ?>
@section('title', "| $titleTag")


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
                  <h1>{!!$characters->name!!}</h1>
                  <div id="post-content">
                     {!!$characters->body!!}
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