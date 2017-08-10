@extends('pages-layout')

<?php $titleTag = htmlspecialchars($tale->title); ?>

@section('title', "| $titleTag")

@section('content')

<div id="all">

	<div id="content">
		<div class="container">

			<div class="col-md-3">
                    <!-- *** BLOG MENU ***
                    _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                    	<div class="panel-heading">
                    		<h3 class="panel-title">Quick Links</h3>
                    	</div>

                    	<div class="panel-body">
                    		<ul class="nav nav-pills nav-stacked category-menu">
                    			<li class="{{ Request::is('yunhouse-in-brief') ? "active" : "" }}">
                    				<a href="/yunhouse-in-brief">Yunhouse in Brief</a>
                    			</li>
                    			<li class="{{ Request::is('about-author') ? "active" : "" }}">
                    				<a href="/about-author">About Ad'Obe</a>
                    			</li>
                    			<li class="{{ Request::is('dreaming-yunhouse') ? "active" : "" }}">
                    				<a href="/dreaming-yunhouse">Dreaming Yunhouse</a>
                    			</li>

                    		</ul>

                    	</div>
                    </div>

                    <div class="panel panel-default sidebar-menu">

                    	<div class="panel-heading">
                    		<h3 class="panel-title">Be a Part</h3>
                    	</div>

                    	<div class="panel-body">
                    		<ul class="nav nav-pills nav-stacked category-menu">
                    			<li class="{{ Request::is('/') ? "active" : "" }}">
                    				<a href="category.html">Read Tales</a>
                    			</li>
                    			<li class="{{ Request::is('/') ? "active" : "" }}">
                    				<a href="category.html">Write a Review</a>
                    			</li>
                    			<li class="{{ Request::is('/') ? "active" : "" }}">
                    				<a href="category.html">Login/Register</a>
                    			</li>
                    			<li class="{{ Request::is('/') ? "active" : "" }}">
                    				<a href="category.html">Buy/Download</a>
                    			</li>

                    		</ul>

                    	</div>
                    </div>
                    <!-- /.col-md-3 -->


                </div>

                <div class="col-sm-9" id="blog-post">


                	<div class="box">

                		<h1>{{ $tale->title }}</h1>
                		<p class="lead">{{ $tale->body }}</p>
                    </div>
                    <!-- /#post-content -->

                    

                </div>
                <!-- /.box -->
            </div>
            <!-- /#blog-post -->


        </div>
        <!-- /.container -->

    </div>
</div>
<!-- /#content -->

@endsection