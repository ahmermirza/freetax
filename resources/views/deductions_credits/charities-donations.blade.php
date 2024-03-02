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
                        @if (isset($income))
                        <form action="{{ route('income.update', $income) }}" method="post">
                                @method('PUT')
                        @else
                        <form action="{{ route('income.store') }}" method="post">
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
                                            <input class="form-check-input h4" type="radio" name="refinanced" id="foreign-yes"
                                                value="yes">
                                            <label class="form-check-label h6 pt-2" for="foreign-yes"><b>Yes</b></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input h4" type="radio" name="refinanced" id="foreign-no"
                                                value="no" checked>
                                            <label class="form-check-label h6 pt-2" for="foreign-no"><b>No</b></label>
                                        </div>
                                        <label class="form-form-label h6 form-check-inline" for="employer-address">Would you
                                            like to enter your total amount of cash donations?</label>
                                    </div>
                                </div>
                                <div class="row ps-5">
                                    <div class="col-lg-8 ps-0">
                                        <label class="form-input-label h6 pt-2" for="campaign_contribution">Enter any charitable
                                            donations you made by cash or check during 2023:</label>
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
                                            <input class="form-check-input h4" type="radio" name="refinanced" id="foreign-yes"
                                                value="yes">
                                            <label class="form-check-label h6 pt-2" for="foreign-yes"><b>Yes</b></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input h4" type="radio" name="refinanced" id="foreign-no"
                                                value="no" checked>
                                            <label class="form-check-label h6 pt-2" for="foreign-no"><b>No</b></label>
                                        </div>
                                        <label class="form-form-label h6 form-check-inline" for="employer-address">Did you
                                            contribute more than $500 worth of noncash donations?</label>
                                    </div>
                                </div>
                                <div class="row ps-5">
                                    <div class="col-lg-8 ps-0">
                                        <label class="form-input-label h6 pt-2" for="campaign_contribution">Enter the amount of
                                            any noncash donations you made during 2023:</label>
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
                                            <input class="form-check-input h4" type="radio" name="refinanced"
                                                id="foreign-yes" value="yes">
                                            <label class="form-check-label h6 pt-2" for="foreign-yes"><b>Yes</b></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input h4" type="radio" name="refinanced"
                                                id="foreign-no" value="no" checked>
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
                                            <input class="form-check-input h4" type="radio" name="refinanced"
                                                id="foreign-yes" value="yes">
                                            <label class="form-check-label h6 pt-2" for="foreign-yes"><b>Yes</b></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input h4" type="radio" name="refinanced"
                                                id="foreign-no" value="no" checked>
                                            <label class="form-check-label h6 pt-2" for="foreign-no"><b>No</b></label>
                                        </div>
                                        <label class="form-form-label h6 form-check-inline" for="employer-address">Do you want
                                            to use the standard mileage rate to deduct your vehicle expenses related to
                                            volunteer work?</label>
                                    </div>
                                </div>
                                <div class="row ps-5">
                                    <div class="col-lg-8 ps-0">
                                        <label class="form-input-label h6 pt-2" for="campaign_contribution">Enter the amount
                                            of miles you drove during 2023 while volunteering for a charity:</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="has-danger input-group mb-3">
                                            <input class="form-control @error('first_name') is-invalid @enderror"
                                                name="first_name" type="text" value="" aria-label="first_name"
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
                                            <input class="form-check-input h4" type="radio" name="refinanced"
                                                id="foreign-yes" value="yes">
                                            <label class="form-check-label h6 pt-2" for="foreign-yes"><b>Yes</b></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input h4" type="radio" name="refinanced"
                                                id="foreign-no" value="no" checked>
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
