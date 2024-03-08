@extends('layouts.app')

@section('title', 'Deductions / Credits')

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
                        <h2 class="tile-title d-lg-flex justify-content-center h2"><b>How much did you pay in real estate taxes?</b></h2>
                        <form action="{{ route('mortgage-interest.estate.update', $mortgage_interest) }}" method="post">
                            <div class="tile-body">
                                @method('PUT')
                                @csrf
                                <div class="container">
                                    <br>
                                    <div class="row ps-5">
                                        <div class="col-lg-8 ps-0">
                                            <label class="form-input-label h6 pt-2" for="campaign_contribution">Enter the amount of any real estate taxes you paid during 2023:</label>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="has-danger input-group mb-3">
                                                <span
                                                    class="input-group-text bg-disabled text-dark @error('estate_tax') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                    id="basic-addon2"><b>$</b></span><input
                                                    class="form-control @error('estate_tax') is-invalid @enderror" name="estate_tax"
                                                    type="text" value="" aria-label="estate_tax"
                                                    aria-describedby="basic-addon2">
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                                <span class="d-flex justify-content-center">
                                    <hr class="mb-1 mt-0 pt-0 w-100">
                                </span><br>
                            </div>
                            <div class="tile-footer d-flex justify-content-between mb-lg-4">
                                <a class="btn btn-white border border-primary rounded-0" href="#"><i
                                        class="me-2 mb-5"></i><b class="text-primary">Previous
                                        Page</b></a>&nbsp;&nbsp;&nbsp;
                                <button class="btn btn-primary rounded-0" type="submit"><i class="me-2"></i><b
                                        class="text-light">Save and Continue</b></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
