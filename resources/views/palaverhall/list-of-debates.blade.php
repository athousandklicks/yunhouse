@extends('palaver-main')

@section('title', "| debates")

@section('stylesheet')
{!! Html::style('/css/style.css') !!}
@endsection


@section('content')


<div class="row">
    <div class="col-sm-12">
        <div class="section">
            <div class="row">
                @foreach($debates as $debate)
                <div class="col-sm-4">
                    <div class="post medium-post">
                        <div class="entry-header">
                            <div class="entry-thumbnail">
                                <img class="img-responsive" src="{{asset('images/debates/'.$debate->image_link)}}" alt="" />
                            </div>
                            <ul class="entry-content2">
                                <li class="debate-left-float"><span class="debate-titles">Posted: </span></i> {{$debate->created_at->toFormattedDateString()}}</a></li>
                                <li class="debate-right-float"><span class="debate-titles">Author: </span></i> {{$debate->author}}</a></li>
                                <li class="debate-tags">Tags: @foreach ($debate->tags as $tag)
                                    <span class="label label-default">{{ $tag->name }}</span>
                                    @endforeach</li>
                                </ul>


                            </div>




                            <div class="post-content">

                                <h2 class="entry-title">
                                    <a href="{{ url('debate/'.$debate->slug)}}">{{$debate->title}}</a>
                                </h2>
                                <div class="entry-content">
                                    {{strip_tags(str_limit($debate->body, 120, '...'))}} <span class="read-more"><a href="{{ url('debate/'.$debate->slug) }}"></br>Read Full debate >>></a></span> </br> </br><span class="read-palavar"><a href="{{ url('comments/'.$debate->slug) }}">**Join the Discussion in Palaver Hall</a></span>
                                </div>
                            </div>
                        </div><!--/post--> 

                    </div>
                    @endforeach()

                </div>
            </div>
        </div><!--/.section -->                                 

    </div>
</div>


</div><!--/.container-->
<!-- /#content -->

@endsection