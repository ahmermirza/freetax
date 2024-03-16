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
                                <div class="d-flex justify-content-center">
                                    <img class="w-50" src="{{ asset('images/state.PNG') }}" alt="">
                                </div><br>
                                <h2 class="tile-title d-flex justify-content-center h2"><b>Your combined federal and state
                                        refund:</b></h2><br>
                                <h6 class="tile-title d-flex justify-content-center text-primary h6">We're almost there!
                                    Just a few final steps to file your taxes.</h6><br>
                            </div><br>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-1 mt-0 pt-0 w-100">
                            </span><br>
                        </div>
                        <div class="tile-footer d-flex justify-content-between mb-lg-4">
                            <a class="btn btn-white border border-primary rounded-0" href="#"><i
                                    class="me-2 mb-5"></i><b class="text-primary">Previous
                                    Page</b></a>&nbsp;&nbsp;&nbsp;
                            <a class="btn btn-primary rounded-0"><i class="me-2"></i><b class="text-light">Continue</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
