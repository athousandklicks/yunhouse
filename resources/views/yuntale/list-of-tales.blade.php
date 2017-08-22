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
                                            <img class="img-responsive" src="{{asset('images/tales/'.$tale->featured_tale)}}" alt="" />
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
                                            {{strip_tags(str_limit($tale->body, 120, '...'))}} <span class="read-more"><a href="{{ url('yuntale/'.$tale->slug) }}">...Read Full Tale</a></span> OR <span class="read-palavar"><a href="{{ url('comments/'.$tale->id) }}">Join the Discussion in Palavar Hall</a></span>
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
                    
                    <div class="col-sm-3">
                        @include('partials.right-side-bar')
                    </div>
                </div>              
            </div><!--/.section-->
        </div><!--/.container-->
<!-- /#content -->

@endsection