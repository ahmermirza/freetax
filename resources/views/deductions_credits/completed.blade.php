@extends('layouts.app')

@section('title', 'Deductions / Credits')

@section('content')
    <div class="d-flex justify-content-center p-lg-4 p-3">
        <div class="col-lg-9 col-12 content-shadow shadow-none rounded-3">
            <div class="row p-4 pt-5">
                <div class="d-lg-flex justify-content-between">
                    <i class="fa fa-arrow-left text-primary" aria-hidden="true"></i>
                </div>
            </div>
            <div class="row p-4 pt-0 mx-lg-5 px-lg-5">
                <div class="col-lg-12">
                    <div class="tile">
                        <div class="tile-body">
                            <div class="container-fluid">
                                <h2 class="tile-title d-flex justify-content-center h2"><b>We're making great progress</b></h2><br>
                                <h6 class="tile-title d-flex justify-content-center text-primary h6">Let's finish up your federal return.</h6><br>
                                <div class="d-flex justify-content-center">
                                    <img class="img-fluid" src="{{ asset('images/deductions.gif') }}" alt="">
                                </div>
                            </div><br>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-3 mt-0 w-75 hr-custom-width">
                            </span>
                        </div>
                        <div class="tile-footer d-lg-flex justify-content-between px-lg-5 mx-lg-5 mb-lg-4">
                            <div class="row">
                                <div class="col-lg-8 w-100">
                                    <a class="btn btn-primary rounded-0 d-block d-lg-none mb-2 button-custom-width" href="{{ route('state.index') }}">
                                        <b class="text-light">Continue to State Return</b>
                                    </a>
                                    <a class="btn btn-white border border-primary rounded-0 button-custom-width" href="{{ route('itemized.deductions') }}">
                                        <b class="text-primary">Previous Page</b>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8 w-100">
                                    <a class="btn btn-primary rounded-0 d-none d-lg-block button-custom-width" href="{{ route('state.index') }}">
                                        <b class="text-light">Continue to State Return</b>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
