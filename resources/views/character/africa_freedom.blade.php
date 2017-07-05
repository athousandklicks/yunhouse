@extends('main')

@section('title', "| Characters - The Africa Freedom Council")


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
                  <h1>The Africa Freedom Council</h1>
                  <div id="post-content">
                     <p>A political movement that germinates from a public lecture by an Oxford University Don at the Adventurers Club. The Professor gets branded William Wilberforce II (after the famous Englishman who campaigned against slavery and slave trade) for arguing that colonialism oppresses Africans’ fundamental human rights and therefore offensive to English sense of justice. AFC launching is a grand ceremony attended by dozens of invited African tribal chiefs who voyage to London in a special vessel named SS FREEDOM.</p>
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