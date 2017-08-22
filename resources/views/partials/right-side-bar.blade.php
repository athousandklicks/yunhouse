@if (Auth::check())
<div id="sitebar">
    <div class="widget">
        <div class="post medium-post">
        <div class="ragister-account account-login">        
                <h1 class="section-title-sidebar title">Go to Palavar Hall</h1>
            <p class="lead-sidebar">This user is logged in. Comments from Palavar hall will appear here</p>
            </div>
        </div><!--/#widget-->
    </div><!--/#widget-->
</div><!--/#sitebar-->
@else

<div id="sitebar">
    <div class="widget">

        <div class="post medium-post">


            <div class="ragister-account account-login">        
                <h1 class="section-title-sidebar title">The Africa Lives in Palavar Hall! <br/>Join the Discussion</h1>
                
                <h1 class="section-title-sidebar title"><a href="/register"> Become a Member  <i class="fa fa-mouse-pointer" aria-hidden="true"></i></a></h1>
                <form id="registation-form" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label>Email</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <label>Password</label>
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <!-- checkbox -->
                    <div class="checkbox">
                        <label class="pull-left"><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Keep Me Login </label>

                        <label class="pull-left"><a href="{{ route('password.request') }}" class="pull-right ">Forgot Password </a> </label>

                    </div><!-- checkbox --> 
                    <div class="submit-button text-center">
                        <button type="submit" class="btn btn-primary">Enter Palavar Hall</button>
                    </div>
                </form> 
                <div class="devider text-center">Social Login</div>
                <div class="login-options text-center">
                    <a href="/auth/facebook"><i class="fa fa-facebook-official fa-2x" ></i></a>
                    <a href="/auth/twitter"> <i class="fa fa-twitter-square fa-2x" ></i></i></a>
                    <a href="/auth/google"><i class="fa fa-google-plus-square fa-2x" ></i></a>

                </div>

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
        <div class="widget write-review">

            <div id="breaking-news">
                <span><a href="#">Yunhouse Reviews</a></span>
            </div>
        </div><!--/#widget-->

    </div><!--/#widget-->



</div><!--/#sitebar-->
@endif