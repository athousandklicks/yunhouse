@extends('main')

@section('title', "| Characters - The African Adventurers Club")


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
                  <h1>The African Adventurers Club</h1>
                  <div id="post-content">
                     <p>Members of the Adventurers Club do not call themselves Africanists. But everyone else does. And its founder John O’Gafla is not only happy to be called an Africanist, he even claims credit for coining the term. The members say the Adventurers is a place to meet and discuss Africa objectively which, the members believe, is not possible in the highly charged atmosphere of Yunhouse.</p>
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