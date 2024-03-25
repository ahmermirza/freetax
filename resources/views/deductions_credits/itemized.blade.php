@extends('layouts.app')

@section('title', 'Deductions / Credits')

@section('content')
    <div class="d-flex justify-content-center p-lg-4 p-3">
        <div class="col-lg-9 content-shadow shadow-none rounded-3">
            <div class="row p-4 pt-5">
                <div class="d-lg-flex justify-content-between">
                    <i class="fa fa-arrow-left text-primary" aria-hidden="true"></i>
                </div>
            </div>
            <div class="row p-0 pt-0 mx-lg-5 px-lg-5">
                <div class="col-lg-12">
                    <div class="tile">
                        <h2 class="tile-title d-flex justify-content-center text-center h2"><b>Let's fill out your itemized
                                deductions</b></h2>
                        <div class="tile-body">
                            <br>
                            <div class="row px-4">
                                <div class="col-lg-12 ps-lg-0 px-3 h6">
                                    Click on any Itemized Deductions that may apply to you.
                                </div>
                            </div><br>
                            <div class="row px-4">
                                <div class="col-lg-12 ps-0 h6">
                                    Homeowner Expenses (Form 1098)
                                </div>
                                <div class="col-lg-10 col-10 ps-0">
                                    <label class="form-input-label small" for="health">Mortgage interest, property taxes,
                                        PMI, points, and other info not on a 1098</label>
                                </div>
                                <div class="col-lg-2 col-2 d-lg-flex justify-content-center">
                                    <a class="btn btn-primary btn-sm rounded-0"
                                        href="{{ route('mortgage-interest.index') }}"><b class="text-white">Edit</b></a>
                                </div>
                                <span class="d-flex justify-content-center px-0 pe-lg-5">
                                    <hr class="my-4 w-100">
                                </span>
                            </div>
                            <div class="row px-4">
                                <div class="col-lg-12 ps-0 h6">
                                    Donations to Charities
                                </div>
                                <div class="col-lg-10 col-10 ps-0">
                                    <label class="form-input-label small" for="health">Money, clothing, furniture,
                                        miles driven, out-of-pocket expenses, etc.</label>
                                </div>
                                <div class="col-lg-2 col-2 d-lg-flex justify-content-center">
                                        <a class="btn btn-primary btn-sm rounded-0"
                                            href="{{ route('charities-donations.create') }}"><b
                                                class="text-white">Edit</b></a>
                                </div>
                                <span class="d-flex justify-content-center px-0 pe-lg-5">
                                    <hr class="my-4 w-100">
                                </span>
                            </div>
                            <div class="row px-4 d-flex justify-content-between">
                                <div class="col-lg-10 col-10 ps-0 h6">
                                    Medical Expenses
                                </div>
                                <div class="col-lg-2 col-2 d-lg-flex justify-content-center">
                                    <a class="btn btn-primary btn-sm rounded-0"
                                        href="{{ route('medical-expenses.create') }}"><b class="text-white">Edit</b></a>
                                </div>
                                <span class="d-flex justify-content-center px-0 pe-lg-5">
                                    <hr class="my-3 w-100">
                                </span>
                            </div>
                            <div class="row px-4">
                                <div class="col-lg-12 ps-0 h6">
                                    Taxes Paid
                                </div>
                                <div class="col-lg-10 col-10 ps-0">
                                    <label class="form-input-label small" for="health">Sales tax, state tax payments,
                                        etc.</label>
                                </div>
                                <div class="col-lg-2 col-2 d-lg-flex justify-content-center">
                                    <a class="btn btn-primary btn-sm rounded-0" href="{{ route('taxes.create') }}"><b
                                            class="text-white">Edit</b></a>
                                </div>
                            </div>
                            <br><br>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-3 mt-0 mx-4 w-100">
                            </span>
                        </div>
                        <div class="tile-footer d-lg-flex justify-content-between mx-lg-0 mx-4 mb-lg-4">
                            <div class="row">
                                <div class="col-lg-8 w-100">
                                    <a class="btn btn-primary rounded-0 d-block d-lg-none mb-2 button-custom-width" href="{{ route('deductions.completed') }}">
                                        <b class="text-light">Save and Continue</b>
                                    </a>
                                    <a class="btn btn-white border border-primary rounded-0 button-custom-width"
                                        href="{{ route('income.completed') }}">
                                        <b class="text-primary">Previous Page</b>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8 w-100">
                                    <a class="btn btn-primary rounded-0 d-none d-lg-block button-custom-width" href="{{ route('deductions.completed') }}">
                                        <b class="text-light">Save and Continue</b>
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
