@extends('main')

@section('title', "| Reviews")


@section('content')

<div class="container">
            <div class="page-breadcrumbs">
                <h1 class="section-title">List of Reviews</h1>    
        
            </div>
            <div class="section">
                <div class="row">
                    <div class="col-sm-9">
                        <div id="site-content" class="site-content">
                        
                            <div class="section listing-news2">
                            @foreach($reviews as $review) 
                                <div class="post">
                                   
                                    <div class="post-content">
                                        <h2 class="entry-title">
                                            <a href="news-details.html">Reviewer: {{$review->name}}</a>
                                        </h2>
                                        <div class="entry-content">
                                            {{strip_tags(str_limit($review->body, 1000, '...'))}} <span class="read-more"><a href="{{ url('reviewers-text/'.$review->slug) }}">...Read Full Review</a></span>
                                        </div>
                                    </div>
                                </div><!--/post--> 
                        @endforeach()
                                
                            </div>
                        </div><!--/#site-content-->
                        
                        <div class="pagination-wrapper">
                            <ul class="pagination">
                                
                                <li>{!! $reviews->links() !!}</li>
                               
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