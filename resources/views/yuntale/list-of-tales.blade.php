@extends('pages-layout')

@section('title', "| Tales")


@section('content')

<div class="container">
            <div class="page-breadcrumbs">
                <h1 class="section-title">List of Tales</h1>    
        
            </div>
            <div class="section">
                <div class="row">
                    <div class="col-sm-9">
                        <div id="site-content" class="site-content">
                        
                            <div class="section listing-news">
                            @foreach($tales as $tale) 
                                <div class="post">
                                    <div class="entry-header">
                                        <div class="entry-thumbnail">
                                            <img class="img-responsive" src="images/post/life1.jpg" alt="" />
                                        </div>
                                    </div>
                                    <div class="post-content">                              
                                        <div class="entry-meta">
                                            <ul class="list-inline">
                                                <li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> {{$tale->created_at->toFormattedDateString()}}</a></li>
                                            </ul>
                                        </div>
                                        <h2 class="entry-title">
                                            <a href="news-details.html">{{$tale->title}}</a>
                                        </h2>
                                        <div class="entry-content">
                                            {{strip_tags(str_limit($tale->body, 150, '...'))}} <span class="read-more"><a href="{{ url('yuntale/'.$tale->slug) }}">...Read Full Tale</a></span>
                                        </div>
                                    </div>
                                </div><!--/post--> 
                        @endforeach()
                                
                            </div>
                        </div><!--/#site-content-->
                        
                        <div class="pagination-wrapper">
                            <ul class="pagination">
                                
                                <li>{!! $tales->links() !!}</li>
                               
                            </ul>
                        </div>
                    </div><!--/.col-sm-9 -->    
                    
                    <div id="sticky" class="col-sm-3">
                        <div id="sitebar">
                            <div class="widget">
                                <div class="add featured-add">
                                    <a href="#"><img class="img-responsive" src="images/post/add/add1.jpg" alt="" /></a>
                                </div>
                            </div><!--/#widget-->
                            
                            <div class="widget follow-us">
                                <h1 class="section-title title">Follow Us</h1>
                                <ul class="list-inline social-icons">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div><!--/#widget-->   
                        </div><!--/#sitebar-->
                    </div>
                </div>              
            </div><!--/.section-->
        </div><!--/.container-->
<!-- /#content -->

@endsection