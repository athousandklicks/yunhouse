@extends('main')

@section('title', "| About Ad'Obe Obe")


@section('content')

<div id="all">

	<div id="content">
		<div class="container">

			<div class="col-md-3">
                    <!-- *** BLOG MENU ***
                    _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                    	<div class="panel-heading">
                    		<h3 class="panel-title">Quick Links</h3>
                    	</div>

                    	<div class="panel-body">
                    		<ul class="nav nav-pills nav-stacked category-menu">
                    			<li class="{{ Request::is('yunhouse-in-brief') ? "active" : "" }}">
                    				<a href="/yunhouse-in-brief">Yunhouse in Brief</a>
                    			</li>
                    			<li class="{{ Request::is('about-author') ? "active" : "" }}">
                    				<a href="/about-author">About Ad'Obe</a>
                    			</li>
                    			<li class="{{ Request::is('dreaming-yunhouse') ? "active" : "" }}">
                    				<a href="/dreaming-yunhouse">Dreaming Yunhouse</a>
                    			</li>

                    		</ul>

                    	</div>
                    </div>

                    <div class="panel panel-default sidebar-menu">

                    	<div class="panel-heading">
                    		<h3 class="panel-title">Be a Part</h3>
                    	</div>

                    	<div class="panel-body">
                    		<ul class="nav nav-pills nav-stacked category-menu">
                    			<li class="{{ Request::is('/') ? "active" : "" }}">
                    				<a href="category.html">Read Tales</a>
                    			</li>
                    			<li class="{{ Request::is('/') ? "active" : "" }}">
                    				<a href="category.html">Write a Review</a>
                    			</li>
                    			<li class="{{ Request::is('/') ? "active" : "" }}">
                    				<a href="category.html">Login/Register</a>
                    			</li>
                    			<li class="{{ Request::is('/') ? "active" : "" }}">
                    				<a href="category.html">Buy/Download</a>
                    			</li>

                    		</ul>

                    	</div>
                    </div>
                    <!-- /.col-md-3 -->


                </div>

                <div class="col-sm-9" id="blog-post">


                	<div class="box">

                		<h1>About the Author</h1>
                		
                		<p class="lead">Ad’Obe Obe has been resident in London since the Easter of 1974. He studied chemical engineering in Germany and philosophy in London. He has taught mathematics in Kenya. He has lived in The Gambia, Ghana and Tanzania. He has worked as executive officer in the British civil service.</p>
                		<div class="col-sm-6">
                			<div class="flip-container">
                				<div class="flipper">
                					<div class="front">
                						<a href="detail.html">
                							<img src="images/author/adode1.jpg" alt="" class="img-responsive">
                						</a>
                					</div>

                				</div>
                			</div>

                		</div>
                		<div class="col-sm-6">
                			<div class="flip-container">
                				<div class="flipper">
                					<div class="front">
                						<a href="detail.html">
                							<img src="images/author/adode2.jpg" alt="" class="img-responsive">
                						</a>
                					</div>
                				</div>
                			</div>
                		</div>



                		<div id="post-content">
                			<p> For decades, he operated as London-based journalist, writer and broadcaster, making scores of contributions to media organs worldwide, such as VOA, BBC, Deutschewelle, The Guardian and The Observer newspapers. He was the editor of West Africa during the occasion of the weekly newsmagazine’s 70th anniversary in 1987. He was Consultant Editor at the Daily Graphic in Accra, Ghana. He has interviewed numerous African presidents. In 1997, he conceived, designed and co-ordinated Africa @40? – International Conference On Independent Africa, to celebrate the fortieth year of Ghana as the first black African country to attain freedom from colonialism. More than half a dozen African heads of state participated at the conference. 


                				<div class="col-sm-6">
                					<div class="flip-container">
                						<div class="flipper">
                							<div class="front">
                								<a href="detail.html">
                									<img src="images/author/adode3.jpg" alt="" class="img-responsive">
                								</a>
                							</div>

                						</div>
                					</div>

                				</div>
                				<div class="col-sm-6">
                					<div class="flip-container">
                						<div class="flipper">
                							<div class="front">
                								<a href="detail.html">
                									<img src="images/author/adode4.jpg" alt="" class="img-responsive">
                								</a>
                							</div>
                						</div>
                					</div>
                				</div>
                				He was a member of the campaign team for the election of President Olusegun Obasanjo in 1999, subsequently serving as presidential assistant in which capacity he designed and launched SERVICOM, Nigeria’s popular service delivery programme. His time is now divided between parenting his toddler son, his Abuja farm and his Brixton Shrine – his London home for over three decades.</p>
                			</div>
                			<!-- /#post-content -->

    
                		</div>
                		<!-- /.box -->
                	</div>
                	<!-- /#blog-post -->


                </div>
                <!-- /.container -->

            </div>
        </div>
        <!-- /#content -->

        @endsection