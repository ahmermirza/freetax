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
                        <h2 class="tile-title d-lg-flex justify-content-center h2"><b>Tell us about your donations to
                                charities</b></h2>
                        @if (isset($deductions_credit))
                        <form action="{{ route('charities-donations.update', $deductions_credit) }}" method="post">
                            @method('PUT')
                        @else
                        <form action="{{ route('charities-donations.store') }}" method="post">
                        @endif
                            <div class="tile-body">
                                @csrf
                                <br>
                                <div class="row d-lg-flex justify-content-center">
                                    <div class="col-lg-9">
                                        <div class="py-4 h6">Donations are deductible if you made them to a qualified
                                            organization such as a church, non-profit organization, or other charitable
                                            organizations. Donations you made directly to individuals in need aren't deductible.
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row ps-5">
                                    <div class="col-lg-12 ps-0">
                                        <b>Cash Donations</b>
                                    </div>
                                </div>
                                <div class="row ps-5">
                                    <div class="col-lg-11">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input h4" type="radio" name="cash_donations" id="foreign-yes"
                                                value="yes" {{ isset($deductions_credit) ? ((isset($deductions_credit) && $deductions_credit->cash_donations == 'yes') ? 'checked' : '') : 'checked' }}>
                                            <label class="form-check-label h6 pt-2" for="foreign-yes"><b>Yes</b></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input h4" type="radio" name="cash_donations" id="foreign-no"
                                                value="no" {{ $deductions_credit && $deductions_credit->cash_donations == 'no' ? 'checked' : '' }}>
                                            <label class="form-check-label h6 pt-2" for="foreign-no"><b>No</b></label>
                                        </div>
                                        <label class="form-form-label h6 form-check-inline" for="employer-address">Would you
                                            like to enter your total amount of cash donations?</label>
                                    </div>
                                </div>
                                <div class="row ps-5">
                                    <div class="col-lg-8 ps-0">
                                        <label class="form-input-label h6 pt-2" for="cash_donations_amount">Enter any charitable
                                            donations you made by cash or check during 2023:</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="has-danger input-group mb-3">
                                            <span
                                                class="input-group-text bg-disabled text-dark @error('cash_donations_amount') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                id="basic-addon2"><b>$</b></span><input
                                                class="form-control @error('cash_donations_amount') is-invalid @enderror" name="cash_donations_amount"
                                                type="text" value="{{ old('cash_donations_amount', $deductions_credit ? $deductions_credit->cash_donations_amount : '') }}" aria-label="cash_donations_amount"
                                                aria-describedby="basic-addon2">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <span class="d-flex justify-content-center ps-4 pe-5 mx-2 me-5">
                                    <hr class="mb-3 mt-0 w-100">
                                </span>
                                <div class="row ps-5">
                                    <div class="col-lg-12 ps-0">
                                        <b>Noncash Donations</b>
                                    </div>
                                </div>
                                <div class="row ps-5">
                                    <div class="col-lg-11">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input h4" type="radio" name="non_cash_donations" id="foreign-yes"
                                                value="yes" {{ $deductions_credit && $deductions_credit->non_cash_donations == 'yes' ? 'checked' : '' }}>
                                            <label class="form-check-label h6 pt-2" for="foreign-yes"><b>Yes</b></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input h4" type="radio" name="non_cash_donations" id="foreign-no"
                                                value="no" {{ isset($deductions_credit) ? ((isset($deductions_credit) && $deductions_credit->non_cash_donations == 'no') ? 'checked' : '') : 'checked' }}>
                                            <label class="form-check-label h6 pt-2" for="foreign-no"><b>No</b></label>
                                        </div>
                                        <label class="form-form-label h6 form-check-inline" for="employer-address">Did you
                                            contribute more than $500 worth of noncash donations?</label>
                                    </div>
                                </div>
                                <div class="row ps-5">
                                    <div class="col-lg-8 ps-0">
                                        <label class="form-input-label h6 pt-2" for="non_cash_donations_amount">Enter the amount of
                                            any noncash donations you made during 2023:</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="has-danger input-group mb-3">
                                            <span
                                                class="input-group-text bg-disabled text-dark @error('non_cash_donations_amount') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                id="basic-addon2"><b>$</b></span><input
                                                class="form-control @error('non_cash_donations_amount') is-invalid @enderror" name="non_cash_donations_amount"
                                                type="text" value="{{ old('non_cash_donations_amount', $deductions_credit ? $deductions_credit->non_cash_donations_amount : '') }}" aria-label="non_cash_donations_amount"
                                                aria-describedby="basic-addon2">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <span class="d-flex justify-content-center ps-4 pe-5 mx-2 me-5">
                                    <hr class="mb-3 mt-0 w-100">
                                </span>
                                <div class="row ps-5">
                                    <div class="col-lg-12 ps-0">
                                        <b>Donation Carryover from Prior Years</b>
                                    </div>
                                </div>
                                <div class="row ps-5 pb-3">
                                    <div class="col-lg-11">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input h4" type="radio" name="donation_carryover"
                                                id="foreign-yes" value="yes" {{ $deductions_credit && $deductions_credit->donation_carryover == 'yes' ? 'checked' : '' }}>
                                            <label class="form-check-label h6 pt-2" for="foreign-yes"><b>Yes</b></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input h4" type="radio" name="donation_carryover"
                                                id="foreign-no" value="no" {{ isset($deductions_credit) ? ((isset($deductions_credit) && $deductions_credit->donation_carryover == 'no') ? 'checked' : '') : 'checked' }}>
                                            <label class="form-check-label h6 pt-2" for="foreign-no"><b>No</b></label>
                                        </div>
                                        <label class="form-form-label h6 form-check-inline" for="employer-address">Do you have
                                            any donation carryovers from prior years?</label>
                                    </div>
                                </div>
                                <span class="d-flex justify-content-center ps-4 pe-5 mx-2 me-5">
                                    <hr class="mb-3 mt-0 w-100">
                                </span>
                                <div class="row ps-5">
                                    <div class="col-lg-12 ps-0">
                                        <b>Mileage for Volunteer Work</b>
                                    </div>
                                </div>
                                <div class="row ps-5">
                                    <div class="col-lg-11">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input h4" type="radio" name="standard_mileage"
                                                id="foreign-yes" value="yes" {{ isset($deductions_credit) ? ((isset($deductions_credit) && $deductions_credit->standard_mileage == 'yes') ? 'checked' : '') : 'checked' }}>
                                            <label class="form-check-label h6 pt-2" for="foreign-yes"><b>Yes</b></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input h4" type="radio" name="standard_mileage"
                                                id="foreign-no" value="no" {{ $deductions_credit && $deductions_credit->standard_mileage == 'no' ? 'checked' : '' }}>
                                            <label class="form-check-label h6 pt-2" for="foreign-no"><b>No</b></label>
                                        </div>
                                        <label class="form-form-label h6 form-check-inline" for="employer-address">Do you want
                                            to use the standard mileage rate to deduct your vehicle expenses related to
                                            volunteer work?</label>
                                    </div>
                                </div>
                                <div class="row ps-5">
                                    <div class="col-lg-8 ps-0">
                                        <label class="form-input-label h6 pt-2" for="standard_mileage_amount">Enter the amount
                                            of miles you drove during 2023 while volunteering for a charity:</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="has-danger input-group mb-3">
                                            <input class="form-control @error('standard_mileage_amount') is-invalid @enderror"
                                                name="standard_mileage_amount" type="text" value="{{ old('standard_mileage_amount', $deductions_credit ? $deductions_credit->standard_mileage_amount : '') }}" aria-label="standard_mileage_amount"
                                                aria-describedby="basic-addon2">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <span class="d-flex justify-content-center ps-4 pe-5 mx-2 me-5">
                                    <hr class="mb-3 mt-0 w-100">
                                </span>
                                <div class="row ps-5">
                                    <div class="col-lg-12 ps-0">
                                        <b>Out-Of-Pocket Expenses</b>
                                    </div>
                                </div>
                                <div class="row ps-5">
                                    <div class="col-lg-11">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input h4" type="radio" name="non_pocket"
                                                id="foreign-yes" value="yes" {{ $deductions_credit && $deductions_credit->non_pocket == 'yes' ? 'checked' : '' }}>
                                            <label class="form-check-label h6 pt-2" for="foreign-yes"><b>Yes</b></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input h4" type="radio" name="non_pocket"
                                                id="foreign-no" value="no" {{ isset($deductions_credit) ? ((isset($deductions_credit) && $deductions_credit->non_pocket == 'no') ? 'checked' : '') : 'checked' }}>
                                            <label class="form-check-label h6 pt-2" for="foreign-no"><b>No</b></label>
                                        </div>
                                        <label class="form-form-label h6 form-check-inline" for="employer-address">Did you pay
                                            any out-of-pocket expenses while giving service to a charitable
                                            organization?</label>
                                    </div>
                                </div>
                                <br><br>
                                <span class="d-flex justify-content-center">
                                    <hr class="mb-3 mt-0 w-100">
                                </span>
                            </div>
                            <div class="tile-footer d-flex justify-content-between mb-lg-4">
                                <a class="btn btn-white border border-primary rounded-0" href="#"><i
                                        class="me-2 mb-5"></i><b class="text-primary">Previous Page</b></a>&nbsp;&nbsp;&nbsp;
                                <div>
                                    <button class="btn btn-primary rounded-0" type="submit"><i class="me-2"></i><b
                                            class="text-light">Save and Continue</b></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
