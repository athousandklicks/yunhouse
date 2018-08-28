@extends('main')

@section('title', "| The Africa Picture (No Spitting)")



@section('content')

<div class="page-breadcrumbs">
    <h1 class="section-title">The Africa Picture (No Spitting)</h1>
</div>
<div class="section">
    <div class="row">
        <div class="col-sm-9">
            <div id="site-content" class="site-content">
                <div class="author-details">
                 
                    <div class="author-info">
                       
                        <p class="lead">This first ever pan-Africa news magazine is launched in the second decade of the twentieth century from the publishing stable of the World Chronicle [WC] whose publisher had an uncle who sat as a British delegate at the 1884 Berlin Conference. The publication is conceived as a medium for Englishmen to cross-fertilise their ideas and experiences of Africa. The publisher does not have African readership in mind. Yet the magazine becomes a must-read for Africans living London. The magazine is, without any doubt, the best – if not the only – chronicle of The Pacification Of The Natives. Palaver Hall library has all the issues of the magazine.</p>

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