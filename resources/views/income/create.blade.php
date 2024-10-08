@extends('layouts.app')

@section('title', 'Personal')

@section('content')
    <div class="d-flex justify-content-center p-lg-4 p-3">
        <div class="col-lg-9 content-shadow shadow-none rounded-3">
            <div class="row p-4 pt-5">
                <div class="d-lg-flex justify-content-between">
                    <i class="fa fa-arrow-left text-primary" aria-hidden="true"></i>
                </div>
            </div>
            <div class="row p-4 pt-0">
                <div class="col-lg-12">
                    <div class="tile">
                        <h2 class="tile-title d-flex justify-content-center text-center h2"><b>Tell us about yourself</b></h2>
                        @if (isset($personal))
                            <form action="{{ route('personal.update', $personal) }}" method="post">
                                @method('PUT')
                            @else
                                <form action="{{ route('personal.store') }}" method="post">
                        @endif
                        <div class="tile-body">
                            @csrf
                            <input type="hidden" name="info" value="basic">
                            <div class="row ps-5">
                                <div class="col-lg-1">
                                </div>
                                <div class="col-lg-5">
                                    <div class="py-4 h6">To get started, we'll need some information about you.</div>
                                </div>
                            </div>
                            <div class="row d-lg-flex justify-content-center">
                                <div class="col-lg-5">
                                    <label class="form-form-label h6" for="first_name">First Name: <i
                                            class="fa-regular fa-circle-question text-primary"></i></label>
                                    <div class="has-danger input-group mb-3">
                                        <input class="form-control @error('first_name') is-invalid @enderror border-end-0"
                                            name="first_name" type="text"
                                            value="{{ old('first_name', $personal ? $personal->first_name : '') }}"
                                            aria-label="first_name" aria-describedby="basic-addon2"><span
                                            class="input-group-text bg-transparent text-secondary @error('first_name') is-invalid border border-danger text-danger @enderror border-start-0"
                                            id="basic-addon2"><i class="fa-solid fa-address-card"></i></span>
                                    </div>
                                    @error('first_name')
                                        <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                    @enderror
                                    <label class="form-form-label h6" for="last_name">Last Name: <i
                                            class="fa-regular fa-circle-question text-primary"></i></label>
                                    <div class="has-danger input-group mb-3">
                                        <input class="form-control @error('last_name') is-invalid @enderror"
                                            name="last_name" type="text"
                                            value="{{ old('last_name', $personal ? $personal->last_name : '') }}"
                                            aria-label="last_name" aria-describedby="basic-addon2">
                                    </div>
                                    @error('last_name')
                                        <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                    @enderror
                                    <label class="form-form-label h6" for="occupation">Occupation: <i
                                            class="fa-regular fa-circle-question text-primary"></i></label>
                                    <div class="has-danger input-group mb-3">
                                        <input class="form-control @error('occupation') is-invalid @enderror"
                                            name="occupation" type="text"
                                            value="{{ old('occupation', $personal ? $personal->occupation : '') }}"
                                            aria-label="occupation" aria-describedby="basic-addon2">
                                    </div>
                                    @error('occupation')
                                        <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                    @enderror
                                    <label class="form-form-label h6" for="dob">Date of Birth: <i
                                            class="fa-regular fa-circle-question text-primary"></i></label>
                                    <div class="has-danger input-group mb-3">
                                        <input class="form-control @error('dob') is-invalid @enderror" name="dob"
                                            type="date" value="{{ old('dob', $personal ? $personal->dob : '') }}"
                                            aria-label="dob" aria-describedby="basic-addon2">
                                    </div>
                                    @error('dob')
                                        <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-form-label h6" for="middle_initial">Middle Initial:</label>
                                    <div class="has-danger input-group mb-3">
                                        <input class="form-control @error('middle_initial') is-invalid @enderror"
                                            name="middle_initial" type="text"
                                            value="{{ old('middle_initial', $personal ? $personal->middle_initial : '') }}"
                                            aria-label="middle_initial" aria-describedby="basic-addon2">
                                    </div>
                                    @error('middle_initial')
                                        <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                    @enderror
                                    <label class="form-form-label h6" for="suffix">Jr., Sr., III:</label>
                                    <div class="has-danger input-group mb-3">
                                        <select class="form-select @error('suffix') is-invalid @enderror" name="suffix"
                                            aria-label="suffix" aria-describedby="basic-addon2">
                                            <option value=""
                                                {{ $personal && $personal->suffix == '' ? 'selected' : '' }}></option>
                                            <option value="jr"
                                                {{ $personal && $personal->suffix == 'jr' ? 'selected' : '' }}>Jr.
                                            </option>
                                            <option value="sr"
                                                {{ $personal && $personal->suffix == 'sr' ? 'selected' : '' }}>Sr.
                                            </option>
                                            <option value="ii"
                                                {{ $personal && $personal->suffix == 'ii' ? 'selected' : '' }}>II
                                            </option>
                                            <option value="iii"
                                                {{ $personal && $personal->suffix == 'iii' ? 'selected' : '' }}>III
                                            </option>
                                            <option value="iv"
                                                {{ $personal && $personal->suffix == 'iv' ? 'selected' : '' }}>IV
                                            </option>
                                            <option value="v"
                                                {{ $personal && $personal->suffix == 'v' ? 'selected' : '' }}>V</option>
                                            <option value="vi"
                                                {{ $personal && $personal->suffix == 'vi' ? 'selected' : '' }}>VI
                                            </option>
                                        </select>
                                    </div>
                                    @error('suffix')
                                        <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                    @enderror
                                    <label class="form-form-label h6" for="ssn">Social Security Number: <i
                                            class="fa-regular fa-circle-question text-primary"></i></label>
                                    <div class="has-danger input-group mb-3">
                                        <input class="form-control @error('ssn') is-invalid @enderror" name="ssn"
                                            type="text" value="{{ old('ssn', $personal ? $personal->ssn : '') }}"
                                            aria-label="ssn" aria-describedby="basic-addon2">
                                    </div>
                                    @error('ssn')
                                        <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-1 w-75 hr-custom-width">
                            </span>
                            <div class="row ps-5">
                                <div class="col-lg-1">
                                </div>
                                <div class="col-lg-5">
                                    <div class="py-4 h6"><a href="#" class="text-primary" data-bs-toggle="modal"
                                        data-bs-target="#foreign_address_modal">What if I have a
                                            foreign address?</a></div>
                                </div>
                            </div>
                            <div class="row d-lg-flex justify-content-center">
                                <div class="col-lg-5">
                                    <label class="form-form-label h6" for="street_address">Street Address:</label>
                                    <div class="has-danger input-group mb-3">
                                        <input class="form-control @error('street_address') is-invalid @enderror"
                                            name="street_address" type="text"
                                            value="{{ old('street_address', $personal ? $personal->street_address : '') }}"
                                            aria-label="street_address" aria-describedby="basic-addon2">
                                    </div>
                                    @error('street_address')
                                        <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-form-label h6" for="apt_no">Apt No:</label>
                                    <div class="has-danger input-group mb-3">
                                        <input class="form-control @error('apt_no') is-invalid @enderror" name="apt_no"
                                            type="text"
                                            value="{{ old('apt_no', $personal ? $personal->apt_no : '') }}"
                                            aria-label="apt_no" aria-describedby="basic-addon2">
                                    </div>
                                    @error('apt_no')
                                        <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row d-lg-flex justify-content-center">
                                <div class="col-lg-5">
                                    <label class="form-form-label h6" for="city">City:</label>
                                    <div class="has-danger input-group mb-3">
                                        <input class="form-control @error('city') is-invalid @enderror" name="city"
                                            type="text" value="{{ old('city', $personal ? $personal->city : '') }}"
                                            aria-label="city" aria-describedby="basic-addon2">
                                    </div>
                                    @error('city')
                                        <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-4">
                                </div>
                            </div>
                            <div class="row d-lg-flex justify-content-center">
                                <div class="col-lg-5">
                                    <label class="form-form-label h6" for="state">State: <i
                                            class="fa-regular fa-circle-question text-primary"></i></label>
                                    <div class="has-danger input-group mb-3">
                                        <input class="form-control @error('state') is-invalid @enderror" name="state"
                                            type="text" value="{{ old('state', $personal ? $personal->state : '') }}"
                                            aria-label="state" aria-describedby="basic-addon2">
                                    </div>
                                    @error('state')
                                        <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-form-label h6" for="zip">Zip Code:</label>
                                    <div class="row">
                                        @php
                                            $zip_arr = json_decode($personal->zip, true)
                                        @endphp
                                        <div class="col-lg-4">
                                            <div class="has-danger input-group mb-3">
                                                <input class="form-control @error('zip1') is-invalid @enderror"
                                                    name="zip1" type="text" value="{{ isset($zip_arr) ? $zip_arr['zip1'] : '' }}" aria-label="zip1"
                                                    aria-describedby="basic-addon2">
                                            </div>
                                        </div>
                                        &lowbar;
                                        <div class="col-lg-4">
                                            <div class="has-danger input-group mb-3">
                                                <input class="form-control @error('zip2') is-invalid @enderror"
                                                    name="zip2" type="text" value="{{ isset($zip_arr) ? $zip_arr['zip2'] : '' }}" aria-label="zip2"
                                                    aria-describedby="basic-addon2">
                                            </div>
                                        </div>
                                    </div>
                                    @error('zip1')
                                        <div class="form-control-feedback text-danger pb-2">{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row d-lg-flex justify-content-center">
                                <div class="col-lg-5">
                                    <div class="has-danger input-group mb-3">
                                        <input
                                            class="form-check-input @error('address_changed') is-invalid @enderror me-3 h4"
                                            name="address_changed" type="checkbox"
                                            value="{{ $personal && $personal->address_changed == 1 ? $personal->address_changed : '1' }}"
                                            aria-label="address_changed" aria-describedby="basic-addon2"
                                            {{ $personal && $personal->address_changed == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2" for="address_changed">Address
                                            changed from previously filed return <i
                                                class="fa-regular fa-circle-question text-primary"></i></label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                </div>
                            </div>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-3 mt-0 w-75">
                            </span>
                            <div class="row d-lg-flex justify-content-center">
                                <div class="col-lg-8">
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-3 h4" name="parent_claim" type="radio"
                                            value="1" aria-label="parent_claim" aria-describedby="basic-addon2"
                                            {{ $personal && $personal->parent_claim == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2" for="parent_claim"><b>Yes</b></label>
                                    </div>
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-3 h4" name="parent_claim" type="radio"
                                            value="0" aria-label="parent_claim" aria-describedby="basic-addon2"
                                            {{ $personal && $personal->parent_claim == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="parent_claim"><b>No</b></label>&nbsp;&nbsp;&nbsp;
                                        <label class="h6 pt-2">Can a parent (or somebody else) claim
                                            you as a dependent on their tax return?</label>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                </div>
                            </div>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-3 mt-0 w-75">
                            </span>
                            <div class="row d-lg-flex justify-content-center">
                                <div class="col-lg-8">
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-3 h4" name="campaign_contribution"
                                            type="radio" value="1" aria-label="campaign_contribution"
                                            aria-describedby="basic-addon2"
                                            {{ $personal && $personal->campaign_contribution == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="campaign_contribution"><b>Yes</b></label>
                                    </div>
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-3 h4" name="campaign_contribution"
                                            type="radio" value="0" aria-label="campaign_contribution"
                                            aria-describedby="basic-addon2"
                                            {{ $personal && $personal->campaign_contribution == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="campaign_contribution"><b>No</b></label>&nbsp;&nbsp;&nbsp;
                                        <label class="h6 pt-2">Do you want to contribute $3 to the
                                            Presidential Eelection Campaign Fund? <i
                                                class="fa-regular fa-circle-question text-primary"></i></label>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                </div>
                            </div>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-3 mt-0 w-75">
                            </span>
                            <div class="row d-lg-flex justify-content-center">
                                <div class="col-lg-8">
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-3 h4" name="blind" type="radio"
                                            value="1" aria-label="blind" aria-describedby="basic-addon2"
                                            {{ $personal && $personal->blind == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2" for="blind"><b>Yes</b></label>
                                    </div>
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-3 h4" name="blind" type="radio"
                                            value="0" aria-label="blind" aria-describedby="basic-addon2"
                                            {{ $personal && $personal->blind == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="blind"><b>No</b></label>&nbsp;&nbsp;&nbsp;
                                        <label class="h6 pt-2">Are you legally blind? <i
                                                class="fa-regular fa-circle-question text-primary"></i></label>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                </div>
                            </div>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-0 mt-0 pt-0 w-75">
                            </span><br>
                            <div class="row d-lg-flex justify-content-center">
                                <div class="col-lg-8">
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-3 h4" name="passed_away" type="radio"
                                            value="1" aria-label="passed_away" aria-describedby="basic-addon2"
                                            {{ $personal && $personal->passed_away == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2" for="passed_away"><b>Yes</b></label>
                                    </div>
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-3 h4" name="passed_away" type="radio"
                                            value="0" aria-label="passed_away" aria-describedby="basic-addon2"
                                            {{ $personal && $personal->passed_away == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="passed_away"><b>No</b></label>&nbsp;&nbsp;&nbsp;
                                        <label class="h6 pt-2">Has this person passed away before the
                                            filing of this tax return? <i
                                                class="fa-regular fa-circle-question text-primary"></i></label>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                </div>
                            </div><br>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-1 mt-0 pt-0 w-75">
                            </span><br>
                        </div>
                        <div class="tile-footer d-flex justify-content-end px-lg-5 mx-lg-5 mb-lg-4">
                            <button class="btn btn-primary rounded-0" type="submit"><i class="me-2"></i><b
                                    class="text-light">Save and Continue</b></button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-dialog-scrollable" id="foreign_address_modal" tabindex="-1" aria-labelledby="privacy_modal_label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="privacy_modal_label">Tax Help</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <p class="h4 pb-2">Can I use FreeTaxUSA if I live at a foreign address?</p>
                        <p class="h6">Unfortunately, we don't support customers or preparers who are living outside the United States when they file their taxes, even if they lived in a US territory.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
