@extends('pages-layout')

@section('title', "| Yunhouse Characters")


@section('content')

<div class="container">
			<div class="page-breadcrumbs">
				<h1 class="section-title">Yunhouse Characters</h1>
			</div>
			<div class="section">
				<div class="row">
					<div class="col-sm-8 col-md-9">						
						<div class="author-listing">
							<div class="authors">
								<ul class="row">
								@foreach($characters as $character)
									<li class="col-sm-6 col-md-4">
										<div class="single-author">
											<div class="author-bg">
												<img src="{{asset('images/character/'.$character->img)}}" width ="256" height="115" />
											</div>
											<div class="author-image">
												<a href="author-details.html"><img class="img-responsive" src="images/character/90by90.jpg" alt="" /></a>
											</div>
											<div class="author-info">
												<h2><a href="author-details.html">{!!$character->name!!}</a></h2>
												
											</div>
											<div class="character-info">
												{{strip_tags(str_limit($character->body, 120, '...'))}} <span class="read-more"><a href="{{ route('character.single', $character->id) }}">Read More</a></span>
											</div>
										</div><!-- single-author -->
									</li>

									@endforeach
								</ul>
							</div>
						</div><!-- author-listing -->
						
				
					</div><!--/.col-sm-9 -->	
					
					<div class="col-sm-3">
                        @include('partials.right-side-bar');
                    </div>
				</div>				
			</div><!--/.section-->
		</div><!--/.container-->


@endsection