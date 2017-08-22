@extends('pages-layout')

@section('title', "| Lekwot Abaka")



@section('content')

<div class="page-breadcrumbs">
    <h1 class="section-title">Lekwot Abaka </h1>
</div>
<div class="section">
    <div class="row">
        <div class="col-sm-9">
            <div id="site-content" class="site-content">
                <div class="author-details">

                    <div class="author-info">

                        <p class="lead">
                            Uncle Lekwot to all Yunis and every person who has anything to do with Yunhouse. Also known as the Cool Head Of Africa, in contrast with his lifelong companion, Cy – the Angry Man Of Africa. Both heads clinch at their first meeting into a kind of thermocouple generator that would power the Yunhouse African dynamism for nearly a century. Beginning with the formation of the Berliner Cult in a basement flat in North London, Uncle Lekwot goes on to chair all critical meetings in Yunhouse until he is voted The Man Who Has Chaired More Meetings On Africa Than Any Human Dead Or Alive.</p>
                            <p>He remains the Paramount Yun-Chief till the end of his life (c1999).
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