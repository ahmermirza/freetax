@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="d-flex justify-content-center p-lg-4 p-3">
        <div class="col-lg-9 content-shadow shadow-none rounded-3">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 px-5">
                    <div class="pt-5 w-100">
                        <form action="{{ route('login') }}" method="POST" class="pb-5 pb-md-5 rounded-3">
                            <center>
                                <h3><b>Sign In</b></h3>
                            </center>
                            @csrf
                            <div class="form-group pt-3">
                                <label for="email" class="h6">Email Address:</label>
                                <input type="email" name="email"
                                    class="form-control @error('email') border border-danger @enderror" id="email"
                                    placeholder="Enter email here" value="{{ old('email') }}">
                                @error('email')
                                    <div class="text-danger"> {{ $message }} </div>
                                @enderror
                            </div>

                            <div class="form-group pt-3">
                                <label for="password" class="h6">Password:</label>
                                <input type="password" name="password"
                                    class="form-control @error('password') border border-danger @enderror" id="password"
                                    placeholder="Enter password here">
                                @error('password')
                                    <div class="text-danger"> {{ $message }} </div>
                                @enderror
                            </div>

                            @if (session('status'))
                                <p class="text-danger">{{ session('status') }}</p>
                            @endif

                            <div class="form-check pt-2 pb-4">
                                <input type="checkbox" name="remember" class="form-check-input" id="remember">
                                <label for="remember" class="h6">Remember Me</label>
                            </div>

                            <button type="submit" class="form-control btn btn-primary btn-lg"><i class="fa fa-lock"></i> <b
                                    class="text-white">Sign In Now</b></button>

                            <div class="form-label pt-1 text-center">
                                <label for="remember" class="small p-3">By clicking Sign In Now, you agree to our Terms of
                                    Use and Privacy Statement.</label>
                            </div>
                            <div class="form-label text-center mb-0">
                                <label for="remember" class="small p-3"><i class="fa fa-lock"></i> Privacy statement updated
                                    11/8/23.</label>
                            </div>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-1 mt-0 pt-0 w-100">
                            </span><br>
                            <div class="form-label pt-1 text-center">
                                <label for="remember"><a class="text-primary h6" style="text-decoration: none;"
                                        href="{{ route('register') }}">Create New Account</a></label>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
