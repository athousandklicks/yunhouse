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
{{--                             <audio controls>
    <source src="/public/audio/audio.mp3" type="audio/mpeg">
    </audio> --}}

    <div class="section listing-news2">
        @foreach($reviews as $review) 
        <div class="post">

            <div class="post-content">
                <h2 class="entry-title">
                    <a>title: {{$review->title}}</a> </h2>
                    <h2 class="entry-title"><a>Reviewer: {{$review->reviewer}}</a>
                </h2>
                <div class="lead">
                    {{strip_tags(str_limit($review->body, 200, '...'))}} <span class="read-more"><a href="{{ url('reviewers-text/'.$review->slug) }}">...Read Full Review</a></span>
                </div>
            </div>
        </div><!--/post--> 
        @endforeach()

    </div>
</div><!--/#site-content-->
<div class="col-md-12 pagination">
    <div class="text-center">
        {!! $reviews->links() !!}
    </div>
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