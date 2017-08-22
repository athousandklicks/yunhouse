@extends('pages-layout')

@section('title', "| Afrinc")



@section('content')

<div class="page-breadcrumbs">
    <h1 class="section-title">Afrinc</h1>
</div>
<div class="section">
    <div class="row">
        <div class="col-sm-9">
            <div id="site-content" class="site-content">
                <div class="author-details">

                    <div class="author-info">

                        <p class="lead">
                        This is a Purpose-built African Computer_Designed And Used Exclusively By Non-Africans. It is based in Liechtenstein. Yunhouse authorities manage to obtain a full printout of Afrinc’s database. There is strong evidence to suggest that The Computer’s bowels contains everything ever printed in The Africa Picture [No Spitting!]. It is also believed this computer may have data on everything there is to know about Yunhouse and more.</p>

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