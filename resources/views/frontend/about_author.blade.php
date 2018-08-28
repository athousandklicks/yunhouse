@extends('main')

@section('title', "| About Ad'Obe Obe")



@section('content')

<div class="page-breadcrumbs">
				<h1 class="section-title">Author's Profile</h1>
			</div>
			<div class="section">
				<div class="row">
					<div class="col-sm-9">
						<div id="site-content" class="site-content">
							<div class="author-details">
								<div class="author-heading">
									<div class="author-profile">
										<div class="author-gravatar">
											<img class="img-responsive" src="images/author/author-thumbnail.jpg" alt="" />
										</div>
										<div class="author-name">
											<h1 class="author-title">Ad’Obe Obe</h1>
											<p>Renowned Journalist & Author</p>
										</div>
										<div class="author-social">
											<p>Find Me</p>
											<ul class="list-inline social-icons">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												
												
											</ul>
										</div>
									</div>
								</div>
								<div class="author-info">
									<h3>About Ad’Obe Obe</h3>
									<p>Ad’Obe Obe has been resident in London since the Easter of 1974. He studied chemical engineering in Germany and philosophy in London. He has taught mathematics in Kenya. He has lived in The Gambia, Ghana and Tanzania. He has worked as executive officer in the British civil service. For decades, he operated as London-based journalist, writer and broadcaster, making scores of contributions to media organs worldwide, such as VOA, BBC, Deutschewelle, The Guardian and The Observer newspapers. He was the editor of West Africa during the occasion of the weekly newsmagazine’s 70th anniversary in 1987. He was Consultant Editor at the Daily Graphic in Accra, Ghana. He has interviewed numerous African presidents. In 1997, he conceived, designed and co-ordinated Africa @40? – International Conference On Independent Africa, to celebrate the fortieth year of Ghana as the first black African country to attain freedom from colonialism. More than half a dozen African heads of state participated at the conference. He was a member of the campaign team for the election of President Olusegun Obasanjo in 1999, subsequently serving as presidential assistant in which capacity he designed and launched SERVICOM, Nigeria’s popular service delivery programme. His time is now divided between parenting his toddler son, his Abuja farm and his Brixton Shrine – his London home for over three decades.</p>
								</div>

							</div>


						</div><!--/#site-content-->
						
						<div class="row">
							<div class="col-sm-12">
							<h1 class="section-title">Author's Gallery</h1>
								<div class="section">
									<div class="row">
										<div class="col-sm-6">
											<div class="post medium-post">
												<div class="entry-header">
													<div class="entry-thumbnail">
														<img class="img-responsive" src="/images/author/1.jpg" alt="" />
													</div>
												</div>
											</div><!--/post--> 
										</div>

										<div class="col-sm-6">
											<div class="post medium-post">
												<div class="entry-header">
													<div class="entry-thumbnail">
														<img class="img-responsive" src="/images/author/2.jpg" alt="" />
													</div>
												</div>
											</div><!--/post--> 
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<div class="post medium-post">
												<div class="entry-header">
													<div class="entry-thumbnail">
														<img class="img-responsive" src="/images/author/3.jpg" alt="" />
													</div>
												</div>
											</div><!--/post--> 
										</div>

										<div class="col-sm-6">
											<div class="post medium-post">
												<div class="entry-header">
													<div class="entry-thumbnail">
														<img class="img-responsive" src="/images/author/4.jpg" alt="" />
													</div>
												</div>
											</div><!--/post--> 
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<div class="post medium-post">
												<div class="entry-header">
													<div class="entry-thumbnail">
														<img class="img-responsive" src="/images/author/5.jpg" alt="" />
													</div>
												</div>
											</div><!--/post--> 
										</div>

										<div class="col-sm-6">
											<div class="post medium-post">
												<div class="entry-header">
													<div class="entry-thumbnail">
														<img class="img-responsive" src="/images/author/6.jpg" alt="" />
													</div>
												</div>
											</div><!--/post--> 
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<div class="post medium-post">
												<div class="entry-header">
													<div class="entry-thumbnail">
														<img class="img-responsive" src="/images/author/7.jpg" alt="" />
													</div>
												</div>
											</div><!--/post--> 
										</div>

										<div class="col-sm-6">
											<div class="post medium-post">
												<div class="entry-header">
													<div class="entry-thumbnail">
														<img class="img-responsive" src="/images/author/8.jpg" alt="" />
													</div>
												</div>
											</div><!--/post--> 
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<div class="post medium-post">
												<div class="entry-header">
													<div class="entry-thumbnail">
														<img class="img-responsive" src="/images/author/9.jpg" alt="" />
													</div>
												</div>
											</div><!--/post--> 
										</div>

										<div class="col-sm-6">
											<div class="post medium-post">
												<div class="entry-header">
													<div class="entry-thumbnail">
														<img class="img-responsive" src="/images/author/10.jpg" alt="" />
													</div>
												</div>
											</div><!--/post--> 
										</div>
									</div>



								</div><!--/.section -->	
						<div>
                            <a href="/download/meet-adobe-obe.pdf" target="_blank"><img class="img-responsive" src="/images/frontend/pdf-icon.png" alt="" /></a>
                        </div> 
							</div>
						</div>
						
					</div><!--/.col-sm-9 -->	
					
					<div class="col-sm-3">
                        @include('partials.right-side-bar')
                    </div>
				</div>				
			</div><!--/.section-->

@endsection