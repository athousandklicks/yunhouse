<header id="navigation">
	<div class="navbar sticky-nav" role="banner">				
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>							
				<a class="navbar-brand" href="/">
					<img class="main-logo img-responsive" src="/images/frontend/logo2.png" alt="logo">
				</a>
			</div> 
			<nav id="mainmenu" class="navbar-left collapse navbar-collapse"> 
				<ul class="nav navbar-nav">                       
					<li class="sports"><a href="/yunhouse-in-brief">Yunhouse in Brief</a></li>

					<li class="environment dropdown mega-dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">About the Author</a>
						<div class="dropdown-menu mega-menu">
							<div class="container">
								<div class="row">
									<div class="col-sm-3">
										<h3 class="sub-nav-heading">Meet Ad'Obe Obe</h3>
											<h2 class="entry-title"> Ad’Obe Obe has been resident in London since the Easter of 1974. He studied chemical engineering in Germany and philosophy in London. <span class="read-more"><a href="/about-author">...Read More</a></span></h2>
										</div>
										<div class="col-sm-3">
											<h3 class="sub-nav-heading">DREAMING YUNHOUSE</h3>
												<h2 class="entry-title"> I began dreaming of Yunhouse from the moment of my arrival in Europe in the middle of the last century. It was a dream that would afflict <span class="read-more"><a href="/dreaming-yunhouse">...Read More</a></span></h2>
											</div>
											<div class="col-sm-3">

												<div class="entry-thumbnail">
													<img class="img-responsive" src="images/author/1.jpg" alt="" /> 
												</div>												
											</div>
											<div class="col-sm-3">
												<div class="entry-thumbnail">
													<img class="img-responsive" src="images/author/2.jpg" alt="" /> 
												</div>	
											</div>
										</div>
									</div>
								</div>
							</li>

							

							<li class="sports"><a href="/yunhouse-character">Yunhouse Characters</a></li>

							<li class="sports"><a href="/list-of-tales">Intro Tales</a></li>
							 @if (Auth::check())

                                <li class="sports"><a href="/list-of-tales">Enter Palavar Hall</a></li>
                                @else
                                <li class="environment dropdown mega-dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Palavar Hall</a>
                                    <div class="dropdown-menu mega-menu">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h2><b>About Palavar Hall</b></h2>
                                                    <h2 class="entry-title"> Ad’Obe Obe has been resident in London since the Easter of 1974. He studied chemical engineering in Germany and philosophy in London. Ad’Obe Obe has been resident in London since the Easter of 1974. He studied chemical engineering in Germany and philosophy in London.<span class="read-more"><a href="/palavar">...Read More</a></span></h2>
                                                </div>

                                                <div class="col-sm-3">
                                                    <h2 class="entry-title">Social Login</h1>
                                                        <div class="login-options text-center">
                                                            <a href="/auth/facebook" class="facebook-login"><i class="fa fa-facebook"></i>Facebook Login</a>
                                                            <a href="/auth/twitter" class="twitter-login"><i class="fa fa-twitter"></i>Twitter Login</a>
                                                            <a href="/auth/google" class="google-login"><i class="fa fa-google-plus"></i>Google+ Login</a>

                                                        </div>                                              
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="nav-login">
                                                            <div class="top-user-form">
                                                                <form id="top-login" role="form">
                                                                    <div class="input-group" id="top-login-username">
                                                                        <span class="input-group-addon"><img src="/images/others/user-icon.png" alt="" /></span>
                                                                        <input type="text" class="form-control" placeholder="Username" required="">
                                                                    </div>
                                                                    <div class="input-group" id="top-login-password">
                                                                        <span class="input-group-addon"><img src="/images/others/password-icon.png" alt="" /></span>                                            <input type="password" class="form-control" placeholder="Password" required="">
                                                                    </div>
                                                                    <div>                                               <p class="reset-user">Forgot <a href="#">Password/Username?</a></p>
                                                                        <button class="btn btn-danger" type="submit">Login</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="create-account">
                                                                <a href="/register">Create a New Account</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    @endif



								<li class="sports"><a href="/list-of-downloads">Download</a></li>

								

							

								@if (Auth::check())
								<li class="environment dropdown mega-dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><img src="/images/others/user-icon.png" alt="" />  Hello {{ Auth::user()->name }}</a>
									<div class="dropdown-menu top-user-section">
										<div class="top-user-form">
											<form id="logout-form" role="form"action="{{ route('logout') }}" method="POST">
													{{ csrf_field() }}

												<div>
													<a href="{{ route('logout') }}"
													onclick="event.preventDefault();
													document.getElementById('logout-form').submit();" class="google-login">
													Logout
												</a>
												</div>
											</form>
										</div>

									</div>
								</li>

								@else

								<li class="dropdown user-panel"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><img src="/images/others/user-icon.png" alt="" /></a>
									<div class="dropdown-menu top-user-section">
										<div class="top-user-form">
											<form id="top-login" role="form">
												<div class="input-group" id="top-login-username">
													<span class="input-group-addon"><img src="images/others/user-icon.png" alt="" /></span>
													<input type="text" class="form-control" placeholder="Username" required="">
												</div>
												<div class="input-group" id="top-login-password">
													<span class="input-group-addon"><img src="images/others/password-icon.png" alt="" /></span>
													<input type="password" class="form-control" placeholder="Password" required="">
												</div>
												<div>
													<p class="reset-user">Forgot <a href="#">Password/Username?</a></p>
													<button class="btn btn-danger" type="submit">Login</button>
												</div>
											</form>
										</div>
										<div class="create-account">
											<a href="/register">Create a New Account</a>
										</div>
									</div>
								</li>

								@endif
								</ul> 					
						</nav>

					</div>
				</div>
			</header><!--/#navigation--> 