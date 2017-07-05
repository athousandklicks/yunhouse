@extends('main')

@section('title', "| Characters - Professor Alphonsus Do-Remi")


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
                  <h1>Professor Alphonsus Do-Remi</h1>
                  <div id="post-content">
                     <p>A prolific social scientist whose regular publications on Africa is syndicated in many countries and languages. Probably the first African to formally accept the appellation of Africanist. He personally prefers that his academic mantra be referred to as ‘Africaism’ – ‘African intellectualism without tears’. He is the only known African with formal membership of the Adventurers Club. Upon being elected as President of The Adventurers, the Professor undertakes to unite Yunhouse with The Adventurers. His ambition provokes The Second Battle For Yunhouse.</p>
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