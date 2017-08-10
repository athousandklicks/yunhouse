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
					
					<div class="col-sm-4 col-md-3">
						<div id="sitebar">
							<div class="widget">
								<div class="add featured-add">
									<a href="#"><img class="img-responsive" src="images/post/add/add1.jpg" alt="" /></a>
								</div>

							</div><!--/#widget-->
							
							<div class="widget follow-us">
								<h1 class="section-title title">Follow Us</h1>
								<ul class="list-inline social-icons">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								</ul>
							</div><!--/#widget-->
							
							<div class="widget">
								<h1 class="section-title title">This is Rising!</h1>
								<ul class="post-list">
									<li>
										<div class="post small-post">
											<div class="entry-header">
												<div class="entry-thumbnail">
													<img class="img-responsive" src="images/post/rising/1.jpg" alt="" />
												</div>
											</div>
											<div class="post-content">								
												<div class="video-catagory"><a href="#">World</a></div>
												<h2 class="entry-title">
													<a href="news-details.html">3 students arrested after body-slamming principal</a>
												</h2>
											</div>
										</div><!--/post--> 
									</li>
									<li>
										<div class="post small-post">
											<div class="entry-header">
												<div class="entry-thumbnail">
													<img class="img-responsive" src="images/post/rising/2.jpg" alt="" />
												</div>
											</div>
											<div class="post-content">								
												<div class="video-catagory"><a href="#">Business</a></div>
												<h2 class="entry-title">
													<a href="news-details.html">3 students arrested after body-slamming principal</a>
												</h2>
											</div>
										</div><!--/post-->
									</li>
									<li>
										<div class="post small-post">
											<div class="entry-header">
												<div class="entry-thumbnail">
													<img class="img-responsive" src="images/post/rising/3.jpg" alt="" />
												</div>
											</div>
											<div class="post-content">								
												<div class="video-catagory"><a href="#">Sports</a></div>
												<h2 class="entry-title">
													<a href="news-details.html">3 students arrested after body-slamming principal</a>
												</h2>
											</div>
										</div><!--/post-->
									</li>
									<li>
										<div class="post small-post">
											<div class="entry-header">
												<div class="entry-thumbnail">
													<img class="img-responsive" src="images/post/rising/4.jpg" alt="" />
												</div>
											</div>
											<div class="post-content">								
												<div class="video-catagory"><a href="#">Technology</a></div>
												<h2 class="entry-title">
													<a href="news-details.html">3 students arrested after body-slamming principal</a>
												</h2>
											</div>
										</div><!--/post-->
									</li>
									<li>
										<div class="post small-post">
											<div class="entry-header">
												<div class="entry-thumbnail">
													<img class="img-responsive" src="images/post/rising/5.jpg" alt="" />
												</div>
											</div>
											<div class="post-content">								
												<div class="video-catagory"><a href="#">Politics</a></div>
												<h2 class="entry-title">
													<a href="news-details.html">3 students arrested after body-slamming principal</a>
												</h2>
											</div>
										</div><!--/post-->
									</li>
									<li>
										<div class="post small-post">
											<div class="entry-header">
												<div class="entry-thumbnail">
													<img class="img-responsive" src="images/post/rising/6.jpg" alt="" />
												</div>
											</div>
											<div class="post-content">								
												<div class="video-catagory"><a href="#">Health</a></div>
												<h2 class="entry-title">
													<a href="news-details.html">3 students arrested after body-slamming principal</a>
												</h2>
											</div>
										</div><!--/post-->
									</li>
									<li>
										<div class="post small-post">
											<div class="entry-header">
												<div class="entry-thumbnail">
													<img class="img-responsive" src="images/post/rising/7.jpg" alt="" />
												</div>
											</div>
											<div class="post-content">								
												<div class="video-catagory"><a href="#">Lifestyle</a></div>
												<h2 class="entry-title">
													<a href="news-details.html">3 students arrested after body-slamming principal</a>
												</h2>
											</div>
										</div><!--/post-->
									</li>
									<li>
										<div class="post small-post">
											<div class="entry-header">
												<div class="entry-thumbnail">
													<img class="img-responsive" src="images/post/rising/8.jpg" alt="" />
												</div>
											</div>
											<div class="post-content">								
												<div class="video-catagory"><a href="#">Entertainment</a></div>
												<h2 class="entry-title">
													<a href="news-details.html">3 students arrested after body-slamming principal</a>
												</h2>
											</div>
										</div><!--/post-->
									</li>
									
								</ul>
							</div><!--/#widget-->
						</div><!--/#sitebar-->
					</div>
				</div>				
			</div><!--/.section-->
		</div><!--/.container-->


@endsection