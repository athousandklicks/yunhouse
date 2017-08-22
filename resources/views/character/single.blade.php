@extends('pages-layout')

<?php $titleTag = htmlspecialchars($characters->name); ?>
@section('title', "| $titleTag")


@section('content')


<div class="page-breadcrumbs">
    <h1 class="section-title">{!!$characters->name!!} </h1>
</div>
<div class="section">
    <div class="row">
        <div class="col-sm-9">
            <div id="site-content" class="site-content">
                <div class="author-details">

                    <div class="author-info">

                        <p class="lead">
                            {!!$characters->body!!}
                        </p>

                    </div>


                </div><!--/#site-content-->


            </div><!--/.col-sm-9 -->    
        </div>

        <div class="col-sm-3">
            @include('partials.right-side-bar');
        </div>
    </div>              
</div><!--/.section-->


@endsection