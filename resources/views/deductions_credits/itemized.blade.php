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
                        <h2 class="tile-title d-lg-flex justify-content-center h2"><b>Let's fill out your itemized deductions</b></h2>
                        <div class="tile-body">
                            <br>
                            <div class="row ps-5">
                                <div class="col-lg-12 ps-0 h6">
                                    Click on any Itemized Deductions that may apply to you.
                                </div>
                            </div><br>
                            <div class="row ps-5">
                                <div class="col-lg-12 ps-0 h6">
                                    Homeowner Expenses (Form 1098)
                                </div>
                            </div>
                            <div class="row ps-5 d-xl-flex justify-content-between">
                                <div class="col-lg-8 col-6 ps-0">
                                    <label class="form-input-label small pt-2" for="health">Mortgage interest, property taxes, PMI, points, and other info not on a 1098</label>
                                </div>
                                <div class="col-lg-2 col-6">
                                    <div class="input-group mb-3">
                                        <a class="btn btn-primary btn-sm rounded-0" href="{{ route('mortgage-interest.index') }}"><b class="text-white">Edit</b></a>
                                    </div>
                                </div>
                            </div>
                            <span class="d-flex justify-content-center ps-4 pe-xl-5 mx-2 me-xl-4">
                                <hr class="mb-3 mt-0 w-100">
                            </span>
                            <div class="row ps-5">
                                <div class="col-lg-12 ps-0 h6">
                                    Donations to Charities
                                </div>
                            </div>
                            <div class="row ps-5 d-xl-flex justify-content-between">
                                <div class="col-lg-8 col-6 ps-0">
                                    <label class="form-input-label small pt-2" for="health">Money, clothing, furniture, miles driven, out-of-pocket expenses, etc.</label>
                                </div>
                                <div class="col-lg-2 col-6">
                                    <div class="input-group mb-3">
                                        <a class="btn btn-primary btn-sm rounded-0" href="{{ route('charities-donations.create') }}"><b class="text-white">Edit</b></a>
                                    </div>
                                </div>
                            </div>
                            <span class="d-flex justify-content-center ps-4 pe-xl-5 mx-2 me-xl-4">
                                <hr class="mb-3 mt-0 w-100">
                            </span>
                            <div class="row ps-5 d-xl-flex justify-content-between">
                                <div class="col-lg-10 col-6 ps-0 h6">
                                    Medical Expenses
                                </div>
                                <div class="col-lg-2 col-6">
                                    <div class="input-group mb-3">
                                        <a class="btn btn-primary btn-sm rounded-0" href="{{ route('medical-expenses.create') }}"><b class="text-white">Edit</b></a>
                                    </div>
                                </div>
                            </div>
                            <span class="d-flex justify-content-center ps-4 pe-xl-5 mx-2 me-xl-4">
                                <hr class="mb-3 mt-0 w-100">
                            </span>
                            <div class="row ps-5">
                                <div class="col-lg-12 ps-0 h6">
                                    Taxes Paid
                                </div>
                            </div>
                            <div class="row ps-5 d-xl-flex justify-content-between">
                                <div class="col-lg-8 col-6 ps-0">
                                    <label class="form-input-label small pt-2" for="health">Sales tax, state tax payments, etc.</label>
                                </div>
                                <div class="col-lg-2 col-6">
                                    <div class="input-group mb-3">
                                        <a class="btn btn-primary btn-sm rounded-0" href="{{ route('taxes.create') }}"><b class="text-white">Edit</b></a>
                                    </div>
                                </div>
                            </div>
                            <span class="d-flex justify-content-center ps-4 pe-xl-5 mx-2 me-xl-4">
                                <hr class="mb-3 mt-0 w-100">
                            </span>
                            
                            <br><br>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-3 mt-0 w-100">
                            </span>
                        </div>
                        <div class="tile-footer d-flex justify-content-between mb-lg-4">
                            <a class="btn btn-white border border-primary rounded-0" href="#"><i
                                    class="me-2 mb-5"></i><b class="text-primary">Previous Page</b></a>&nbsp;&nbsp;&nbsp;
                            <div>
                                <a class="btn btn-primary rounded-0" href="{{ route('deductions.completed') }}"><i class="me-2"></i><b
                                        class="text-light">Save and Continue</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
