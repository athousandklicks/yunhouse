@if (Auth::check())
<div id="sitebar">
    <div class="widget">
        <div class="post medium-post">
            <div class="ragister-account account-login">  

                <h1 class="section-title-sidebar title"><a href="/list-of-tales"><span class="upper-case">Go to Palaver Hall</span></a></h1>
                <p>Yunhouse generation of Africans watched Europeans hijack and bastardise the destiny of the continent of Africa and African Peoples. Palaver Hall is the forum where you are free to express your opinion on this unsurpassable episode of man’s inhumanity to man. </p>.
            </div>
            <div><p class="buy-yunhouse">Buy Yunhouse</p></div>
            <div class="amazon_button">

                <span><a href="https://www.amazon.co.uk/dp/1999864107?ref_=pe_870760_150889320?_encoding=UTF8&camp=1789&creative=9325&linkCode=ur2&tag=storypodca-20&linkId=2P4S6EY6B462X4AR" target="_blank"><img class="img-responsive" src="/images/frontend/amazon-button.png" alt="" /></a></span>

            </div>

            <hr class="style1">

            <div><p class="downloads">Downloads</p></div>
            <div class="downloads-button">
                <span><a href="/list-of-downloads"><img class="img-responsive" src="/images/frontend/download-button.png" alt="" /></a></span>
            </div>
            <hr class="style1">

            <div class="widget follow-us">
                <h1 class="section-title-sidebar title">Follow Yunhouse</h1>
                <ul class="list-inline social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>

                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>

            </div><!--/#widget-->
        </div><!--/#widget-->
    </div><!--/#widget-->
</div><!--/#sitebar-->
@else

<div id="sitebar">
    <div class="widget">

        <div class="post medium-post">
            <div><p class="buy-yunhouse">Buy Yunhouse</p></div>
            <div class="amazon_button">

                <span><a href="https://www.amazon.co.uk/dp/1999864107?ref_=pe_870760_150889320?_encoding=UTF8&camp=1789&creative=9325&linkCode=ur2&tag=storypodca-20&linkId=2P4S6EY6B462X4AR" target="_blank"><img class="img-responsive" src="/images/frontend/amazon-button.png" alt="" /></a></span>

            </div>

            <hr class="style1">

            <div><p class="downloads">Downloads</p></div>
            <div class="downloads-button">
                <span><a href="/list-of-downloads"><img class="img-responsive" src="/images/frontend/download-button.png" alt="" /></a></span>
            </div>

            
            

            <hr class="style1">
            <div><p class="buy-yunhouse">Welcome to Palaver Hall</p></div>
             <div class="ragister-account account-login"> 

                <h1 class="section-title-sidebar title"><span class="login-profile">The Africa Lives in Palavar Hall!<br/>Join the Debate in the Comment's Section</span> </h1>
                <h1 class="section-title-sidebar title"><a> <span tooltip="Yunhouse generation of Africans watched Europeans hijack and bastardise the destiny of the continent of Africa and African Peoples. Palaver Hall is the forum where you are free to express your opinion on this unsurpassable episode of man’s inhumanity to man. ">Palaver Hall in  Brief  <i class="fa fa-mouse-pointer" aria-hidden="true"></i></span></a></h1>
                {{-- <hr class="style1">

                <h1 class="section-title-sidebar title"> <span class ="login-profile">Already a Member? login now</span></h1> --}}
                
                {{-- <form id="registation-form" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label><span class="login-profile">Email</span></label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <label><span class="login-profile">Password</span></label>
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <!-- checkbox -->
                    <div class="checkbox">
                        <label class="pull-left"><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> <span class="login-profile">Keep Me Login </span></label>

                        <label class="pull-left"><a href="{{ route('password.request') }}" class="pull-right "><span class="login-profile">Forgot Password </span></a> </label>

                    </div><!-- checkbox --> 
                    <div class="submit-button text-center">
                        <button type="submit" class="btn btn-primary">Enter Palavar Hall</button>
                    </div>
                </form>  --}}


                {{-- <div class="devider text-center"><span class="login-profile">Social Login</span></div> --}}
                {{-- <div class="login-options text-center">
                    <a href="/auth/facebook"><i class="fa fa-facebook-official fa-2x" ></i></a>
                    <a href="/auth/twitter"> <i class="fa fa-twitter-square fa-2x" ></i></i></a>
                    <a href="/auth/google"><i class="fa fa-google-plus-square fa-2x" ></i></a>

                </div> --}}

            </div>
        </div><!--/post--> 
        <div class="widget follow-us">
            <h1 class="section-title-sidebar title">Follow Yunhouse</h1>
            <ul class="list-inline social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>

                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>

        </div><!--/#widget-->


    </div><!--/#widget-->



</div><!--/#sitebar-->
@endif