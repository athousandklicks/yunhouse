@extends('main')

@section('title', "| Tales")

{{-- @section('stylesheet')
{!! Html::style('/css/style.css') !!}
@endsection --}}


@section('content')
<div class="page-breadcrumbs">
    <h1 class="section-title">List of Tales</h1>    
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="section">
            <div class="row">
                <div class="col-sm-9">
                    <div id="site-content" class="site-content">

                        <div class="section listing-news">
                        @foreach($tales as $tale) 
                        <div class="post">
                        <div class="col-sm-6">
                            <div class="">
                                <div class="entry-thumbnail">
                                    <img class="img-responsive" src="{{asset('images/tales/'.$tale->image_link)}}" alt="" />
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="post-content">                              
                                <div class="entry-meta">
                                    <ul class="list-inline">
                                        <li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> {{$tale->created_at->toFormattedDateString()}}</a></li>
                                    </ul>
                                </div>
                                <h2 class="entry-title">
                                    <a href="{{ url('yuntale/'.$tale->slug)}}">{{$tale->title}}</a>
                                </h2>
                                <div class="entry-content">
                                    {{strip_tags(str_limit($tale->body, 120, '...'))}} <span class="read-more"><a href="{{ url('yuntale/'.$tale->slug) }}">...Read Full Tale</a></span> 
                                </div>
                            </div>
                            </div>
                        </div><!--/post--> 
                        @endforeach()

                    </div>
                    </div><!--/#site-content-->


                </div><!--/.col-sm-9 -->    

                <div class="col-sm-3">
                    @include('partials.right-side-bar')
                </div>
            </div>              
        </div><!--/.section-->
    </div><!--/.section -->                                 

</div>
</div>
<div class="col-md-12 pagination">
    <div class="text-center">
        {!! $tales->links() !!}
    </div>
</div>


</div><!--/.container-->
<!-- /#content -->

@endsection





