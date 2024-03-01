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
                        <h2 class="tile-title d-lg-flex justify-content-center h2"><b>Other Unemployment Compensation
                                Income</b></h2>
                        @if (isset($income))
                            <form action="{{ route('income.update', $income) }}" method="post">
                                @method('PUT')
                            @else
                                <form action="{{ route('income.store') }}" method="post">
                        @endif
                        <div class="tile-body">
                            @csrf
                            <br><br>
                            <div class="row ps-5">
                                <div class="col-lg-12 ps-0">
                                    <b>Your Other Unemployment</b>
                                </div>
                            </div><br>
                            <div class="row ps-5">
                                <div class="col-lg-8 ps-0">
                                    <label class="form-input-label h6 pt-2" for="campaign_contribution">Enter any union
                                        unemployment benefits you received:</label>
                                </div>
                                <div class="col-lg-3">
                                    <div class="has-danger input-group mb-3">
                                        <span
                                            class="input-group-text bg-disabled text-dark @error('first_name') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                            id="basic-addon2"><b>$</b></span><input
                                            class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                                            type="text" value="" aria-label="first_name"
                                            aria-describedby="basic-addon2">
                                    </div>
                                </div>
                            </div>
                            <div class="row ps-5">
                                <div class="col-lg-8 ps-0">
                                    <label class="form-input-label h6 pt-2" for="campaign_contribution">Enter any private fund unemployment benefits you received:</label>
                                </div>
                                <div class="col-lg-3">
                                    <div class="has-danger input-group mb-3">
                                        <span
                                            class="input-group-text bg-disabled text-dark @error('first_name') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                            id="basic-addon2"><b>$</b></span><input
                                            class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                                            type="text" value="" aria-label="first_name"
                                            aria-describedby="basic-addon2">
                                    </div>
                                </div>
                            </div>
                            <div class="row ps-5">
                                <div class="col-lg-8 ps-0">
                                    <label class="form-input-label h6 pt-2" for="campaign_contribution">Enter any unemployment benefits that you received as a state employee when not covered by regular state unemployment benefits:</label>
                                </div>
                                <div class="col-lg-3">
                                    <div class="has-danger input-group mb-3">
                                        <span
                                            class="input-group-text bg-disabled text-dark @error('first_name') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                            id="basic-addon2"><b>$</b></span><input
                                            class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                                            type="text" value="" aria-label="first_name"
                                            aria-describedby="basic-addon2">
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-3 mt-0 w-100">
                            </span>
                            <div class="row ps-5">
                                <div class="col-lg-12 ps-0">
                                    <b>Your Spouse's Other Unemployment</b>
                                </div>
                            </div><br>
                            <div class="row ps-5">
                                <div class="col-lg-8 ps-0">
                                    <label class="form-input-label h6 pt-2" for="campaign_contribution">Enter any union
                                        unemployment benefits you received:</label>
                                </div>
                                <div class="col-lg-3">
                                    <div class="has-danger input-group mb-3">
                                        <span
                                            class="input-group-text bg-disabled text-dark @error('first_name') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                            id="basic-addon2"><b>$</b></span><input
                                            class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                                            type="text" value="" aria-label="first_name"
                                            aria-describedby="basic-addon2">
                                    </div>
                                </div>
                            </div>
                            <div class="row ps-5">
                                <div class="col-lg-8 ps-0">
                                    <label class="form-input-label h6 pt-2" for="campaign_contribution">Enter any private fund unemployment benefits you received:</label>
                                </div>
                                <div class="col-lg-3">
                                    <div class="has-danger input-group mb-3">
                                        <span
                                            class="input-group-text bg-disabled text-dark @error('first_name') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                            id="basic-addon2"><b>$</b></span><input
                                            class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                                            type="text" value="" aria-label="first_name"
                                            aria-describedby="basic-addon2">
                                    </div>
                                </div>
                            </div>
                            <div class="row ps-5">
                                <div class="col-lg-8 ps-0">
                                    <label class="form-input-label h6 pt-2" for="campaign_contribution">Enter any unemployment benefits that your spouse received as a state employee when not covered by regular state unemployment benefits:</label>
                                </div>
                                <div class="col-lg-3">
                                    <div class="has-danger input-group mb-3">
                                        <span
                                            class="input-group-text bg-disabled text-dark @error('first_name') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                            id="basic-addon2"><b>$</b></span><input
                                            class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                                            type="text" value="" aria-label="first_name"
                                            aria-describedby="basic-addon2">
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-3 mt-0 w-100">
                            </span>
                        </div>
                    </div>
                    <div class="tile-footer d-flex justify-content-between mb-lg-4">
                        <a class="btn btn-white border border-primary rounded-0" href="#"><i
                                class="me-2 mb-5"></i><b class="text-primary">Previous Page</b></a>&nbsp;&nbsp;&nbsp;
                        <div>
                            <a class="btn btn-white border border-primary rounded-0" href="#"><b class="text-primary">Skip</b></a>&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-primary rounded-0" type="submit"><i class="me-2"></i><b
                                    class="text-light">Save and Continue</b></button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
