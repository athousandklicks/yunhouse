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
                <div class="col-sm-6">
                    <div class="post medium-post">
                        <div class="entry-header">
                            <div class="entry-thumbnail">
                                <img class="img-responsive" src="{{asset('images/debates/'.$debate->image_link)}}" alt="" />
                            </div>


                            <ul class="debate-list-info-strip">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <li class="debate-list-left-float"><span class="debate-titles">Author: </span></i> {{$debate->author}}</a></li>

                                    </div>
                                    <div class="col-sm-6">
                                        <li class="debate-list-right-float"><span class="debate-titles">Posted: </span></i> {{$debate->created_at->toFormattedDateString()}}</a></li>
                                    </div>
                                </div>
                                <li class="debate-list-tags">Tags: @foreach ($debate->tags as $tag)
                                    <span class="label label-default">{{ $tag->name }}</span>
                                    @endforeach</li>
                                </ul>


                            </div>




                            <div class="post-content">

                                <h2 class="debate-entry-content"><span class="debate-heading">TOPIC: </span>
                                    <a href="{{ url('debate/'.$debate->slug)}}">{{$debate->title}}</a>
                                </h2>
                                <div class="lead">
                                    {{strip_tags(str_limit($debate->body, 120, '...'))}} <span class="read-more"><a href="{{ url('debate/'.$debate->slug) }}">Continue Reading >>></a></span>
                                </div>
                            </div>
                        </div><!--/post--> 

                    </div>
                    @endforeach()

                </div>
            </div>
        </div><!--/.section -->                                 

    </div>
    <div class="col-md-12 pagination">
            <div class="text-center">
                {!! $debates->links() !!}
            </div>
        </div>
</div>


</div><!--/.container-->
<!-- /#content -->

@endsection