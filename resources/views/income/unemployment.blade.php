@extends('layouts.app')

@section('title', 'Income')

@section('content')
    <div class="d-flex justify-content-center p-lg-4 p-3">
        <div class="col-lg-9 content-shadow shadow-none rounded-3">
            <div class="row p-4 pt-5">
                <div class="d-lg-flex justify-content-between">
                    <i class="fa fa-arrow-left text-primary" aria-hidden="true"></i>
                </div>
            </div>
            <div class="row p-4 pt-0 mx-lg-5 px-lg-5">
                <div class="col-lg-12">
                    <div class="tile">
                        <h2 class="tile-title d-flex justify-content-center text-center h2"><b>Did you receive unemployment?</b></h2>
                        @if (isset($unemployment))
                            <form action="{{ route('income.unemployment.update', $unemployment) }}" method="post">
                                @method('PUT')
                            @else
                                <form action="{{ route('income.unemployment.store') }}" method="post">
                        @endif
                        <div class="tile-body">
                            @csrf
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-12 ps-0">
                                    <div class="py-4 h6">If you have state or local income tax refunds reported in Form
                                        1099-G, Box 2 don't enter that here. You can report your state and local refunds on
                                        the Taxable State Refund (Form 1099-G, Box 2) screen.</div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-12 ps-0">
                                    <b>Your Unemployment Compensation</b>
                                </div>
                            </div><br>
                            <div class="row d-lg-flex justify-content-center">
                                <div class="col-xl-3 col-lg-3 col-6 pe-0">
                                    <div class="has-danger form-check form-check-inline mb-3 pe-3">
                                        <input class="form-check-input me-3 h4" name="received_unemployment" type="radio"
                                            value="yes" aria-label="received_unemployment" aria-describedby="basic-addon2"
                                            {{ isset($unemployment) ? ((isset($unemployment) && $unemployment->received_unemployment == 'yes') ? 'checked' : '') : 'checked' }}>
                                        <label class="form-check-label h6 pt-2" for="received_unemployment"><b>Yes</b></label>
                                    </div>
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-3 h4" name="received_unemployment" type="radio"
                                            value="no" aria-label="received_unemployment" aria-describedby="basic-addon2"
                                            {{ $unemployment && $unemployment->received_unemployment == 'no' ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="received_unemployment"><b>No</b></label>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-2 ps-lg-0 radio-label-custom-width ps-0">
                                        <label class="h6 pt-2">Did you receive unemployment compensation reported on a Form
                                            1099-G?
                                        </label>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-3 col-6 pe-0">
                                    <div class="has-danger form-check form-check-inline mb-3 pe-3">
                                        <input class="form-check-input me-3 h4" name="received_other_unemployment" type="radio"
                                            value="yes" aria-label="received_other_unemployment"
                                            aria-describedby="basic-addon2" {{ isset($unemployment) ? ((isset($unemployment) && $unemployment->received_other_unemployment == 'yes') ? 'checked' : '') : 'checked' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="received_other_unemployment"><b>Yes</b></label>
                                    </div>
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-3 h4" name="received_other_unemployment" type="radio"
                                            value="no" aria-label="received_other_unemployment"
                                            aria-describedby="basic-addon2" {{ $unemployment && $unemployment->received_other_unemployment == 'no' ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="received_other_unemployment"><b>No</b></label>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-9 col-2 ps-lg-0 radio-label-custom-width ps-0">
                                        <label class="h6 pt-2">Did you receive other unemployment compensation?</label>
                                </div>
                            </div>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-1 w-100 hr-custom-width">
                            </span>
                            <br>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-12 ps-0">
                                    <b>Your Spouse's Unemployment Compensation</b>
                                </div>
                            </div><br>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-3 col-6 pe-0">
                                    <div class="has-danger form-check form-check-inline mb-3 pe-3">
                                        <input class="form-check-input me-3 h4" name="spouse_received_unemployment" type="radio"
                                            value="yes" aria-label="spouse_received_unemployment" aria-describedby="basic-addon2"
                                            {{ isset($unemployment) ? ((isset($unemployment) && $unemployment->spouse_received_unemployment == 'yes') ? 'checked' : '') : 'checked' }}>
                                        <label class="form-check-label h6 pt-2" for="spouse_received_unemployment"><b>Yes</b></label>
                                    </div>
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-3 h4" name="spouse_received_unemployment" type="radio"
                                            value="no" aria-label="spouse_received_unemployment" aria-describedby="basic-addon2"
                                            {{ $unemployment && $unemployment->spouse_received_unemployment == 'no' ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="spouse_received_unemployment"><b>No</b></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-2 ps-lg-0 radio-label-custom-width ps-0">
                                        <label class="h6 pt-2">Did your spouse receive unemployment compensation reported on a Form
                                            1099-G?
                                        </label>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-3 col-6 pe-0">
                                    <div class="has-danger form-check form-check-inline mb-3 pe-3">
                                        <input class="form-check-input me-3 h4" name="spouse_received_other_unemployment" type="radio"
                                            value="yes" aria-label="spouse_received_other_unemployment"
                                            aria-describedby="basic-addon2" {{ isset($unemployment) ? ((isset($unemployment) && $unemployment->spouse_received_other_unemployment == 'yes') ? 'checked' : '') : 'checked' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="spouse_received_other_unemployment"><b>Yes</b></label>
                                    </div>
                                    <div class="has-danger form-check form-check-inline mb-3">
                                        <input class="form-check-input me-3 h4" name="spouse_received_other_unemployment" type="radio"
                                            value="no" aria-label="spouse_received_other_unemployment"
                                            aria-describedby="basic-addon2" {{ $unemployment && $unemployment->spouse_received_other_unemployment == 'no' ? 'checked' : '' }}>
                                        <label class="form-check-label h6 pt-2"
                                            for="spouse_received_other_unemployment"><b>No</b></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-2 ps-lg-0 radio-label-custom-width ps-0">
                                    <label class="h6 pt-2">Did your spouse receive other unemployment compensation?</label>
                                </div>
                            </div>
                            <br><br>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-3 mt-0 w-100 hr-custom-width">
                            </span>
                        </div>
                    </div>
                    <div class="tile-footer d-lg-flex justify-content-between mb-lg-4">
                        <div class="row">
                            <div class="col-lg-8 w-100">
                                <button class="btn btn-primary rounded-0 d-block d-lg-none mb-2 button-custom-width" type="submit">
                                    <b class="text-light">Save and Continue</b>
                                </button>
                                <a class="btn btn-white border border-primary rounded-0 button-custom-width"
                                    href="{{ route('w-2.index') }}">
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
    @endsection
