@extends('layouts.app')

@section('title', 'Personal')

@section('content')
    <div class="d-flex justify-content-center p-4">
        <div class="col-lg-9 shadow rounded-3">
            <div class="row p-4 pt-5">
                <div class="d-lg-flex justify-content-between">
                    <i class="fa fa-arrow-left text-primary" aria-hidden="true"></i>
                </div>
            </div>
            <div class="row p-4 pt-0">
                <div class="col-lg-12">
                    <div class="tile">
                        <h2 class="tile-title d-lg-flex justify-content-center h2"><b>Tell us about your spouse</b></h2>
                        @if (isset($personal))
                            <form action="{{ route('personal.update', $personal) }}" method="post">
                                @method('PUT')
                            @else
                                <form action="{{ route('personal.store') }}" method="post">
                        @endif
                        <div class="tile-body">
                            @csrf
                            <input type="hidden" name="info" value="spouse">
                            {{-- <div class="row ps-5">
                                <div class="col-lg-1">
                                </div>
                                <div class="col-lg-10">
                                    <div class="py-4 h6">Are you sure you want to file as Married Filing Separately? Using
                                        Married Filing Jointly almost always gives you a bigger refund. You can use Married
                                        Filing Jointly even if only one spouse had income or if you didn't live together all
                                        year. If you'd like to switch your filing status, go back to the <a
                                            href="{{ route('personal.create', ['info' => 'filing-status']) }}"
                                            class="text-primary">Filing Status</a>
                                        screen.<br><br>Even though you're filing as Married Filing Separately, the IRS
                                        still needs information about your spouse.</div>

                                </div>
                            </div> --}}
                            <div class="row d-lg-flex justify-content-center">
                                <div class="col-lg-5">
                                    <label class="form-form-label h6" for="spouse_first_name">First Name: <i
                                            class="fa-regular fa-circle-question text-primary"></i></label>
                                    <div class="has-danger input-group mb-3">
                                        <input
                                            class="form-control @error('spouse_first_name') is-invalid @enderror border-end-0"
                                            name="spouse_first_name" type="text"
                                            value="{{ old('spouse_first_name', $personal ? $personal->spouse_first_name : '') }}"
                                            aria-label="spouse_first_name" aria-describedby="basic-addon2"><span
                                            class="input-group-text bg-transparent text-secondary @error('spouse_first_name') is-invalid border border-danger text-danger @enderror border-start-0"
                                            id="basic-addon2"><i class="fa-solid fa-address-card"></i></span>
                                    </div>
                                    @error('spouse_first_name')
                                        <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                    @enderror
                                    <label class="form-form-label h6" for="spouse_last_name">Last Name: <i
                                            class="fa-regular fa-circle-question text-primary"></i></label>
                                    <div class="has-danger input-group mb-3">
                                        <input class="form-control @error('spouse_last_name') is-invalid @enderror"
                                            name="spouse_last_name" type="text"
                                            value="{{ old('spouse_last_name', $personal ? $personal->spouse_last_name : '') }}"
                                            aria-label="spouse_last_name" aria-describedby="basic-addon2">
                                    </div>
                                    @error('spouse_last_name')
                                        <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                    @enderror
                                    <label class="form-form-label h6" for="spouse_occupation">Occupation: <i
                                            class="fa-regular fa-circle-question text-primary"></i></label>
                                    <div class="has-danger input-group mb-3">
                                        <input class="form-control @error('spouse_occupation') is-invalid @enderror"
                                            name="spouse_occupation" type="text"
                                            value="{{ old('spouse_occupation', $personal ? $personal->spouse_occupation : '') }}"
                                            aria-label="spouse_occupation" aria-describedby="basic-addon2">
                                    </div>
                                    @error('spouse_occupation')
                                        <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                    @enderror
                                    <label class="form-form-label h6" for="spouse_dob">Date of Birth: <i
                                            class="fa-regular fa-circle-question text-primary"></i></label>
                                    <div class="has-danger input-group mb-3">
                                        <input class="form-control @error('spouse_dob') is-invalid @enderror"
                                            name="spouse_dob" type="date"
                                            value="{{ old('spouse_dob', $personal ? $personal->spouse_dob : '') }}"
                                            aria-label="spouse_dob" aria-describedby="basic-addon2">
                                    </div>
                                    @error('spouse_dob')
                                        <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-form-label h6" for="spouse_middle_initial">Middle Initial:</label>
                                    <div class="has-danger input-group mb-3">
                                        <input class="form-control @error('spouse_middle_initial') is-invalid @enderror"
                                            name="spouse_middle_initial" type="text"
                                            value="{{ old('spouse_middle_initial', $personal ? $personal->spouse_middle_initial : '') }}"
                                            aria-label="spouse_middle_initial" aria-describedby="basic-addon2">
                                    </div>
                                    @error('spouse_middle_initial')
                                        <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                    @enderror
                                    <label class="form-form-label h6" for="spouse_suffix">Jr., Sr., III:</label>
                                    <div class="has-danger input-group mb-3">
                                        <select class="form-select @error('spouse_suffix') is-invalid @enderror"
                                            name="spouse_suffix" aria-label="spouse_suffix" aria-describedby="basic-addon2">
                                            <option value=""
                                                {{ $personal && $personal->spouse_suffix == null ? 'selected' : '' }}>
                                            </option>
                                            <option value="jr"
                                                {{ $personal && $personal->spouse_suffix == 'jr' ? 'selected' : '' }}>Jr.
                                            </option>
                                            <option value="sr"
                                                {{ $personal && $personal->spouse_suffix == 'sr' ? 'selected' : '' }}>Sr.
                                            </option>
                                            <option value="ii"
                                                {{ $personal && $personal->spouse_suffix == 'ii' ? 'selected' : '' }}>II
                                            </option>
                                            <option value="iii"
                                                {{ $personal && $personal->spouse_suffix == 'iii' ? 'selected' : '' }}>III
                                            </option>
                                            <option value="iv"
                                                {{ $personal && $personal->spouse_suffix == 'iv' ? 'selected' : '' }}>IV
                                            </option>
                                            <option value="v"
                                                {{ $personal && $personal->spouse_suffix == 'v' ? 'selected' : '' }}>V
                                            </option>
                                            <option value="vi"
                                                {{ $personal && $personal->spouse_suffix == 'vi' ? 'selected' : '' }}>VI
                                            </option>
                                        </select>
                                    </div>
                                    @error('spouse_suffix')
                                        <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                    @enderror
                                    <label class="form-form-label h6" for="spouse_ssn">Social Security Number: <i
                                            class="fa-regular fa-circle-question text-primary"></i></label>
                                    <div class="has-danger input-group mb-3">
                                        <input class="form-control @error('spouse_ssn') is-invalid @enderror"
                                            name="spouse_ssn" type="text"
                                            value="{{ old('spouse_ssn', $personal ? $personal->spouse_ssn : '') }}"
                                            aria-label="spouse_ssn" aria-describedby="basic-addon2">
                                    </div>
                                    @error('spouse_ssn')
                                        <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-3 w-75">
                            </span>
                            <div class="row d-lg-flex justify-content-center">
                                <div class="col-lg-1">
                                </div>
                                <div class="col-lg-10">
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-3 h4" name="spouse_parent_claim" type="radio"
                                            value="1" aria-label="spouse_parent_claim"
                                            aria-describedby="basic-addon2"
                                            {{ $personal && $personal->spouse_parent_claim == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="spouse_parent_claim"><b>Yes</b></label>
                                    </div>
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-3 h4" name="spouse_parent_claim" type="radio"
                                            value="0" aria-label="spouse_parent_claim"
                                            aria-describedby="basic-addon2"
                                            {{ $personal && $personal->spouse_parent_claim == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="spouse_parent_claim"><b>No</b></label>&nbsp;&nbsp;&nbsp;
                                        <label class="h6 pt-2">Can a parent (or somebody else) claim your spouse as a
                                            dependent on their return?</label>
                                    </div>
                                </div>
                            </div>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-3 mt-0 w-75">
                            </span>
                            <div class="row d-lg-flex justify-content-center">
                                <div class="col-lg-1">
                                </div>
                                <div class="col-lg-10">
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-3 h4" name="spouse_campaign_contribution"
                                            type="radio" value="1" aria-label="spouse_campaign_contribution"
                                            aria-describedby="basic-addon2"
                                            {{ $personal && $personal->spouse_campaign_contribution == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="spouse_campaign_contribution"><b>Yes</b></label>
                                    </div>
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-3 h4" name="spouse_campaign_contribution"
                                            type="radio" value="0" aria-label="spouse_campaign_contribution"
                                            aria-describedby="basic-addon2"
                                            {{ $personal && $personal->spouse_campaign_contribution == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="spouse_campaign_contribution"><b>No</b></label>&nbsp;&nbsp;&nbsp;
                                        <label class="h6 pt-2">Does your spouse want to contribute $3 to the
                                            Presidential Eelection Campaign Fund? <i
                                                class="fa-regular fa-circle-question text-primary"></i></label>
                                    </div>
                                </div>
                            </div>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-3 mt-0 w-75">
                            </span>
                            <div class="row d-lg-flex justify-content-center">
                                <div class="col-lg-8">
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-3 h4" name="spouse_blind" type="radio"
                                            value="1" aria-label="spouse_blind" aria-describedby="basic-addon2"
                                            {{ $personal && $personal->spouse_blind == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2" for="spouse_blind"><b>Yes</b></label>
                                    </div>
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-3 h4" name="spouse_blind" type="radio"
                                            value="0" aria-label="spouse_blind" aria-describedby="basic-addon2"
                                            {{ $personal && $personal->spouse_blind == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="spouse_blind"><b>No</b></label>&nbsp;&nbsp;&nbsp;
                                        <label class="h6 pt-2">Is your spouse legally blind? <i
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
                                        <input class="form-check-input me-3 h4" name="spouse_passed_away" type="radio"
                                            value="1" aria-label="spouse_passed_away"
                                            aria-describedby="basic-addon2"
                                            {{ $personal && $personal->spouse_passed_away == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="spouse_passed_away"><b>Yes</b></label>
                                    </div>
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-3 h4" name="spouse_passed_away" type="radio"
                                            value="0" aria-label="spouse_passed_away"
                                            aria-describedby="basic-addon2"
                                            {{ $personal && $personal->spouse_passed_away == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="spouse_passed_away"><b>No</b></label>&nbsp;&nbsp;&nbsp;
                                        <label class="h6 pt-2">Has your spouse passed away before the
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
                        <div class="tile-footer d-flex justify-content-between px-lg-5 mx-lg-5 mb-lg-4">
                            <a class="btn btn-white border border-primary rounded-0" href="#"><i
                                    class="me-2 mb-5"></i><b class="text-primary">Previous Page</b></a>&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-primary" type="submit"><i class="me-2"></i><b
                                    class="text-light">Save and Continue</b></button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
