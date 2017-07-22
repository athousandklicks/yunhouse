<div class="topbar">
    <div class="container">
        <div id="date-time"></div>
        <div id="topbar-right">
            <div class="dropdown language-dropdown">                        

            </div>              
            <div id="weather"></div>
            <div class="searchNlogin">
                <ul>
                @if (Auth::check())

                    <li class="dropdown">
                      <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello {{ Auth::user()->name }} <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                </li>

                @else

                <li class="dropdown user-panel"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i></a>
                    <div class="dropdown-menu top-user-section">
                        <div class="top-user-form">

                            <form id="top-login" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                                <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><img src="/images/others/user-icon.png" alt="" /></span>

                                     <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>

                                <div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><img src="/images/others/password-icon.png" alt="" /></span>

                                    <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>

                                <div class="input-group">
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </div>

                                <div>
                                    <p class="reset-user"><a href="{{ route('password.request') }}">Forgot Your Password?</a></p>

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
            <div class="search">
                <form role="form">
                    <input type="text" class="search-form" autocomplete="off" placeholder="Type & Press Enter">
                </form>
            </div> <!--/.search--> 
        </div><!-- searchNlogin -->
    </div>
</div>
</div>