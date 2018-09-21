@extends('main')

<?php $titleTag = htmlspecialchars($reviews->title); ?>

@section('title', "| $titleTag")

@section('content')

<div class="page-breadcrumbs">
    <h1 class="section-title">{!! $reviews->title !!}</h1>
</div>
<div class="section">
    <div class="row">
        <div class="col-sm-9">
            <div id="site-content" class="site-content">
                <div class="author-details">

                    <div class="author-info">
                        <p class="lead">
                        {!! $reviews->intro !!}
                        </p>
                        <p class="lead"><span class="league-result">Reviewer: 
                        {!! $reviews->reviewer !!}</span>
                        </p>
                        
                        <p class="lead">
                            {!! $reviews->body !!}
                        </p>
                        
                    </div>
                </div>
            </div><!--/#site-content-->
        </div><!--/.col-sm-9 -->    


        <div class="col-sm-3">
            @include('partials.right-side-bar')
        </div>
    </div>              
</div><!--/.section-->


@endsection