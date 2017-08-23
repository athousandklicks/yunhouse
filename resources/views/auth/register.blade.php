@extends('pages-layout')

@section('title', '| YUNHOUSE: Become a Member of Palavar Hall')

@section('content')

<div class="signup-page">
            <div class="container">
                <div class="row">
                    <!-- user-login -->         
                    <div class="col-sm-4 col-sm-offset-4">
                        <div class="ragister-account">      
                            <h1 class="section-title-sidebar title">Become a Member of Palavar Hall</h1>
                            
                            <form id="registation-form" name="registation-form" role="form" method="post" action="{{ route('register') }}">
                        {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name">Name</label>
                                    <input id="name" type="text" name="name" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                </div>
                            
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" >Email</label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                     @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm">Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                               
                                <div class="submit-button text-center">
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </div>
                            </form> 
                        </div>
                    </div><!-- user-login -->           
                </div><!-- row -->  
            </div><!-- container -->
        </div><!-- signup-page -->



        @endsection


        @section('scripts')
<script src="{{ asset('js/app.js') }}"></script>
           @endsection
