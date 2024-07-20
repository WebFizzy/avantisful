@extends('auth.layout')

@section('title', "$title - Login")
@section('content')

<div class="container py-5">
<div class="row justify-content-center">
  <div class="col-md-6">
    @if(count($errors) > 0 )
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul class="p-0 m-0" style="list-style: none;">
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if (session()->has('status'))
    <div class="text-center alert alert-success">
        {{ session()->get('status') }}
    </div>
    @endif

    <div class="card">
      <div class="card-header" style="text-align: center;">
          <h4>Login Form</h4>
          <p>Please sign-in to your account and continue.</p>
      </div>
      <div class="card-body">
        <form action="{{ route('logUserIn') }}" id="logUserIn" method="post">
        @csrf

          <div class="mb-3">
            <label for="signInEmail" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" aria-describedby="signInEmail" placeholder="Enter your email" id="exampleInputEmail1">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3 passCon">
            <label for="signInPassword" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" id="signInPassword">
            <i class="fas fa-eye" id="togglePassword" onclick="togglePasswordVisible()"></i>
          </div>

            <div class="form-group" style="display: flex; justify-content: space-between; width: 100%;">
              <a href="{{ route('home') }}" onclick="event.preventDefault();document.getElementById('logUserIn').submit();" class="btn btn-primary" style="margin-bottom: 1rem;padding: .3rem .86rem;">Login</a>
              <div class="forgot" style="float: right;">
                <a href="{{ route('password.request') }}" id="forgot-link">Forgot Password?</a>
              </div>
            </div>
            Don't have an account? <a href="{{ route('showRegisterForm') }}">Sign Up</a>
          
          {{-- <form id="logUserIn" action="{{ route('logUserIn') }}" method="post"> 
          @csrf
          </form> --}}
        </form>

        <div class="divider"></div>
        {{-- <div class="auth-alts">
            <a href="#" class="auth-alts-google"></a>
            <a href="#" class="auth-alts-facebook"></a>
            <a href="#" class="auth-alts-twitter"></a>
        </div> --}}
      </div>
    </div>
  </div>
</div>
</div>
@endsection
