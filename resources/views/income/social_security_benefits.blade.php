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
                        <h2 class="tile-title d-lg-flex justify-content-center h2"><b>Social Security Benefits (Form
                                SSA-1099)</b></h2>
                            @if (isset($ssb))
                            <form action="{{ route('income.ssb.update', $ssb) }}" method="post">
                                @method('PUT')
                            @else
                                <form action="{{ route('income.ssb.store') }}" method="post">
                            @endif
                            <div class="tile-body">
                                @csrf
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <br><br>
                                            <label class="h4 mb-0">Your Social Security Benefits</label>
                                            <span class="d-flex justify-content-center">
                                                <hr class="mb-1 w-100">
                                            </span>
                                            <br>
                                            <div class="row">
                                                <label class="form-form-label h6" for="ein"><b>Form
                                                        SSA-1099</b></label>
                                                <p class="h6">If you received more than one SSA-1099 form, enter the sum
                                                    of all your SSA-1099 forms below.</p><br><br>
                                                <p class="h6 text-secondary">Do NOT enter your child's Social Security
                                                    benefits.</p>
                                            </div>
                                            <div class="row d-flex justify-content-center">
                                                <div class="has-danger input-group mb-3">
                                                    <div class="col-lg-6 d-flex justify-content-end">
                                                        <label class="input-group-label h6 mt-2 pe-4" for="ssn">Social
                                                            Security Benefits:<span class="text-secondary">( Box 3
                                                                )</span></label>
                                                    </div>
                                                    <div class="col-lg-3 d-flex justify-content-start">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('first_name') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('first_name') is-invalid @enderror"
                                                            name="first_name" type="text" value="{{ old('state_unemployment_benefit', $ssb ? $ssb->state_unemployment_benefit : '') }}"
                                                            aria-label="first_name" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row d-flex justify-content-center">
                                                <div class="has-danger input-group mb-3">
                                                    <div class="col-lg-6 d-flex justify-content-end">
                                                        <label class="input-group-label h6 mt-2 pe-4" for="ssn">Social
                                                            Security Benefits Repaid: <span class="text-secondary"> ( Box 4
                                                                )</span></label>
                                                    </div>
                                                    <div class="col-lg-3 d-flex justify-content-start">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('first_name') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('first_name') is-invalid @enderror"
                                                            name="first_name" type="text" value="{{ old('state_unemployment_benefit', $ssb ? $ssb->state_unemployment_benefit : '') }}"
                                                            aria-label="first_name" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row d-flex justify-content-center">
                                                <div class="has-danger input-group mb-3">
                                                    <div class="col-lg-6 d-flex justify-content-end">
                                                        <label class="input-group-label h6 mt-2 pe-4" for="ssn">Net
                                                            Social Security Benefits <span class="text-secondary"> ( Box 5
                                                                )</span></label>
                                                    </div>
                                                    <div class="col-lg-3 d-flex justify-content-start">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('first_name') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('first_name') is-invalid @enderror"
                                                            name="first_name" type="text" value="0"
                                                            style="background-color: #e9ecef;" aria-label="first_name"
                                                            aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row d-flex justify-content-center">
                                                <div class="has-danger input-group mb-3">
                                                    <div class="col-lg-6 d-flex justify-content-end">
                                                        <label class="input-group-label h6 mt-2 pe-4" for="ssn">Federal
                                                            Tax Withheld: <span class="text-secondary"> ( Box 6
                                                                )</span></label>
                                                    </div>
                                                    <div class="col-lg-3 d-flex justify-content-start">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('first_name') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('first_name') is-invalid @enderror"
                                                            name="first_name" type="text" value="{{ old('state_unemployment_benefit', $ssb ? $ssb->state_unemployment_benefit : '') }}"
                                                            aria-label="first_name" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row d-flex justify-content-center">
                                                <div class="has-danger input-group mb-3">
                                                    <div class="col-lg-6 d-flex justify-content-end">
                                                        <label class="input-group-label h6 mt-2 pe-4"
                                                            for="ssn">Medicare Premiums Deducted:</label>
                                                    </div>
                                                    <div class="col-lg-3 d-flex justify-content-start">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('first_name') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('first_name') is-invalid @enderror"
                                                            name="first_name" type="text" value="{{ old('state_unemployment_benefit', $ssb ? $ssb->state_unemployment_benefit : '') }}"
                                                            aria-label="first_name" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <span class="d-flex justify-content-center">
                                                <hr class="mb-1 w-100">
                                            </span><br>
                                            <div class="row">
                                                <div class="col-lg-12 ms-3">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input h4" type="radio"
                                                            name="foreign-address" id="foreign-yes" value="yes"
                                                            {{ $ssb && $ssb->received_unemployment == 'yes' ? 'checked' : '' }}>
                                                        <label class="form-check-label h6 pt-2"
                                                            for="foreign-yes"><b>Yes</b></label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input h4" type="radio"
                                                            name="foreign-address" id="foreign-no" value="no"
                                                            {{ isset($ssb) ? ((isset($ssb) && $ssb->received_unemployment == 'no') ? 'checked' : '') : 'checked' }}>
                                                        <label class="form-check-label h6 pt-2"
                                                            for="foreign-no"><b>No</b></label>
                                                    </div>
                                                    <label class="form-form-label h6 form-check-inline"
                                                        for="employer-address">Did you
                                                        receive a lump-sum Social Security payment in 2023 for 2022 or prior
                                                        years?</label>
                                                </div>
                                            </div><br>
                                            <span class="d-flex justify-content-center">
                                                <hr class="mb-1 mt-0 pt-0 w-100">
                                            </span><br>
                                            <div class="row">
                                                <label class="form-form-label h6" for="ein"><b>Form
                                                        RRB-1099</b></label>
                                                <div class="col-lg-12 ms-3">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input h4" type="radio"
                                                            name="foreign-address" id="foreign-yes" value="yes"
                                                            {{ $ssb && $ssb->received_unemployment == 'yes' ? 'checked' : '' }}>
                                                        <label class="form-check-label h6 pt-2"
                                                            for="foreign-yes"><b>Yes</b></label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input h4" type="radio"
                                                            name="foreign-address" id="foreign-no" value="no"
                                                            {{ isset($ssb) ? ((isset($ssb) && $ssb->received_unemployment == 'no') ? 'checked' : '') : 'checked' }}>
                                                        <label class="form-check-label h6 pt-2"
                                                            for="foreign-no"><b>No</b></label>
                                                    </div>
                                                    <label class="form-form-label h6 form-check-inline"
                                                        for="employer-address">Did you receive any benefits on RRB-1099
                                                        forms?</label>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                    <span class="d-flex justify-content-center">
                                        <hr class="mb-1 mt-0 pt-0 w-100">
                                    </span>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <br><br><br>
                                            <label class="h4 mb-0">Your Spouse Social Security Benefits</label>
                                            <span class="d-flex justify-content-center">
                                                <hr class="mb-1 w-100">
                                            </span>
                                            <br>
                                            <div class="row">
                                                <label class="form-form-label h6" for="ein"><b>Form
                                                        SSA-1099</b></label>
                                                <p class="h6">If your spouse received more than one SSA-1099 form, enter the sum
                                                    of all your spouse SSA-1099 forms below.</p><br>
                                            </div>
                                            <div class="row d-flex justify-content-center">
                                                <div class="has-danger input-group mb-3">
                                                    <div class="col-lg-6 d-flex justify-content-end">
                                                        <label class="input-group-label h6 mt-2 pe-4" for="ssn">Social
                                                            Security Benefits:<span class="text-secondary">( Box 3
                                                                )</span></label>
                                                    </div>
                                                    <div class="col-lg-3 d-flex justify-content-start">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('first_name') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('first_name') is-invalid @enderror"
                                                            name="first_name" type="text" value="{{ old('state_unemployment_benefit', $ssb ? $ssb->state_unemployment_benefit : '') }}"
                                                            aria-label="first_name" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row d-flex justify-content-center">
                                                <div class="has-danger input-group mb-3">
                                                    <div class="col-lg-6 d-flex justify-content-end">
                                                        <label class="input-group-label h6 mt-2 pe-4" for="ssn">Social
                                                            Security Benefits Repaid: <span class="text-secondary"> ( Box 4
                                                                )</span></label>
                                                    </div>
                                                    <div class="col-lg-3 d-flex justify-content-start">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('first_name') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('first_name') is-invalid @enderror"
                                                            name="first_name" type="text" value="{{ old('state_unemployment_benefit', $ssb ? $ssb->state_unemployment_benefit : '') }}"
                                                            aria-label="first_name" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row d-flex justify-content-center">
                                                <div class="has-danger input-group mb-3">
                                                    <div class="col-lg-6 d-flex justify-content-end">
                                                        <label class="input-group-label h6 mt-2 pe-4" for="ssn">Net
                                                            Social Security Benefits <span class="text-secondary"> ( Box 5
                                                                )</span></label>
                                                    </div>
                                                    <div class="col-lg-3 d-flex justify-content-start">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('first_name') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('first_name') is-invalid @enderror"
                                                            name="first_name" type="text" value="0"
                                                            style="background-color: #e9ecef;" aria-label="first_name"
                                                            aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row d-flex justify-content-center">
                                                <div class="has-danger input-group mb-3">
                                                    <div class="col-lg-6 d-flex justify-content-end">
                                                        <label class="input-group-label h6 mt-2 pe-4" for="ssn">Federal
                                                            Tax Withheld: <span class="text-secondary"> ( Box 6
                                                                )</span></label>
                                                    </div>
                                                    <div class="col-lg-3 d-flex justify-content-start">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('first_name') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('first_name') is-invalid @enderror"
                                                            name="first_name" type="text" value="{{ old('state_unemployment_benefit', $ssb ? $ssb->state_unemployment_benefit : '') }}"
                                                            aria-label="first_name" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row d-flex justify-content-center">
                                                <div class="has-danger input-group mb-3">
                                                    <div class="col-lg-6 d-flex justify-content-end">
                                                        <label class="input-group-label h6 mt-2 pe-4"
                                                            for="ssn">Medicare Premiums Deducted:</label>
                                                    </div>
                                                    <div class="col-lg-3 d-flex justify-content-start">
                                                        <span
                                                            class="input-group-text bg-disabled text-dark @error('first_name') is-invalid border border-danger text-danger @enderror border-0 px-3"
                                                            id="basic-addon2"><b>$</b></span><input
                                                            class="form-control @error('first_name') is-invalid @enderror"
                                                            name="first_name" type="text" value="{{ old('state_unemployment_benefit', $ssb ? $ssb->state_unemployment_benefit : '') }}"
                                                            aria-label="first_name" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <span class="d-flex justify-content-center">
                                                <hr class="mb-1 w-100">
                                            </span><br>
                                            <div class="row">
                                                <div class="col-lg-12 ms-3">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input h4" type="radio"
                                                            name="foreign-address" id="foreign-yes" value="yes"
                                                            {{ $ssb && $ssb->received_unemployment == 'yes' ? 'checked' : '' }}>
                                                        <label class="form-check-label h6 pt-2"
                                                            for="foreign-yes"><b>Yes</b></label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input h4" type="radio"
                                                            name="foreign-address" id="foreign-no" value="no"
                                                            {{ isset($ssb) ? ((isset($ssb) && $ssb->received_unemployment == 'no') ? 'checked' : '') : 'checked' }}>
                                                        <label class="form-check-label h6 pt-2"
                                                            for="foreign-no"><b>No</b></label>
                                                    </div>
                                                    <label class="form-form-label h6 form-check-inline"
                                                        for="employer-address">Did your spouse
                                                        receive a lump-sum Social Security payment in 2023 for 2022 or prior
                                                        years?</label>
                                                </div>
                                            </div><br>
                                            <span class="d-flex justify-content-center">
                                                <hr class="mb-1 mt-0 pt-0 w-100">
                                            </span><br>
                                            <div class="row">
                                                <label class="form-form-label h6" for="ein"><b>Form
                                                        RRB-1099</b></label>
                                                <div class="col-lg-12 ms-3">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input h4" type="radio"
                                                            name="foreign-address" id="foreign-yes" value="yes"
                                                            {{ $ssb && $ssb->received_unemployment == 'yes' ? 'checked' : '' }}>
                                                        <label class="form-check-label h6 pt-2"
                                                            for="foreign-yes"><b>Yes</b></label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input h4" type="radio"
                                                            name="foreign-address" id="foreign-no" value="no"
                                                            {{ isset($ssb) ? ((isset($ssb) && $ssb->received_unemployment == 'no') ? 'checked' : '') : 'checked' }}>
                                                        <label class="form-check-label h6 pt-2"
                                                            for="foreign-no"><b>No</b></label>
                                                    </div>
                                                    <label class="form-form-label h6 form-check-inline"
                                                        for="employer-address">Did your spouse receive any benefits on RRB-1099
                                                        forms?</label>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
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
