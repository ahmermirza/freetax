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
                        <h2 class="tile-title d-flex justify-content-center h2"><b>Tell us about your dependent</b></h2>
                        <br>
                        <form action="{{ route('dependents.store') }}" method="post">
                            <div class="tile-body">
                                @csrf
                                <div class="row d-lg-flex justify-content-center">
                                    <div class="col-lg-5">
                                        <label class="form-form-label h6" for="first_name">First Name:</label>
                                        <div class="has-danger input-group mb-3">
                                            <input class="form-control @error('first_name') is-invalid @enderror"
                                                name="first_name" type="text" value="{{ old('first_name') }}" id="first_name"
                                                aria-label="first_name" aria-describedby="basic-addon2">
                                        </div>
                                        @error('first_name')
                                            <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                        @enderror
                                        <label class="form-form-label h6" for="last_name">Last Name:</label>
                                        <div class="has-danger input-group mb-3">
                                            <input class="form-control @error('last_name') is-invalid @enderror"
                                                name="last_name" type="text" value="{{ old('last_name') }}" id="last_name"
                                                aria-label="last_name" aria-describedby="basic-addon2">
                                        </div>
                                        @error('last_name')
                                            <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                        @enderror
                                        <label class="form-form-label h6" for="ssn">Social Security Number: <i
                                                class="fa-regular fa-circle-question text-primary"></i></label>
                                        <div class="has-danger input-group mb-3">
                                            <input class="form-control @error('ssn') is-invalid @enderror" name="ssn"
                                                type="number" value="{{ old('ssn') }}" aria-label="ssn" id="ssn"
                                                aria-describedby="basic-addon2">
                                        </div>
                                        @error('ssn')
                                            <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                        @enderror
                                        <label class="form-form-label h6" for="relation">Relationship to Taxpayer: <i
                                                class="fa-regular fa-circle-question text-primary"></i></label>
                                        <div class="has-danger input-group mb-3">
                                            <select class="form-select @error('relation') is-invalid @enderror"
                                                name="relation" aria-label="relation" aria-describedby="basic-addon2">
                                                <option value="" {{ old('relation') == '' ? 'selected' : '' }}></option>
                                                <option value="son" {{ old('relation') == 'son' ? 'selected' : '' }}>SON
                                                </option>
                                                <option value="daughter"
                                                    {{ old('relation') == 'daughter' ? 'selected' : '' }}>DAUGHTER</option>
                                                <option value="stepchild"
                                                    {{ old('relation') == 'stepchild' ? 'selected' : '' }}>STEPCHILD
                                                </option>
                                                <option value="foster child"
                                                    {{ old('relation') == 'child' ? 'selected' : '' }}>FOSTER CHILD
                                                </option>
                                                <option value="grandchild"
                                                    {{ old('relation') == 'grandchild' ? 'selected' : '' }}>GRANDCHILD
                                                </option>
                                                <option value="grandparent"
                                                    {{ old('relation') == 'grandparent' ? 'selected' : '' }}>GRANDPARENT
                                                </option>
                                                <option value="parent" {{ old('relation') == 'parent' ? 'selected' : '' }}>
                                                    PARENT OR IN-LAW</option>
                                                <option value="brother"
                                                    {{ old('relation') == 'brother' ? 'selected' : '' }}>BROTHER</option>
                                                <option value="half brother"
                                                    {{ old('relation') == 'brother' ? 'selected' : '' }}>HALF BROTHER
                                                </option>
                                                <option value="stepbrother"
                                                    {{ old('relation') == 'stepbrother' ? 'selected' : '' }}>STEPBROTHER
                                                </option>
                                                <option value="sister" {{ old('relation') == 'sister' ? 'selected' : '' }}>
                                                    SISTER</option>
                                                <option value="half sister"
                                                    {{ old('relation') == 'sister' ? 'selected' : '' }}>HALF SISTER
                                                </option>
                                                <option value="stepsister"
                                                    {{ old('relation') == 'stepsister' ? 'selected' : '' }}>STEPSISTER
                                                </option>
                                                <option value="uncle" {{ old('relation') == 'uncle' ? 'selected' : '' }}>
                                                    UNCLE</option>
                                                <option value="aunt" {{ old('relation') == 'aunt' ? 'selected' : '' }}>
                                                    AUNT</option>
                                                <option value="nephew" {{ old('relation') == 'nephew' ? 'selected' : '' }}>
                                                    NEPHEW</option>
                                                <option value="niece" {{ old('relation') == 'niece' ? 'selected' : '' }}>
                                                    NIECE</option>
                                                <option value="other" {{ old('relation') == 'other' ? 'selected' : '' }}>
                                                    OTHER</option>
                                            </select>
                                        </div>
                                        @error('relation')
                                            <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-5">
                                        <label class="form-form-label h6" for="middle_initial">Middle Initial:</label>
                                        <div class="has-danger input-group mb-3">
                                            <input class="form-control @error('middle_initial') is-invalid @enderror"
                                                name="middle_initial" type="text" value="{{ old('middle_initial') }}"
                                                aria-label="middle_initial" aria-describedby="basic-addon2">
                                        </div>
                                        @error('middle_initial')
                                            <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                        @enderror
                                        <label class="form-form-label h6" for="suffix">Jr., Sr., III:</label>
                                        <div class="has-danger input-group mb-3">
                                            <select class="form-select @error('suffix') is-invalid @enderror" name="suffix"
                                                aria-label="suffix" aria-describedby="basic-addon2">
                                                <option value="" {{ old('suffix') == '' ? 'selected' : '' }}>
                                                </option>
                                                <option value="jr" {{ old('suffix') == 'jr' ? 'selected' : '' }}>Jr.
                                                </option>
                                                <option value="sr" {{ old('suffix') == 'sr' ? 'selected' : '' }}>Sr.
                                                </option>
                                                <option value="ii" {{ old('suffix') == 'ii' ? 'selected' : '' }}>II
                                                </option>
                                                <option value="iii" {{ old('suffix') == 'iii' ? 'selected' : '' }}>III
                                                </option>
                                                <option value="iv" {{ old('suffix') == 'iv' ? 'selected' : '' }}>IV
                                                </option>
                                                <option value="v" {{ old('suffix') == 'v' ? 'selected' : '' }}>V
                                                </option>
                                                <option value="vi" {{ old('suffix') == 'vi' ? 'selected' : '' }}>VI
                                                </option>
                                            </select>
                                        </div>
                                        @error('suffix')
                                            <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                        @enderror
                                        <label class="form-form-label h6" for="dob">Date of Birth: <i
                                                class="fa-regular fa-circle-question text-primary"></i></label>
                                        <div class="has-danger input-group mb-3">
                                            <input class="form-control @error('dob') is-invalid @enderror" name="dob"
                                                type="date" value="{{ old('dob') }}" aria-label="dob"
                                                aria-describedby="basic-addon2">
                                        </div>
                                        @error('dob')
                                            <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br><br>
                                <span class="d-flex justify-content-center">
                                    <hr class="mb-1 w-75 hr-custom-width">
                                </span>
                                <br>
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