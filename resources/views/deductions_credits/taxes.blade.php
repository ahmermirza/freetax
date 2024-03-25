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
            <div class="row p-1 pt-0 mx-lg-5 px-lg-5">
                <div class="col-lg-12">
                    <div class="tile">
                        <h2 class="tile-title d-flex justify-content-center text-center h2"><b>Tell us about the taxes you paid in
                                2023</b></h2>
                        @if (isset($deductions_credit))
                            <form action="{{ route('taxes.update', $deductions_credit) }}" method="post">
                                @method('PUT')
                            @else
                                <form action="{{ route('taxes.store') }}" method="post">
                        @endif
                        <div class="tile-body">
                            @csrf
                            <br>
                            <div class="row ps-lg-5 px-4">
                                <div class="col-lg-12">
                                    <b>State Withholdings</b>
                                </div>
                            </div>
                            <div class="row ps-lg-5 px-4">
                                <div class="col-lg-8">
                                    <label class="form-input-label h6 pt-2" for="state_withholdings">Your 2023 state income tax withholdings from your W-2s and 1099s:</label>
                                </div>
                                <div class="col-lg-3">
                                    <div class="has-danger input-group mb-3">
                                        <span
                                            class="input-group-text bg-disabled text-dark @error('state_withholdings') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                            id="basic-addon2"><b>$</b></span><input
                                            class="form-control @error('state_withholdings') is-invalid @enderror" name="state_withholdings"
                                            type="text" value="0" aria-label="state_withholdings" disabled
                                            aria-describedby="basic-addon2">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <span class="d-flex justify-content-center me-lg-4">
                                <hr class="mb-3 mt-0 mx-4 w-100">
                            </span>
                            <div class="row ps-lg-5 px-4">
                                <div class="col-lg-12">
                                    <b>Local Withholdings</b>
                                </div>
                            </div>
                            <div class="row ps-lg-5 px-4">
                                <div class="col-lg-8">
                                    <label class="form-input-label h6 pt-2" for="local_withholdings">Your 2023 local income tax withholdings from your W-2s and 1099s:</label>
                                </div>
                                <div class="col-lg-3">
                                    <div class="has-danger input-group mb-3">
                                        <span
                                            class="input-group-text bg-disabled text-dark @error('local_withholdings') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                            id="basic-addon2"><b>$</b></span><input
                                            class="form-control @error('local_withholdings') is-invalid @enderror" name="local_withholdings"
                                            type="text" value="0" aria-label="local_withholdings" disabled
                                            aria-describedby="basic-addon2">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <span class="d-flex justify-content-center me-lg-4">
                                <hr class="mb-3 mt-0 mx-4 w-100">
                            </span>
                            <div class="row ps-lg-5 px-4">
                                <div class="col-lg-12">
                                    <b>Sales Tax</b>
                                </div>
                            </div>
                            <div class="row ps-lg-5 px-4">
                                <div class="col-lg-8">
                                    <label class="form-input-label h6 pt-2" for="sales_tax">Enter the total amount of sales tax you paid during 2023:</label>
                                </div>
                                <div class="col-lg-3">
                                    <div class="has-danger input-group mb-3">
                                        <span
                                            class="input-group-text bg-disabled text-dark @error('sales_tax') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                            id="basic-addon2"><b>$</b></span><input
                                            class="form-control @error('sales_tax') is-invalid @enderror" name="sales_tax"
                                            type="number" value="{{ old('sales_tax', $deductions_credit ? $deductions_credit->sales_tax : '') }}" aria-label="sales_tax"
                                            aria-describedby="basic-addon2">
                                    </div>
                                </div>
                            </div>
                            <div class="row ps-lg-5 px-4">
                                <div class="col-lg-8">
                                    <label class="form-input-label text-secondary small" for="campaign_contribution">You'll usually only take this sales tax deduction if you live in a state that doesn't have state income tax, but it's available to everyone.</label>
                                </div>
                            </div>
                            <br>
                            <span class="d-flex justify-content-center me-lg-4">
                                <hr class="mb-3 mt-0 mx-4 w-100">
                            </span>
                            <div class="row ps-lg-5 px-4">
                                <div class="col-lg-12">
                                    <b>Filing Payments & Estimated Payments</b>
                                </div>
                            </div>
                            <label class="form-input-label h6 pt-2 px-4 px-lg-5" for="own_money">We'll now gather any state or local taxes you paid in 2023 (other than the state and local taxes shown above).</label>
                            <div class="row ms-1 pt-3 pt-lg-0">
                                <div class="col-lg-3 col-5 pe-1 d-flex justify-content-center">
                                    <div class="has-danger form-check form-check-inline mb-3 pe-3">
                                        <input class="form-check-input h4" type="radio"
                                            name="own_money" id="foreign-yes" value="yes" {{ $deductions_credit && $deductions_credit->own_money == 'yes' ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="foreign-yes"><b>Yes</b></label>
                                    </div>
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input h4" type="radio"
                                            name="own_money" id="foreign-no" value="no"
                                            {{ isset($deductions_credit) ? ((isset($deductions_credit) && $deductions_credit->own_money == 'no') ? 'checked' : '') : 'checked' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="foreign-no"><b>No</b></label>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-7 radio-label-custom-width px-0">
                                    <label class="form-form-label h6 pt-2"
                                        for="employer-address">Did you owe money on a 2022 state or local tax return?</label>
                                </div>
                                <div class="col-lg-3 col-5 pe-1 d-flex justify-content-center">
                                    <div class="has-danger form-check form-check-inline mb-3 pe-3">
                                        <input class="form-check-input h4" type="radio"
                                            name="pay_tax" id="foreign-yes" value="yes" {{ $deductions_credit && $deductions_credit->pay_tax == 'yes' ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="foreign-yes"><b>Yes</b></label>
                                    </div>
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input h4" type="radio"
                                            name="pay_tax" id="foreign-no" value="no"
                                            {{ isset($deductions_credit) ? ((isset($deductions_credit) && $deductions_credit->pay_tax == 'no') ? 'checked' : '') : 'checked' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="foreign-no"><b>No</b></label>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-7 radio-label-custom-width px-0">
                                    <label class="form-form-label h6 pt-2"
                                        for="employer-address">In 2023, did you pay state or local taxes for the 2021 tax year, 2020 tax year, or any older tax year?</label>
                                </div>
                                <div class="col-lg-3 col-5 pe-1 d-flex justify-content-center">
                                    <div class="has-danger form-check form-check-inline mb-3 pe-3">
                                        <input class="form-check-input h4" type="radio"
                                            name="other_tax" id="foreign-yes" value="yes" {{ $deductions_credit && $deductions_credit->other_tax == 'yes' ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="foreign-yes"><b>Yes</b></label>
                                    </div>
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input h4" type="radio"
                                            name="other_tax" id="foreign-no" value="no"
                                            {{ isset($deductions_credit) ? ((isset($deductions_credit) && $deductions_credit->other_tax == 'no') ? 'checked' : '') : 'checked' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="foreign-no"><b>No</b></label>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-7 radio-label-custom-width px-0">
                                    <label class="form-form-label h6 pt-2"
                                        for="employer-address">Did you make any other state or local income tax payments in 2023?</label>
                                </div>
                                <div class="col-lg-3 col-5 pe-1 d-flex justify-content-center">
                                    <div class="has-danger form-check form-check-inline mb-3 pe-3">
                                        <input class="form-check-input h4" type="radio"
                                            name="applied_refund" id="foreign-yes" value="yes" {{ $deductions_credit && $deductions_credit->applied_refund == 'yes' ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="foreign-yes"><b>Yes</b></label>
                                    </div>
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input h4" type="radio"
                                            name="applied_refund" id="foreign-no" value="no"
                                            {{ isset($deductions_credit) ? ((isset($deductions_credit) && $deductions_credit->applied_refund == 'no') ? 'checked' : '') : 'checked' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="foreign-no"><b>No</b></label>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-7 radio-label-custom-width px-0">
                                    <label class="form-form-label h6 pt-2"
                                        for="employer-address">Did you apply any of last year's state or local tax refund to this year's state or local return?</label>
                                </div>
                                <div class="col-lg-3 col-5 pe-1 d-flex justify-content-center">
                                    <div class="has-danger form-check form-check-inline mb-3 pe-3">
                                        <input class="form-check-input h4" type="radio"
                                            name="file_extension" id="foreign-yes" value="yes" {{ $deductions_credit && $deductions_credit->file_extension == 'yes' ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="foreign-yes"><b>Yes</b></label>
                                    </div>
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input h4" type="radio"
                                            name="file_extension" id="foreign-no" value="no"
                                            {{ isset($deductions_credit) ? ((isset($deductions_credit) && $deductions_credit->file_extension == 'no') ? 'checked' : '') : 'checked' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="foreign-no"><b>No</b></label>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-7 radio-label-custom-width px-0">
                                    <label class="form-form-label h6 pt-2"
                                        for="employer-address">Did you file an extension with a payment in 2023 to extend a 2022 state or local tax return?</label>
                                </div>
                            </div>
                            <br>
                            <span class="d-flex justify-content-center me-lg-4">
                                <hr class="mb-3 mt-0 mx-4 w-100">
                            </span>
                            <div class="row ps-lg-5 px-4">
                                <div class="col-lg-12">
                                    <b>Personal Property Tax (Cars, RV's, Boats)</b>
                                </div>
                            </div>
                            <div class="row ps-lg-5 px-4">
                                <div class="col-lg-8">
                                    <label class="form-input-label h6 pt-2" for="personal_tax">Enter any personal property taxes you paid during 2023:</label>
                                </div>
                                <div class="col-lg-3">
                                    <div class="has-danger input-group mb-3">
                                        <span
                                            class="input-group-text bg-disabled text-dark @error('personal_tax') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                            id="basic-addon2"><b>$</b></span><input
                                            class="form-control @error('personal_tax') is-invalid @enderror" name="personal_tax"
                                            type="number" value="{{ old('personal_tax', $deductions_credit ? $deductions_credit->personal_tax : '') }}" aria-label="personal_tax"
                                            aria-describedby="basic-addon2">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <span class="d-flex justify-content-center me-lg-4">
                                <hr class="mb-3 mt-0 mx-4 w-100">
                            </span>
                            <div class="row ps-lg-5 px-4">
                                <div class="col-lg-12">
                                    <b>Other Deductible Tax</b>
                                </div>
                            </div>
                            <div class="row ps-lg-5 px-4">
                                <div class="col-lg-8">
                                    <label class="form-input-label h6 pt-2" for="other_deductible_tax">Enter the amount of any other deductible tax you paid during 2023:</label>
                                </div>
                                <div class="col-lg-3">
                                    <div class="has-danger input-group mb-3">
                                        <span
                                            class="input-group-text bg-disabled text-dark @error('other_deductible_tax') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                            id="basic-addon2"><b>$</b></span><input
                                            class="form-control @error('other_deductible_tax') is-invalid @enderror" name="other_deductible_tax"
                                            type="number" value="{{ old('other_deductible_tax', $deductions_credit ? $deductions_credit->other_deductible_tax : '') }}" aria-label="other_deductible_tax"
                                            aria-describedby="basic-addon2">
                                    </div>
                                </div>
                                <label class="form-input-label ps-0 h6 pt-2" for="other_deductible_tax_desc">Other Deductible Tax Description:</label>
                                <div class="col-lg-11 ps-0">
                                    <div class="has-danger input-group mb-3">
                                        <input
                                            class="form-control @error('other_deductible_tax_desc') is-invalid @enderror" name="other_deductible_tax_desc"
                                            type="text" value="{{ old('other_deductible_tax_desc', $deductions_credit ? $deductions_credit->other_deductible_tax_desc : '') }}" aria-label="other_deductible_tax_desc"
                                            aria-describedby="basic-addon2">
                                    </div>
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
                                    <button class="btn btn-primary rounded-0 d-block d-lg-none mb-2 button-custom-width" type="submit">
                                        <b class="text-light">Save and Continue</b>
                                    </button>
                                    <a class="btn btn-white border border-primary rounded-0 button-custom-width"
                                        href="{{ route('medical-expenses.create') }}">
                                        <b class="text-primary">Previous Page</b>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8 w-100">
                                    <button class="btn btn-primary rounded-0 d-none d-lg-block button-custom-width" type="submit">
                                        <b class="text-light">Save and Continue</b>
                                    </button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
