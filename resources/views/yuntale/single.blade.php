@extends('main')

<?php $titleTag = htmlspecialchars($tale->title); ?>

@section('title', "| $titleTag")

{{-- @section('stylesheet')
    {!! Html::style('/css/style.css') !!}
@endsection --}}

@section('content')

<div class="page-breadcrumbs">
    <h1 class="section-title">{!! $tale->title !!}</h1>
</div>
<div class="section">
    <div class="row">
        <div class="col-sm-9">
            <div id="site-content" class="site-content">
                <div class="author-details">

                    <div class="author-info">
                        {{-- @if (Auth::check())
                        <div id="breaking-news">
                            <span><a href="{{ url('comments/'.$tale->slug) }}">Join the Discussion in Palavar</a></span>
                        </div>
                        @else
                        <div id="breaking-news">
                        <span><a href="/login">Login/Register to Join the Discussion in Palavar</a></span>
                        </div>
                        @endif --}}
                        <div class="entry-thumbnail">
                            <img class="img-responsive" src="{{asset('images/tales/'.$tale->image_link)}}" alt="" />
                        </div>

                        <p class="lead">
                            {!! $tale->body !!}
                        </p>
                        {{-- @if (Auth::check())
                        <div id="breaking-news">
                            <span><a href="{{ url('comments/'.$tale->slug) }}">Join the Discussion in Palavar</a></span>
                        </div>
                        @else
                        <div id="breaking-news">
                        <span><a href="/login">Login/Register to Join the Discussion in Palavar</a></span>
                        </div>
                        @endif --}}
                    </div>
                     <a href="{{URL::to('/download/'.$tale->slug.'.pdf')}}" target="_blank"><img class="img-responsive" src="/images/frontend/pdf-icon.png" alt="" /></a>

                     <div>
                        <img class="img-responsive" src="{{asset('images/tales/'.$tale->coming_soon)}}" alt="" />
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