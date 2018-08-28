@extends('main')

@section('title', "| The Africa Freedom Council")



@section('content')

<div class="page-breadcrumbs">
    <h1 class="section-title">The Africa Freedom Council</h1>
</div>
<div class="section">
    <div class="row">
        <div class="col-sm-9">
            <div id="site-content" class="site-content">
                <div class="author-details">
                 
                    <div class="author-info">
                       
                        <p class="lead">A political movement that germinates from a public lecture by an Oxford University Don at the Adventurers Club. The Professor gets branded William Wilberforce II (after the famous Englishman who campaigned against slavery and slave trade) for arguing that colonialism oppresses Africans’ fundamental human rights and therefore offensive to English sense of justice. AFC launching is a grand ceremony attended by dozens of invited African tribal chiefs who voyage to London in a special vessel named SS FREEDOM.</p>

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