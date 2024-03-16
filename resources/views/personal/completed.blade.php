@extends('layouts.app')

@section('title', 'Income')

@section('content')
    <div class="d-flex justify-content-center p-4">
        <div class="col-lg-9 shadow rounded-3">
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
                                <h2 class="tile-title d-flex justify-content-center h2"><b>We're off to a good start</b></h2><br>
                                <h6 class="tile-title d-flex justify-content-center text-primary h6">Now let's work on your 2023 income.</h6><br>
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('images/personal.gif') }}" alt="">
                                </div>
                            </div><br>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-1 mt-0 pt-0 w-100">
                            </span><br>
                        </div>
                        <div class="tile-footer d-flex justify-content-between mb-lg-4">
                            <a class="btn btn-white border border-primary rounded-0" href="{{ route('dependents.index') }}"><i
                                    class="me-2 mb-5"></i><b class="text-primary">Previous
                                    Page</b></a>&nbsp;&nbsp;&nbsp;
                            <a class="btn btn-primary rounded-0" href="{{ route('w-2.index') }}"><i class="me-2"></i><b
                                    class="text-light">Continue to Deductions</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
