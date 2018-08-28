@extends('main')

@section('title', "| Palavar Hall")



@section('content')

<div class="page-breadcrumbs">
    <h1 class="section-title"> Palavar Hall</h1>
</div>
<div class="section">
    <div class="row">
        <div class="col-sm-9">
            <div id="site-content" class="site-content">
                <div class="author-details">

                    <div class="author-info">

                        <p class="lead">
                            Here, discussion on any subject can be slated – as long as it is about Africa.
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