@extends('palaver-main')

<?php $titleTag = htmlspecialchars($debates->title); ?>

@section('title', "| $titleTag")

@section('stylesheet')
{!! Html::style('/css/style.css') !!}
@endsection

@section('content')

<div class="page-breadcrumbs">
    <h1 class="section-title">{!! $debates->title !!}</h1>
    <h3 class="lead">{!! $debates->sub_title !!}</h3>
</div>
<div class="section">
    <div class="row">
        <div class="col-sm-9">
            <div id="site-content" class="site-content">
                <div class="author-details">

                    <div class="author-info">
                        {{-- @if (Auth::check())
                        <div id="breaking-news">
                            <span><a href="{{ url('comments/'.$debates->slug) }}">Join the Discussion in Palavar</a></span>
                        </div>
                        @else
                        <div id="breaking-news">
                        <span><a href="/login">Login/Register to Join the Discussion in Palavar</a></span>
                        </div>
                        @endif --}}
                        <img class="img-responsive" src="{{asset('images/debates/'.$debates->image_link)}}" alt="" />





                        <ul class="debate-info-strip">

                            <div class="row">
                                <div class="col-sm-6">
                                    <li class="debate-left-float"><span class="debate-titles">By: </span></i> {{$debates->author}}</a></li>

                                </div>
                                <div class="col-sm-6">
                                    <li class="debate-right-float"><span class="debate-titles">Posted: </span></i> {{$debates->created_at->toFormattedDateString()}}</a></li>
                                </div>
                            </div>

                            <li class="debate-tags">
                               Tags: @foreach ($debates->tags as $tag)
                               <span class="label label-default">{{ $tag->name }}</span>
                               @endforeach
                           </li>
                       </ul>
                       
                       <p class="lead">
                        {!! $debates->body !!}
                    </p>
                        {{-- @if (Auth::check())
                        <div id="breaking-news">
                            <span><a href="{{ url('comments/'.$debates->slug) }}">Join the Discussion in Palavar</a></span>
                        </div>
                        @else
                        <div id="breaking-news">
                        <span><a href="/login">Login/Register to Join the Discussion in Palavar</a></span>
                        </div>
                        @endif --}}
                    </div>
                    <a href="{{URL::to('/download/'.$debates->slug.'.pdf')}}" target="_blank"><img class="img-responsive" src="/images/frontend/pdf-icon.png" alt="" /></a>

                    <div>
                        <img class="img-responsive" src="{{asset('images/debates/'.$debates->coming_soon)}}" alt="" />
                    </div>
                </div>

                <div id="disqus_thread"></div>
                <script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
*/
var disqus_config = function () {
    var disqus_identifier = {!! $debates->slug !!};
    this.page.url = 'http://www.yunhouse.co.uk/comments';  
// Replac PAGE_URL with your page's canonical URL variable
this.page.identifier = disqus_identifier; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://yunhouse.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
})();
</script>
<noscript><a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

</div><!--/#site-content-->
</div><!--/.col-sm-9 -->    


<div class="col-sm-3">
    @include('partials.palaver-right-side-bar')
</div>
</div>              
</div><!--/.section-->


@endsection