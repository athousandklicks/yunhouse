@extends('pages-layout')

@section('title', "| Professor Alphonsus Do-Remi")



@section('content')

<div class="page-breadcrumbs">
    <h1 class="section-title">Professor Alphonsus Do-Remi </h1>
</div>
<div class="section">
    <div class="row">
        <div class="col-sm-9">
            <div id="site-content" class="site-content">
                <div class="author-details">

                    <div class="author-info">

                        <p class="lead">
                            A prolific social scientist whose regular publications on Africa is syndicated in many countries and languages. Probably the first African to formally accept the appellation of Africanist. He personally prefers that his academic mantra be referred to as ‘Africaism’ – ‘African intellectualism without tears’. He is the only known African with formal membership of the Adventurers Club. Upon being elected as President of The Adventurers, the Professor undertakes to unite Yunhouse with The Adventurers. His ambition provokes The Second Battle For Yunhouse.
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