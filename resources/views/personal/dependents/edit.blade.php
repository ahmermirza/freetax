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
                        <h2 class="tile-title d-lg-flex justify-content-center h2"><b>Tell us about your dependent</b></h2>
                        <br>
                        <form action="{{ route('dependents.update', $dependent) }}" method="post">
                            @method('PUT')
                            <div class="tile-body">
                                @csrf
                                <div class="row d-lg-flex justify-content-center">
                                    <div class="col-lg-5">
                                        <label class="form-form-label h6" for="first_name">First Name:</label>
                                        <div class="has-danger input-group mb-3">
                                            <input class="form-control @error('first_name') is-invalid @enderror"
                                                name="first_name" type="text"
                                                value="{{ old('first_name', $dependent ? $dependent->first_name : '') }}"
                                                aria-label="first_name" aria-describedby="basic-addon2">
                                        </div>
                                        @error('first_name')
                                            <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                        @enderror
                                        <label class="form-form-label h6" for="last_name">Last Name:</label>
                                        <div class="has-danger input-group mb-3">
                                            <input class="form-control @error('last_name') is-invalid @enderror"
                                                name="last_name" type="text"
                                                value="{{ old('last_name', $dependent ? $dependent->last_name : '') }}"
                                                aria-label="last_name" aria-describedby="basic-addon2">
                                        </div>
                                        @error('last_name')
                                            <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                        @enderror
                                        <label class="form-form-label h6" for="ssn">Social Security Number: <i
                                                class="fa-regular fa-circle-question text-primary"></i></label>
                                        <div class="has-danger input-group mb-3">
                                            <input class="form-control @error('ssn') is-invalid @enderror" name="ssn"
                                                type="text" value="{{ old('ssn', $dependent ? $dependent->ssn : '') }}"
                                                aria-label="ssn" aria-describedby="basic-addon2">
                                        </div>
                                        @error('ssn')
                                            <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                        @enderror
                                        <label class="form-form-label h6" for="relation">Relationship to Taxpayer: <i
                                                class="fa-regular fa-circle-question text-primary"></i></label>
                                        <div class="has-danger input-group mb-3">
                                            <select class="form-select @error('relation') is-invalid @enderror"
                                                name="relation" aria-label="relation" aria-describedby="basic-addon2">
                                                <option value="" {{ $dependent && $dependent->relation == '' ? 'selected' : '' }}></option>
                                                <option value="son" {{ $dependent && $dependent->relation == 'son' ? 'selected' : '' }}>SON
                                                </option>
                                                <option value="daughter"
                                                    {{ $dependent && $dependent->relation == 'daughter' ? 'selected' : '' }}>DAUGHTER</option>
                                                <option value="stepchild"
                                                    {{ $dependent && $dependent->relation == 'stepchild' ? 'selected' : '' }}>STEPCHILD
                                                </option>
                                                <option value="foster child"
                                                    {{ $dependent && $dependent->relation == 'child' ? 'selected' : '' }}>FOSTER CHILD
                                                </option>
                                                <option value="grandchild"
                                                    {{ $dependent && $dependent->relation == 'grandchild' ? 'selected' : '' }}>GRANDCHILD
                                                </option>
                                                <option value="grandparent"
                                                    {{ $dependent && $dependent->relation == 'grandparent' ? 'selected' : '' }}>GRANDPARENT
                                                </option>
                                                <option value="parent" {{ $dependent && $dependent->relation == 'parent' ? 'selected' : '' }}>
                                                    PARENT OR IN-LAW</option>
                                                <option value="brother"
                                                    {{ $dependent && $dependent->relation == 'brother' ? 'selected' : '' }}>BROTHER</option>
                                                <option value="half brother"
                                                    {{ $dependent && $dependent->relation == 'brother' ? 'selected' : '' }}>HALF BROTHER
                                                </option>
                                                <option value="stepbrother"
                                                    {{ $dependent && $dependent->relation == 'stepbrother' ? 'selected' : '' }}>STEPBROTHER
                                                </option>
                                                <option value="sister" {{ $dependent && $dependent->relation == 'sister' ? 'selected' : '' }}>
                                                    SISTER</option>
                                                <option value="half sister"
                                                    {{ $dependent && $dependent->relation == 'sister' ? 'selected' : '' }}>HALF SISTER
                                                </option>
                                                <option value="stepsister"
                                                    {{ $dependent && $dependent->relation == 'stepsister' ? 'selected' : '' }}>STEPSISTER
                                                </option>
                                                <option value="uncle" {{ $dependent && $dependent->relation == 'uncle' ? 'selected' : '' }}>
                                                    UNCLE</option>
                                                <option value="aunt" {{ $dependent && $dependent->relation == 'aunt' ? 'selected' : '' }}>
                                                    AUNT</option>
                                                <option value="nephew" {{ $dependent && $dependent->relation == 'nephew' ? 'selected' : '' }}>
                                                    NEPHEW</option>
                                                <option value="niece" {{ $dependent && $dependent->relation == 'niece' ? 'selected' : '' }}>
                                                    NIECE</option>
                                                <option value="other" {{ $dependent && $dependent->relation == 'other' ? 'selected' : '' }}>
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
                                                name="middle_initial" type="text"
                                                value="{{ old('middle_initial', $dependent ? $dependent->middle_initial : '') }}"
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
                                                    {{ $dependent && $dependent->suffix == '' ? 'selected' : '' }}>
                                                </option>
                                                <option value="jr"
                                                    {{ $dependent && $dependent->suffix == 'jr' ? 'selected' : '' }}>Jr.
                                                </option>
                                                <option value="sr"
                                                    {{ $dependent && $dependent->suffix == 'sr' ? 'selected' : '' }}>Sr.
                                                </option>
                                                <option value="ii"
                                                    {{ $dependent && $dependent->suffix == 'ii' ? 'selected' : '' }}>II
                                                </option>
                                                <option value="iii"
                                                    {{ $dependent && $dependent->suffix == 'iii' ? 'selected' : '' }}>III
                                                </option>
                                                <option value="iv"
                                                    {{ $dependent && $dependent->suffix == 'iv' ? 'selected' : '' }}>IV
                                                </option>
                                                <option value="v"
                                                    {{ $dependent && $dependent->suffix == 'v' ? 'selected' : '' }}>V
                                                </option>
                                                <option value="vi"
                                                    {{ $dependent && $dependent->suffix == 'vi' ? 'selected' : '' }}>VI
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
                                                type="date"
                                                value="{{ old('dob', $dependent ? $dependent->dob : '') }}"
                                                aria-label="dob" aria-describedby="basic-addon2">
                                        </div>
                                        @error('dob')
                                            <div class="form-control-feedback text-danger pb-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br><br>
                                <span class="d-flex justify-content-center">
                                    <hr class="mb-1 w-75">
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
