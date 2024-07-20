@extends('auth.layout')

@section('title', "$title - Create account")
@section('content')


    <div>
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="row">
                    <div class="card col-sm-6 mx-auto">
                        @if (session()->has('success'))
                        <div class="alert alert-custom alert-indicator-top indicator-success mt-3" role="alert">
                            <div class="alert-content">
                                <span class="alert-title">Success!</span>
                                <span class="alert-text">{{ session()->get('success') }}</span>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- @if(count($errors) > 0 )
            <div class="row">
                <div class="col-sm-6 mx-auto">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="p-0 m-0" style="list-style: none;">
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endif -->
            <div class="container col-md-6">
                <div class="card justify-content-center">
                    <div class="card-header" class="auth-credentials" style="text-align: center;">
                        <h4>Register Form</h4>
                        <p>Please enter your credentials to create an account.</p>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('storeUser') }}" method="post" id="reg-form" class="auth-credentials">
                            @csrf
                            <input type="hidden" name="referred_by" value="{{ Session::get('user_id') }}">

                            <div class="mb-3">
                                <label for="settingsInputFirstName" class="form-label">Name</label>
                                <input type="text" name="f_name" required value="{{ old('f_name') }}" class="form-control" placeholder="Enter your name" id="settingsInputFirstName">
                                <span style="color: red;">@error('f_name'){{ $message }}@enderror</span>
                                
                            </div>
                            <div class="mb-3">
                                <label for="settingsInputUserName" class="form-label">Username</label>
                                    <input name="username" required value="{{ old('username') }}" type="text" class="form-control" id="settingsInputUserName" aria-describedby="settingsInputUserName-add" placeholder="Username">
                                    <span style="color: red;">@error('username'){{ $message }}@enderror</span>

                            </div>
                            <!-- <div class="mb-3">
                                <label for="settingsPhoneNumber" class="form-label">Phone Number</label>
                                <input type="text" required name="p_number" class="form-control" value="{{ old('p_number') }}" placeholder="Enter Phone Number" id="settingsPhoneNumber">
                                <span style="color: red;">@error('p_number'){{ $message }}@enderror</span>

                            </div> -->
                            <div class="mb-3">
                                <label for="country" class="form-label">Country</label>
                                <select required class="form-control" required name="country" id="country" tabindex="-1">
                                    <option value="">Select Country</option>
                                    @foreach ($countries as $country)
                                    <option value="{{ $country }}">{{ $country }}</option>
                                    @endforeach
                                </select>
                                <span style="color: red;">@error('country'){{ $message }}@enderror</span>

                                
                            </div>
                            <div class="mb-3">
                                <label for="settingsInputEmail" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter your email" id="settingsInputEmail" aria-describedby="settingsEmailHelp">
                                <span style="color: red;">@error('email'){{ $message }}@enderror</span>

                                <div id="settingsEmailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="signUpPassword" class="form-label">Password</label>
                                <input type="password" required name="password" class="form-control" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" id="signUpPassword">
                                <span style="color: red;">@error('password'){{ $message }}@enderror</span>

                            </div>
                            <div class="mb-3 passCon">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input type="password" required name="password_confirmation" class="form-control" placeholder="password" id="password_confirmation">
                                <i class="fas fa-eye" id="togglePassword" onclick="togglePasswordVisibility()"></i>
                                <span style="color: red;">@error('password'){{ $message }}@enderror</span>

                            </div>

                            @if ($key ?? '')
                                <div class="mb-3">
                                    <label for="settingsInputLastName" class="form-label">Referral Number</label>
                                    <input name="referral_id" readonly value="{{ $key }}" type="text" class="form-control" id="settingsInputLastName" placeholder="Put in referral number here (Optional)">
                                </div>
                            @else
                                <div class="mb-3">
                                    <label for="settingsInputLastName" class="form-label">Referral Number</label>
                                    <input name="referral_id" value="" type="text" class="form-control" id="settingsInputLastName" placeholder="Put in referral number here (Optional)">
                                </div>
                            @endif

                            <input type="submit" value="Submit" class="btn btn-primary auth-submit">
                            {{-- <a href="" class="btn btn-primary auth-submit" onclick="event.preventDefault();document.getElementById('reg-form').submit();" style="margin-bottom: 1rem;">Sign Up</a> --}}
                            <br>
                            <div style="margin-bottom: 1rem;"></div>
                            Already have an account? <a href="{{ route('logUserInForm') }}">Log In</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection