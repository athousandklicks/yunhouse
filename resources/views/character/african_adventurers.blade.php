@extends('main')

@section('title', "| The African Adventurers Club")



@section('content')

<div class="page-breadcrumbs">
    <h1 class="section-title">The African Adventurers Club</h1>
</div>
<div class="section">
    <div class="row">
        <div class="col-sm-9">
            <div id="site-content" class="site-content">
                <div class="author-details">

                    <div class="author-info">

                        <p class="lead">
                        Members of the Adventurers Club do not call themselves Africanists. But everyone else does. And its founder John O’Gafla is not only happy to be called an Africanist, he even claims credit for coining the term. The members say the Adventurers is a place to meet and discuss Africa objectively which, the members believe, is not possible in the highly charged atmosphere of Yunhouse.</p>

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