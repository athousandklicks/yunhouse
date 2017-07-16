@extends('main')

@section('title', '| YUNHOUSE: Assorted London Tales about the Africa')


@section('content')

<div class="section">
    <div class="row">
        <div class="col-sm-9">
            <div id="site-content" class="site-content">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="left-content">
                            <div class="world-news">

                                <div class="post">
                                    <div class="entry-header">
                                        <div class="entry-thumbnail">
                                            <img class="img-responsive" src="images/frontend/index-cover.png" alt="" />
                                        </div>
                                    </div>
                                    <div class="post-content">                              

                                        <h2 class="entry-title">
                                            <a href="#">Dreaming Yunhouse</a>
                                        </h2>
                                        <div class="entry-content">
                                            <h2 class="entry-title"> I began dreaming of Yunhouse from the moment of my arrival in Europe in the middle of the last century. It was a dream that would afflict my career <span class="read-more"><a href="#">...Read More</a></span></h2>
                                        </div>
                                    </div>

                                </div><!--/post--> 
                            </div><!--/.section-->      
                        </div><!--/.left-content-->
                    </div>

                    <div class="col-sm-6">
                        <div class="left-content">
                            <div class="world-news">

                                <div class="post">
                                    <div class="entry-header">
                                        <div class="entry-thumbnail">
                                            <img class="img-responsive" src="images/frontend/col.png" alt="" />
                                        </div>
                                    </div>
                                    <div class="post-content">                              

                                        <h2 class="entry-title">
                                            <a href="#">Yunhouse in Brief</a>
                                        </h2>
                                        <div class="entry-content">
                                            <h2 class="entry-title">In the year 1884, in the German City of Berlin, representatives of major European nations gathered around a giant map of the continent of Africa <span class="read-more"><a href="#">...Read More</a></span></h2>
                                        </div>
                                    </div>

                                </div><!--/post--> 
                            </div><!--/.section-->      
                        </div><!--/.left-content-->

                    </div>

                </div>
            </div><!--/#site-content-->
            <div class="row">
                <div class="col-sm-12">
                    <div class="section">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="post medium-post">
                                    <div class="entry-header">
                                        <div class="entry-thumbnail">
                                            <img class="img-responsive" src="images/author/1.jpg" alt="" />
                                        </div>
                                    </div>
                                    <div class="post-content">                              

                                        <h2 class="entry-title">
                                            <a href="#">About the Author</a>
                                        </h2>
                                        <div class="entry-content">
                                            <h2 class="entry-title">
                                                Ad’Obe Obe has been resident in London since the Easter of 1974. He studied chemical engineering in Germany and  
                                                <span class="read-more"><a href="#">...Read More</a></span></h2>
                                            </div>
                                        </div>
                                    </div><!--/post--> 

                                </div>
                                <div class="col-sm-4">

                                    <div class="post medium-post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                                <img class="img-responsive" src="images/frontend/dreaming.png" alt="" />
                                            </div>
                                        </div>
                                        <div class="post-content">                              
                                            <h2 class="entry-title">
                                                <a href="#">Yunhouse Characters</a>
                                            </h2>
                                            <div class="entry-content">
                                                <h2 class="entry-title">
                                                    Cy, as he is known to everyone in Yunhouse, is named after a Welshman who was a guest at his naming ceremony (c1890).  
                                                    <span class="read-more"><a href="#">...Read More</a></span></h2>
                                                </div>
                                            </div>
                                        </div><!--/post--> 
                                    </div>
                                    <div class="col-sm-4">

                                        <div class="post medium-post">
                                            <div class="entry-header">
                                                <div class="entry-thumbnail">
                                                    <img class="img-responsive" src="images/frontend/palavar-hall.png" alt="" />
                                                </div>
                                            </div>
                                            <div class="post-content">                              
                                                <h2 class="entry-title">
                                                    <a href="#">About Palavar Hall</a>
                                                </h2>
                                                <div class="entry-content">
                                                    <h2 class="entry-title">
                                                        How about a letter to Mother Africa. Tell her how her descendants have evolved, the hatred, the love, the variety    
                                                        <span class="read-more"><a href="#">...Read More</a></span></h2>
                                                    </div>
                                                </div>
                                            </div><!--/post--> 
                                        </div>
                                    </div>
                                </div><!--/.section -->                                 

                            </div>
                        </div>

                    </div><!--/.col-sm-9 -->    

                    <div class="col-sm-3">
                        <div id="sitebar">
                            <div class="widget">

                                <div class="post medium-post">


                                    <div class="ragister-account account-login">        
                                        <h1 class="section-title title">Enter Palavar Hall</h1>
                                        <div class="login-options text-center">
                                            <a href="#" class="facebook-login"><i class="fa fa-facebook"></i>Facebook Login</a>
                                            <a href="#" class="twitter-login"><i class="fa fa-twitter"></i>Twitter Login</a>

                                        </div>
                                        <div class="devider text-center">Or</div>
                                        <form id="registation-form" name="registation-form" method="post" action="#">

                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="email" name="email" class="form-control" required="required">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name="password" class="form-control" required="required">
                                            </div>
                                            <!-- checkbox -->
                                            <div class="checkbox">
                                                <label class="pull-left"><input type="checkbox" name="signing" id="signing"> Keep Me Login </label>
                                                <label class="pull-left"><a href="#" class="pull-right ">Forgot Password </a> </label>
                                            </div><!-- checkbox --> 
                                            <div class="submit-button text-center">
                                                <button type="submit" class="btn btn-primary">Account Login</button>
                                            </div>
                                        </form> 
                                        <div class="new-user text-center">
                                            <p>Don't have an account ? <a href="signup.html">Register Now</a> </p>
                                        </div>

                                    </div>
                                </div><!--/post--> 
                                <div class="widget follow-us">
                                    <h1 class="section-title title">Follow Yunhouse</h1>
                                    <ul class="list-inline social-icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>

                                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    </ul>

                                </div><!--/#widget-->
                                <div class="widget write-review">

                                    <div id="breaking-news">
                                        <span><a href="#">Write a Review</a></span>
                                    </div>
                                </div><!--/#widget-->

                            </div><!--/#widget-->



                        </div><!--/#sitebar-->
                    </div>
                </div>    

                <div class="row">
                    <div class="col-sm-12">
                       <div class="col-sm-6">
                        <div class="left-content">
                            <div class="world-news">

                                <div class="post">
                                    <div class="entry-header">
                                        <div class="entry-thumbnail">
                                            <img class="img-responsive" src="images/tales/mother-africa.png" alt="" />
                                        </div>
                                    </div>
                                    <div class="post-content">                              

                                        <h2 class="entry-title">
                                            <a href="#">MOTHER AFRICA</a>
                                        </h2>
                                        <div class="entry-content">
                                            <h2 class="entry-title"> The 20th Century was drawing to a close when the press release came: “ALL HUMANS ON PLANET EARTH ARE DESCENDED FROM AN AFRICAN WOMAN”. <span class="read-more"><a href="#">...Read More</a></span></h2>
                                        </div>
                                    </div>

                                </div><!--/post--> 
                            </div><!--/.section-->      
                        </div><!--/.left-content-->
                    </div>

                    <div class="col-sm-6">
                        <div class="left-content">
                            <div class="world-news">

                                <div class="post">
                                    <div class="entry-header">
                                        <div class="entry-thumbnail">
                                            <img class="img-responsive" src="images/tales/welcome-to-yunhouse.png" alt="" />
                                        </div>
                                    </div>
                                    <div class="post-content">                              

                                        <h2 class="entry-title">
                                            <a href="#">WELCOME TO YUNHOUSE</a>
                                        </h2>
                                        <div class="entry-content">
                                            <h2 class="entry-title"> LAST CHRISTMAS HAPPENED one thousand nine hundred and seventy-three hours ago. I counted them. This is the sort of thing you do when you are actively <span class="read-more"><a href="#">...Read More</a></span></h2>
                                        </div>
                                    </div>

                                </div><!--/post--> 
                            </div><!--/.section-->      
                        </div><!--/.left-content-->
                    </div>
                </div>
            </div>          
        </div><!--/.section-->


        <div id="twitter-feed">
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="twitter-feeds">
                            <div class="twitter-feed">
                                
                                
                                <p>How about a letter to Mother Africa. Tell her how her descendants have evolved, the hatred, the love, the variety of skin colours, the multiplicity of human habits as in cultures and traditions across the globe. Millennia of everything human, the wars, the atrocities, man’s inhumanity to man… Can you imagine Fleet Street reaction if the story had been that the mother of the entire human race was European?</p>
                            </div>
                            <div class="twitter-feed">
                          
                                
                                <p>...regarded by Africans all over the world as their intellectual property since that day a renegade group of Africans legally gained material possession of the building and declared it a Colony of Africa in the year Nineteen Hundred And Fifty-One – Anno Domini.</p>
                            </div>
                            <div class="twitter-feed">
                               
                                
                                <p>Picture categorised Africans who fought and won The First Battle For Yunhouse as “Radical Blacks” whose views on Africa would subsequently be fitted with caps of quotation marks before they could sit in its editorial pages, </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/#twitter-feed-->

        @endsection