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
                        <h2 class="tile-title d-flex justify-content-center h2"><b>Tell us about your spouse</b></h2>
                        @if (isset($personal->spouse))
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
                                    <label class="form-form-label h6" for="first_name">First Name: <i
                                            class="fa-regular fa-circle-question text-primary"></i></label>
                                    <div class="has-danger input-group mb-3">
                                        <input
                                            class="form-control @error('first_name') is-invalid @enderror"
                                            name="first_name" type="text" id="first_name"
                                            value="{{ old('first_name', ($personal && $personal->spouse) ? $personal->spouse->first_name : '') }}"
                                            aria-label="first_name" aria-describedby="basic-addon2">
                                    </div>
                                    @error('first_name')
                                        <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                    @enderror
                                    <label class="form-form-label h6" for="last_name">Last Name: <i
                                            class="fa-regular fa-circle-question text-primary"></i></label>
                                    <div class="has-danger input-group mb-3">
                                        <input class="form-control @error('last_name') is-invalid @enderror"
                                            name="last_name" type="text" id="last_name"
                                            value="{{ old('last_name', ($personal && $personal->spouse) ? $personal->spouse->last_name : '') }}"
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
                                            value="{{ old('occupation', ($personal && $personal->spouse) ? $personal->spouse->occupation : '') }}"
                                            aria-label="occupation" aria-describedby="basic-addon2">
                                    </div>
                                    @error('occupation')
                                        <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                    @enderror
                                    <label class="form-form-label h6" for="dob">Date of Birth: <i
                                            class="fa-regular fa-circle-question text-primary"></i></label>
                                    <div class="has-danger input-group mb-3">
                                        <input class="form-control @error('dob') is-invalid @enderror"
                                            name="dob" type="date"
                                            value="{{ old('dob', ($personal && $personal->spouse) ? $personal->spouse->dob : '') }}"
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
                                            value="{{ old('middle_initial', ($personal && $personal->spouse) ? $personal->spouse->middle_initial : '') }}"
                                            aria-label="middle_initial" aria-describedby="basic-addon2">
                                    </div>
                                    @error('middle_initial')
                                        <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                    @enderror
                                    <label class="form-form-label h6" for="suffix">Jr., Sr., III:</label>
                                    <div class="has-danger input-group mb-3">
                                        <select class="form-select @error('suffix') is-invalid @enderror"
                                            name="suffix" aria-label="suffix" aria-describedby="basic-addon2">
                                            <option value=""
                                                {{ ($personal->spouse && $personal->spouse->suffix == '') ? 'selected' : '' }}>
                                            </option>
                                            <option value="jr"
                                                {{ ($personal->spouse && $personal->spouse->suffix == 'jr') ? 'selected' : '' }}>Jr.
                                            </option>
                                            <option value="sr"
                                                {{ ($personal->spouse && $personal->spouse->suffix == 'sr') ? 'selected' : '' }}>Sr.
                                            </option>
                                            <option value="ii"
                                                {{ ($personal->spouse && $personal->spouse->suffix == 'ii') ? 'selected' : '' }}>II
                                            </option>
                                            <option value="iii"
                                                {{ ($personal->spouse && $personal->spouse->suffix == 'iii') ? 'selected' : '' }}>III
                                            </option>
                                            <option value="iv"
                                                {{ ($personal->spouse && $personal->spouse->suffix == 'iv') ? 'selected' : '' }}>IV
                                            </option>
                                            <option value="v"
                                                {{ ($personal->spouse && $personal->spouse->suffix == 'v') ? 'selected' : '' }}>V
                                            </option>
                                            <option value="vi"
                                                {{ ($personal->spouse && $personal->spouse->suffix == 'vi') ? 'selected' : '' }}>VI
                                            </option>
                                        </select>
                                    </div>
                                    @error('suffix')
                                        <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                    @enderror
                                    <label class="form-form-label h6" for="ssn">Social Security Number: <i
                                            class="fa-regular fa-circle-question text-primary"></i></label>
                                    <div class="has-danger input-group mb-3">
                                        <input class="form-control @error('ssn') is-invalid @enderror"
                                            name="ssn" type="number" id="ssn"
                                            value="{{ old('ssn', ($personal && $personal->spouse) ? $personal->spouse->ssn : '') }}"
                                            aria-label="ssn" aria-describedby="basic-addon2">
                                    </div>
                                    @error('ssn')
                                        <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-3 w-75 hr-custom-width">
                            </span>
                            <div class="row d-lg-flex justify-content-center">
                                <div class="col-xl-2 col-lg-3 col-6 pe-0">
                                    <div class="has-danger form-check form-check-inline mb-3 pe-3">
                                        <input class="form-check-input me-3 h4" name="parent_claim" type="radio"
                                            value="1" aria-label="parent_claim"
                                            aria-describedby="basic-addon2"
                                            {{ ($personal->spouse && $personal->spouse->parent_claim == 1) ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="parent_claim"><b>Yes</b></label>
                                    </div>
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-3 h4" name="parent_claim" type="radio"
                                            value="0" aria-label="parent_claim"
                                            aria-describedby="basic-addon2"
                                            {{ isset($personal->spouse) ? ((isset($personal->spouse) && $personal->spouse->parent_claim == 0) ? 'checked' : '') : 'checked' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="parent_claim"><b>No</b></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-2 ps-lg-0 radio-label-custom-width ps-0">
                                    <label class="h6 pt-2">Can a parent (or somebody else) claim your spouse as a
                                        dependent on their return?</label>
                                </div>
                            </div>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-3 mt-0 w-75 hr-custom-width">
                            </span>
                            <div class="row d-lg-flex justify-content-center">
                                <div class="col-xl-2 col-lg-3 col-6 pe-0">
                                    <div class="has-danger form-check form-check-inline mb-3 pe-3">
                                        <input class="form-check-input me-3 h4" name="campaign_contribution"
                                            type="radio" value="1" aria-label="campaign_contribution"
                                            aria-describedby="basic-addon2"
                                            {{ ($personal->spouse && $personal->spouse->campaign_contribution == 1) ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="campaign_contribution"><b>Yes</b></label>
                                    </div>
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-3 h4" name="campaign_contribution"
                                            type="radio" value="0" aria-label="campaign_contribution"
                                            aria-describedby="basic-addon2"
                                            {{ isset($personal->spouse) ? ((isset($personal->spouse) && $personal->spouse->campaign_contribution == 0) ? 'checked' : '') : 'checked' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="campaign_contribution"><b>No</b></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-2 ps-lg-0 radio-label-custom-width ps-0">
                                    <label class="h6 pt-2">Does your spouse want to contribute $3 to the
                                        Presidential Eelection Campaign Fund? <i
                                            class="fa-regular fa-circle-question text-primary"></i></label>
                                </div>
                            </div>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-3 mt-0 w-75 hr-custom-width">
                            </span>
                            <div class="row d-lg-flex justify-content-center">
                                <div class="col-xl-2 col-lg-3 col-6 pe-0">
                                    <div class="has-danger form-check form-check-inline mb-3 pe-3">
                                        <input class="form-check-input me-3 h4" name="blind" type="radio"
                                            value="1" aria-label="blind" aria-describedby="basic-addon2"
                                            {{ ($personal->spouse && $personal->spouse->blind == 1) ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2" for="blind"><b>Yes</b></label>
                                    </div>
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-3 h4" name="blind" type="radio"
                                            value="0" aria-label="blind" aria-describedby="basic-addon2"
                                            {{ isset($personal->spouse) ? ((isset($personal->spouse) && $personal->spouse->blind == 0) ? 'checked' : '') : 'checked' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="blind"><b>No</b></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-2 ps-lg-0 radio-label-custom-width ps-0">
                                    <label class="h6 pt-2">Is your spouse legally blind? <i
                                            class="fa-regular fa-circle-question text-primary"></i></label>
                                </div>
                            </div>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-0 mt-0 pt-0 w-75 hr-custom-width">
                            </span><br>
                            <div class="row d-lg-flex justify-content-center">
                                <div class="col-xl-2 col-lg-3 col-6 pe-0">
                                    <div class="has-danger form-check form-check-inline mb-3 pe-3">
                                        <input class="form-check-input me-3 h4" name="passed_away" type="radio"
                                            value="1" aria-label="passed_away"
                                            aria-describedby="basic-addon2"
                                            {{ ($personal->spouse && $personal->spouse->passed_away == 1) ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="passed_away"><b>Yes</b></label>
                                    </div>
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-3 h4" name="passed_away" type="radio"
                                            value="0" aria-label="passed_away"
                                            aria-describedby="basic-addon2"
                                            {{ isset($personal->spouse) ? ((isset($personal->spouse) && $personal->spouse->passed_away == 0) ? 'checked' : '') : 'checked' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="passed_away"><b>No</b></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-2 ps-lg-0 radio-label-custom-width ps-0">
                                    <label class="h6 pt-2">Has your spouse passed away before the
                                        filing of this tax return? <i
                                            class="fa-regular fa-circle-question text-primary"></i></label>
                                </div>
                            </div><br><br>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-1 mt-0 pt-0 w-75 hr-custom-width">
                            </span><br>
                        </div>
                        <div class="tile-footer d-lg-flex justify-content-between px-lg-5 mx-lg-5 mb-lg-4">
                            <div class="row">
                                <div class="col-lg-8 w-100">
                                    <button class="btn btn-primary rounded-0 d-block d-lg-none mb-2 button-custom-width" type="submit">
                                        <b class="text-light">Save and Continue</b>
                                    </button>
                                    <a class="btn btn-white border border-primary rounded-0 button-custom-width" href="{{ route('personal.create', ['info' => 'filing-status']) }}">
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

@push('custom-scripts')
    <script>
        const ssn = document.getElementById('ssn');
        ssn.addEventListener('input', function(event) {
            // Get the current value of the input
            const value = event.target.value;

            // Check if the value exceeds the limit of 9 characters
            if (value.length > 9) {
                // If it exceeds, truncate the input value to 9 characters
                event.target.value = value.slice(0, 9);
            }
        });

        const last_name = document.getElementById('last_name');
        last_name.addEventListener('input', function(event) {
            const inputValue = event.target.value;

            // Remove non-alphabetic characters and hyphens from the input value
            const sanitizedValue = inputValue.replace(/[^A-Za-z\- .]/g, '');

            // Update the input field value with the sanitized value
            event.target.value = sanitizedValue;
        });

        const first_name = document.getElementById('first_name');
        first_name.addEventListener('input', function(event) {
            const inputValue = event.target.value;

            // Remove non-alphabetic characters and hyphens from the input value
            const sanitizedValue = inputValue.replace(/[^A-Za-z\- .]/g, '');

            // Update the input field value with the sanitized value
            event.target.value = sanitizedValue;
        });
    </script>
@endpush