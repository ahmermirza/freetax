@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="d-flex justify-content-center p-lg-4 p-3">
        <div class="col-lg-9 content-shadow shadow-none rounded-3">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 px-5 px-lg-0">
                    <div class="pt-5 w-100">
                        <form action="{{ route('register') }}" method="POST" class="pb-5 pb-md-5 rounded-3">
                            <center>
                                <h3><b>New Account Setup</b></h3>
                            </center>
                            @csrf
                            <div class="form-label text-center my-4 mb-1">
                                <label for="remember" class="h6">Do you have an existing account? <a class="text-primary" style="text-decoration: none;" href="{{ route('login') }}">Sign In</a> or get help signing in.</label>
                            </div>
                            <div class="form-group pt-3">
                                <label for="email" class="h6">Full Name:</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') border border-danger @enderror" id="name"
                                    placeholder="Enter full name here" value="{{ old('name') }}">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group pt-3">
                                <label for="email" class="h6">Username:</label>
                                <input type="text" name="username"
                                    class="form-control @error('username') border border-danger @enderror" id="username"
                                    placeholder="Enter username here" value="{{ old('username') }}">
                                @error('username')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group pt-3">
                                <label for="email" class="h6">Email Address:</label>
                                <input type="email" name="email"
                                    class="form-control @error('email') border border-danger @enderror" id="email"
                                    placeholder="Enter email here" value="{{ old('email') }}">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group pt-3">
                                <label for="email" class="h6">Password:</label>
                                <input type="password" name="password"
                                    class="form-control @error('password') border border-danger @enderror" id="password"
                                    placeholder="Enter password here">
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group pt-3 pb-4">
                                <label for="email" class="h6">Repeat Password:</label>
                                <input type="password" name="password_confirmation"
                                    class="form-control @error('password_confirmation') border border-danger @enderror"
                                    id="password_confirmation" placeholder="Enter password again">
                                @error('password_confirmation')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="form-control btn btn-primary"><i class="fa fa-lock"></i> <b
                                    class="text-white">Create New Account</b></button>

                            <div class="form-label pt-1 text-center">
                                <label for="remember" class="small p-3">By clicking Create New Account, you agree to our Terms and Conditions of Use and Privacy Statement.</label>
                            </div>
                            <div class="form-label text-center mb-0">
                                <label for="remember" class="small p-3"><i class="fa fa-lock"></i> Privacy statement updated 11/8/23</label>
                            </div>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-1 mt-0 pt-0 w-100">
                            </span><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
