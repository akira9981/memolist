@extends('layouts.app')

@section('content')
<div class="sinupPage">
  <div class="titleArea">
    <h1>MemoList Sign up</h1>
    <div class="m-3">or</div>
      <p class="acountPage_link"><a href="{{ route('login') }}">Sign in</a></p>
    </div>
    <div class="container">
      <form class="mt-5, signupForm" id="new_user" action="{{ route('register') }}" accept-charset="UTF-8" method="post">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          <label for="user_name">User Name</label>
          <input class="form-control" placeholder="Enter your name" type="text" name="name" value="{{ old('name') }}" required autofocus>
          @if ($errors->has('name'))
            <span class="help-block">
              <strong>{{ $errors->first('name') }}</strong>
            </span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
           <label for="user_email">Mail Address</label>
          <input class="form-control" placeholder="Enter your e-mail address" autocomplete="email" type="email" name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <label for="user_password">Password</label>
          <em>(6 characters or more)</em>
          <br>
          <input class="form-control" placeholder="Enter the password" autocomplete="off" type="password" name="password" required>
            @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
        </div>
        <div class="form-group">
          <label for="user_password_confirmation">Password Confirmation</label>
          <input class="form-control" placeholder="Enter the password again" autocomplete="off" type="password" name="password_confirmation" required>
        </div>
        <div class="text-center">
          <input type="submit" name="commit" value="Sign up" class="btn submitBtn" data-disable-with="Sign up">
        </div>
    </form>
  </div>
</div>
@endsection